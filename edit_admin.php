<?php  
include('server.php');
if(isset($_SESSION['administrator'])){
$db = mysqli_connect('localhost', 'root', '19950901', 'loginsystem');
if((isset($_SESSION['administrator']))&&(isset($_SESSION['admin_uname'])))$uname = $_SESSION['admin_uname'];//check whether the user is administrator or not
else $uname= $_SESSION['user_name'];
$query= "SELECT * FROM users where user_name='$uname'";
$query2= "SELECT * FROM admins where user_name='$uname'";
$result = mysqli_query($db,$query);
$result2 = mysqli_query($db,$query2);
while($row = mysqli_fetch_array($result))
 { 
$fname=$row['first_name'];
$lname=$row['last_name'];
$email=$row['email'];
$vnumber=$row['vehicle_number'];
$idnumber=$row['ID_card'];
$peraddress=$row['address'];
$province=$row['province'];
$profilepic=$row['profile_pic_path'];
$gender=$row['gender'];
$username=$row['user_name'];
$uid=$row['user_ID'];
$email_notification=$row['notify'];

 }
while($row2 = mysqli_fetch_array($result2)){
	$mobilenumber=$row2['mobile_number'];
	$tele_number=$row2['telephone_number'];
	$temp_address=$row2['temporary_address'];
    $qual=$row2['qualifications'];
	$salary=$row2['basic_salary'];
	$joindate=$row2['join_date'];

}
}
//DELETE USER 
if (isset($_POST['delete'])){

$sql = "DELETE FROM admins WHERE user_name = '$uname'";
$sql1 = "DELETE FROM users WHERE user_name = '$uname'";

if ($db->query($sql) && $db->query($sql1) === TRUE) {
	
	session_unset();
    session_destroy();
	echo "<script type='text/javascript'> alert('You Account Successfully Deleted From Database'); top.window.location='index.php'; </script>"; die;
	
} else {
	echo '<h3 style="color:red">';
    echo "Error deleting record: " . $db->error;
	echo '</h3>';
}

} 

//UPDATE USER DATA
if (isset($_POST['update'])){

function image_upload(){
	                GLOBAL $db;
					GLOBAL $uid;
					GLOBAL $uname;
					
    //Check if the file is well uploaded

	if($_FILES['file']['size'] != 0) {
	

	//Set up valid image extensions

	$extsAllowed = array( 'jpg', 'jpeg', 'png');	

	//Extract extention from uploaded file

		//substr return ".jpg"

		//strrchr return "jpg"		

	$extUpload = strtolower( substr( strrchr($_FILES['file']['name'], '.') ,1) ) ;

	//Check if the uploaded file extension is allowed	

	if (in_array($extUpload, $extsAllowed) ) { 	//Upload the file on the server

	$name = "pics/$uname.jpg.admin.secret";

	$result = move_uploaded_file($_FILES['file']['tmp_name'], $name);

	if($result){
		
		 $query = "UPDATE users SET profile_pic_path = '$name' WHERE user_ID = '$uid'";
		 $result1 = mysqli_query($db,$query);
					if($result1){
						echo '<p style="color:green"><b>Profile Picture Has Been Successfully Updated</b></p>';
						
					}
					else{
						echo '<p style="color:red"><b>Profile Picture is Not Saved In Database !!</b></p>';
						echo mysqli_error($db);
					}
		
	}

	} else { echo '<p style="color:yellow"><b>File type not valid. Since profile picture not updated..!!</b></p>'; }
					
}
}

function update(){	
    GLOBAL $db;
	GLOBAL $errors;
	GLOBAL $uname;
	GLOBAL $uid;
	
	if ("$_POST[password_1]" != "$_POST[password_2]") {array_push($errors, "The two passwords do not match");}
	if (count($errors) == 0) {
	$query2= "UPDATE admins SET user_name = '$_POST[username]', mobile_number = '$_POST[mobilenumber]', telephone_number = '$_POST[telno]', temporary_address = '$_POST[tempaddress]', qualifications = '$_POST[Qualification]' WHERE user_name = '$uname'";
	if("$_POST[password_1]" != ""){
	$password=md5("$_POST[password_1]");
	
  	$query = "UPDATE users SET user_name = '$_POST[username]', first_name = '$_POST[fname]', last_name = '$_POST[lname]', province='$_POST[province]', email='$_POST[email]', address='$_POST[peraddress]', vehicle_number = '$_POST[vnumber]', gender= '$_POST[gender]', password = '$password', user_type= 'admin' WHERE user_ID = '$uid'";
    }
	else{
	$query = "UPDATE users SET user_name = '$_POST[username]', first_name = '$_POST[fname]', last_name = '$_POST[lname]', province='$_POST[province]', email='$_POST[email]', address='$_POST[peraddress]', vehicle_number = '$_POST[vnumber]', gender= '$_POST[gender]', user_type= 'admin' WHERE user_ID = '$uid'";
    }
	$result = mysqli_query($db,$query);
	$result2 = mysqli_query($db,$query2);
	
  	if ($result && $result2) {
	  echo "<h3 style ='color:white'>".'Your Information Has Been Successfully Updated'."</h3>";
	  echo "<meta http-equiv='refresh' content='5'>";
	  
  	}else {
  		array_push($errors, "An error has Occurred");
		echo mysqli_error($db);
		echo '<h3 style ="color:white">'.$query.'</h3>';
  	}
	}
 }	
 
    if ($uname === "$_POST[username]") {
      update();
	  image_upload();
    } 
    else{
		$username2 = mysqli_real_escape_string($db, $_POST['username']);
		$user_check_query = "SELECT * FROM users WHERE user_name='$username2'";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
  
      if ($user) { // if user exists
      if ($user['user_name'] === $username2) {
      array_push($errors, "Username already exists");
      }
	 }
	 if (count($errors) == 0){ update(); image_upload();}
	}	

}

