<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Public Messages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
</head>

<body class="posts-bg">

    <!-- Navbar -->
    <div class="navbar">
        <h2>Public Message Board</h2>
        <div class="user-info">
            <span>Welcome, John</span>
            <a href="login.html" class="logout-btn">Logout</a>
        </div>
    </div>

    <!-- Posts Container -->
    <div class="posts-container">

        <div class="post">
            <div class="post-header">
                <strong>John</strong>
                <span class="post-date">Feb 25, 2026</span>
            </div>
            <p>This is my first public message!</p>
        </div>

        <div class="post">
            <div class="post-header">
                <strong>Alice</strong>
                <span class="post-date">Feb 24, 2026</span>
            </div>
            <p>Hello everyone 👋 Welcome to the message board.</p>
        </div>

    </div>

    <!-- Bottom Input Bar -->
    <div class="bottom-post-bar">
        <form action="#" method="POST">
            <input type="text" placeholder="Write a public message..." required>
            <button type="submit">Post</button>
        </form>
    </div>

</body>

</html>