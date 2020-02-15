
<?php
session_start();

// initializing variables
$firstname = "";
$vnumber = "";
$lastname  = "";
$username = "";
$username2="";
$email    = "";
$code = "";
$idnumber = "";
$peraddress = "";
$province= "";
$mobilenumber = "";
$tele_number = "";
$license = "";
$insurance = "";
$gender="";
$email_notification="";
$errors = array();
$profilepic="";
$fname ="";
$lname ="";
$password="";
$service_type="";
$vehicle_type="";
$temp_address="";
$qual="";
$field="";
$salary="";
$date="";
$station="";
$mobileno="";
$incomedate="";
$debit="";
$credit="";
$description="";
$headline="";
$content="";
$picture="";
$compname="";
$peraddress="";
$notify="";


// connect to the database
$db = mysqli_connect('localhost', 'root', '19950901', 'loginsystem');

// REGISTER CUSTOMER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $vnumber = mysqli_real_escape_string($db, $_POST['vnumber']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


  // first check the database to make sure a user does not already exist with the same user_name and/or email
  $user_check_query = "SELECT * FROM users WHERE user_name='$username' OR email='$email' OR vehicle_number='$vnumber' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['user_name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
	
	if ($user['vehicle_number'] === $vnumber) {
      array_push($errors, "Your Vehicle already registered");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
    $query = "INSERT INTO users (first_name, last_name, vehicle_number, user_name, email, password, user_type) VALUES ('$firstname', '$lastname', '$vnumber', '$username', '$email', '$password', 'customer')";
  	$query2 = "INSERT INTO customers (user_name) VALUES ('$username')";
	$result = mysqli_query($db, $query); 
	$result2 = mysqli_query($db, $query2);
  if ($result && $result2) {
	  
	  echo "<script type='text/javascript'> alert('You Are Successfully Registered Please Login To Proceed!!'); location='login.php'; </script>";
	 
  	}else {
  		array_push($errors, "An error has Occurred");
		echo mysqli_error($db);
		echo '<h3 style ="color:white">'.$query.'</h3>';
  	}		
	
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
 
  
  if (count($errors) == 0) {
  	$password = md5($password);
	$query = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";
	$results = mysqli_query($db, $query);
		  
  	
	if (mysqli_num_rows($results) == 1)//user found 
	{
	$logged_in_user = $results->fetch_assoc();
     if ($logged_in_user['user_type']== 'admin') //check whether the user is an administrator, a staff member or a customer
	
	 {
		 $_SESSION['administrator'] = $logged_in_user;	
         $_SESSION['name']= $logged_in_user['first_name']." ".$logged_in_user['last_name'];			 
         $_SESSION['user_ID']=$logged_in_user['user_ID'];
         $_SESSION['user_name']=$logged_in_user['user_name'];
         $_SESSION['pro']=$logged_in_user['profile_pic_path'];		 
  	     header('location: profile.php');
	 }
	 
	 else if ($logged_in_user['user_type']== 'staff') 
	
	 {  $querys = "SELECT * FROM staff WHERE user_name='$username'";
	    $resultss = mysqli_query($db, $querys);
		$logged_in_staff = $resultss->fetch_assoc();
		if ($logged_in_staff['specialty'] == 'Operator'){$_SESSION['Operator']= $logged_in_user;}
		else{
		$_SESSION['staff'] = $logged_in_user;}
         $_SESSION['name']= $logged_in_user['first_name']." ".$logged_in_user['last_name'];	
         $_SESSION['user_ID']=$logged_in_user['user_ID'];
         $_SESSION['user_name']=$logged_in_user['user_name'];

		
		 
  	     header('location: profile.php');
	 }
	 else if ($logged_in_user['user_type']== 'company') 
	
	 {
		 $_SESSION['company'] = $logged_in_user;
         $_SESSION['name']= $logged_in_user['first_name']." ".$logged_in_user['last_name'];	
         $_SESSION['user_ID']=$logged_in_user['user_ID'];
         $_SESSION['user_name']=$logged_in_user['user_name'];		 
  	     header('location: profile.php');
	 }
	 else  
	 $query2 = "SELECT * FROM customers WHERE user_name='$username'";
	 $results2 = mysqli_query($db, $query2);
	 $logged_in_user_info = $results2->fetch_assoc();
	 {
		 $_SESSION['customer'] = $logged_in_user;
         $_SESSION['name']= $logged_in_user['first_name']." ".$logged_in_user['last_name'];
         $_SESSION['user_ID']=$logged_in_user['user_ID'];
         $_SESSION['user_name']=$logged_in_user['user_name'];
		 $_SESSION['vehicle_type']= $logged_in_user_info['vehicle_type'];
         $_SESSION['cust_ID']=$logged_in_user_info['cust_ID'];		 
  	     header('location: profile.php');
	 }
  	}
	else {
  		array_push($errors, "Wrong user name and password combination !!");
  	}
 }
}
//LOGIN CODE
if (isset($_POST['login_code'])) {
  
  $code = mysqli_real_escape_string($db, $_POST['code']);


  if (empty($code)) {
  	array_push($errors, "Code is required");
  } 

  if (count($errors) == 0) {
  	$query = "SELECT * FROM users WHERE code='$code'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
	  $logged_in_user = $results->fetch_assoc();
  	  $_SESSION['customer'] = $logged_in_user;
      $_SESSION['name']= $logged_in_user['first_name']." ".$logged_in_user['last_name'];
      $_SESSION['user_ID']=$logged_in_user['user_ID'];	  
  	  header('location: profile.php');
  	}else {
  		array_push($errors, "Wrong code please check and try again !!");
  	}
 }
}

