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
	<button class="tablinks" onClick="openText(event,'why')" >Why Vehicle Need Cooling</button>
	<button class="tablinks" onClick="openText(event,'comp')">Components Of Cooling System </button></div>
	
	<div class="tabcontent" id="why" style="display: block"><h2>What is a Cooling System?</h2><hr>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A typical 4 cylinder vehicle cruising along the highway at around 50 miles per hour,  will produce 4000 controlled explosions per minute inside the engine as the spark plugs ignite the fuel in each cylinder to propel the vehicle down the road.  Obviously, these explosions produce an enormous amount of heat and, if not controlled, will destroy an engine in a matter of minutes.  Controlling these high temperatures is the job of the cooling system.
The modern cooling system has not changed much from the cooling systems in the model T back in the '20s.  Oh sure, it has become infinitely more reliable and efficient at doing it's job, but the basic cooling system still consists of liquid coolant being circulated through the engine, then out to the radiator to be cooled by the air stream coming through the front grill of the vehicle.
Today's cooling system must maintain the engine at a constant temperature whether the outside air temperature is 110 degrees Fahrenheit  or 10 below zero.  If the engine temperature is too low, fuel economy will suffer and emissions will rise.  If the temperature is allowed to get too hot for too long, the engine will self destruct.</p>
	
	<h2>How Does a Cooling System Work?</h2><hr>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Actually, there are two types of cooling systems found on motor vehicles:  Liquid cooled and Air cooled.  Air cooled engines are found on a few older cars, like the original Volkswagen Beetle, the Chevrolet Corvair and a few others.  Many modern motorcycles still use air cooling, but for the most part, automobiles and trucks use liquid cooled systems and that is what this article will concentrate on.
The cooling system is made up of the passages inside the engine block and heads, a  water pump to circulate the coolant, a thermostat to control the temperature of the coolant, a radiator to cool the coolant, a radiator cap to control the pressure in the system, and some plumbing consisting of interconnecting hoses to transfer the coolant from the engine to radiator and also to the car's heater system where hot coolant is used to warm up the vehicle's interior on a cold day.
A cooling system works by sending a liquid coolant through passages in the engine block and heads.  As the coolant flows through these passages, it picks up heat from the engine.  The heated fluid then makes its way through a rubber hose to the radiator in the front of the car.  As it flows through the thin tubes in the radiator, the hot liquid is cooled by the air stream entering the engine compartment from the grill in front of the car.  Once the fluid is cooled, it returns to the engine to absorb more heat.  The water pump has the job of keeping the fluid moving through this system of plumbing and hidden passages.</p>
	<img src="img/cooling.gif" width="600" height="auto" alt=""/>
	<p>A thermostat is placed between the engine and the radiator to make sure that the coolant stays above a certain preset temperature.  If the coolant temperature falls below this temperature, the thermostat blocks the coolant flow to the radiator, forcing the fluid instead through a bypass directly back to the engine.  The coolant will continue to circulate like this until it reaches the design temperature, at which point, the thermostat will open a valve and allow the coolant back through the radiator. 
In order to prevent the coolant from boiling, the cooling system is designed to be pressurized.  Under pressure, the boiling point of the coolant is raised considerably.  However, too much pressure will cause hoses and other parts to burst, so a system is needed to relieve pressure if it exceeds a certain point.  The job of maintaining the pressure in the cooling system belongs to the radiator cap.  The cap is designed to release pressure if it reaches the specified upper limit that the system was designed to handle.  Prior to the '70s, the cap would release this extra pressure to the pavement.  Since then, a system was added to capture any released fluid and store it temporarily in a reserve tank.  This fluid would then return to the cooling system after the engine cooled down.  This is what is called a closed cooling system.</p>	
	
	<h2>Circulation</h2><hr>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The coolant follows a path that takes it from the water pump, through passages inside the engine block where it collects the heat produced by the cylinders.  It then flows up to the cylinder head (or heads in a V type engine) where it collects more heat from the combustion chambers.  It then flows out past the thermostat (if the thermostat is opened to allow the fluid to pass), through the upper radiator hose and into the radiator.  The coolant flows through the thin flattened tubes that make up the core of the radiator and is cooled by the air flow through the radiator.  From there, it flows out of the radiator, through the lower radiator hose and back to the water pump.  By this time, the coolant is cooled off and ready to collect more heat from the engine.
