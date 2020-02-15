<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="css/text.css" type="text/css"/>
<link href="css/acc.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<meta name="keywords" content="HTML,CSS,PHP,JavaScript">
<title>Clean Street Auto Service Inc.</title>
<meta name="author" content="Chamitha Nandun Jayalath">
    </head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <div class="header">
        
        <div class="subnavi">          
                         
                 
                <?php
                session_start();
				    if(isset($_SESSION['code'])){
					echo "<h4>";
					echo "Hello, ",($_SESSION['name']);
					echo "</h4>";	
				    echo ' <form action="includes/logout.inc.php" method="POST" >
                <h4>You are logged in as a Customer! |</h4>
                <button type="submit" name="out">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button>                   
                </form>';				    
                    }
					
                    else if(isset($_SESSION['customer'])){
					echo "<h4>";
					echo "Hello, ",($_SESSION['name']);
					echo "</h4>";;	
				    echo ' <form action="includes/logout.inc.php" method="POST" >
                <h4>You are logged in as a Customer! |</h4>
                <button type="submit" name="out">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button>                   
                </form>';				    
                    }
					
					else if(isset($_SESSION['company'])){
					echo "<h4>";
					echo "Hello, ",($_SESSION['name']);
					echo "</h4>";	
				    echo ' <form action="includes/logout.inc.php" method="POST" >
                <h4>You are logged in as a Client! |</h4>
                <button type="submit" name="out">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button>                   
                </form>';				    
                    }
					
					else if((isset($_SESSION['staff']))||(isset($_SESSION['Operator']))){
					echo "<h4>";
					echo "Hello, ",($_SESSION['name']);
					echo "</h4>";
				    echo ' <form action="includes/logout.inc.php" method="POST" >
                <h4>You are logged in as Staff Member! |</h4>
                <button type="submit" name="out">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button>                   
                </form>';
                    }
					
					else if(isset($_SESSION['administrator'])){
					echo "<h4>";
					echo "Hello, ",($_SESSION['name']);
					echo "</h4>";
				    echo '  <form action="includes/logout.inc.php" method="POST" >
                <h4>You are logged in as Administrator! |</h4>
                <button type="submit" name="out">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button>                   
                </form>';
                    }
					
					else{
                        echo '<form >
                <h4>Currently you are using guest profile |</h4>
             
                <button type="submit" value="login" name="log"><a href="login.php">Login<a></button>                   
                <button type="submit" value="signup" name="sig"><a href="accounts.php">Signup</a></button>

                </form>';
                    }
                ?>               
        </div> 
	</div>
              
<div class="main">
<div class="center">
<div class="left">
	<h1 class="imCompany">CLEAN STREET AUTO SERVICE</h1>
<div class="logo"></div>
<label for="search">Search:</label>
<input type="search" name="search" id="search">
<div class="service">
<div class="service2"><p class="text1">services list</p></div><div class="service1">
<ul>
<li><a class="servicelist" target="_self" href="lubrication.php">Full Lubrication Service</a> </li>
<li><a class="servicelist" target="_self" href="detailing.php">Auto Detailing</a> </li>
<li><a class="servicelist" target="_self" href="maintaince.php">Maintenance Service</a> </li>
<li><a class="servicelist" target="_self" href="systemeval.php">System Evaluation</a></li>
<li><a class="servicelist" target="_self" href="tuneups.php">Tune Ups</a> </li>
<li><a class="servicelist" target="_self" href="coolent.php">Coolent System Service</a></li>
<li><a class="servicelist" target="_self" href="electric.php">Full Electric System Service</a></li>
<li><a class="servicelist" target="_self" href="wheels.php">Wheels &amp; Tyres Checkups</a></li></ul>
<p class="text2"><a target="_self" href="services.php">All services &gt;</a></p></div>
</div>
<div class="latest">
<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="248" data-height="322" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
</div><div class="clear"></div>
<div class="lefrfooter">
<div class="vlinks">Web site designed by <a title="Chamitha Nandun" href="">Group52</a> </div>
</div></div>

<div class="right">

<div class="nav">
<ul class="imNav">
<li><a target="_self" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Home</a></li>
<li><a target="_self" href="aboutus.php"><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp;About Us</a></li>
<li><a target="_self" href="services.php"><i class="fa fa-wrench" aria-hidden="true"></i> &nbsp;Services</a></li>
<li><a target="_self" href="staff.php"><i class="fa fa-users" aria-hidden="true"></i> &nbsp;Staff</a></li>
<li><a target="_self" href="contactus.php"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> &nbsp;Contact Us</a></li>
<li><a target="_self" href="news.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i> &nbsp;News</a></li>
<li><a target="_self" href="faq.php"><i class="fa fa-question-circle" aria-hidden="true"></i> &nbsp;FAQ</a></li>
<li><a target="_self" href="profile.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i> &nbsp;My Profile</a></li>

</ul></div>
	
<div class="blue">

<br><br>

