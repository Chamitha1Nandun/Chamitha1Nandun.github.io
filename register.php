<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="css/reg.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
  <meta name="author" content="Buddika Lakshan">
  <script language="javascript">
    
	<!--
		function testform() {
			if(document.user.firstname.value=='') {
				alert("Please enter your first name");
				return false;
			}
			if(document.user.vnumber.value=='') {
				alert("Please enter your vehicle number");
				return false;
			}
			if(document.user.email.value=='') {
				alert("Please enter your email address");
				return false;
			}
			if(document.user.username.value=='') {
				alert("Please enter your username");
				return false;
			}
			if(document.user.password_1.value=='') {
				alert("Please enter your password");
				return false;
			}
			if(document.user.password_2.value=='') {
				alert("Please enter confirm password");
				return false;
			}
			if(document.user.password_1.value!=document.user.password_2.value) {
				alert("Password and confirmation does not match");
				return false;
			}
			return confirm("Do you want to register?");
		}
	//-->
	</script>	
  
</head>
<body>
  <div class="header">
  	<h2>Register As Our Customer</h2>
  </div>
	
  <form name="user" method="post" action="register.php" onSubmit="return testform()">
  	<?php include('errors.php'); ?>
	
  	<div class="input-group">
  	  <label>First Name</label>
	  <input type="text" placeholder="First name" name="firstname" value="<?php echo $firstname; ?>">  	  
  	</div>
	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" placeholder="Last name" name="lastname" value="<?php echo $lastname; ?>">
  	</div>
	<div class="input-group">
  	  <label>Vehicle Number</label>
	  <input type="text" placeholder="XXX-XXXX" name="vnumber" value="<?php echo $vnumber; ?>">  	  
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" placeholder="someone@gmail.com" name="email" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" placeholder="username" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" placeholder="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" placeholder="retype-password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a class="member" href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>