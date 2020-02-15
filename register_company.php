<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Company Registration Page</title>
  <link rel="stylesheet" type="text/css" href="css/reg.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
    <script language="javascript">
	<!--
		function testform() {
			if(document.user.compname.value=='') {
				alert("Please enter the Company name");
				return false;
			}
			if(document.user.email.value=='') {
				alert("Please enter an email address");
				return false;
			}
			if(document.user.username.value=='') {
				alert("Please enter an username");
				return false;
			}
			if(document.user.password_1.value=='') {
				alert("Please enter a Password");
				return false;
			}
			if(document.user.password_2.value=='') {
				alert("Please enter confirmation Password");
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
                     <?php
                
                    if(isset($_SESSION['administrator'])){
                    echo "<h2>Register a New Company</h2>";
					
                    }
					else{
						echo "<h2>Register As Our Client</h2>";
					}
					?>
  	
  </div>
	
  <form name="user" method="post" action="register_company.php" onSubmit="return testform()">
  	<?php include('errors.php'); ?>
	
  	<div class="input-group">
  	  <label>Company Name</label>
	  <input type="text" placeholder="Company Name" name="compname" value="<?php echo $compname; ?>">  	  
  	</div>	
	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" placeholder="company@gmail.com" name="email" value="<?php echo $email; ?>">
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
  	  <button type="submit" class="btn" name="reg_business">Register</button>
  	</div>
  	<p><?php
                
                    if(isset($_SESSION['administrator'])){
                    echo  "Done editing? <a class='member' href='adm_profile.php'>Go Back</a>";
					
                    }
					else{
						echo "Already a member? <a class='member' href='login.php'>Sign in</a>";
					}
					?>
  		
  	</p>
  </form>
</body>
</html>