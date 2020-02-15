<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="css/text.css" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<meta name="keywords" content="HTML,CSS,PHP,JavaScript">
<meta name="author" content="Chamitha Nandun Jayalath">
<title>Clean Street Auto Service Inc.</title>
    </head>
	
<?php
session_start();
    if((isset($_SESSION['staff']))||(isset($_SESSION['Operator']))){
$db = mysqli_connect('localhost', 'root', '19950901', 'loginsystem');
$id= $_SESSION['user_ID'];
$uname = $_SESSION['user_name'];
$query= "SELECT * FROM users where user_ID='$id'";
$query2= "SELECT * FROM staff where user_name='$uname'";
$result4 = mysqli_query($db,$query2);
$result3 = mysqli_query($db,$query);
while($row3 = mysqli_fetch_array($result3))
{ 
$fname=$row3['first_name'];
$lname=$row3['last_name'];
$uname=$row3['user_name'];
$email=$row3['email'];
$per_address=$row3['address'];
$id_no=$row3['ID_card'];
$profilepic=$row3['profile_pic_path'];
$gender=$row3['gender'];
}
while($row2 = mysqli_fetch_assoc($result4))
{ 
$mobile_no=$row2['mobile_no'];
$tel_no=$row2['telephone_no'];
$temp_address=$row2['temporary_address'];
$station=$row2['station'];
$rating=$row2['rating'];
$salary=$row2['salary'];
$joined=$row2['service_started_date'];
$qual=$row2['qualifications'];
$status=$row2['status'];
	}
	}
?>
<body>
<p><div class="prof1"><h2>Profile Of <?php echo $uname ?></h2></div></p> 
<div class='prof2'><img src='<?php echo $profilepic?>'></div>
<table width="auto" border="0" align="center" cellpadding="30">
    <tr>
    <td valign="top" align="center"><div class="table">First Name :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $fname ?></div></div></td>
  </tr>  
  <tr>
    <td valign="top" align="center"><div class="table">Last Name :</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $lname ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Gender &nbsp;&nbsp;&nbsp;&nbsp;:</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $gender ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Username &nbsp;&nbsp;&nbsp;&nbsp;:</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $uname ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $email ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Rating&nbsp;&nbsp;&nbsp;&nbsp;:</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $rating ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table"> ID No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $id_no ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Permanent address <div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $per_address ?></div></div></td>
  </tr> 
  <tr>
    <td valign="top" align="center"><div class="table">Temporary address  <div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $temp_address ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Qualifications :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $qual ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Mobile Number :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $mobile_no ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Telephone Number <div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $tel_no ?></div></div></td>
  </tr>
   <tr>
    <td valign="top" align="center"><div class="table">Joined Date &nbsp;&nbsp;&nbsp;&nbsp;:<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $joined ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Basic Salary &nbsp;&nbsp;&nbsp;&nbsp;:<div></td>
    <td valign="top"><div class="table"><div class="echos">Rs. <?php echo $salary ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Status &nbsp;&nbsp;&nbsp;&nbsp;:<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $status ?></div></div></td>
  </tr>
    
</table>
<form action="edit_staff.php">
     <div class="input-group">
  	  <button type="submit" class="btn" name="edit">Edit Profile &nbsp;&nbsp; <i class="fa fa-edit" aria-hidden="true"></i></button>
  	</div>
	</form>
</body>
</html>