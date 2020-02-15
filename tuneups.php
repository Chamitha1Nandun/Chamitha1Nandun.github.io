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
	<button class="tablinks" onClick="openText(event,'what')" >What is TuneUp</button>
	<button class="tablinks" onClick="openText(event,'def')">Definitions</button>
	</div>	
	<div class="tabcontent" id="what" style="display: block"><h2>The Importance of Tune-Ups</h2><hr>
	<p>Engine tuning is an adjustment, modification of the internal combustion engine, or modification to its control unit, otherwise known as its ECU (Engine Control Unit). It is adjusted to yield optimal performance, to increase an engine's power output, economy, or durability. These goals may be mutually exclusive, and an engine may be detuned with respect to output (work) in exchange for better economy or longer engine life due to lessened stress on engine components.
Engine tuning has a lengthy history, almost as long as that of the development of the automobile, originating with the development of early racing cars and the post-war hot-rod movement. Tuning can describe a wide variety of adjustments and modifications, from the routine adjustment of the carburetor and ignition system to significant engine overhauls. At the other end of the scale, performance tuning of an engine can involve revisiting some of the design decisions taken at quite an early stage in the development of the engine.
Setting the idle speed, fuel/air mixture, carburetor balance, spark plug and distributor point gaps, and ignition timing were regular maintenance items for all older engines and the final but essential steps in setting up a racing engine. On modern engines equipped with electronic ignition and fuel injection, some or all of these tasks are automated, although they still require periodic calibration.</p>
	
	<h3>Engine tune-up</h3>
	<p>
	A tune-up usually refers to the routine servicing of the engine to meet the manufacturer's specifications. Tune-ups are needed periodically according to the manufacturer's recommendations to ensure that an automobile runs as expected. Relative to older automobiles, modern automobiles now typically require only a small number of tune-ups over the course of an approximate 250,000-kilometre (160,000 mi) or a 10-year lifespan. This can be attributed to improvements in the production process, with imperfections and errors reduced by computer automation, and also significant improvement in the quality of consumables, such as the availability of fully synthetic engine oil.
Tune-ups may include the following:</p>
<ul><li>Adjustment of the carburetor idle speed and the air-fuel mixture</li>
<li>Inspection and possible replacement of ignition system components like spark plugs, contact breaker points, distributor cap and distributor rotor.</li>
<li>Replacement of the air filter and other filters</li>
<li>Inspection of emission controls</li>
<li>Valve train adjustment</li></ul>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In early days, mechanics finishing the tune-up of a performance car such as a Ferrari would take it around a track several times to burn out any built-up carbon; this is known as an Italian tuneup.</p>

	<div class="videoabt1" style="margin-left=90px">
	  <video width="500" height="auto" controls autoplay = "yes"><source src="videos/Engine.mp4" type="video/mp4">Your browser dosent support the video.</video>
	</div>
	<h3>Chip tuning</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Over time, due to the combustion process, the interior of an engine begins to gain carbon deposits that can, if not removed, cause blockages and damage within your engine. Oil is actually flushed around the engine and then filtered in order to remove these deposits or any other particles that make their way into the engine.
In other areas of the car such as within differentials and other joints, oil or other, heavier lubricant is used in a slightly different cleaning process. By forming a seal in any potential gap, oil ensures that no outside elements can enter into these areas of the vehicle and begin to cause damage.</p>
	<h3>Remapping</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remapping is the latest and simplest form of first stage Engine Tuning performed mostly on turbocharged vehicles running with modern ECUs. Most of the latest cars run on ECUs mainly supplied by Bosch/Delphi which has a firmware controlling various parameters for the fuel injection engines to run. The factory firmware is developed achieving a balance between Fuel consumption, power, torque, fuel emissions, reliability, service intervals etc. All the factory firmware versions would never be utilizing the total potential of the engines and would be fairly under tuned to achieve the above mentioned factors.
Now many manufacturers build one engine and use various firmware's aka maps to achieve different power levels to differentiate products ( cars ) like the VAG 2.0TDI available in 140PS and 170PS essentially having similar internals.
This gives users an opportunity to unlock more potential from the engine with few changes in the factory software.
There are many in the performance tuning industry who do this. This is done by reading the factory firmware from the car by using special tools from OBD port.<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Some of the main tool suppliers are CMD, Alientech, Magic Motorsports etc. The tools can be hooked on to the OBD port on any car to read the factory file. This file is saved on to the computer and various software are available to read this specific type of files.
These files are tweaked under various parameters like fuel injection, boost pressure, rail pressure, fuel pump pressure, ignition timing, raising the speed, rev and torque limiters, water temperature correction, smoke limiters, EGR deletion etc.
These parameters are tweaked to safe limits which is set from testing and experience by an expert so that the unlocked performance is generated under safe levels of reliability, fuel consumption and emissions.
These tweaks can be made in such a way that we can control the fueling and boost at required rpms thereby achieving the expected results. Accordingly the map maybe customized for a better low end for city use or a better high end for on track performance, or an overall map giving power all through out the band in a linear manner.
Once the tweaks are done, the edited file is wrote back on the ECU with the same tools used for reading. Once that is done the engine is cranked up and tested for performance, smoke levels and any other glitches. Any fine tuning is done according to the feedback, thereby producing a better-performing and efficient engine.
Once a remap is completed, the suggestion is to reduce oil change intervals. Oil is a main factor for reliability, If you treat your engine with fully synthetic fresh oil on a decent interval, the engine will run for miles and miles.
The exhaust gas temperatures would be higher now so don't do WOT runs for a long period of time and do regular idling before shutting down for the turbo to cool off.</p></div>