// MAKE AN APPOINMENT
if (isset($_POST['appointment'])) {
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $mobilenumber = mysqli_real_escape_string($db, $_POST['mobilenumber']);
  $vnumber = mysqli_real_escape_string($db, $_POST['vnumber']);
  $username = $_SESSION['user_name'];
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $free_1 = htmlentities($_POST['free_1']);
  $free_2 = htmlentities($_POST['free_2']);
  $service_type =  mysqli_real_escape_string($db, $_POST['service_type']);
  $vehicle_type = $_SESSION['vehicle_type'];

  
  // first check the database to make sure a user does not already exist with the same user_name and/or email
  $user_check_query = "SELECT * FROM appointments WHERE user_name='$username'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['user_name'] === $username) {
      array_push($errors, "Appointment already exists");
    }  
  }

  // Finally, add appointment if there are no errors in the form
  if (count($errors) == 0) {
	  
  	
    $query = "INSERT INTO appointments (first_name, last_name, vehicle_number, user_name, email, mobile_number, vehicle_type, service_type, free_1, free_2) VALUES ('$firstname', '$lastname', '$vnumber', '$username', '$email', '$mobilenumber', '$vehicle_type', '$service_type', '$free_1', '$free_2')";
  	$result = mysqli_query($db, $query); 	
    if ($result) {
	  echo "<h3 style ='color:white'>".'Your Appointment Has Been Successfully Submitted Please Wait For Conformation EMAIL'."</h3>";
	  
  	}else {
  		array_push($errors, "An error has Occurred");
		echo mysqli_error($db);
		echo '<h3 style ="color:white">'.$query.'</h3>';
  	}	
	
 }
}

