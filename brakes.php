<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="css/text.css" type="text/css"/>
<link href="css/acc.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Clean Street Auto Service Inc.</title>
<meta name="author" content="Chamitha Nandun Jayalath">
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<meta name="keywords" content="HTML,CSS,PHP,JavaScript">
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
	<button class="tablinks" onClick="openText(event,'what')" >What is Breaking System</button>
	<button class="tablinks" onClick="openText(event,'abs')">Anti-lock Breaking System </button></div>
		
<div class="tabcontent" id="what" style="display: block"><h2>What is an Auto Breaking System</h2><hr>
	<p>An automotive braking system is a group of mechanical, electronic and hydraulically activated components which use friction / heat to stop a moving vehicle.</p>
	<h3>How does a braking system work?</h3>
	<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When the brake pedal is depressed, the pressure on the brake pedal moves a piston in the master cylinder, forcing the brake fluid from the master cylinder through the brake lines and flexible hoses to the calipers and wheel cylinders. The force applied to the brake pedal produces a proportional force on each of the pistons.</p>
	<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The calipers and wheel cylinders contain pistons, which are connected to a disc brake pad or brake shoe. Each output piston pushes the attached friction material against the surface of the rotor or wall of the brake drum, thus slowing down the rotation of the wheel.</p>
	<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When pressure on the pedal is released, the pads and shoes return to their released positions. This action forces the brake fluid back through the flexible hose and tubing to the master cylinder. </p>
	<h3>What components are in the auto braking system?</h3><br>
	<div class="break">
	   <img src="img/brakes.jpg" width="700" height="auto" alt=""/><br /><br />	   
	</div>
	<h4>Disk Breaks</h4>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disc Brakes are comprised of a disc or rotor, a  caliper assembly, disc brake pads and the wheel bearings and hardware necessary to mount the components on the vehicle.  The caliper is connected to the master cylinder through tubes, hoses and valves that conduct brake fluid through the system.</p>
	<div class="break">
	   <img src="img/brake1.jpg" width="700" height="auto" alt=""/><br /><br />	   
	</div>
	<h4>Drum Breaks</h4>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drum Brakes are comprised of a drum & backing plate, a  hub or axle assembly, brake shoes , wheel cylinder, wheel bearings and hardware necessary to mount these components on the vehicle.  The wheel cylinder is connected to the master cylinder through tubes, hoses and valves that conduct brake fluid through the system.</p>
	<h4>Brake Fluid:</h4>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Brake fluid is a type of hydraulic fluid used in brake applications for automobiles and light trucks. It is used to transfer force under pressure from where it is created through hydraulic lines to the braking mechanism near the wheels.  Braking applications produce a lot of heat so brake fluid must have a high boiling point to remain effective and must not freeze under operating conditions.  Brake fluid is also designed to protect against corrosion of the system materials it contacts, however those corrosion inhibitors deplete over time.</p>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Excessive moisture is also an issue. MAP continues to seek additional information from brake fluid manufacturers and other technical experts to identify the point of vaporization that may seriously affect braking efficiency and safety.</p>
	<h4>Things to watch for</h4>
	<ul type=star><li>Scraping or grinding noise coming from the brakes</li>
	<li>Test of Brake fluid indicates a copper content of 200 ppm or greater indicating the need for a fluid replacement</li>
	<li>Brake pedal feels soft or spongy when the brakes pedal is depressed</li>
	<li>Vehicle pulls to one side when the brakes are applied</li>
	<li>Brake fluid level in master cylinder low</li>
	<li>Brake system Warning Lamp stays illuminated </li></ul>
	<h3>How long does it take to stop automobile</h3>
	<table border=double align=center width=auto cellpadding=8px>
	<tr align=center><th>MPH</th><th>Reaction Time(ft)</th><th>Breaking Distance(ft)</th><th>Total Distance(ft)</th></tr>
	<tr align=center><td>15</td><td>16</td><td>12</td><td>28</td></tr>
	<tr align=center><td>25</td><td>27</td><td>32</td><td>59</td></tr>
	<tr align=center><td>30</td><td>33</td><td>47</td><td>80</td></tr>
	<tr align=center><td>45</td><td>50</td><td>104</td><td>154</td></tr>
	<tr align=center><td>55</td><td>61</td><td>155</td><td>216</td></tr>
	<tr align=center><td>70</td><td>77</td><td>252</td><td>329</td></tr>
	</table><br>
	</div>
