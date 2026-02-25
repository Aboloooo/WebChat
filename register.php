<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link External CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body class="register-bg">

    <div class="container">
        <h2>Create Account</h2>

        <form action="#" method="POST">
            <div class="input-group">
                <label>Full Name</label>
                <input type="text" name="fullname" required>
            </div>

            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm-password" required>
            </div>

            <button type="submit" class="btn success-btn">Create Account</button>

            <div class="switch-link">
                Already have an account? <a href="index.php">Login</a>
            </div>
        </form>
    </div>

</body>

</html>