function notchange(){echo $username = $_SESSION['user_name'];
                     echo $password = $_SESSION['password'];
					 }

?>
<!DOCTYPE html>

<html>
<head>
  <title>Edit Your Profile</title>
  <link rel="stylesheet" type="text/css" href="css/reg.css">
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
  <meta name="author" content="Chamitha Nandun Jayalath">
  
   <script language="javascript">
    
	<!--
		function formfunc() {
			
			return confirm("Do you want to Make changes ?");
		}
		
	//-->
	</script>	
 
 
</head>
<body>
<div class="header">
  <?php
if(isset($_SESSION['admin_uname'])){
echo "<h2>Edit Administrator Profile</h2>";	
}
else echo "<h2>Edit your Profile</h2>";	
 ?>
  </div>
	
  <form method="post" action="" enctype = 'multipart/form-data' onSubmit="return formfunc()">
  	<?php include('errors.php'); ?>
	<table align="center" width="1200px" border="0" cellpadding="5px">
	<tr>
	<td>
  	<div class="input-group1">
  	  <label>First Name</label>
	  <input type="text" class="text" name="fname" value="<?php echo $fname; ?>">  	  
  	</div></td>
	<td>
	<div class="input-group1">
  	  <label>Last Name</label>
  	  <input type="text" class="text" name="lname" value="<?php echo $lname; ?>">
  	</div></td>
	<td rowspan="7"><h5 style="color:white">Change Profile Picture:</h5> <input style="color:white" type="file" name="file" id="uplod_pic">  <div class='prof2'><img src='<?php echo $profilepic?>' width=225px></div>
	<div class="input-group1">
          <label>Male</label>  <input type="radio" name="gender" value="Male" <?php if($gender == "Male") echo "CHECKED"; ?>> 
		  <label>Female</label>	<input type="radio" name="gender" value="Female" <?php if($gender == "Female") echo "CHECKED"; ?>> 
  	</div>
	<div style="color:white"><br><br><br><label><b>SEND E-MAIL NOTIFICATIONS:</b></label></div><br>
				<input type="checkbox" name="notification" value="Y" <?php if($email_notification == "Y") echo "CHECKED"; ?> ><br><br></td>
	</tr>
	<tr>
	<td>
	<div class="input-group1">
  	  <label>Vehicle Number(s)</label>
	  <input type="text" class="text" name="vnumber" value="<?php echo $vnumber; ?>">  	  
  	</div>
	</td>
	<td>
	<div class="input-group1">
  	  <label>ID-Number</label>
	  <input type="text" class="text" placeholder="XXXXXXXXXXXV" name="IDnumber" value="<?php echo $idnumber; ?>">  	  
  	</div>
	</td></tr>
	<tr>
	<td>
	<div class="input-group1">
  	  <label>Temporary address</label>
	  <input type="text" placeholder="Your temporary address"  class="text" name="tempaddress" value="<?php echo $temp_address; ?>">  	  
  	</div>
	</td>
	<td>
	<div class="input-group1">
  	  <label>Qualifications</label>
	  <input type="text" class="text" placeholder="Your qualifications" name="Qualification" value="<?php echo $qual; ?>">  	  
  	</div>
	</td></tr>
	<tr><td>
	<div class="input-group1">
  	  <label>Permanent Address</label>
	  <input type="text" class="text" placeholder="Your permanent address" value= "<?php echo $peraddress; ?>" name="peraddress" value="<?php echo $peraddress; ?>">  	  
  	</div></td>
	<td>
	<div class="input-group1">
  	  <label>Province</label>
	  <input type="text" class="text" placeholder="Your_province" name="province" value="<?php echo $province; ?>">  	  
  	</div></td>
	</tr>
	<tr><td>
	<div class="input-group1">
  	  <label>Mobile Number</label>
	  <input type="text" class="text" placeholder="xxx-x xxxx xxxx" name="mobilenumber" value="<?php echo $mobilenumber; ?>">  	  
  	</div></td>
	<td>
	 	<div class="input-group1">
  	  <label>Email</label>
  	  <input type="email" class="text" name="email" value="<?php echo $email; ?>">
  	</div></td></tr>
	<tr><td>
	<div class="input-group1">
  	  <label>Telephone Number</label>
	  <input type="text" class="text" placeholder="xxx-x xxxx xxxx" name="telno" value="<?php echo $tele_number; ?>">  	  
  	</div></td>
	<td>
	<div class="input-group1">
  	  <label>Joined Date</label>
	  <input type="text" class="text" placeholder="joined date" name="joindate" value="<?php echo $joindate; ?>" disabled>  	  
  	</div></td></tr>
	<tr><td>
	<div class="input-group1">
  	  <label>Basic Salary</label>
	  <input type="text" class="text" placeholder="Salary" name="salary" value="<?php echo $salary; ?>" disabled>  	  
  	</div></td> 
	<td>
	<div class="input-group1">
  	  <label>Change Username</label>
  	  <input type="text" placeholder="Enter a new user_name" name="username" value="<?php echo $username; ?>">
  	</div></td></tr>
	<tr><td>
  	<div class="input-group1">
  	  <label>Change Password</label>
  	  <input type="password" title= "If you do not want to change your current password leave this area empty" placeholder="Enter a new password" name="password_1" value="<?php echo $password; ?>">
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
  	  <button type="submit" class="btn" name="update">Update Profile</button>
  	</div>	
    <?php
	  if((isset($_SESSION['administrator']))&&(isset($_SESSION['admin_uname'])))
  	  echo '<button type="submit" class="btn" name="delete_customer">Delete Your Account</button>';
    ?>
	</div>
  	<p style="color:green">
  		Don't you want to edit? <?php
	  if(isset($_SESSION['admin_uname'])||isset($_SESSION['administrator'])){
		  echo '<a class="member" href="adm_profile.php">Back To Admin Panel</a>';
	  }
      else {
		   echo '<a class="member" href="customer_profile.php">Go Back</a>';
	  }
    ?> 
  	</p>
  </form>
</body>
</html>