<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="css/reg.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
  <title>Clean Street Auto Service Inc.</title>
  <meta name="author" content="Chamitha Nandun Jayalath">
  	<script language="javascript">
	<!--
		function test() {
		  return confirm("Do you want to add this person as Staff member ?");
		}
	//-->
	</script>
</head>
<body>
  <div class="header">
  	<h2>Add New Customer</h2>
  </div>
<div align=center>	
  <form name="user" method="post" action="admin_add_customer.php" onSubmit="return test()">
  	<?php include('errors.php'); ?>
	
  	<div class="input-group">
  	  <label>First Name</label>
	  <input type="text" placeholder="First name" name="firstname" value="<?php echo $firstname; ?>" required>  	  
  	</div>
	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" placeholder="Last name" name="lastname" value="<?php echo $lastname; ?>">
  	</div>
	<div class="input-group">
  	  <label>Vehicle Number</label>
	  <input type="text" placeholder="XXX-XXXX" name="vnumber" value="<?php echo $vnumber; ?>" required>  	  
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" placeholder="someone@gmail.com" name="email" value="<?php echo $email; ?>" required>
  	</div>
	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" placeholder="username" name="username" value="<?php echo $username; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Service Code</label>
  	  <input type="text" placeholder="service code" name="code" value="<?php echo $code; ?>" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="admin_reg_user">Register</button>
  	</div>
	<p style="color:green">
  		Don't you want to add? <a class="member" href="adm_profile.php">Go Back</a>
  	</p>
  	</form>
	</div>
</body>
</html>