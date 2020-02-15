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
	<button class="tablinks" onClick="openText(event,'what')" >Importance Of Maintenance</button>
	<button class="tablinks" onClick="openText(event,'area')">Areas</button></div>
	<div class="tabcontent" id="what" style="display: block">
	
	<h2>Importance of Vehicle Maintenance</h2><hr>
	<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Regular preventive maintenance is probably the single thing you can do as a car owner to keep your ride happy and save money on repairs in the future. However, not everyone agrees on what preventive maintenance is, what you should do, and when you should do it. Let’s clear that up, and give you some tips that’ll apply to any vehicle.
       Anyone who’s ever worked on cars or spent a ton of money getting their car repaired will tell you: Don’t ignore preventive maintenance. The basics, like changing your oil, checking your tire pressure, and getting scheduled inspections and work done are like getting regular checkups at the doctor. They keep you healthy and give you—and the experts—a chance to catch anything serious before it becomes a major problem. With your car, that can save you thousands.</p>
	<h3>Pay attention to your owner’s manual.</h3>
	<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Regardless of the vehicle you drive, your regular maintenance schedule is inside it, and you’ll never fall for old car myths like, “You should change your oil every 3,000 miles,” (unless of course, your manual says you should, and odds are it doesn’t). You will, however, discover how often your manufacturer really does suggest you change your oil (it can vary widely by vehicle), your filters, any drive or timing belts in your vehicle, and more. You’ll even find out whether you’re putting the right gas in your vehicle or whether you’re using the right kind of oil in the first place.
Seriously—you wouldn’t fire up a complicated piece of technology or a massive new home appliance without checking the manual to make sure you know what you’re doing. Most car lovers already know how important this is, but it’s still important even for people don’t consider themselves interested in how their car works. If you’re using the wrong oil, for example, or filling a car that calls for higher octane fuel with the lowest octane stuff you can buy, you may run the risk of voiding your warranty, and worse, causing damage that’ll cost more to fix than you’d save by using the cheap stuff.</p>
	<div class="videoabt1">
	  <video width="500" height="auto" controls autoplay = "yes"><source src="videos/maintaince.mp4" type="video/mp4">Your browser dosent support the video.</video>
	</div>
	<h4>When we covered the ways you can save serious money on car repair, more than a few people pointed out that preventive maintenance is probably one of the biggest ways you can save money—not actively, but in the long term. Spending a little money now on these basics will save you from more costly repairs later on:</h4>
	<h3>Do your own inspection.</h3> <p>It’s basic, but give your car a once-over periodically so you catch anything that looks out of the ordinary. Make sure all your lights are working. Check the air pressure in your tires every month or so (and buy a cheap tire air pressure gauge and keep it in the glove compartment). Doing so is good for your tires, gets you better mileage, and saves you money in gas if you discover that the pressure is off. Listen for any strange sounds, inside and out. Make sure your tires have enough tread. You can use a penny to do it, or look out for the wear indicators on the tire treads. If anything’s out of the ordinary, don’t ignore it.</p>
	<br /><br /></div>
	<div class="tabcontent" id="area">
	<h3>Maintenance tasks commonly carried out during a motor vehicle service include:</h3><hr />
<ul><li>Change the engine oil</li>
<li>Replace the oil filter</li>
<li>Replace the air filter</li>
<li>Replace the fuel filter</li>
<li>Replace the cabin filter</li>
<li>Replace the spark plugs</li>
<li>Tune the engine</li>
<li>Check level and refill brake fluid/clutch fluid</li>
<li>Check Brake Pads/Liners, Brake Discs/Drums, and replace if worn out.</li>
<li>Check level and refill power steering fluid</li>
<li>Check level and refill Automatic/Manual Transmission Fluid</li>
<li>Grease and lubricate components</li>
<li>Inspect and replace the timing belt or timing chain if needed</li>
<li>Check condition of the tires</li>
<li>Check for proper operation of all lights, wipers etc.</li>
<li>Check for any Error codes in the ECU and take corrective action.</li>
<li>Wash the vehicle and clean the interiors.</li>
<li>Use scan tool read trouble code.</li></ul>
<h4>Mechanical parts that may cause the car to cease transmission or prove unsafe for the road are also noted and advised upon.</h4>
<p>In the United Kingdom, few parts that are not inspected on the MOT test are inspected and advised upon a Service Inspection, including: Clutch, Gearbox, Car Battery, and Engine components (further inspections than MOT).</p>


<h3>Sheduling</h3><hr />
<p>The actual schedule of car maintenance varies depending on the year, make, and model of a car, its driving conditions and driver behavior. Car makers recommend the so-called extreme or the ideal service schedule based on impact parameters such as</p>
<ul><li>number of trips and distance traveled per trip per day</li>
<li>extreme hot or cold climate conditions</li>
<li>mountainous, dusty or de-iced roads</li>
<li>heavy stop-and-go vs. long-distance cruising</li>
<li>towing a trailer or other heavy load</li></ul>
Experienced service advisors in our service recommend schedule intervals, which are often in between the ideal or extreme service schedule. We base it on the driving conditions and behavior of the car owner or driver.
<br /><br /></div>
	

	
</div><div class="social"><strong> Hotline :- 111-1111-1111/ 222-2222-2222 </strong>
	  <div class="linksc">
		  <a href="https://facebook.com" target="_blank"><img title="Facebook" width="50" height="50" alt="facebook" class="linksc1" src="img/fb.png"></a><a href="https://plus.google.com" target="_blank"><img title="GooglePlus" src="img/g-.png" width="50" height="50" alt="googleplus" class="linksc1"></a><a href="https://twitter.com" target="_blank"><img title="Twitter" src="img/twitter.png" width="50" height="50" alt="twitter" class="linksc1"></a><a href="https://linkedin.com" target="_blank"><img title="LinkedIn" src="img/linkedin.png" width="50" height="50" alt="linkedin" class="linksc1"></a></div>
	  </div></div></div></div>
</body>
</html>
