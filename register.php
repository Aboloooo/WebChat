<?php
include_once("./phpLibrary.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- my vanila js script -->
    <script src="./script.js"></script>
    <!-- Link External CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body class="register-bg">

    <div class="container">
        <h2>Create Account</h2>

        <form action="#" method="POST">
            <div class="input-group">
                <label>Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="input-group">
                <label>Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>

            <button type="submit" id="registerBt" class="btn success-btn">Create Account</button>

            <div class="switch-link">
                Already have an account? <a href="index.php">Login</a>
            </div>
        </form>
    </div>

</body>

</html>