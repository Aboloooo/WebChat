<?php
include_once("./phpLibrary.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Public Message Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- my vanila js script -->
    <script src="./script.js"></script>
    <!-- Link External CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="container">
        <h2>Login to Post Messages</h2>

        <form action="#" method="POST">
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" id="loginBtn" class="btn primary-btn">Login</button>

            <div class="switch-link">
                Don't have an account? <a href="register.php">Sign up</a>
            </div>
        </form>
    </div>

</body>

</html>