The capacity of the system is engineered for the type and size of the engine and the work load that it is expected to undergo.  Obviously, the cooling system for a larger, more powerful V8 engine in a heavy vehicle will need considerably more capacity then a compact car with a small 4 cylinder engine.  On a large vehicle, the radiator is larger with many more tubes for the coolant to flow through.  The radiator is also wider and taller to capture more air flow entering the vehicle from the grill in front.</p>
	
	<h2>Antifreeze</h2><hr>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The coolant that courses through the engine and associated plumbing must be able to withstand temperatures well below zero without freezing.  It must also be able to handle engine temperatures in excess of 250 degrees without boiling.  A tall order for any fluid, but that is not all.  The fluid must also contain rust inhibiters and a lubricant.
The coolant in today's vehicles is a mixture of ethylene glycol (antifreeze) and water.  The recommended ratio is fifty-fifty.  In other words, one part antifreeze and one part water.  This is the minimum recommended for use in automobile engines.  Less antifreeze and the boiling point would be too low.  In certain climates where the temperatures can go well below zero, it is permissible to have as much as 75% antifreeze and 25% water, but no more than that.  Pure antifreeze will not work properly and can cause a boil over.
Antifreeze is poisonous and should be kept away from people and animals, especially dogs and cats, who are attracted by the sweet taste.  Ethylene Glycol, if ingested, will form calcium oxalate crystals in the kidneys which can cause acute renal failure and death.</p>
	<br><br></div>
	
	<div class="tabcontent" id="comp">
	<h2>The Components of a Cooling System</h2><hr>
<ul><li>The Radiator</li>
<li>Radiator Cooling Fans</li>
<li>Pressure Cap & Reserve Tank</li>
<li>Thermostat </li>
<li>Water pump </li>
<li>Bypass System</li>
<li>Freeze Plugs</li>
<li>Head Gaskets & Intake Manifold Gaskets</li>
<li>Heater Core</li>
<li>Hoses</li></ul>

<h3>The Radiator</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The radiator core is usually made of flattened aluminum tubes with aluminum strips that zigzag between the tubes.  These fins transfer the heat in the tubes into the air stream to be carried away from the vehicle.  On each end of the radiator core is a tank, usually made of plastic that covers the ends of the radiator,  
On most modern radiators, the tubes run horizontally with the plastic tank on either side.  On other cars, the tubes run vertically with the tank on the top and bottom.  On older vehicles, the core was made of copper and the tanks were brass.  The new aluminum-plastic system is much more efficient, not to mention cheaper to produce.  On radiators with plastic end caps, there are gaskets between the aluminum core and the plastic tanks to seal the system and keep the fluid from leaking out.  On older copper and brass radiators, the tanks were brazed (a form of welding) in order to seal the radiator.
</p><p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The tanks, whether plastic or brass, each have a large hose connection, one mounted towards the top of the radiator  to let the coolant in, the other mounted at the bottom of the radiator on the other tank to let the coolant back out.  On the top of the radiator is an additional opening that is capped off by the radiator cap.  More on this later.
Another component in the radiator for vehicles with an automatic transmission is a separate tank mounted inside one of the tanks.  Fittings connect this inner tank through steel tubes to the automatic transmission.  Transmission fluid is piped through this tank inside a tank to be cooled by the coolant flowing past it before returning the the transmission.</p>

<h3>Radiator Cooling Fans</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The electric fans are controlled by the vehicle's computer.  A temperature sensor monitors engine temperature and sends this information to the computer.  The computer determines if the fan should be turned on and actuates the fan relay if additional air flow through the radiator is necessary.
If the car has air conditioning, there is an additional radiator mounted in front of the normal radiator.  This "radiator" is called the air conditioner condenser, which also needs to be cooled by the air flow entering the engine compartment.  You can find out more about the air conditioning condenser by going to our article onAutomotive Air Conditioning.  As long as the air conditioning is turned on, the system will keep the fan running, even if the engine is not running hot.  This is because if there is no air flow through the air conditioning condenser, the air conditioner will not be able to cool the air entering the interior.</p>

