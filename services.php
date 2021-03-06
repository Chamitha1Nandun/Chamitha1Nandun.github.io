<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="css/text.css" type="text/css" />
<link href="css/acc.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<meta name="keywords" content="HTML,CSS,PHP,JavaScript">
<meta name="author" content="Chamitha Nandun Jayalath">
<title>Clean Street Auto Service Inc.</title>
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
             
                <button type="submit" value="login" name="log"><a href="login.php">Login<a> <i class="fa fa-sign-in" aria-hidden="true"></i></button>                   
                <button type="submit" value="signup" name="sig"><a href="accounts.php">Signup</a> <i class="fa fa-handshake-o" aria-hidden="true"></i></button>


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
<div><script>
  (function() {
    var cx = '002796137428776692233:ll9mhxjuugy';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search></div>
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
<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="250" data-height="285" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
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

<div class="white">
  <div class="log_box1" id="table">
  <table width="734" border="0" cellpadding="5px">
    <tbody>
      <tr >
        <th scope="col"><h2>Lubrication Service</h2><a href="lubrication.php"><img src="img/lubricating1.jpg" width="auto" height="200" alt=""/></a></th>
        <th scope="col"><h2>Auto Detailing</h2><a href="detailing.php"><img src="img/detailing1.jpg" width="320px" height="200" alt=""/></a></th>
        </tr>
      <tr class="service_tableimg">
        <th scope="row"><div class="tablepara2"><p align="justify" data_temp_dwid="1">If you own any kind of vehicle, whether it is a bicycle or a HGV you will undoubtedly be aware of the need for lubrication </p></div></th>
        <td><div class="tablepara">
          <p align="justify" ><strong>Vehicle detailing, or auto detailing is a term that is used allot nowadays and it can have different meanings to different People. </strong></p>
          </div></td>
        </tr>
      
      <tr >
        <th scope="col"><h2>Maintenance Service</h2><a href="maintaince.php"><img src="img/car-maintenance.jpg" width="auto" height="200" alt=""/></a></th>
        <th scope="col"><h2>System Evaluation</h2><a href="systemeval.php"><img src="img/evaluation1.jpg" width="320px" height="200" alt=""/></a></th>
        </tr>
      <tr class="service_tableimg">
        <th scope="row"><div class="tablepara2"><p align="justify" data_temp_dwid="1">Regular preventive maintenance is probably the single thing you can do as a car owner to keep your ride happy and save money on repairs in the future.</p></div></th>
        <td><div class="tablepara">
          <p align="justify" ><strong>Purchasing a used vehicle is a proven way to save money, but you’ll need to do a little extra work to make sure your investment is a wise one.</strong></p>
          </div></td>
        </tr>
      
     <tr >
        <th scope="col"><h2>Tune-Ups</h2><a href="tuneups.php"><img src="img/tuneup1.jpg" width="auto" height="200" alt=""/></a></th>
        <th scope="col"><h2>Coolant System Service</h2><a href="coolent.php"><img src="img/coolant1.jpg" width="320px" height="200" alt=""/></a></th>
        </tr>
      <tr class="service_tableimg">
        <th scope="row"><div class="tablepara2"><p align="justify" data_temp_dwid="1">Engine tuning is an adjustment, modification of the internal combustion engine, or modification to its control unit, otherwise known as its ECU</p></div></th>
        <td><div class="tablepara">
          <p align="justify" ><strong>A typical 4 cylinder vehicle cruising along the highway at around 50 miles per hour,  will produce 4000 controlled explosions per minute...</strong></p>
          </div></td>
        </tr>
		
      <tr >
        <th scope="col"><h2>Electric System Service</h2><a href="electric.php"><img src="img/electric1.jpg" width="auto" height="200" alt=""/></a></th>
        <th scope="col"><h2>Wheels & Tyree Checkups</h2><a href="wheels.php"><img src="img/tyre1.jpg" width="320px" height="200" alt=""/></a></th>
        </tr>
      <tr class="service_tableimg">
        <th scope="row"><div class="tablepara2"><p align="justify" data_temp_dwid="1">Your car’s electrical system consists of the battery, starter and alternator. The battery provides juice to the starter. </p></div></th>
        <td><div class="tablepara">
          <p align="justify" ><strong>Wheel alignment and tyre balancing are one of the most common auto repair services offered by technicians.</strong></p>
          </div></td>
        </tr>
      
     <tr >
        <th scope="col"><h2>Break System Service</h2><a href="brakes.php"><img src="img/brake1.jpg" width="300" height="200" alt=""/></a></th>
        <th scope="col"><h2>Exhaust System Service</h2><a href="exhaust.php"><img src="img/exhaust1.jpg" width="320px" height="200" alt=""/></a></th>
        </tr>
      <tr class="service_tableimg">
        <th scope="row"><div class="tablepara2"><p align="justify" data_temp_dwid="1">An automotive braking system is a group of mechanical, electronic and hydraulically activated components</p></div></th>
        <td><div class="tablepara">
          <p align="justify" ><strong>The exhaust system collects the exhaust gases from the cylinders, removes harmful substances, reduces the level of noise... </strong></p>
          </div></td>
        </tr>
      
      <tr >
        <th scope="col"><h2>Suspension & Steering</h2><a href="suspension.php"><img src="img/suspension1.jpg" width="auto" height="200" alt=""/></a></th>
        <th scope="col"><h2>Security System</h2><a href="security.php"><img src="img/security1.png" width="320px" height="200" alt=""/></a></th>
        </tr>
      <tr class="service_tableimg">
        <th scope="row"><div class="tablepara2"><p align="justify" data_temp_dwid="1">steering and suspension systems of a car are not only important for safety reasons but also to enhance...</p></div></th>
        <td><div class="tablepara">
          <p align="justify" ><strong>A car alarm is an electronic device installed in a vehicle in an attempt to discourage theft of the vehicle... </strong></p>
          </div></td>
        </tr>
      
      </tbody>
  </table>
  </div>
</div>


<div class="social"><strong> Hotline :- 111-1111-1111/ 222-2222-2222 </strong>
	  <div class="linksc">
		  <a href="https://facebook.com" target="_blank"><img title="Facebook" width="50" height="50" alt="facebook" class="linksc1" src="img/fb.png"></a><a href="https://plus.google.com" target="_blank"><img title="GooglePlus" src="img/g-.png" width="50" height="50" alt="googleplus" class="linksc1"></a><a href="https://twitter.com" target="_blank"><img title="Twitter" src="img/twitter.png" width="50" height="50" alt="twitter" class="linksc1"></a><a href="https://linkedin.com" target="_blank"><img title="LinkedIn" src="img/linkedin.png" width="50" height="50" alt="linkedin" class="linksc1"></a></div>
	  </div>
</div>
</div></div>
</body>
</html>