//Admin add customer
if (isset($_POST['admin_reg_user'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lname = mysqli_real_escape_string($db, $_POST['lastname']);
  $vnumber = mysqli_real_escape_string($db, $_POST['vnumber']);  
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $code = mysqli_real_escape_string($db, $_POST['code']);

  
 $user_check_query = "SELECT * FROM users WHERE user_name='$username' OR email='$email' OR vehicle_number='$vnumber' OR code='$code' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['user_name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
	
	if ($user['vehicle_number'] === $vnumber) {
      array_push($errors, "Vehicle already registered");
    }
	else array_push($errors, "Service Code Already Exist");
  } 
  
  if (count($errors) == 0) {
    $query = "INSERT INTO users (first_name, last_name, vehicle_number, user_name, email, user_type, code) VALUES ('$fname', '$lname', '$vnumber', '$username', '$email', 'customer', $code)";
  	$query2 = "INSERT INTO customers (user_name) VALUES ('$username')";
	$result = mysqli_query($db,$query);
	$result2 = mysqli_query($db, $query2);
  if ($result && $result2) {
	  echo "<h3 style ='color:white'>".'The Customer Has Been Successfully Added To The Database'."</h3>";
	  
  	}else {
  		array_push($errors, "An error has Occurred");
		echo mysqli_error($db);
		echo '<h3 style ="color:white">'.$query.'</h3>';
  	}   
  
}
}

  
//Admin Add Staff


if (isset($_POST['admin_reg_staff'])) {

function image_upload(){
	                GLOBAL $name;
					GLOBAL $username;
			
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

    $name = "pics/$username.jpg.staff.secret";

    move_uploaded_file($_FILES['file']['tmp_name'], $name);

	} else { echo '<p style="color:yellow"><b> File type not valid profile picture unable to upload..!!</b></p>'; }
					
}
}	
	
  // receive all input values from the form
  $name ="";
  $firstname = mysqli_real_escape_string($db, $_POST['fname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lname']);  
  $peraddress = mysqli_real_escape_string($db, $_POST['peraddress']);
  $date = $_POST['date'];
  $idnumber = mysqli_real_escape_string($db, $_POST['IDnumber']);
  $tele_number = mysqli_real_escape_string($db, $_POST['telno']);
  $mobileno = mysqli_real_escape_string($db, $_POST['mobilenumber']);
  $field = mysqli_real_escape_string($db, $_POST['field']);
  $qual = mysqli_real_escape_string($db, $_POST['qual']);  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $salary = mysqli_real_escape_string($db, $_POST['salary']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  

  // first check the database to make sure a user does not already exist with the same user_name and/or email
  $user_check_query = "SELECT * FROM users WHERE user_name='$username' OR email='$email' OR ID_card='$idnumber' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['user_name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
	
	if ($user['ID_card'] === $idnumber) {
      array_push($errors, "ID card number already exist");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
	image_upload();
  	$password = md5($password_1);//encrypt the password before saving in the database
    $query = "INSERT INTO users (first_name, last_name, user_name, email, password, user_type, ID_card, address, gender, profile_pic_path) VALUES ('$firstname', '$lastname', '$username', '$email', '$password', 'staff', '$idnumber', '$peraddress', '$_POST[gender]', '$name')";
  	$query2 = "INSERT INTO staff (user_name, mobile_no, telephone_no, specialty, station, salary, service_started_date) VALUES ('$username', '$mobileno', '$tele_number', '$field', '$_POST[station]', '$salary', '$date' )";
	$result = mysqli_query($db,$query);
	$result2 = mysqli_query($db,$query2);
  	if ($result && $result2) {
	  echo "<h3 style ='color:white'>".'Staff Member Has Been Successfully Added To The Database'."</h3>";
	  
  	}else {
  		array_push($errors, "An error has Occurred");
		echo mysqli_error($db);
		echo '<h3 style ="color:white">'.$query.'</h3>';
  	}   
  
  }
 }
 
 //Admin Add Admin
if (isset($_POST['admin_reg_admin'])) {
	
	function image_upload(){
	                GLOBAL $name;
					GLOBAL $username;
			
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

    $name = "pics/$username.jpg.admin.secret";

    move_uploaded_file($_FILES['file']['tmp_name'], $name);

	} else { echo '<p style="color:yellow"><b> File type not valid Since profile picture unable to update..!!</b></p>'; }
					
}	
	}
	
  // receive all input values from the form
  $name="";
  $firstname = mysqli_real_escape_string($db, $_POST['fname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lname']);  
  $peraddress = mysqli_real_escape_string($db, $_POST['peraddress']);
  $date = $_POST['date'];
  $idnumber = mysqli_real_escape_string($db, $_POST['IDnumber']);
  $tele_number = mysqli_real_escape_string($db, $_POST['telno']);
  $mobileno = mysqli_real_escape_string($db, $_POST['mobilenumber']);
  $qual = mysqli_real_escape_string($db, $_POST['qual']);  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $salary = mysqli_real_escape_string($db, $_POST['salary']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
 
  
  // first check the database to make sure a user does not already exist with the same user_name and/or email
  $user_check_query = "SELECT * FROM users WHERE user_name='$username' OR email='$email' OR ID_card='$idnumber' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['user_name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
	
	if ($user['ID_card'] === $idnumber) {
      array_push($errors, "ID card number already exist");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
	image_upload();  
  	$password = md5($password_1);//encrypt the password before saving in the database
    $query = "INSERT INTO users (first_name, last_name, user_name, email, password, user_type, ID_card, address, gender, profile_pic_path) VALUES ('$firstname', '$lastname', '$username', '$email', '$password', 'admin', '$idnumber', '$peraddress', '$_POST[gender]', '$name')";
  	$query2 = "INSERT INTO admins (user_name, telephone_number, mobile_number, basic_salary, join_date) VALUES ('$username', '$tele_number', '$mobileno', '$salary', '$date')";
	$result = mysqli_query($db,$query);
	$result2 = mysqli_query($db,$query2);
  	if ($result && $result2) {
	  echo "<h3 style ='color:white'>".'New Administrator Has Been Successfully Added To The Database'."</h3>";
	  
	  
  	}else {
  		array_push($errors, "An error has Occurred");
		echo mysqli_error($db);
		echo '<h3 style ="color:white">'.$query.'</h3>';
  	}   
  
  }
  }
  
  // REGISTER COMPANY