<h3>Pressure Cap & Reserve Tank</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As coolant gets hot, it expands.  Since the cooling system is sealed, this expansion causes an increase in pressure in the cooling system, which is normal and part of the design.  When coolant is under pressure, the temperature where the liquid begins to boil is considerably higher.  This pressure, coupled with the higher boiling point of ethylene glycol, allows the coolant to safely reach temperatures in excess of 250 degrees.
The radiator pressure cap is a simple device that will maintain pressure in the cooling system up to a certain point.  If the pressure builds up higher than the set pressure point, there is a spring loaded valve, calibrated to the correct Pounds per Square Inch (psi), to release the pressure</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When the cooling system pressure reaches the point where the cap needs to release this excess pressure, a small amount of coolant is bled off.  It could happen during stop and go traffic on an extremely hot day, or if the cooling system is malfunctioning.  If it does release pressure under these conditions, there is a system in place to capture the released coolant and store it in a plastic tank that is usually not pressurized.  Since there is now less coolant in the system, as the engine cools down a partial vacuum is formed.  The radiator cap on these closed systems has a secondary valve to allow the vacuum in the cooling system to draw the coolant back into the radiator from the reserve tank (like pulling the plunger back on a hypodermic needle)  There are usually markings on the side of the plastic tank marked Full-Cold, and Full Hot.  When the engine is at normal operating temperature, the coolant in the translucent reserve tank should be up to the Full-Hot line.  After the engine has been sitting for several hours and is cold to the touch, the coolant should be at the Full-Cold line.</p>
<h3>Grease Lubrication</h3>
<p>Greases are semi-solid lubricants; they are used instead of oil when the lubricant has to stay in one place or stick to a part. Greases will not leak out as easily as oils. Greases are also used when the component cannot be lubricated often or are not accessible during operation. Greases are thick, or viscous, and therefore, unlike oil, cannot be pumped continuously through equipment to remove heat. Greases are used for lubrication to prevent friction and wear, to protect against corrosion, to provide a seal from dirt and water, to provide lubrication that does not leak or drip off the surface to which it is applied, and to lubricate for a long time without breaking down.</p>	
	<br /><br /></div>
	
<div class="tabcontent" id="Packages"> 

<h2>FULL LUBRICATION SERVICE PACKAGES</h2><hr />
<h3>Station one</h3>
<h5>Lubrication</h5>
<p>Engine oil, transmission, brake, clutch & power steering fluid change / top up with world renowned lubricants.</p>
<h3>Station two</h3>
<h5>Under carriage decreasing</h5>
<p>Application of pressure washes with advanced pressure sensors.<p>
<h3>Station three</h3>
<h5>Steam Cleaning-Interior, Exterior & Engine Bay.</h5>
<ol><li>Steam cleaning is the process of using steam vapor to clean a car's interior disinfect air-conditioning and degrease engine. Steam cleaning is completely safe and can be used on all car surfaces, giving a perfect finish without any spots or streaking. When it comes to the interior, not only do they clean thoroughly, they also sanitize and deodorize too!</li>
<li>Door strikers and body wash.</li>
<li>Safely removes all dirt and grime without removing wax protection.</li></ol>
<h3>Station four</h3>
<h5>Glass cleaning</h5>
<p>Non-streaking formula, ammonia free and safe for tinted windows. Excellent in high humidity conditions.</p>
<h5>Windscreen & Head Light Treatment</h5>
<p>This treatment dramatically improves wet weather driving visibility and safety. Once applied watch the raindrops fly off your windshield while driving.</p>
<h5>Tyre & dash dressing</h5>
<p>Maintains / revives true colour, natural gloss appearance to dash board & restores ‘new look’ to tyres. Vacuum floor / seats & trunk ensure entire interior is squeaky clean even to the most discerning eye.</p>
<h5>Vacuum floor / Seats & Trunk</h5>
<p>Ensure entire interior is spick, span and squeaky clean even to the most discerning eye.</p>
<h5>Exterior waxing</h5>
<p>Hard wax – clear coat, produces a high-gloss, deep-lustre, safe and durable finish on both new and old car paints.</p>
<h3>Final station</h3>
<h5>21 point visual safety check</h5> 
<p>A detailed feedback form is issued after every full lubrication service.</p><br /><br /><br />
<p>This service is recommended for every 3000km. Engine oil and filter to be changed
based on lubricant type used.</p>
</div>
	
</div><div class="social"><strong> Hotline :- 111-1111-1111/ 222-2222-2222 </strong>
	  <div class="linksc">
		  <a href="https://facebook.com" target="_blank"><img title="Facebook" width="50" height="50" alt="facebook" class="linksc1" src="img/fb.png"></a><a href="https://plus.google.com" target="_blank"><img title="GooglePlus" src="img/g-.png" width="50" height="50" alt="googleplus" class="linksc1"></a><a href="https://twitter.com" target="_blank"><img title="Twitter" src="img/twitter.png" width="50" height="50" alt="twitter" class="linksc1"></a><a href="https://linkedin.com" target="_blank"><img title="LinkedIn" src="img/linkedin.png" width="50" height="50" alt="linkedin" class="linksc1"></a></div>
	  </div></div></div></div>
</body>
</html>
