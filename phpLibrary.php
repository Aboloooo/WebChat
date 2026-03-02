<?php
session_start();
/* connection to database */
$host = 'localhost';
$username = 'root';
$password = '';
$port = '3306';
$certificate_file_path = '';
$database = 'Webchat_2026';
$connection = mysqli_connect($host, $username, $password, $database);
if ($connection) {
    echo "<script>console.log('Connection to DB successful.' );</script>";
} else {
    echo "<script>console.log('Connection Failed.' );</script>";
}
/* user registration handler */
if (isset($_POST["fullname"], $_POST["username"], $_POST["email"], $_POST["password"])) {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    /* insert user into database */
    $query = "INSERT INTO users (fullname, username, email, password) VALUES (?, ?, ?, ?)";

    $resgistered_user = mysqli_query($connection, "SELECT * FROM users WHERE email='$username' OR username='$username'");
    if (mysqli_num_rows($resgistered_user) > 0) {
        echo "<script>console.log('User already exists.' );</script>";
        exit();
    } else {
        $registeration_statement = $connection->prepare($query);
        $registeration_statement->bind_param("ssss", $fullname, $username, $email, $password);
        if ($registeration_statement->execute()) {
            echo "<script>console.log('User registered successfully.' );</script>";
        } else {
            echo "<script>console.log('Error registering user.' );</script>";
        }
    }
}
