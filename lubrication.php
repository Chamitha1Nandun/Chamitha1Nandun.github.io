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
	<button class="tablinks" onClick="openText(event,'what')" >What is Lubrication</button>
	<button class="tablinks" onClick="openText(event,'how')">Method of Lubrication </button>
	<button class="tablinks" onClick="openText(event,'Packages')">Packages</button></div>	
	<div class="tabcontent" id="what" style="display: block"><h2>The Importance of Lubrication</h2><hr>
	<p>If you own any kind of vehicle, whether it is a bicycle or a HGV you will undoubtedly be aware of the need for lubrication in order to keep your vehicle working correctly. Lubrication in the form of oil ensures the smooth and continued working of several areas of a motorised vehicle, and without it you really wouldn’t get far.
As one of the Srilanka’s leading specialists in prop shaft repairs we are very familiar with the damage that can be caused by a lack of oil. In this explanation we thought we’d take a look at the main purposes of oil and what a lack of it can result in;</p>
	
	<h3>Lubrication</h3>
	<p>The most well-known purpose of engine oil is to lubricate the moving parts of a vehicle so that they don’t succumb to wear over time. Whether it is in the engine or any other part of a vehicle, oil acts as a film around the metal parts of a car, preventing them from being in direct contact with each other.
If oil is missing from the equation these parts begin to rub directly together; this can cause huge damage and generate a substantial amount of heat. This heat can cause formerly moving sections of a car to weld to one another and completely seize. This is especially damaging within the engine of a vehicle, and the damage can be completely irreparable.</p>
	<p><strong>For a visual demonstration of exactly what a oil can do to a car’s engine check out the video below.</strong></p>
	
	<div class="videoabt1">
	  <video width="500" height="auto" controls autoplay loop><source src="videos/lubrications.mp4" type="video/mp4">Your browser dosent support the video.</video>
	</div>
	<h3>Cleaning</h3>
<p>Over time, due to the combustion process, the interior of an engine begins to gain carbon deposits that can, if not removed, cause blockages and damage within your engine. Oil is actually flushed around the engine and then filtered in order to remove these deposits or any other particles that make their way into the engine.
In other areas of the car such as within differentials and other joints, oil or other, heavier lubricant is used in a slightly different cleaning process. By forming a seal in any potential gap, oil ensures that no outside elements can enter into these areas of the vehicle and begin to cause damage.</p>
	<h3>Cooling</h3>
<p>Excessive heat is the enemy of smooth movement as it causes elements within a vehicle to expand and generate friction. By providing a low friction barrier between moving surfaces oil effectively eliminates the build up of heat. Whether it is inside the engine or in any other moving part of a vehicle, this lack of excessive heat ensures the longevity and smooth working of a vehicle.
With so many vital uses it is crucial that you are constantly checking that all of areas of your vehicle that require lubrication get the required amount. It takes literally minutes to check all of the important lubricants in your vehicle and it can potentially save you a fortune in repair bills.</p><br /><br />
	</div>
	<div class="tabcontent" id="how"><h4>Many different methods are used to apply oils and greases to machinery. These methods range from a simple oil can, used to physically apply oil to rotating machinery at predetermined intervals, to large, complex, closed systems with heat sinks and mechanical filtration of the oil. The four most common methods used to supply lubrication to bearings are:</h4>
<ul><li>Oil drip feed lubrication</li>
<li>Oil splash feed lubrication</li>
<li>Oil force feed lubrication</li>
<li>Grease lubrication</li></ul>

<h3>Drip Feed Lubrication</h3>
<p>Some bearings are installed in systems where low loads and low-to-moderate speeds are expected. This type of bearing requires small quantities of oil, applied at regular intervals. In the past, this type of lubrication was predominantly performed by hand, as is still the case in some applications. However, applying lubrication by hand poses several risks such as under- or over-lubricating the bearings and missed lubrication schedules. Drip feed lubrication systems are commonly used in these applications to supply the correct amount of oil at the correct intervals.
Drip feed systems, also referred to as gravity feed systems, consist of a loosely covered cup or manifold of oil placed above the bearing that meters out oil at a set interval. The supply to the bearing is controlled by a needle or conical valve, and can be adjusted as necessary. A drip feed reservoir can be connected to only one bearing, called a single point system, or connected by pipes or ducts to several bearings, which is referred to as a multiple point system. A drip feed system can also be pressurized to supply oil to a bearing system under pressure. The reservoir is partially or completely transparent, and is refilled by hand when it reaches a certain level.</p>
<h3>Splash Feed Lubrication</h3>
<p>Splash feed is a term applied to a variety of intermittently lubricated bushings or journal bearings. The bearings are splattered with oil from the action of various moving parts regularly dipped in the lube oil. Splash feeding is practical when the housing can be positively oil-tight and when the rotation is not fast enough to churn up the oil.
One common splash feed lubrication system is an oil ring system. In an oil ring system, a ring rests directly on the shaft. The lower half of the ring is submerged in oil in a reservoir located in the lower half of the bearing housing. As the shaft rotates, the oil ring turns, carrying oil from the reservoir up to the top of the shaft. The oil spreads across the shaft and bearings, and any excess runs back down into the reservoir. Oil troughs can also be used in this type of system to collect and direct the flung oil to specific bearings and components.</p>
<h3>Force Feed Lubrication</h3>
<p>Equipment operating at high speeds and heavy loads can develop high temperatures from friction. To protect the equipment from high temperatures, a high flow of oil is needed. In force fed lubrication systems, an oil pump pressurizes the oil, which is then directed to the rotating component. Examples of systems using forced lubrication are turbine generators, boiler feed pumps, compressors, and gear boxes.
in this we focused to a forced lubrication system for a gear box with bearings. The system has three continuous steps of operation. Oil from the gear box is collected and sent to the oil reservoir; the oil pump takes suction from the reservoir, and the pump discharges oil through an oil cooler and back to the gear box. Also, notice the oil filter shown in this figure. When needed, a pump takes the oil from the reservoir, cleans it in the filter, and then returns it to the reservoir.</p>	
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