if (isset($_POST['reg_business'])) {
  // receive all input values from the form
  $compname = mysqli_real_escape_string($db, $_POST['compname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']); 

  // first check the database to make sure a user does not already exist with the same user_name and/or email
  $user_check_query = "SELECT * FROM users WHERE user_name='$username' OR email='$email' OR first_name='$compname' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['user_name'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
	
	if ($user['first_name'] === $compname) {
      array_push($errors, "Your Company is already registered");
    }
  }

  // Finally, register company if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
    $query = "INSERT INTO users (first_name, user_name, email, password, user_type, gender) VALUES ('$compname', '$username', '$email', '$password', 'company', 'None')";
  	$query2 = "INSERT INTO companies (user_name) VALUES ('$compname')";
	$result = mysqli_query($db, $query); 
	$result1 = mysqli_query($db, $query2);
  if ($result && $result2) {
	  echo "<h3 style ='color:white'>".'Your Company Information Has Been Successfully Registered'."</h3>";
  	}else {
  		array_push($errors, "An error has Occurred");
		echo mysqli_error($db);
		echo '<h3 style ="color:white">'.$query.'</h3>';
  	}		
	
  }
}

//add income
if (isset($_POST['add_income'])) {
  $incomedate = $_POST['incomedate'];
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $credit = mysqli_real_escape_string($db, $_POST['credit']);  
  $debit = mysqli_real_escape_string($db, $_POST['debit']);


  if (empty($incomedate)) { array_push($errors, "Date Name is required"); }
  if (empty($credit)) { array_push($errors, "Credit amount is required"); }
  if (empty($debit)) { array_push($errors, "Debit amount is required"); }
  
  $balance = $debit-$credit;
  
  if (count($errors) == 0) {
    $query = "INSERT INTO income (date, description, credit, debit, balance) VALUES ('$incomedate', '$description', '$credit', '$debit', '$balance')";
  	$result = mysqli_query($db,$query);
	
  	if ($result) {
	  echo "<h3 style ='color:white'>".'Income Has Been Successfully Added To The Database'."</h3>";
	  
  	}else {
  		array_push($errors, "An error has Occurred");
		echo mysqli_error($db);
		echo '<h3 style ="color:white">'.$query.'</h3>';
  	}   
  
}
}

//add news

if (isset($_POST['add_news'])) {
	
	
function image_upload(){
	                GLOBAL $name;
					GLOBAL $headline;
			
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

    $name = "news/$headline.jpg.news.secret";

    move_uploaded_file($_FILES['file']['tmp_name'], $name);

	} else { echo '<p style="color:yellow"><b> File type not valid photo was not uploaded..!!</b></p>'; }
					
}
}
  $name ="";
  $headline = $_POST['heading'];
  $content = $_POST['content'];
  $date = htmlentities($_POST['date']);
  image_upload();
  
  $query = "INSERT INTO news (Headline, Content, picture_path, date) VALUES ('$headline', '$content', '$name', '$date')";
  $result = mysqli_query($db, $query); 

if ($result) {	
      echo "<script type='text/javascript'> alert('The News Was Added To Database!'); location='admin_add_news.php'; </script>";
  	}else {
  		echo "<br><br><br><br>An error has Occurred";
		echo mysqli_error($db);
		echo '<h3 style ="color:white">'.$query.'</h3>';
  	}	
  }
					

?>