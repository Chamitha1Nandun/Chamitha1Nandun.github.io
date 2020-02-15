<?php include('server.php');
if((isset($_SESSION['customer']))||(isset($_SESSION['company']))){
$db = mysqli_connect('localhost', 'root', '19950901', 'loginsystem');
$uname= $_SESSION['user_name'];
$query= "SELECT * FROM users where user_name='$uname'";
$query2= "SELECT * FROM customers where user_name='$uname'";
$result = mysqli_query($db,$query);
$result2 = mysqli_query($db,$query2);
while($row = mysqli_fetch_array($result))
 { 
$fname=$row['first_name'];
$lname=$row['last_name'];
$email=$row['email'];
$vnumber=$row['vehicle_number'];
$province=$row['province'];
$username=$row['user_name'];

 }
while($row2 = mysqli_fetch_array($result2)){
	$mobilenumber=$row2['mobile_number'];
	$vehicle_type=$row2['vehicle_type'];
	
}
} ?>
<!DOCTYPE html>
<html>
<head>
  <title>Make A booking</title>
  <link rel="stylesheet" type="text/css" href="css/reg.css">
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
  <meta name="author" content="Chamitha Nandun Jayalath">
  <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
</head>
<body>

<script language="javascript">
function price(selectedValue){
	        var vehicle_type = "<?php echo $vehicle_type; ?>"
			if(selectedValue=='normal') {
				switch (vehicle_type){
				case Car
				{
					alert("Approximated cost 8800 rs");
					break;
				}
				case Van
				{
					alert("Approximated cost 10500 rs");
					break;
				}
				case Smallbus
				{
					alert("Approximated cost 16000 rs");
					break;
				}
				case Normalbus
				{
					alert("Approximate cost 22500 rs");
					break;
				}
			}
		}
			else if(selectedValue=='Full') {
				switch (vehicle_type){
				case car
				{
					alert("Approximated cost 11000 rs");
					break;
				}
				case van
				{
					alert("Approximated cost 12500 rs");
					break;
				}
				case smallbus
				{
					alert("Approximated cost 23000 rs");
					break;
				}
				case normalbus
				{
					alert("Approximate cost 29000 rs");
					break;
				}
			}
        }
		    else {
				switch (vehicle_type){
				case car
				{
					alert("Approximated cost 17000 rs");
					break;
				}
				case van
				{
					alert("Approximated cost 19500 rs");
					break;
				}
				case smallbus
				{
					alert("Approximated cost 32000 rs");
					break;
				}
				case normalbus
				{
					alert("Approximate cost 50000 rs");
					break;
				}
			}
        }
}

</script>
  <div class="header">
  	<h2>Make an Appointment</h2>
  </div>
	
  <form method="post" action="appoinment.php">
  	<?php include('errors.php'); ?>
	
  	<div class="input-group">
  	  <label>First Name</label>
	  <input type="text" name="firstname" value="<?php echo $fname; ?>">  	  
  	</div>
	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lastname" value="<?php echo $lname; ?>">
  	</div>
	<div class="input-group">
  	  <label>Vehicle Number(s)</label>
	  <input type="text" name="vnumber" value="<?php echo $vnumber; ?>">  	  
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email"  name="email" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
  	  <label>Mobile No:</label>
  	  <input type="text" name="mobilenumber" value="<?php echo $mobilenumber; ?>">
  	</div>
	<div class="input-group">
	<label>Select A Service Type</label>
      <select name="service_type" onchange="price(this.value);">
	     
        <option value="Normal">Normal</option>
        <option value="Full" selected>Full</option>
        <option value="Premium">Premium</option>
      </select></div>
	  
	  <div class="input-group">
	  <label>Select 2 dates that you can bring your vehicle</label>
        <input type="date" id="arrive"  name="free_1" value="<?php echo date('Y-m-d'); ?>"><br /><br />
		
        <input type="date" id="arrive"  name="free_2" value="<?php echo date('Y-m-d'); ?>">
      </div> 
	  
  	<div class="input-group">
  	  <button type="submit" class="btn" name="appointment">Submit</button>
  	</div>
  	<p>
  		Already a member? <a class="member" href="profile.php">Go Back</a>
  	</p>
  </form>
</body>
</html>