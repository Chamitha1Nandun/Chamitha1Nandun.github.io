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
					
					else if(isset($_SESSION['staff'])){
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
	<button class="tablinks" onClick="openText(event,'what')" >What is Detailing</button>
	<button class="tablinks" onClick="openText(event,'type')">Types of Detailing</button>
	<button class="tablinks" onClick="openText(event,'Packages')">Our Packages</button></div>	
	<div class="tabcontent" id="what" style="display: block"><h2>What is Vehicle DETAILING</h2><hr>
	<p>Vehicle detailing, or auto detailing is a term that is used allot nowadays and it can have different meanings to different People. For example, in America the term detailing usually refers to most kinds of car cleaning, whereas in the U.K the term ‘car valeting’ is more predominantly used to describe most car cleaning activities, with the term detailing only fairly recently being adopted to refer to a more thorough clean.</p>
	
	<h3>Lubrication</h3>
	<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The most well-known purpose of engine oil is to lubricate the moving parts of a vehicle so that they don’t succumb to wear over time. Whether it is in the engine or any other part of a vehicle, oil acts as a film around the metal parts of a car, preventing them from being in direct contact with each other.
If oil is missing from the equation these parts begin to rub directly together; this can cause huge damage and generate a substantial amount of heat. This heat can cause formerly moving sections of a car to weld to one another and completely seize. This is especially damaging within the engine of a vehicle, and the damage can be completely irreparable.
Generally, the correct definition for the term car detailing is to meticulously clean, polish and protect all parts of a vehicle from top to bottom, inside and out, using specialist tools and products that would not normally be used by your typical car cleaner. It does not however, include paintwork and body repairs although sometimes light cosmetic restorative work will be undertaken, for example stone chip touch ups and clear coat wet sanding, depending on the condition of the vehicle and the detailer in question.
The main area and aim of vehicle detailing is to fully enhance and restore the vehicles paintwork by eliminating light scratches and swirl marks that have been inflicted over time and that reflect the light in such a way that they give an unsightly cob webbing effect on the surface of the paint or clear coat.

<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The general practice of car detailing is undertaken to ensure that the vehicle is kept in as good condition as possible during ownership. Once a full detail has been undertaken, mini details or maintenance cleans can be performed on a regular basis which will not be as involved as a full detail yet will help to give all parts of the vehicle that ‘just detailed’ look. Auto detailing helps to retain much of a vehicles original value and it can also add a considerable amount to the value of older more neglected or abused vehicles that have never seen that level of care.
Overall, car detailing is the process of thoroughly cleaning, enhancing, restoring and protecting all parts of a vehicle, in order to keep it looking its very best and retain much of its value and a detail differs from your average vehicle clean because of the levels of involvement, the time spent, the tools & products used and the quality of results that are achieved by the end of the process.
For those thinking about a cosmetic makeover for your vehicle, it makes sense to understand what auto detailing is all about. <strong>At Clean Street Auto</strong>, we focus on three key areas of your vehicle. Whether it’s a complete service encompassing all three areas, a specific focus on the interior or the exterior, or simply an inexpensive headlamp renewal, it’s best to start with describing what they are all about.</p>
		
	<div class="detailimg">
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/detail.jpg" width="200" height="130" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/detail2.jpg" width="200" height="130" alt=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/detail3.jpg" width="200" height="130" alt=""/>
	</div>
	<h3>Our Three Main Focus Areas</h3>
<ol>
<li>Exterior Detailing</li>
<li>Interior Detailing</li>
<li>Headlamp Renewal</li></ol>
	<p>Start your vehicle’s renewal with a <strong>Full Service Detail</strong>, then keep it in prime condition with an occasional Interior or Exterior Service. When you want a quick and inexpensive refresh, boost your vehicle’s front facia with a Headlamp Renewal Service.</p>
<br /><br />
	</div>
	<div class="tabcontent" id="type"><h3>Exterior Detailing</h3>
<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; When detailing the exterior of your vehicle, the goal is to clean and restore the surface matching or exceeding the original factory condition. While glossy paint might be the first thing that comes to mind, all visible components are considered part of this service. Chrome trim, windows, and tires and wheels are also addressed using a variety of products and specialized techniques, matching the material to be restored and the current surface condition.
Some of the products might include detergents and other chemical cleaners. Here at New Again Auto Detail, we only use citrus-based cleaners to break down dirt and soil. Detail clay is used to remove embedded contaminates, coaxing them carefully from the surface.
Various waxes and polishes are used to restore the surface and to improve reflectivity and that deep shine look. All of this is performed using an appropriate variety of applicators, brushes, and drying towels to protect and enhance your vehicle’s exterior surfaces.</p>

<h3>Interior Detailing</h3>
<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Your vehicle’s interior poses a unique set of challenges for restoring it to “New Again” condition. One can’t start by taking a hose to it, covering all the surfaces in citris-based, soapy water, and carefully wiping the soiled surfaces clean.
With materials ranging from carpet to upholstery to vinyl to natural fibers to carbon fiber composites to plastics and more, a careful and informed approach is required. Add the challenge of all those hard to reach “nooks and crannies” and you can see why a professional treatment is a very good idea.
Vacuuming is considered a standard, starting point. From there, selective shampooing, steam cleaning, leather treatments, and applying appropriate protectants to various surfaces are performed. Again, at New Again Auto Detail, we only use citrus-based cleaners to help minimize the impact on the environment and provide you with a safe, comfortable driving environment.</p>

<h3>Headlight Renewal</h3>
<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; As mentioned earlier,Clean Street Auto Service has further refined the exterior detailing service by focusing on and additional specific area: headlamp renewal. A periodic headlamp renewal can be your best strategy to extend the life of your complete interior and exterior detailing service.</p>
<h4>Here’s why:</h4>
<p>Mother nature and her outdoor elements wreak havoc on headlight lenses. Sun, heat, rain and harsh chemicals from commercial car washes damage the UV protection and the all too familiar “fogging” occurs on the exterior headlamp bezels.
The front facia is the primary identity for any car, and one that is noticed first virtually every time. A targeted Headlamp Renewal from New Again Auto Detail is your best value for an inexpensive “mini-detail.” In that service, we:</p>
<ol><li>Remove damaged surface of each headlight lens</li>
<li>Polish, buff or sand as necessary, based on condition</li>
<li>Restore lens clarity and protect with UV plastic protection wax</li></ol>
</div>
	
<div class="tabcontent" id="Packages"> 

<h2>PREMIUM DETAIL PACKAGE</h2><hr />
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This package was designed for vehicles that have pollution embedded in the paint. Everyday environmental fall outs stick to your paint building up over time. The normal washing process will not remove these contaminants. The best way to remove these contaminants would be to use auto detailing clay and a chemical neutralizer.
We pre-soak your vehicle’s tires, wheels, wheel wells, trim and front facia. Then it is scrubbed and rinsed to loosen and remove the grime, dirt, grease and splattered bug residue. We then hand wash your vehicle with a mitt made from lamb’s wool using car wash soap that’s made with unique polymers. Next the vehicle will be cleaned with detailing clay to remove any pollution leaving the vehicle feeling slick and smooth. Finally, the paint will be treated with a polymer based six month paint protection called STS 3000(paint sealant).
The interior of the vehicle will get our Complete Interior service. Your auto interior is first air purged and vacuumed to remove dust, dirt and other debris from your vehicles interior including floor boards and hard to access cracks and crevices. Leather and vinyl parts along with trim are treated and detailed to look like new. The dash board, door panels, consoles and pockets are given special attention. We spot treat interior upholstery and carpet in order to shampoo them by hand, then deep clean with a heated extractor to remove the stale odors, grime and ground-in dirt. We also clean all exterior and interior mirrors, windows and gauges. </p>
<p>The auto interior cleaning products are pH balanced and have optical brighteners.</p>
<h3>20000 rs - 48000 rs</h3>
<h2>GOLD DETAIL PACKAGE</h2><hr />
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This package was designed for vehicles that do not need a lot of work to the exterior, but the interior of the vehicle needs some special attention. 
The exterior will be washed to remove any dirt before any wax is applied to the paint to provide at least three months of paint protection. 
The interior of the vehicle will get our Complete Interior service. Your auto interior is first air purged and vacuumed to remove dust, dirt and other debris from your vehicles interior including floor boards and hard to access cracks and crevices. Leather and vinyl parts along with trim are treated and detailed to look like new. The dash board, door panels, consoles and pockets are given special attention. We spot treat interior upholstery and carpet in order to shampoo them by hand, then deep clean with a heated extractor to remove the stale odors, grime and ground-in dirt. We also clean all exterior and interior mirrors, windows and gauges.</p>
<p>The auto interior cleaning products are pH balanced and have optical brighteners.</p>
<h3>13000 rs - 30000 rs</h3>
<h2>EXPRESS DETAIL PACKAGE</h2><hr />
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This package was created to be a monthly maintenance package to vehicles that have already had our Gold Detail Package or better. It’s also a good package to maintain new vehicles. 
We pre-soak your vehicle’s tires, wheels, wheel wells, trim and front facia. Then it is scrubbed and rinsed to loosen and remove the grime, dirt, grease and splattered bug residue. We then hand wash your vehicle with a mitt made from lambs wool using car wash soap that’s made with unique polymers to leave a mirror like shine. The paint is then treated with a thirty day protection in addition to the wax that may already be on the vehicle. 
Your vehicle's interior vinyl, dash, center console and cup holders will get wet dusted.  All floor mats and carpet will be vacuumed. If you have rubber floor mats, which we highly recommend, they will be chemically cleaned to strip all dirt and oils from them. We also pay special attention to make sure windows, window tips and mirrors are clean. Interior fragrance and dressing is available upon request. </p>
<h3>5000 rs - 15000 rs</h3>
<h2>NEW VEHICLE PROTECTION PACKAGE</h2><hr />
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; If you have recently purchased a new vehicle or plan to do so you should consider protecting the paint and the interior with this package. Our New Vehicle Protection Package features our Poly Sealant to protect your new vehicles paint from environmental fallout and UV rays. Our Poly Sealant will also shine the surface like nothing you have ever seen! To maintain total protection and that slick glossy look year-round have us reapply our Poly Sealant annually.
Also, included with this package is our Fabric Protection for carpets and upholstery. Our Fabric Protection is odorless and colorless and acts as an invisible barrier that surrounds your carpets and seats fibers so a food spill cannot absorb into the fibers and stain. This service will also keep your interior cleaner longer and make routine vacuuming easier. If your vehicle has leather seats we will also condition the hides with a pH balanced leather conditioner. This will keep your seats soft and supple and make them easier to clean.</p>
<p>Most new car dealers charge between 50,000 rs - 100,000 rs for this package! Why pay that? Save hundreds of dollars with us and you can be sure the work and preservation of your vehicle is getting accomplished correctly. We specialize in black vehicles.</p>
<h3>30,000 rs - 80,000 rs</h3><br /><br />
</div>
	
</div><div class="social"><strong> Hotline :- 111-1111-1111/ 222-2222-2222 </strong>
	  <div class="linksc">
		  <a href="https://facebook.com" target="_blank"><img title="Facebook" width="50" height="50" alt="facebook" class="linksc1" src="img/fb.png"></a><a href="https://plus.google.com" target="_blank"><img title="GooglePlus" src="img/g-.png" width="50" height="50" alt="googleplus" class="linksc1"></a><a href="https://twitter.com" target="_blank"><img title="Twitter" src="img/twitter.png" width="50" height="50" alt="twitter" class="linksc1"></a><a href="https://linkedin.com" target="_blank"><img title="LinkedIn" src="img/linkedin.png" width="50" height="50" alt="linkedin" class="linksc1"></a></div>
	  </div></div></div></div>
</body>
</html>
