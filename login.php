<?php 
session_start();
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action="login_db.php" method="post">
        <!--- Notification message -->

        <?php if (isset($_SESSION['error'])) : ?>
                <div class="error">
                    <h3>
                        <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    </h3>
                </div>
        <?php endif ?>
            
        <div class="input-group">
            <Label for="username">Username</Label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <Label for="password">Password</Label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <p>Not yet a Member?  <a href="register.php">Sign up</a></p>
    </form>

</body>
</html>