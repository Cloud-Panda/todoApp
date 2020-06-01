<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login/register</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Font link-->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=PT+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrap">
        <div class="top">
            <div class="inner-top">
                <p>Why not make your life easier?</p>
                <p>By creating your very own Todo list<br>you can do just that</p>
            </div>
        </div>

        <div class="bottom">
            <div class="inner-bottom"></div>
            <div class="inner-bottom-right">
                <p>What are you waiting for?<p>
                <p>Do what others are doing, live your best life<br>go ahead, Login!</p>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 id="signin">Sign In</h2>
        <p id="account">To your account</p>
        <form method="post" action="login.php">
            <?php include('inc/errors.php'); ?>
            <div class="input-group">
                <!--<label>Username</label>-->
                <input type="text" name="username" placeholder="Username..." >
            </div>
            <div class="input-group">
                <!--<label>Password</label>-->
                <input type="password" name="password" placeholder="Password...">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p id="member">
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </form>
    </div>
</body>
</html>