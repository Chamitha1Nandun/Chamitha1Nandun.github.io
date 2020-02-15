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
	<script language="javascript" type="text/javascript"><!--
function openText(evt,text){
var i ,tabcontent,tablinks;
tabcontent= document.getElementsByClassName("tabcontent");
for (i=0;i<tabcontent.length;i++){
	tabcontent[i].style.display="none";
}
tablinks=document.getElementsByClassName("tablinks");
for (i=0;i<tablinks.length;i++){
	tablinks[i].className = tablinks[i].className.replace("active","");
}
	document.getElementById(text).style.display="block";
	evt.currentTarget.className+="active";}
		//--></script>
  <div class="tab">
	<button class="tablinks" onClick="openText(event,'what')" >Car Alarm</button>
	<button class="tablinks" onClick="openText(event,'how')">Triggers </button></div>
		
<div class="tabcontent" id="what" style="display: block"><h2>Car Alarm System</h2><hr>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A car alarm is an electronic device installed in a vehicle in an attempt to discourage theft of the vehicle itself, its contents, or both. Car alarms work by emitting high-volume sound (often a vehicle-mounted siren, klaxon, pre-recorded verbal warning, the vehicle's own horn, or a combination of these) when the conditions necessary for triggering it are met. Such alarms may also cause the vehicle's headlights to flash, may notify the car's owner of the incident via a paging system, and may interrupt one or more electrical circuits necessary for the car to start. Although inexpensive to acquire and install, the effectiveness of such devices in deterring vehicle burglary or theft when their only effect is to emit sound appears to be negligible.</p>
<div class="break">
	   <img src="img/anti theft.jpg" width="700" height="auto" alt=""/><br /><br />	   
	</div>
<h3>Features</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car alarms should not be confused with immobilizers; although the purpose of both may be to deter car theft, they operate in a dissimilar fashion. An immobilizer generally will not offer any audible or visual theft deterrence, nor require any more input from the driver than from the driver of a non-immobilizer car.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Car alarms can be divided into two categories:</p>
<ul><li>OEM (built into the vehicle at the factory)</li>
<li>Aftermarket (installed at any time after the car has been built, such as by the new car dealer, an auto accessories store, or the vehicle's owner)</li></ul>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alarms often come with a mix of features. Remote car alarms typically consist of an additional radio receiver that allows the owner to wirelessly control the alarm from a key fob. Remote car alarms typically come equipped with an array of sensors along with immobilizers and motion detectors.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keyless remote car alarms are typically based on strong cryptography authentication methods:</p>
<ul><li>Radio receiver</li>
<li>Immobilizer</li>
<li>Motion detector</li>
<li>Wireless USB</li></ul>
<div class="break">
	   <img src="img/anti theft2.jpg" width="700" height="auto" alt=""/><br /><br />	   
	</div>
</div>
<div class="tabcontent" id="how"><h2>Triggering Automobile Alarms</h2><hr>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The individual triggers for a car alarm vary widely, depending on the make and model of the vehicle, and the brand and model of the alarm itself (for aftermarket alarms). Since aftermarket alarms are designed to be universal (i.e., compatible with all 12-volt negative ground electrical systems as opposed to one carmaker's vehicles), these commonly have trigger inputs that the installer/vehicle owner chooses not to connect, which additionally determines what will set the alarm off.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Generally, OEM alarms monitor the doors and trunk/hatch for unauthorized entry. On some vehicles this is done through pin switches, mercury switches, or microswitches integrated into the latch. On others, the doorlock mechanisms have switches built into them. Some OEM alarms additionally will trigger if the hood is opened, or if the ignition is turned on. A few systems have a shock sensor which will trigger upon a significant impact to the vehicle's body, such as window glass being broken. Motion sensors monitoring the vehicle's interior are installed in some higher end models.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The simplest aftermarket alarms are one-piece units with a siren and control module. The most common type of sensor is a shock sensor and two wires (12-volt constant power and ground) which are connected to the car's battery. This type of alarm is triggered by vibration transferred to the shock sensor, or by voltage changes on the input (the alarm assumes that a sudden change in voltage is due to a door or trunk being opened, or the ignition being turned on); however it is very prone to false triggers on late-model vehicles with many electronic control modules, which can draw current with the ignition off.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More sophisticated aftermarket alarms are wired into the vehicle's electronics individually. Typically, these alarms have inputs for power and ground, as well as for positive- and negative-switched door open circuits, negative trunk and/or hood circuits, and ignition-switched circuits to detect the ignition being turned on; aftermarket alarms also usually have a shock sensor which may be built into the control module or external to it.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In addition, some aftermarket alarms have provisions for optional sensors (these must be purchased separately). The tilt sensor can sense the vehicle being tilted (alerting to towing). Tilt sensors come in digital or mercury. A digital sensor is more accurate since it sets itself, allowing for the vehicle to be placed on a hill and not cause false triggers. A sound discriminator or glass breakage sensor senses only the sound of glass breaking. Typically, a sound discriminator sensor can be eliminated using a shock sensor. Proximity, infrared, or motion sensors sense motion inside or outside the vehicle; these are typically installed on convertible or T-top vehicles. These sensors are usually adjustable in order to avoid false alarms. For example, a shock sensor will sometimes vibrate due to a loud noise in the area, or an accidental bump to the car from a passerby. Proximity sensors can cause false alarms in parking lots when a passerby is entering or exiting a vehicle parked next to the armed car. These often cause the alarm to falsely sense an attempted break-in.<p>
</div>
	
</div><div class="social"><strong> Hotline :- 111-1111-1111/ 222-2222-2222 </strong>
	  <div class="linksc">
		  <a href="https://facebook.com" target="_blank"><img title="Facebook" width="50" height="50" alt="facebook" class="linksc1" src="img/fb.png"></a><a href="https://plus.google.com" target="_blank"><img title="GooglePlus" src="img/g-.png" width="50" height="50" alt="googleplus" class="linksc1"></a><a href="https://twitter.com" target="_blank"><img title="Twitter" src="img/twitter.png" width="50" height="50" alt="twitter" class="linksc1"></a><a href="https://linkedin.com" target="_blank"><img title="LinkedIn" src="img/linkedin.png" width="50" height="50" alt="linkedin" class="linksc1"></a></div>
	  </div></div></div></div>
</body>
</html>
