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
<div style="margin:10px">
<h2 style="text-align:justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amongst all the vehicle or customer specific questions that we're asked about car faults, repair costs and service/warranty issues there are several common themes and more general questions that keep coming up.
You can find the answers below to the questions we're asked most often.</h2>
<div style="margin-left:140px">
<ul type="" style="font-size:18px" >
<li><a href="#1">Why don't you get a full workshop manual?</a></li>
<li><a href="#2">Why isn't clutch failure covered by the warranty?</a></li>
<li><a href="#3">Can you detail the service schedule for my car?</a></li>
<li><a href="#4">Do I have to get my car serviced by a main dealer?</a></li>
<li><a href="#5">Who can fix problems with an automatic gearbox?</a></li>
<li><a href="#6">Airbag renewal after 10 years. What should I do?</a></li>
<li><a href="#7">Where can I buy a good reconditioned engine?</a></li>
<li><a href="#8">When should the cam belt be renewed?</a></li>
<li><a href="#9">Can I get the manufacturer to pay?</a></li>
<li><a href="#10">How long should a catalytic converter last?</a></li>
<li><a href="#11">Must I get air conditioning serviced?</a></li>
<li><a href="#12">What are the advantages of synthetic oils?</a></li>
</ul></div>

<h3><a name="1">Why don't you get a full workshop manual?</a></h3>
<p>There are many reasons why it is not practicable to supply detailed technical information and manuals with all new cars;</p>
<ul type="square"><li>Most owners are not interested in maintenance beyond fluids checks and tyres – bundling full technical manuals would add to cost.</li>
<li>Modern cars are much more complex with less scope for DIY. There are serious health & safety concerns too.</li>
<li>Electronic control and 'multiplexing' means that most fault diagnosis and repair requires dedicated offboard diagnostic equipment.</li>
<li>Information in handbooks is fairly generic, but more and more technical material is vehicle specific - down to particular chassis number – and a lot is just programmed directly into the diagnostic machines.</li>
<li>Information is available from dealers or from manufacturers' website, but individual customers would pay the same rate as a dealer or independent garage. A diagnostic machine would be required to make sense of it though.</li>
<li>Electronic information in this format allows manufacturers to make improvements and adjustments. Printed workshop manuals wouldn't allow this.</li></ul>
<p>Dealers don't have a monopoly on repairing their products though – independent garages get fair access to the same technical information as the franchise dealers and car manufacturers can not insist as a condition of warranty that service and repair is carried out by their own dealers.</p>

<h3><a name="2">Why isn't clutch failure covered by the warranty?</a></h3>
	<p>Clutch life can be seriously affected by poor driving style:</p>
<ul type="square"><li>Resting a foot on the pedal (riding the clutch)</li>
<li>Holding the car on the clutch on hills rather than using the handbrake, or</li>
<li>Letting the clutch slip excessively</li></ul>
<p>If the garage has repaired the car, but say the failure has been caused by driver abuse, then ask them for the old components and get a second opinion from another garage or mechanic. The garage is entitled to ask you to pay for the work before allowing you to take your car.</p>
<p>If one of the components has broken and caused the failure, then you may be able to claim under the warranty. Regrettably, if there is no evidence of manufacturing or material defect, you will have to pay for the new clutch and cost of fitting.</p>

<h3><a name="3">Can you detail the service schedule for my car?</a></h3>
<p>We can't provide detailed extracts from manufacturers' workshop manuals.</p>
<p>The vehicle handbook will include basic service interval information.</p>
<p>Any reputable independent garage should have access to manufacturer's technical data, including details of the manufacturer's service times, schedules and operations.</p>

<h3><a name=4>Who can fix problems with an automatic gearbox?</a></h3>

<p>You are not obliged (since October 2008) to get the car serviced by a franchise dealer during the warranty period.<br><br>

You must though get it serviced according to the manufacturer's recommended schedule and criteria using only manufacturer approved parts.<br><br>

The legislation only applies to the part of the warranty offered by the manufacturer, i.e. insurance-backed extended warranties offered by dealers are not covered and may stipulate different conditions.<br><br>

If you do get the car serviced outside the dealer network, you must make sure it's done to the maker's recommended schedule and criteria using approved parts. You must also keep records so you can demonstrate to the manufacturer that servicing was undertaken to their requirements.<br><br>

You should still get warranty work undertaken by the franchised dealer as it is easier for them to deal directly with the manufacturer.<br><br>

Read about repairs after the warranty expires before deciding to go outside the dealer network for servicing during the warranty.</p>

<h3><a name="5">Do I have to get my car serviced by a main dealer?</a></h3>

<p>Automatic gearboxes are complex pieces of equipment and sometimes need very specialized knowledge.<br><br>

If it's a problem with the electronics which control the gearbox, it is better to get help from a franchise dealer as they will receive regular software updates from the manufacturer. This may cure the problem.<br><br>

If it's thought to be a problem with the gearbox itself, then you may achieve more success if you contact a member of the <a href="https://www.facebook.com/autogearbox.lk/#!/autogearbox.lk/">AUTOMAN TRANSMISSION - SRI LANKA</a></p>

