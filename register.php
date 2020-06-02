<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!--My css-->
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <!--Font link-->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=PT+Serif&display=swap" rel="stylesheet">
</head>

<body>
<!--Resgister form-->
    <div class="container">
        <h2 id="register">Register</h2>
        <form method="post" action="register.php">
            <?php include('inc/errors.php'); ?>
            <div class="input-group">
                <input type="text" name="username" placeholder="Username..." value="<?php echo $username; ?>">
            </div>
            <div class="input-group">
                <input type="email" name="email"placeholder="Email..." value="<?php echo $email; ?>">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password..." name="password_1">
            </div>
            <div class="input-group">
                <input type="password"placeholder="Confirm Pass..." name="password_2">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="reg_user">Register</button>
            </div>
            <p><!--Link that sends you to log in if user has an account-->
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </div>
    <!--rigt div with some text on -->
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
                <p>Do what others are doing, live your best life<br>go ahead, Signup!</p>
            </div>
        </div>
    </div>
</body>
</html>