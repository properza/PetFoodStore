<?php
session_start();
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>

    <link rel="stylesheet" href="style.css"> 
</head>

<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="register_db.php" method="post">

        <?php include('errors.php'); ?>

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
            <Label for="email">Email</Label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <Label for="password_1">Password</Label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <Label for="password_2">Confim Password</Label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Register</button>
        </div>
        <p>Aleady a member? <a href="login.php">Sign in</a></p>
    </form>

</body>

</html>