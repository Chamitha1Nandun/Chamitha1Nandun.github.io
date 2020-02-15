<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="css/text.css" type="text/css"/>
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<meta name="keywords" content="HTML,CSS,PHP,JavaScript">
<meta name="author" content="Chamitha Nandun Jayalath">
<title>Clean Street Auto Service Inc.</title>
    </head>
	
<?php
$fname="";
$lname="";
$vnumber="";
$last="";
$next="";
$date="";
$type="";
$lubrication="";
$tune="";
$suspension="";
$coolent="";
$electric="";
$break="";
$exhaust="";
$detail="";

session_start();
    if(isset($_SESSION['customer'])){
$db = mysqli_connect('localhost', 'root', '19950901', 'loginsystem');
$id= $_SESSION['user_ID'];
$uname = $_SESSION['user_name'];    
$query= "SELECT * FROM users INNER JOIN customer_vehicle ON users.user_ID = customer_vehicle.user_ID WHERE user_name='$uname'";
$result3 = mysqli_query($db,$query);
if($result3){
while($row3 = mysqli_fetch_array($result3))
  { 
$fname=$row3['first_name'];
$lname=$row3['last_name'];
$vnumber=$row3['vehicle_number']; 
$last=$row3['last_milage'];
$next=$row3['next_service'];
$date=$row3['last_serviced'];
$type=$row3['service_type'];
$lubrication=$row3['lubrication'];
$tune=$row3['tuneup'];
$suspension=$row3['suspension'];
$coolent=$row3['coolent'];
$electric=$row3['electric'];
$break=$row3['break'];
$exhaust=$row3['exhaust'];
$detail=$row3['detail'];
  }
 }
}
?>

<body>
<p><div class="prof1"><h2>Vehicle Of <?php echo $uname ?></h2></div></p> 
<table width="aut0" border="0" align="center" cellpadding="30">
 
 <tr>
    <td valign="top" align="center"><div class="table"> Vehicle No &nbsp;&nbsp; :</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $vnumber ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Last Serviced &nbsp;&nbsp;:</div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $date ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Last Mileage &nbsp;&nbsp;:<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $last ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Next Service Mileage &nbsp;&nbsp; :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $next ?></div></div></td>
  </tr> 
  <tr>
    <td valign="top" align="center"><div class="table">Last Service Type :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $type ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Lubrication Service:<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $lubrication ?></div></div></td>
  </tr><tr>
    <td valign="top" align="center"><div class="table">Tuneup Service &nbsp;&nbsp; :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $tune ?></div></div></td>
  </tr><tr>
    <td valign="top" align="center"><div class="table">Suspension Service :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $suspension ?></div></div></td>
  </tr><tr>
    <td valign="top" align="center"><div class="table">Coolant System Service :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $coolent ?></div></div></td>
  </tr><tr>
    <td valign="top" align="center"><div class="table">Electric System Service :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $electric ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Break System Service :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $break ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Exhaust System Service :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $exhaust ?></div></div></td>
  </tr>
  <tr>
    <td valign="top" align="center"><div class="table">Detailing &nbsp;&nbsp;&nbsp;&nbsp; :<div></td>
    <td valign="top"><div class="table"><div class="echos"><?php echo $detail ?></div></div></td>
  </tr>
     
</table>
    <form action="customer_profile.php">
     <div class="input-group">
  	  <button type="submit" class="btn" name="edit">View my Profile &nbsp;<i class="fa fa-user" aria-hidden="true"></i></button>
  	</div>
	</form>
</body>
</html>