<div class="tabcontent" id="abs"><h2>Anti-lock Breaking System.</h2><hr>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An anti-lock braking system (ABS) is a safety anti-skid braking system used on aircraft and on land vehicles , such as cars, motorcycles, trucks and buses. ABS operates by preventing the wheels from locking up during braking, thereby maintaining tractive contact with the road surface.<br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ABS is an automated system that uses the principles of threshold braking and cadence braking which were once practised by skilful drivers with earlier non-ABS braking systems. ABS operates at a very much faster rate and more effectively than most drivers could manage.<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Although ABS generally offers improved vehicle control and decreases stopping distances on dry and slippery surfaces, on loose gravel or snow-covered surfaces, ABS may significantly increase braking distance, while still improving steering control.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Since ABS was introduced in production vehicles, such systems have become increasingly sophisticated and effective. Modern versions may only prevent wheel lock under braking, but may also alter the front-to-rear brake bias. This latter function, depending on its specific capabilities and implementation, is known variously as electronic brakeforce distribution, traction control system, emergency brake assist, or electronic stability control (ESC). </p>
<h4>Early systems</h4>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The concept for ABS predates the modern systems that were introduced in the 1950s. In 1908, for example, J.E. Francis introduced his 'Slip Prevention Regulator for Rail Vehicles'</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;In 1920 the French automobile and aircraft pioneer Gabriel Voisin experimented with systems that modulated the hydraulic braking pressure on his aircraft brakes to reduce the risk of tire slippage. These systems used a flywheel and valve attached to a hydraulic line that feeds the brake cylinders. The flywheel is attached to a drum that runs at the same speed as the wheel. In normal braking, the drum and flywheel should spin at the same speed. However, when a wheel slows down, then the drum would do the same, leaving the flywheel spinning at a faster rate. This causes the valve to open, allowing a small amount of brake fluid to bypass the master cylinder into a local reservoir, lowering the pressure on the cylinder and releasing the brakes. The use of the drum and flywheel meant the valve only opened when the wheel was turning. In testing, a 30% improvement in braking performance was noted, because the pilots immediately applied full brakes instead of slowly increasing pressure in order to find the skid point. An additional benefit was the elimination of burned or burst tires.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The first patented system was created by German engineer Karl Wessel in 1928. Wessel, however, never developed a working product and neither did Robert Bosch who produced a similar patent eight years later.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;By the early 1950s, the Dunlop Maxaret anti-skid system was in widespread aviation use in the UK, with aircraft such as the Avro Vulcan and Handley Page Victor, Vickers Viscount, Vickers Valiant, English Electric Lightning, de Havilland Comet 2c, de Havilland Sea Vixen, and later aircraft, such as the Vickers VC10, Hawker Siddeley Trident, Hawker Siddeley 125, Hawker Siddeley HS 748 and derived British Aerospace ATP, and BAC One-Eleven being fitted with Maxaret as standard. Maxaret, while reducing braking distances by up to 30% in icy or wet conditions, also increased tire life, and had the additional advantage of allowing take-offs and landings in conditions that would preclude flying at all in non-Maxaret equipped aircraft.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;A fully mechanical system saw limited automobile use in the 1960s in the Ferguson P99 racing car, the Jensen FF, and the experimental all wheel drive Ford Zodiac, but saw no further use; the system proved expensive and unreliable. </p>
<h4>Modern systems</h4>
<p>&nbsp;&nbsp;&nbsp;&nbsp; In 1978, Mercedes-Benz W116 became the first production car to use an electronic four-wheel multi-channel anti-lock braking system (ABS) from Bosch as an option from 1978 on. 1978: Mercedes-Benz W116 became the first production car to use an electronic four-wheel multi-channel anti-lock braking system (ABS) from Bosch as an option from 1978 on. </p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; In 1982, Honda introduced electronically controlled multi-channel ALB (Anti Locking Brakes) as an option for the second generation of Prelude, launched worldwide in 1982. Additional info: The general agent for Honda in Norway required all Preludes for the Norwegian market to have the ALB-system as a standard feature, making Honda Prelude to be the first car delivered in Europe with ABS as a standard feature. The Norwegian general agent also included sun roof and other options to be standard equipment in Norway, adding more luxury to the Honda brand. However, the Norwegian tax system made the well-equipped car very expensive, and the sales suffered from high cost. From 1984 the ALB-system, as well as the other optional features from Honda, was no longer a standard feature in Norway. </p>
<p>&nbsp;&nbsp;&nbsp;&nbsp; In 1988, BMW introduced the first motorcycle with an electronic-hydraulic ABS: the BMW K100. Yamaha Introduced the FJ1200 model with optional ABS in 1991. Honda followed suit in 1992 with the launch of its first motorcycle ABS on the ST1100 Pan European. In 2007, Suzuki launched its GSF1200SA (Bandit) with an ABS. In 2005, Harley-Davidson began offering an ABS option on police bikes</p>

