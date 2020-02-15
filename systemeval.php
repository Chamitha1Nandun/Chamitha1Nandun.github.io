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
	<button class="tablinks" onClick="openText(event,'what')" >Evaluating a Used Vehicle </button>
	<button class="tablinks" onClick="openText(event,'method')">Method of Evaluation</button></div>
		
	<div class="tabcontent" id="what" style="display: block"><h2>The Importance of Evacuating A used vehicle</h2><hr>
	<h4>Purchasing a used vehicle is a proven way to save money, but you’ll need to do a little extra work to make sure your investment is a wise one.</h4> 
 <p>Used vehicles will always be less expensive than new cars because of depreciation - up to 40% less expensive for a car that’s just two years old. But even a used car can be a major financial decision, and buying a used car is not without risk. For example, evidence of a serious accident or a lack of maintenance is not always apparent from a visual inspection or test drive.  
 Before you begin evaluating a particular vehicle, consider researching a variety of cars in an unbiased publication such as Consumer Reports. Some cars are known to need excessive repair as they age, and simply avoiding the least reliable cars is a great way to minimize the expense associated with car repairs. 
 There are four steps you should take when evaluating any used vehicle.</p>
	
	<div class="usedimg">
	   <img src="img/used2.jpg" width="700" height="auto" alt=""/><br /><br /><br />
	   <img src="img/used.png" width="700" height="auto" alt=""/>
	</div>
	</div>
	<div class="tabcontent" id="method"><h2>There Are Four Main Steps</h2><hr />
<ul><li>Step 1: Research the Car’s VIN </li>
<li>Step 2: Informal Inspection </li>
<li>Step 3: Test Drive </li>
<li>Step 4: Professional Inspection </li></ul>

<h3>Step 1: Research the Car’s VIN</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Every car has a unique vehicle identification number (VIN). That number is recorded whenever the car is in a major accident or is sold and even sometimes when a vehicle is repaired or undergoes routine maintenance. 
 
The first step to evaluating a car is to check a database service that gathers information from state and local authorities, salvage yards, and insurance companies. Performing such a check offers an independent and efficient review of a vehicle’s history, and gives you information about a car that you would never know from a visual or mechanical inspection.  
 
The Department of Justice’s National Motor Vehicle Title Information System (NMVTIS) at www.nmvtis.gov is an online system that offers accurate information about a vehicle’s title, odometer data, and certain damage history.  The National Insurance Crime Bureau (NICB) at www.nicb.org maintains a free database that includes flood damage and other information so people can investigate a car’s history. Services such as CarFax and AutoCheck offer similar services at a reasonable cost.  When researching a potential car purchase, be sure to use multiple databases.  
 </p>
<h3>Step 2: Informal Inspection</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cars may be described as “perfect” in a classified ad, and they may look good in small pictures on the Internet, but you will never know the true condition of a car unless you see it in person. A personal inspection allows you to inspect the car for damage, make sure everything works, and drive it in a variety of situations including both around town and highway travel. 
 
We recommend inspecting your car during daylight since artificial light can hide damage. Here are some questions to ask:</p> 
 
<ul><li> Do the colors all match? </li>
 
 <li>Do you see any overspray where parts have been painted?</li> 
 
 <li>Does each body panel reflect light in the same way (repainted cars often have dimples, ripples, or other imperfections in the final spray coat)? </li>
 
 <li>Do all of the body panels line up evenly with the same space at the top and bottom? Open and close the doors, hood and trunk to check for proper fit and alignment.</li> 
 
 <li>Do you see any sign of rust? If a car is rusting, you will often find rust at the bottom of the doors and in the body panels over the tires. Rust may also appear as bubbles on the surface of the paint if it has not yet broken through</li></ul>

 <p>If the car passes a body inspection, look at the tires. Here are some questions to ask: </p>
 
<ul><li> Is there ample tread? Measure tire depth with an upside down penny. If the top of the Lincoln Memorial is covered by the tread, the tire is good. If not, it will need replacing soon. 
 
 <li> Is the tire wear even across the width of the tread and between front and rear tires?</li>  
 
 <li>Are the sides of the tire damaged?</li>  
 
 <li>Is the same brand and model of tire on all the wheels? </li> </ul>
 
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tire damage can be a sign of a difficult to fix problem. If the front tires have more wear than the rear, that can be a sign that the tires have not been rotated properly and may be a clue to poor car maintenance. 
 
