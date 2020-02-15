<!doctype html>

<?php include('server.php');?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/reg.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
		<title>Clean Street Auto Service Inc.</title>
        <meta name="author" content="Chamitha Nandun Jayalath">
        
        <title>Staff Member Registration</title>
		<script language="javascript">
	<!--
		function testform() {
			if(document.user.fname.value=='') {
				alert("First name is Required");
				return false;
			}
			if(document.user.IDnumber.value=='') {
				alert("ID-Number is Required");
				return false;
			}
			if(document.user.username.value=='') {
				alert("Username is Required");
				return false;
			}
			if(document.user.email.value=='') {
				alert("Email address is Required");
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
			return confirm("Do you want to add this person as Staff member ?");
		}
	//-->
	</script>
        
    </head>
	
  <form name="user" method="post" enctype = 'multipart/form-data' action="">
  	<?php include('errors.php'); ?>
	<table align="center" width="1200px" border="0" cellpadding="5px">
	<tr>
	<td>
  	<div class="input-group1">
  	  <label>First Name</label>
	  <input type="text" placeholder="First Name" class="text" name="fname" value="<?php echo $firstname; ?>">  	  
  	</div></td>
	<td>
	<div class="input-group1">
  	  <label>Last Name</label>
  	  <input type="text" placeholder="Last Name" class="text" name="lname" value="<?php echo $lastname; ?>" >
  	</div></td>
	<td rowspan="7"><h5 style="color:white">Add a Profile Picture:</h5> <input type="file" name="file" id="uplod_pic">  <div class='prof2'><img src='<?php echo $profilepic?>'></div>
	<hr><h3 style="color:white; text-align:center">Gender</h3>
	<div class="input-group1">
          <label>Male</label>  <input type="radio" class="radio" name="gender" value="Male" <?php if($gender == "Male") echo "CHECKED"; ?>> 
		  <label>Female</label>	<input type="radio" class="radio" name="gender" value="Female" <?php if($gender == "Female") echo "CHECKED"; ?>> 
  	</div>
	<hr><h3 style="color:white; text-align:center">Service Station</h3>
	<div class="input-group1">
          <label>Galle</label>  <input type="radio" class="radio" name="station" value="Galle" <?php if($station == "Galle") echo "CHECKED"; ?>> 
		  <label>Matara</label>	<input type="radio" class="radio" name="station" value="Matara" <?php if($station == "Matara") echo "CHECKED"; ?>>
          <label>Colombo</label> <input type="radio" class="radio" name="station" value="Colombo" <?php if($station == "Colombo") echo "CHECKED"; ?>> 		  
  	</div><hr><br>
	<div style="color:white"><br><br><br><label><b>SEND E-MAIL NOTIFICATIONS:</b></label></div><br>
				<input type="checkbox" name="email_notification" value="send" ><br><br></td>
	</tr>
	<tr>
	<td>
	<div class="input-group1">
  	  <label>Field of the member</label>
	  <input type="text" placeholder="ABC-xxxx" class="text" name="field" value="<?php echo $field; ?>">  	  
  	</div>
	</td>
	<td>
	<div class="input-group1">
  	  <label>ID-Number</label>
	  <input type="text" class="text" placeholder="XXXXXXXXXXXV" name="IDnumber" value="<?php echo $idnumber; ?>">  	  
  	</div>
	</td></tr>
	<tr><td>
	<div class="input-group1">
  	  <label>Permanent Address</label>
	  <input type="text" class="text" placeholder="user's permanent address"  name="peraddress" value="<?php echo $peraddress; ?>">  	  
  	</div></td>
	<td>
	<div class="input-group1">
  	  <label>Joined Date</label>
	  <input type="date" class="text" name="date" value="<?php echo $date; ?>">  	  
  	</div></td>
	</tr>
	<tr><td>
	<div class="input-group1">
  	  <label>Mobile Number</label>
	  <input type="text" class="text" placeholder="xxx-x xxxx xxxx" name="mobilenumber" value="<?php echo $mobileno; ?>">  	  
  	</div></td>
	<td>
	 	<div class="input-group1">
  	  <label>Email</label>
  	  <input type="email" placeholder="someone@xmail.com" class="text" name="email" value="<?php echo $email; ?>">
  	</div></td></tr>
	<tr><td>
	<div class="input-group1">
  	  <label>Telephone Number</label>
	  <input type="text" class="text" placeholder="xxx-x xxxx xxxx" name="telno" value="<?php echo $tele_number; ?>">  	  
  	</div></td>
	<td>
	<div class="input-group1">
  	  <label>Basic Salary</label>
	  <input type="text" class="text" placeholder="Salary" name="salary" value="<?php echo $salary; ?>">  	  
  	</div></td></tr>
	<tr><td>
	<div class="input-group1">
  	  <label>Username</label>
  	  <input type="text" placeholder="Enter a new user_name" name="username" value="<?php echo $username; ?>" >
  	</div></td><td>
	<div class="input-group1">
  	  <label>Qulifications</label>
  	  <input type="text" placeholder="Enter a Qualifications of the member" name="qual" value="<?php echo $qual; ?>" >
  	</div></td></tr>
	<tr><td>
  	<div class="input-group1">
  	  <label>Password</label>
  	  <input type="password" placeholder="Enter a new password" name="password_1">
  	</div></td>
	<td>
  	<div class="input-group1">
  	  <label>Confirm password</label>
  	  <input type="password" placeholder="Retype-password" name="password_2">
  	</div></td></tr></table>
	<div style="float:right;">
	
	<div class="input-group">
  	  <button class="btn" onclick="document.getElementByClass('text').value = ''">Clear Data</button>
      &nbsp;&nbsp;
  	  <button type="submit" class="btn" name="admin_reg_staff" onClick="return testform()">Add User</button>
  	</div>	
	
	</div>
  	<p style="color:green">
  		Don't you want to add? <a class="member" href="adm_profile.php">Go Back</a>
  	</p>
  </form>
</body>