<div class="tabcontent" id="def">
<h2>Definitions</h2>

<h3>Overhaul</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An overhauled engine is an engine which has been removed, disassembled (torn down), cleaned, inspected, repaired as necessary and tested using factory service manual approved procedures. The procedure generally involves honing, new piston rings, bearings, gaskets, oil seals. When done by a competent engine builder the engine will perform as new. The engine may be overhauled to 'new limits' or 'service limits', or a combination of the two using used parts, new original equipment manufacturer (OEM) parts, or new aftermarket parts. The engine's previous operating history is maintained and it is returned with zero hours since major overhaul.
Many times aftermarket part manufacturers are the OEM part suppliers to major engine manufacturers (e.g. Ishino manufactures both the OEM and the aftermarket cylinder head and valve cover gaskets for the Nissan VG30E. Often the Nissan logo is imprinted on the OEM part while the OEM suppliers brand will be imprinted on the same exact part when offered aftermarket.)
A top overhaul only covers the replacement of components inside the cylinder head without removing the engine from the vehicle, such as valve and rocker arm replacement. It may or may not include a valve job. A major overhaul however covers the whole engine assembly, which requires the engine to be removed from the vehicle and transferred to an engine stand. An overhauled engine refers to a major overhaul. By comparison, a major overhaul costs more than a top overhaul.
'New limits' are the factory service manual's approved fits and tolerances that a new engine is manufactured to. This may be accomplished by using standard or approved undersized and oversized tolerances. 'Service limits' are the factory service manual's allowable wear fits and tolerances that a new limit part may deteriorate to and still be a usable component. This may also be accomplished using standard and approved undersized and oversized tolerances.</p>
<h3>Rebuild</h3>
<p>A 'rebuilt engine' is an engine that has been overhauled using new and used parts to new limits by the manufacturer or an entity approved by the manufacturer. The engine's previous operating history is eradicated and it comes with zero hours total time in service, even though the engine may have had used components installed that have many hours of previous operating history. Production rebuilders or marketing material sometimes use the word 'remanufactured' to describe these engines.</p>
<h3>Blueprinting</h3>
<p>To blueprint an engine means to build it to exact design specs, limits and tolerances created by its oem engineers or other users, such as high performance racing or heavy duty industrial equipment. It is similar to how many other kinds of mechanical machinery are researched, designed and built, such as a submarine or a hydraulic press.
Because few have the capability to actually blueprint, and because of the monetary incentive of claiming one has performed the work, many people have come to believe blueprinting only means that all the specifications are double-checked. Serious efforts at blueprinting result in better-than-factory tolerances, possibly with custom specifications appropriate for the application. Common goals include engine re-manufacturing to achieve the rated power for its manufacturer's design (because not all mass-production engines put out the rated power), and to rebuild the engine to make more power from a given design than otherwise intended (because custom engines can often be redesigned to different specifications). Blueprinted components allow for a more exact balancing of reciprocating parts and rotating assemblies so that less power is lost through excessive engine vibrations and other mechanical inefficiencies.
Ideally, blueprinting is performed on components removed from the production line before normal balancing and finishing. If finished components are blueprinted, there is the risk that the further removal of material will weaken the component. While it has nothing to do with blueprinting per se, lightening components is generally an advantage provided balance and adequate strength are both maintained, and more precise machining will in general strengthen a part by removing stress points, so in many cases performance tuners are able to work with finished components.
For example, an engine manufacturer may list a piston ring end-gap specification of 0.003 to 0.006 inches for general use in a consumer automobile application. For an endurance racing engine which runs at consistently high temperatures, a "blueprinted" specification of 0.0045" to 0.0050" may be desired. For a drag-racing engine which runs only in short bursts, a tighter tolerance of 0.0035 to 0.0040 inch is optimal. Thus "blueprint" can mean tighter or looser clearances, depending on the goal.</p>
<br /><br /></div>
	
	
</div><div class="social"><strong> Hotline :- 111-1111-1111/ 222-2222-2222 </strong>
	  <div class="linksc">
		  <a href="https://facebook.com" target="_blank"><img title="Facebook" width="50" height="50" alt="facebook" class="linksc1" src="img/fb.png"></a><a href="https://plus.google.com" target="_blank"><img title="GooglePlus" src="img/g-.png" width="50" height="50" alt="googleplus" class="linksc1"></a><a href="https://twitter.com" target="_blank"><img title="Twitter" src="img/twitter.png" width="50" height="50" alt="twitter" class="linksc1"></a><a href="https://linkedin.com" target="_blank"><img title="LinkedIn" src="img/linkedin.png" width="50" height="50" alt="linkedin" class="linksc1"></a></div>
	  </div></div></div></div>
</body>
</html>