Next, you’ll want to take look under the car - a rusty muffler or other components could cost you money later. Check the oil and transmission fluid. Very dark, almost black, oil and transmission fluid is a sign of poor maintenance. Smell the transmission fluid – it should not smell burnt. A milky color in the engine oil could indicate an expensive coolant leak. Is the engine relatively clean? A dirty, oily engine can be a clue to oil leaks. Check the belts and hoses – cracks can indicate a lack of maintenance.  
 
Finally, have someone start the car and look at the exhaust – smoke upon startup means the engine is burning oil, a fairly serious problem. You will also want to make sure the lights turn signals, horn, windows, heat, air conditioning, stereo and any other components work correctly. There should be no maintenance or warning lights illuminated on the dash. </p>
 
 <h3>Step 3: Test Drive </h3>

 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is very important to complete a thorough test drive under a variety of conditions – stop and go driving, around a neighborhood, and at highway speed. The vehicle should start easily even if it's cold. It shouldn't shake, make excessive noise, or smoke. During the drive, note anything irregular such as vibrations or noises (leave the radio off). Does the car pull to one side or vibrate when braking? Does it accelerate evenly and brake quickly? Is the car “bouncy” or overly harsh when going over bumps? Does the car make a clicking sound when turning?  
 
Pay close attention to the transmission during your drive. Does the car take a moment to engage when you put it into drive or reverse? A good transmission. will start to move the car almost immediately, without any sudden jerks. Gear changes should be smooth  and predictable, without jerks or slipping. Press the accelerator and accelerate rapidly – does the engine rev while the speed of the car is unchanged?  
 
Any problems you notice on the test drive could indicate serious problems. Be skeptical of any car salesperson telling you that unusual driving </p>

<h3>Step 4: Professional Inspection</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If the car passes your information inspection and road test, it’s time for a professional inspection. For about $100, you'll get a general indication of the mechanical condition of the vehicle. An inspection is a good idea even if the car has been "certified" and inspected by the dealer and is being sold with a warranty or service contract. Not only will an inspection warn you about any serious problems, any minor problems can be used as points of negotiation should you choose to make an offer on the car. 
To find a pre-purchase inspection facility, check your Yellow Pages under "Automotive Diagnostic Service" or ask friends, relatives, and coworkers to refer you to a good mechanic. Look for facilities that display certifications like an Automotive Service Excellence (ASE) seal. Certification indicates that some or all of the technicians meet basic standards of knowledge and competence in specific technical areas. You may also want to check with your state Attorney General's office or local consumer protection agency to find out whether there's a record of complaints about particular facilities. 
There are no standard operating procedures for prepurchase inspections. Ask what the inspection includes, how long it takes, and how much it costs. Get this information in writing. 
If the dealer won't let you take the car off the lot, perhaps because of insurance restrictions, you may be able to find a mobile inspection service that will go to the dealer. If that's not an option, ask the dealer to have the car inspected at a facility you designate (at your expense).  
Ask the mechanic for a written report including a cost estimate for all necessary repairs. If you decide to make a purchase offer after considering the inspection's results, you can use the estimated repair costs to negotiate the price of the vehicle.</p>
<br /><br /></div>

	
</div><div class="social"><strong> Hotline :- 111-1111-1111/ 222-2222-2222 </strong>
	  <div class="linksc">
		  <a href="https://facebook.com" target="_blank"><img title="Facebook" width="50" height="50" alt="facebook" class="linksc1" src="img/fb.png"></a><a href="https://plus.google.com" target="_blank"><img title="GooglePlus" src="img/g-.png" width="50" height="50" alt="googleplus" class="linksc1"></a><a href="https://twitter.com" target="_blank"><img title="Twitter" src="img/twitter.png" width="50" height="50" alt="twitter" class="linksc1"></a><a href="https://linkedin.com" target="_blank"><img title="LinkedIn" src="img/linkedin.png" width="50" height="50" alt="linkedin" class="linksc1"></a></div>
	  </div></div></div></div>
</body>
</html>
