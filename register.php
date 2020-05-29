<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/register.css">
   <!--Font link-->
   <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=PT+Serif&display=swap" rel="stylesheet">
</head>
<body>

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
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
 </div>


</div>
</body>
</html>