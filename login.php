<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="css/reg.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
  <meta name="author" content="Buddika Lakshan">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
	
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
	
	<h2 style color="white">OR</h2>
	
	<div class="input-group">
  		<label>Service Code (Only for Customers)</label>
  		<input type="password" name="code">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_code">Login</button>
  	</div>
  	
  </form>
  <div class= "member"><p>
  		Not yet a member? <a href="register.php">Sign up</a>
  </p></div>
</body>
</html>