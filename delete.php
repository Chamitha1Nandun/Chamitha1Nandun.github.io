<?php
include 'includes/dbh.inc.php';
if (isset($_POST['delete_me'])){
$uid = mysqli_real_escape_string($conn,$_POST['id_user']);
$uid = mysqli_real_escape_string($conn,$_POST['id_user']);
$sql = "SELECT user_name,user_type FROM users WHERE user_ID = '$uid'";
$result = mysqli_query($conn, $sql);
$user= mysqli_fetch_assoc($result);
    $sql1 = "DELETE FROM users WHERE user_ID = '$uid'";
	$result1 = mysqli_query($conn, $sql1);
if($user['user_type'] === 'admin') {$sql2 = "DELETE FROM admins WHERE user_name = '$user[user_name]'";}
else if ($user['user_type'] === 'staff') $sql2 = "DELETE FROM staff WHERE user_name = '$user[user_name]'";
else if ($user['user_type'] === 'customer') $sql2 = "DELETE FROM customers WHERE user_name = '$user[user_name]'";
else $sql2 = "DELETE FROM companies WHERE user_name = '$user[user_name]'";
$result2 = mysqli_query($conn, $sql2);
if ($result1 && $result2) {
echo "<script type='text/javascript'> alert('User Successfully Deleted From Database'); location='adm_profile.php'; </script>";
			
} else {
	echo "<script type='text/javascript'> alert('Error Deleting Record'); location='adm_profile.php'; </script>";

}}

if (isset($_POST['change_me'])){
$uid = mysqli_real_escape_string($conn,$_POST['id_user']);
$sql = "SELECT user_name,user_type FROM users WHERE user_ID = '$uid'";
$result = mysqli_query($conn, $sql);
if ($result) {
$user= mysqli_fetch_assoc($result);
if($user['user_type'] === 'admin'){
	 session_start();
	 $_SESSION['admin_uname']= $user['user_name'];
	 echo "<script type='text/javascript'> alert('You Are About To Edit An Administrator Profile'); location='edit_admin.php'; </script>";
 }
else if($user['user_type'] === 'staff'){
	 session_start();
	 $_SESSION['staff_uname']= $user['user_name'];
	 echo "<script type='text/javascript'> alert('You Are About To Edit A Staff Member Profile'); location='edit_staff.php'; </script>";
}
else if ($user['user_type'] === 'customer'){
	 session_start();
	 $_SESSION['customer_uname']= $user['user_name'];
	 echo "<script type='text/javascript'> alert('You Are About To Edit A Customer Profile'); location='edit_customer.php'; </script>";
}
else{
	 session_start();
	 $_SESSION['company_uname']= $user['user_name'];
	 echo "<script type='text/javascript'> alert('You Are About To Edit An Company Profile'); location='edit_company.php'; </script>";
}
			
} else {
	echo "<script type='text/javascript'> alert('Error Editing User'); location='adm_profile.php'; </script>";
}
}

if (isset($_POST['delete_news'])){
$newid = mysqli_real_escape_string($conn,$_POST['id_news']);
$sql = "DELETE FROM news WHERE idnews = '$newid'";
$result = mysqli_query($conn, $sql);
if($result){
echo "<script type='text/javascript'> alert('News Deleted From Database'); location='admin_add_news.php'; </script>";}
else echo "<script type='text/javascript'> alert('Error Deleting News'); location='admin_add_news.php'; </script>";
}



if(isset($_POST['delete_app'])){
		  
		  $id_app= mysqli_real_escape_string($conn, $_POST['id_app']);
		  $sql = "DELETE FROM appointments WHERE appointment_ID = '$id_app'";
		   $result= mysqli_query($conn,$sql);
		   if($result){
			   echo "<script type='text/javascript'> alert('Appointment Deleted Successfully !'); location='view_appoinment.php';</script>";
			   
		   }
		   else{
	       echo '<h3 style="color:red">';
           echo "Error deleting record: " . $conn->error;
	       echo '</h3>';	
           }
	       }
		   
		   if(isset($_POST['approve_me'])){
            $email= mysqli_real_escape_string($conn, $_POST['email']);			
		    $msg = "Your appointment has been approved. we'll send more details within next 2 hours \n|n This is computer generated message please do not reply!";
			$msg = wordwrap($msg,70);
			if(mail($email,"CLEAN STREET AUTO SERVICE",$msg)){
				  echo "<script type='text/javascript'> alert('Appointment approving is successful mail was sent to the customer !'); location='view_appoinment.php';</script>";
			}
				else{echo "<script type='text/javascript'> alert('An error was occurred !'); location='view_appoinment.php';</script>";}
	       }
		   if(isset($_POST['reject_me'])){	
            $email= mysqli_real_escape_string($conn, $_POST['email']);		   
		    $msg = "Your appointment has been rejected. please contact our staff member by calling this number 077-2345634 for further information \n\n This is computer generated message please do not reply!";
			$msg = wordwrap($msg,70);
			if(mail($email,"CLEAN STREET AUTO SERVICE",$msg)){
				  echo "<script type='text/javascript'> alert('Appointment rejected successfully mail was sent to the customer !'); location='view_appoinment.php';</script>";
			}
				else{echo "<script type='text/javascript'> alert('An error was occurred !'); location='view_appoinment.php';</script>";}
	       }
	 

/*if(isset($_GET['delete'])){
    
    $link = mysqli_connect('localhost', 'root', '19950901');
    if (!$link) {
      die('Could not connect: ' . mysql_error());
    }
    $sql = "DROP DATABASE fun";
 
    if (mysqli_query($link, $sql)) {
	  header ("Location:admin.php");
      echo "<h3 style='color:white'>Database was successfully deleted\n </h1>";
	  
    } else {
	
      echo '<h3 style="color:black">Error deleting database!!</h1> ';
		
    }
  }
*/

?>