<h3><a name="6">Airbag renewal after 10 years. What should I do?</a></h3>
<p>When cars were first fitted with airbags there was a lack of knowledge and confidence about the long term reliability of the systems. Car manufacturers and manufacturers of airbag systems agreed to validate (or test) them for a 10 year life span.<br><br>

A sodium azide tablet produces the gas which inflates the airbag, and this tablet and the explosive device are sealed. Although some moisture ingress is possible it should not affect performance. There will also be some natural chemical decay, but again this shouldn't stop the airbag from working.<br><br>

There was also some concern in the early days that the airbag cover could become brittle through aging and a flying fragment cause eye damage.<br><br>

Manufacturers increased the validation period to 15 years on later cars without making major changes to design and we are not aware of any airbag failures attributed to ageing.</p>

<h3><a name="7">Where can I buy a good reconditioned engine?</a></h3>

<p>The word 'reconditioned' has different meanings to different repairers. Some may do little more than apply a fresh coat of paint, while others will dismantle the engine fully, machine bearing surfaces and rebuild the engine to a good standard using many new parts.<br><br>

Don't be tempted by cheap units from back street garages. Previous history and internal condition are often unknown and they can work out to be more expensive in the long run. Resolving problems can be very difficult, too.<br><br>

Reconditioned engines supplied by members of the Federation of Engine Remanufacturers (FER) will have been rebuilt to a high standard. And if there are any problems, you can seek help/arbitration from the FER.</p>

<h3><a name="8"></a>When should the cambelt be renewed?</h3>

<p>Vehicles are complex with multiple sensors and electronic control units to keep exhaust emissions to a minimum, improve stability/braking and to operate safety systems.</p>
<ul><li>Technicians at franchised garages need to be highly trained and must attend many manufacturers' training courses. Not only are the courses expensive, but the technicians demand salaries to match their skills.</li>
<li>Garage hourly rates vary by location, the nature of the facilities and whether or not they hold a manufacturer franchise.</li>
<li>Independent garages are not under the same pressure from vehicle manufacturers to maintain prestigious premises with lots of customer facilities and may be able to charge less than half the labour rate of their franchised counterparts.</li>
<p>Get a quote from several garages in your area and compare their hourly labour rates.</p></ul>

<h3><a name="9"></a>Can I get the manufacturer to pay?</h3>
<p>The manufacturer is under no obligation to help you once the warranty has expired, as it's generally accepted that faults caused by manufacturing or material defects will show up during the warranty.</p>

<h3><a name="10"></a>How long should a catalytic converter last?</h3>

<p>Catalysts often last 10 years, but actual life depends on mileage and engine tune. 50,000 miles is a more reasonable benchmark, and you can generally expect to replace the catalytic converter once during the life of a vehicle.<br><br>

If failure occurs early, it's important to find and fix the cause of the problem before fitting a new CAT otherwise the replacement can be expected to fail prematurely too.</p>

<p>There are three main ways they fail:</p>
<ul><li>Melt down – unburned fuel enters the catalyst and ignites on contact. The extreme heat literally melts the ceramic matrix. Poor ignition timing, a faulty oxygen sensor, worn or defective spark plugs, incorrect fuel mixture and other ignition/fuel injection related faults could lead to this failure.</li>
<li>Carbon deposits – oil or antifreeze entering the combustion chamber/exhaust system can lead to a build up of carbon on the matrix, which increases back pressure leading to overheating and poor performance.</li>
<li>Catalyst fracture – the ceramic matrix is fragile and can break-up as a result of excessive vibration or external impact. As the matrix breaks up back-pressure increases and overheating can result.</li></ul>

<h3><a name="11"></a>Must I get air conditioning serviced?</h3>
<p>Regular servicing is important for health and to maintain the system working effectively. Up to 15% of the refrigerant gas will be lost annually.</p>
<ul><li>Run your air conditioning at least once a week throughout the year.</li>
<li>Have the refrigerant gas checked regularly and topped up to manufacturers' recommended levels.</li>
<li>Help improve hygiene and air quality with a regular cabin filter change, as it can become blocked with pollen.</li>
<li>A regular air duct clean helps remove the bacteria and fungi that can cause unpleasant odours.</li>
<li>Service air-conditioning units every 30,000 miles or two years to avoid costly repairs.<li></ul>

<h3><a name="12"></a>What are the advantages of synthetic oils?</h3>

<p>Synthetics and semi-synthetics give improved performance at high temperatures and support extended standard drain intervals. They are the preferred choice for high performance cars or for drivers who value long life/durability.</p>

</div></div><div class="social"><strong> Hotline :- 111-1111-1111/ 222-2222-2222 </strong>
	  <div class="linksc">
		  <a href="https://facebook.com" target="_blank"><img title="Facebook" width="50" height="50" alt="facebook" class="linksc1" src="img/fb.png"></a><a href="https://plus.google.com" target="_blank"><img title="GooglePlus" src="img/g-.png" width="50" height="50" alt="googleplus" class="linksc1"></a><a href="https://twitter.com" target="_blank"><img title="Twitter" src="img/twitter.png" width="50" height="50" alt="twitter" class="linksc1"></a><a href="https://linkedin.com" target="_blank"><img title="LinkedIn" src="img/linkedin.png" width="50" height="50" alt="linkedin" class="linksc1"></a></div>
	  </div></div></div></div>
</body>
</html>