<h3>Operation</h3><hr>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The anti-lock brake controller is also known as the CAB (Controller Anti-lock Brake).</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Typically ABS includes a central electronic control unit (ECU), four wheel speed sensors, and at least two hydraulic valves within the brake hydraulics. The ECU constantly monitors the rotational speed of each wheel; if it detects the wheel rotating significantly slower than the speed of the vehicle, a condition indicative of impending wheel lock, it actuates the valves to reduce hydraulic pressure to the brake at the affected wheel, thus reducing the braking force on that wheel; the wheel then turns faster. Conversely, if the ECU detects a wheel turning significantly faster than the others, brake hydraulic pressure to the wheel is increased so the braking force is reapplied, slowing down the wheel. This process is repeated continuously and can be detected by the driver via brake pedal pulsation. Some anti-lock systems can apply or release braking pressure 15 times per second. Because of this, the wheels of cars equipped with ABS are practically impossible to lock even during panic braking in extreme conditions. <p>	
<p>&nbsp;&nbsp;&nbsp;&nbsp;The ECU is programmed to disregard differences in wheel rotative speed below a critical threshold, because when the car is turning, the two wheels towards the center of the curve turn slower than the outer two. For this same reason, a differential is used in virtually all roadgoing vehicles. </p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;If a fault develops in any part of the ABS, a warning light will usually be illuminated on the vehicle instrument panel, and the ABS will be disabled until the fault is rectified. </p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Modern ABS applies individual brake pressure to all four wheels through a control system of hub-mounted sensors and a dedicated micro-controller. ABS is offered or comes standard on most road vehicles produced today and is the foundation for electronic stability control systems, which are rapidly increasing in popularity due to the vast reduction in price of vehicle electronics over the years.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Modern electronic stability control systems are an evolution of the ABS concept. Here, a minimum of two additional sensors are added to help the system work: these are a steering wheel angle sensor, and a gyroscopic sensor. The theory of operation is simple: when the gyroscopic sensor detects that the direction taken by the car does not coincide with what the steering wheel sensor reports, the ESC software will brake the necessary individual wheel(s) (up to three with the most sophisticated systems), so that the vehicle goes the way the driver intends. The steering wheel sensor also helps in the operation of Cornering Brake Control (CBC), since this will tell the ABS that wheels on the inside of the curve should brake more than wheels on the outside, and by how much. </p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ABS equipment may also be used to implement a traction control system (TCS) on acceleration of the vehicle. If, when accelerating, the tire loses traction, the ABS controller can detect the situation and take suitable action so that traction is regained. More sophisticated versions of this can also control throttle levels and brakes simultaneously. </p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The speed sensors of ABS are sometimes used in indirect tire pressure monitoring system (TPMS), which can detect under-inflation of tire(s) by difference in rotational speed of wheels. </p>
<div class="videoabt1">
	  <video width="500" height="auto" controls><source src="videos/abs.mp4" type="video/mp4">Your browser dosent support the video.</video>
</div><br></div>
</div><div class="social"><strong> Hotline :- 111-1111-1111/ 222-2222-2222 </strong>
	  <div class="linksc">
		  <a href="https://facebook.com" target="_blank"><img title="Facebook" width="50" height="50" alt="facebook" class="linksc1" src="img/fb.png"></a><a href="https://plus.google.com" target="_blank"><img title="GooglePlus" src="img/g-.png" width="50" height="50" alt="googleplus" class="linksc1"></a><a href="https://twitter.com" target="_blank"><img title="Twitter" src="img/twitter.png" width="50" height="50" alt="twitter" class="linksc1"></a><a href="https://linkedin.com" target="_blank"><img title="LinkedIn" src="img/linkedin.png" width="50" height="50" alt="linkedin" class="linksc1"></a></div>
	  </div></div></div></div>
</body>
</html>