<label>Select A Customer Vehicle Number</label><br>
   <form method="post" action="data.php"> <select id="vehicle" style="font-size:25px" name="vehicle_no" size=3>	       
	<?php       
	            $vnum=array("vehicle_no"=>"");
	            include 'includes/dbh.inc.php';              
                $qry = mysqli_query($conn ,"select vehicle_number,user_type from users");
                while ($row = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
					if ($row["vehicle_number"]!= 'None' && $row["user_type"]!= 'admin'){
					echo  '<option value="'.$row["vehicle_number"].'">'.$row["vehicle_number"].'</option>';}}
				
	?>
	 </select>
	 <button type="submit" class="btn" name="selected">Edit</button>
	 </form>
	 

<?php    
         
         $user=array("first_name"=>"","last_name"=>"","vehicle_number"=>"","last_serviced"=>"","last_milage"=>"","next_service"=>"","first_name"=>"","service_type"=>"","tuneup"=>"","suspension"=>"","user_ID"=>"");
         if(isset($_POST['selected'])){	
         $vnum=$_POST['vehicle_no'];			            
         $qry = mysqli_query($conn ,"SELECT * FROM users INNER JOIN customer_vehicle ON users.user_ID = customer_vehicle.user_ID WHERE vehicle_number='$vnum'");
		 if ($qry){
   		 $user = mysqli_fetch_array($qry);		
		}		
		else{
			echo "An Error Occurred While Fetching The Data !! ";
		}
		 }
		 
		if(isset($_POST['edit_vehicle_info'])){
			$query = "UPDATE customer_vehicle SET last_serviced = '$_POST[date]', last_milage = '$_POST[lastmilage]', next_service = '$_POST[nextmilage]', service_type = '$_POST[type]', lubrication = '$_POST[lubri_type]' , tuneup = '$_POST[tuneup]', suspension = '$_POST[suspension]' WHERE user_ID = '$_POST[userid]'";
		    $result = mysqli_query($conn,$query);
				if ($result) {
	            echo "<h3 style ='color:white'>".'Vehicle Information Has Been Successfully Updated'."</h3>";
	  
  	}else {
  		array_push($errors, "An error has Occurred");
		echo mysqli_error($db);
		echo '<h3 style ="color:white">'.$query.'</h3>';
  	}
		}
?>

<form method="post" action="data.php">
	
  	<div class="input-group">
  	  <label>Customer Name</label>
	  <input type="text" name="" value="<?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?>" disabled>  	  
  	</div>
	<div class="input-group">
  	  <label>Customer ID</label>
  	  <input type="text" name="userid" value="<?php echo $user['user_ID']; ?>" disabled>
  	</div>
	<div class="input-group">
  	  <label>Vehicle No</label>
  	  <input type="text" name="" value="<?php echo $user['vehicle_number']; ?>" disabled>
  	</div>
	<div class="input-group">
  	  <label>Last Serviced </label>
	  <input type="date" name="date" value="<?php echo $user['last_serviced']; ?>">  	  
  	</div>
  	<div class="input-group">
  	  <label>Last Mileage</label>
  	  <input type="text"  name="lastmilage" value="<?php echo $user['last_milage']; ?>">
  	</div>
	<div class="input-group">
  	  <label>Next Service Mileage</label>
  	  <input type="text" name="nextmilage" value="<?php echo $user['next_service']; ?>">
  	</div>
	<div class="input-group">
  	  <label>Last Service Type</label>
  	  <input type="text" name="type" value="<?php echo $user['service_type']; ?>">
  	</div>
	<div class="input-group">
	<label>Lubrication Service</label>
      <select name="lubri_type" style="font-size:20px">
	     
        <option value="Interior">Interior</option>
        <option value="Exterior" selected>Exterior</option>
        <option value="Interior & Exterior">Interior & Exterior</option>
      </select></div>
	<div class="input-group">
  	  <label>Engine Tune Up</label>
  	  <input type="text" name="tuneup" value="<?php echo $user['tuneup']; ?>">
  	</div>
	<div class="input-group">
	<label>Suspension</label>
      <div class="input-group1">
          <label>Checked</label>  <input type="radio" name="suspension" value="Checked" <?php if($user['suspension'] == "Checked") echo "CHECKED"; ?>> 
		  <label>Not Checked</label>	<input type="radio" name="suspension" value="Not Checked" <?php if($user['suspension'] == "Not Checked") echo "CHECKED"; ?>> 
  	</div></div>
    	
	  
  	<div class="input-group">
  	  <button type="submit" class="btn" name="edit_vehicle_info">Submit</button>
  	</div>
  	<p>
  		Done Editing
		? <a class="member" href="data_accounts.php">Go Back</a>
  	</p>
  </form>
	 
	 
	
</div>
<div class="social"><strong> Hotline :- 111-1111-1111/ 222-2222-2222 </strong>
	  <div class="linksc">
		  <a href="https://facebook.com" target="_blank"><img title="Facebook" width="50" height="50" alt="facebook" class="linksc1" src="img/fb.png"></a><a href="https://plus.google.com" target="_blank"><img title="GooglePlus" src="img/g-.png" width="50" height="50" alt="googleplus" class="linksc1"></a><a href="https://twitter.com" target="_blank"><img title="Twitter" src="img/twitter.png" width="50" height="50" alt="twitter" class="linksc1"></a><a href="https://linkedin.com" target="_blank"><img title="LinkedIn" src="img/linkedin.png" width="50" height="50" alt="linkedin" class="linksc1"></a></div>
	  </div></div></div></div>
	  </body>

</html>
