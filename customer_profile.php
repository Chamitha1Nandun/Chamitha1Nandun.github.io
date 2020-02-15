<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="css/text.css" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<meta name="keywords" content="HTML,CSS,PHP,JavaScript">
<title>Clean Street Auto Service Inc.</title>
<meta name="author" content="Chamitha Nandun Jayalath">
    </head>
	
<?php
session_start();
    if(isset($_SESSION['customer'])){
$db = mysqli_connect('localhost', 'root', '19950901', 'loginsystem');
$id= $_SESSION['user_ID'];
$uname = $_SESSION['user_name'];    
$query= "SELECT * FROM users where user_ID='$id'";
$query2= "SELECT * FROM customers where user_name='$uname'";
$result3 = mysqli_query($db,$query);
$result4 = mysqli_query($db,$query2);
while($row3 = mysqli_fetch_array($result3))
{ 
$fname=$row3['first_name'];
$lname=$row3['last_name'];
$uname=$row3['user_name'];
$address=$row3['address'];
$gender=$row3['gender'];
$province=$row3['province'];
$email=$row3['email'];
$vnumber=$row3['vehicle_number'];
$profilepic=$row3['profile_pic_path'];
$usertype=$row3['user_type'];
	}
while($row2 = mysqli_fetch_array($result4))
{ 
$mobilenumber=$row2['mobile_number'];
$tele_number=$row2['telephone_number'];
$insurance=$row2['insurance_company'];
$license=$row2['license_number'];

	}
}
?>
<body>
<p><div class="prof1"><h2>Profile Of <?php echo $uname ?></h2></div></p> 
<div class='prof2'><img src='<?php echo $profilepic?>'></div>
<table width="aut0" border="0" align="center" cellpadding="30">
    <tr>
    <td valign="top" align="center"><div class="table">First Name :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $fname ?></div></div></td>
  </tr>  
  <tr>
    <td valign="top" align="center"><div class="table">Last Name &nbsp:</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $lname ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Gender &nbsp;&nbsp;:</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $gender ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Address &nbsp;&nbsp:</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $address ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Province &nbsp;&nbsp;:</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $province ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Email &nbsp;&nbsp;&nbsp;:</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $email ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table"> Vehicle No &nbsp;&nbsp; :</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $vnumber ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Mobile No &nbsp;&nbsp;:<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $mobilenumber ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Telephone No &nbsp;&nbsp; :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $tele_number ?></div></div></td>
  </tr> 
  <tr>
    <td valign="top" align="center"><div class="table">Insurance Company :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $insurance ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">License Number &nbsp;&nbsp;&nbsp;:<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $license ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">User Type &nbsp;&nbsp;:<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $usertype ?></div></div></td>
  </tr>
    
</table>
    <form action="edit_customer.php">
     <div class="input-group">
  	  <button type="submit" class="btn" name="edit">Edit Profile &nbsp;&nbsp; <i class="fa fa-edit" aria-hidden="true"></i></button>&nbsp;	  
  	</div>	
	</form> 
	<form action="vehicle_info.php">
     <div class="input-group">
  	 <button type="submit" class="btn" name="edit">My Vehicle &nbsp;&nbsp;&nbsp; <i class="fa fa-taxi" aria-hidden="true"></i></button>
  	</div>	
	</form>
	
</body>
</html>