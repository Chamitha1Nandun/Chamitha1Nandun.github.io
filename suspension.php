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
	<button class="tablinks" onClick="openText(event,'about')" >Steering System</button>
	<button class="tablinks" onClick="openText(event,'about2')">Suspension System </button>
	<button class="tablinks" onClick="openText(event,'maintenance')">Maintenance</button></div>
		
<div class="tabcontent" id="about" style="display: block"><h2>About Steering Systems</h2><hr>
	<p>&nbsp;&nbsp;&nbsp; steering and suspension systems of a car are not only important for safety reasons but also to enhance the comfort of your car's ride. The two systems are directly related to each other, which is why they are often referred to together.
Improvements in steering and suspension systems, increased strength and durability of components, and advances in tire design and construction have made large contributions to riding comfort and to safe driving in recent years.</p>
    <div class="steering">
	   <br /><img src="img/Suspension.jpg" width="700" height="auto" alt=""/><br />
	</div>
<p>&nbsp;&nbsp;&nbsp;Back in the earliest days of automobile development, when most of the car's weight (including the engine) was on the rear axle, steering was a simple matter of turning a tiller that pivoted the entire front axle. When the engine was moved to the front of the car, complex steering systems had to evolve.
Today, there are two basic types of steering systems:</p><ul><li> standard mechanical (reciprocating ball) steering and </li><li> rack and pinion steering.</li></ul><p> The standard mechanical steering can be either power-assisted or non-power. Rack and pinion is almost always power-assisted, although there are rare cases where it is not.</p>
<h3>Standard mechanical (reciprocating ball) steering</h3>
<p> &nbsp;&nbsp;&nbsp;Standard mechanical steering uses a series of links and arms to ensure both wheels turn in the same direction at the same time. It hasn't changed much over the years and its principles are really quite simple. Basically this is how it works: </p>
<p>The steering wheel is connected to the steering box through the steering column. The steering box turns the rotation of the steering wheel 90° and, in the case of power steering, uses high-pressure fluid to help actuate the steering.<br>
The steering box has an arm attached to the output shaft called the pitman arm. This connects the steering box to the steering gear. The pitman arm is connected to one end of the center link (or drag link). On the other end of the center link is an idler arm. Between the idler and pitman arms, the center link is supported in the proper position to keep the left and right wheels working together.<br>
The inner tie rod ends are attached to each end of the center link and provide pivot points for the steering gear. From there it goes to the outer tie rod ends through an adjustment sleeve. This sleeve joins the inner and outer tie rod ends together and allows for adjustment when the front wheels are aligned.<br>
The outer tie rod ends are connected to the steering knuckle that actually turns the front wheels. The steering knuckle has an upper and lower ball joint on which it pivots and creates the geometry of the steering axis.<br>
As you can see, the standard mechanical steering system is just a simple mechanical connection from the steering wheel to the front wheels. The weaknesses of the system are at the pivot points. The pivots are ball and socket joints that wear out over time and require replacement. Loose steering parts will make a car difficult to handle and will cause the front tires to wear out prematurely. That's why it's important to have the steering checked at least once a year</p>

<h3>Rack and pinion steering</h3>
<p> &nbsp;&nbsp;&nbsp;Rack and pinion steering, on the other hand, basically combines the steering box and center link into one unit. The steering wheel, through the steering column, is directly connected to the rack. Inside the steering rack is a pinion assembly that moves a toothed piston, which in turn moves the steering gear.<br>
One end of the inner tie rod ends is connected to each end of this piston and the other end is connected directly to the outer tie rod end. The inner tie rod end is actually threaded into the outer tie rod end and can be rotated to make adjustments during a wheel alignment.<br>
Rack and pinion steering is almost always used with a strut suspension system. The bottom of the steering knuckle still pivots on a lower ball joint, but the top of the knuckle is connected to the strut assembly. In this system, the outer tie rod end is connected to an arm on the strut housing itself.<br>
The advantage of rack and pinion steering is that it's more precise than the mechanical system. By reducing the number of parts and pivot points, it can more accurately control wheel direction, making the steering more responsive. The disadvantage of a rack and pinion steering system is that it's prone to leakage, requiring replacement of the steering rack assembly.</p>
<br /><br /></div>
<div class="tabcontent" id="about2"><h2>About Suspension Systems</h2><hr>
    <div class="steering">
	   <br /><img src="img/suspension1.jpg" width="700" height="auto" alt=""/><br />
	</div>
<p>Suspension is the term given to the system of shock absorbers and linkages that connect a car to its wheels. The suspension system has two basic functions:</p> <ul><li>to keep the car's wheels in firm contact with the road to provide traction and</li> <li>to provide a comfortable ride for the passengers and isolate them from road noise, bumps and vibrations.</li></ul>	
<p>These goals are generally at odds, so the tuning of modern suspensions is often finding the right compromise. A lot of the system's work is done by the springs. Under normal conditions, the springs support the body of the car evenly by compressing and rebounding with every up-and-down movement. This up-and-down movement, however, causes bouncing and swaying after each bump and is very uncomfortable to the passenger. These undesirable effects are reduced by the shock absorbers.</p>
<h3>Springs:</h3>
<p>&nbsp;&nbsp;&nbsp;The springs used on today's cars and trucks are constructed in a variety of types, shapes, sizes, rates and capacities. The most common types include coil springs, leaf springs and torsion bars. These are used in sets of four for each vehicle, or they may be paired off in various combinations and are attached by several different mounting techniques.<br />
&nbsp;&nbsp;&nbsp;Coil springs and torsion bars are generally used in the front whereas leaf springs are generally used in the rear. Coil springs are generally installed between the upper and lower control arms with the shock absorber mounted inside the spring. In some cases, the coil spring is mounted on top of the upper control arm and a spring tower formed in the front-end sheet metal. Coil springs come in many rates and can be used to change the handling and ride characteristics of a vehicle.<br />
&nbsp;&nbsp;&nbsp;Leaf springs are made from layers of spring steel bolted together through the center of the leafs. This center bolt locates the spring to the axle housing and is attached to the housing with large U-bolts. The ends of the leaf spring are attached to the frame or body through a shackle that allows the spring to flex without tearing out. The leaf springs also act as control arms to keep the axle housing in proper position.<br />
&nbsp;&nbsp;&nbsp;Although a torsion bar is not technically a spring, from a practical standpoint it is. The torsion bar provides its spring action by the twisting of a flexible steel bar. This twisting of a steel bar provides the resistance to the up-and-down movement of the front end. There are two torsion bars, one for each front wheel. The rear of the torsion bar is mounted on the frame of the car and the front is bolted to the lower control arms. The big advantage of a torsion bar is that it's easily adjustable. By turning the tensioning bolts, you can adjust the ride height very easily.</p>
<h3>Shock Absorbers and Strut Assemblies:</h3>
<p>In the past, a wide variety of direct and indirect shock absorbing devices were used to control spring action of passenger cars. Today, hydraulic or gas shock absorbers and struts are the norm. </p>
<p>&nbsp;&nbsp;&nbsp;There seems to be much confusion over the differences between struts and shocks and which type is on any particular car. A shock absorber is independent of the steering and simply controls up and down movement of the suspension. There is no upper bearing mount to allow for turning of the unit. In the simplest terms, a front strut has a shock absorber mounted inside a housing and the entire unit can pivot with the steering system because of an upper bearing mount. Struts are mounted to the front steering knuckle and shocks mount to the lower control arm (wishbone, A-arm, etc.). The use of strut assemblies as an integral part of suspension systems on import cars has long been used for its compact design and weight savings over traditional double wish-bone suspensions<br>
&nbsp;&nbsp;&nbsp;Independent rear suspensions gave birth to rear wheel (actually, 4-wheel) alignment and this, in turn, gave birth to the use of strut assemblies in the rear of some cars. Although rare, it is possible to have struts on all four corners of the car, especially from Japanese car manufacturers and their US partners. Most cars today still use shock absorbers in the rear but some may be much more sophisticated than others to allow for self-levelling, load control and "smart" suspensions.<br>
&nbsp;&nbsp;&nbsp;The operating principle of hydraulic shock absorbers is in forcing fluid through restricting openings in the valves. This restricted flow serves to slow down and control rapid movement in the car springs as they react to road irregularities. Usually, fluid flow through the pistons is controlled by spring-loaded valves. Hydraulic shock absorbers automatically adapt to the severity of the shock. If the axle moves slowly, resistance to the flow of fluid will be light. If the axle movement is rapid or violent, the resistance is stronger, since more time is required to force fluid through the openings.<br>
&nbsp;&nbsp;&nbsp;By these actions and reactions, the shock absorbers permit a soft ride over small bumps and provide firm control over spring action for cushioning large bumps. The double-acting units must be effective in both directions because spring rebound can be almost as violent as the original action that compressed the shock absorber.<br>
&nbsp;&nbsp;&nbsp;The strut assembly replaces the upper control arm, front shock absorber and ball joint, increasing handling and responsiveness. It controls ride much the same way as a standard hydraulic shock absorber. It also keeps the front end aligned and eliminates, in some cases, the need for caster and camber adjustments. In most cases, it also contains the front coil springs so care must be taken when you are replacing them.<br>
&nbsp;&nbsp;&nbsp;The disadvantage of struts is that they will eventually start to leak and will require replacement. However, they generally last longer than a conventional shock absorber and that may offset the greater cost of the strut assembly. Moreover, some struts have an internal shock assembly (i.e., strut insert) that can be replaced separate from the rest of the housing, which provides a more economical solution than replacing the entire strut assembly.<br>
</p>
<h3>Sway Bars:</h3>
<p>&nbsp;&nbsp;&nbsp;Another component of the suspension system is the sway bar. Some cars require stabilizers to steady the chassis against front-end roll and sway on turns. Stabilizers are designed to control this centrifugal tendency that forces a rising action on the side toward the inside of the turn. When the car turns and begins to lean over, the sway bar uses the upward force on the outer wheel to lift on the inner wheel, thus keeping the car more level.</p>
<h3>Control Arms:</h3>
<p>&nbsp;&nbsp;&nbsp;The primary job of the control arms is to mount the suspension to the frame or body of the vehicle and to allow the suspension to move and keep it in its proper place. They come in all shapes and sizes and are specifically designed to maintain the geometry of the suspension in a wide range of movement. The most common problem is that the bushings at the body mounting points wear out causing unwanted movement and/or a terrible squeaking noise.<br>
&nbsp;&nbsp;&nbsp;Automotive suspension systems are a critical part of your car's driving characteristics, affecting not only comfort but also safety, stability and braking behavior. Each vehicle has a unique set of characteristics with specific shock requirements. That's why it's critical you use the OE brand (or one designed to OE specs) when replacing shocks or struts on your car.<br>
&nbsp;&nbsp;&nbsp;Original equipment struts and shocks are designed and manufactured to the car manufacturer's specifications for many critical requirements. The use of aftermarket struts or shocks may seriously affect the way your car responds to road conditions and your steering and braking input. The cost savings on a cheap brand is easily wasted in gas mileage, tire wear and suspension wear over the first year.</p>
<br /><br /></div>
<div class="tabcontent" id="maintenance"><h2>Maintenance of Steering & Suspension Systems</h2><hr>
<p>&nbsp;&nbsp;&nbsp;There is a lot of math going into the steering and suspension of your car. There are many forces and angles that have to be acted upon and maintained. If you notice any problems in the way your car steers or rides or you feel any body or steering wheel vibrations, you should have it checked out as soon as possible.<p>	
<p>Replacing your car's struts and shocks when required is vitally important to your safety and reduces the cost of operating your car through reduced tire wear, better gas mileage and lower maintenance costs on other suspension and steering components.</p>
<p>Routine inspection and maintenance of your car's suspension system includes:</p>
<ul type=squre><li>Inspect shocks regularly for leaks, cracks and other damage.</li>
   <li>Look for vehicle bounce, sway when cornering and "nose dives" when braking.</li>
   <li>Check for uneven tire wear, which may indicate worn shocks and struts. </li></ul>
<p>&nbsp;&nbsp;&nbsp;Worn struts and shocks should be replaced in pairs (left and right) and should be done as soon as problems are noted. You may be able to live with a little bouncing under normal driving but that same little bounce may cost you 30 or 40 feet in braking distance during an emergency stop. Those 2 car lengths may be the difference between avoiding an accident and being the cause of one.</p>
<p>&nbsp;&nbsp;&nbsp;Steering and suspension systems are fairly robust and generally not too much goes wrong with them. With the advent of rack and pinion steering and the use of strut suspensions, a lot of moving parts have been eliminated. But, things can still go wrong and cause a car to become hard to control. When something is wrong the very least that will happen is your tires will wear out very quickly; at most, it can lead to an accident.</p>
<p>&nbsp;&nbsp;&nbsp;As with any car problem, the causes can range from a mere inconvenience to major repair. Here are some things to look for when you have a car that doesn't handle or respond properly, bearing in mind that these are only a sampling of the more likely causes:</p>
<h4>Car seems to bounce too much:</h4>
<p>When you are driving down the road and hit a bump, your car keeps bouncing for a while. This will gradually get worse as time goes by.</p>
<p>POSSIBLE CAUSES:</p>
<ol><li>The shock absorbers are worn or leaking.</li>
<li>The shock mounts for the shock absorbers are broken or bent. </li></ol>
<h4>Steering wheel is hard to turn: </h4>
<p>You find that it's getting more difficult to turn the steering wheel. It feels like something is binding or dragging. This may or may not happen suddenly or get worse over time.</p>
<p> POSSIBLE CAUSES:</p>
<ol><li>Low tire pressure.</li>
<li>The wheels are out of alignment.</li>
<li>The power steering box or rack or power steering pump is bad.</li>
<li>The fluid level in the power steering reservoir is low.</li>
<li>The power steering drive belt is damaged or broken.</li>
<li>The steering gear needs to be lubricated or repaired. </li>
</ol>
<h4>Hard steering: </h4>
<p>You notice it takes much more strength to turn the steering wheel. This is especially noticed when you are trying to park. The problem seems to be getting worse.</p>
<p> POSSIBLE CAUSES:</p>
<ol><li>Low tire pressure.</li>
<li>The steering gear needs to be lubricated.</li>
<li>The wheels are out of alignment.</li>
<li>A part of the steering linkage is damaged and doesn't move freely.</li>
<li>Your steering box needs to be adjusted.</li>
<li>You have a problem with the power steering pump. </li></ol>
</div>
	
</div><div class="social"><strong> Hotline :- 111-1111-1111/ 222-2222-2222 </strong>
	  <div class="linksc">
		  <a href="https://facebook.com" target="_blank"><img title="Facebook" width="50" height="50" alt="facebook" class="linksc1" src="img/fb.png"></a><a href="https://plus.google.com" target="_blank"><img title="GooglePlus" src="img/g-.png" width="50" height="50" alt="googleplus" class="linksc1"></a><a href="https://twitter.com" target="_blank"><img title="Twitter" src="img/twitter.png" width="50" height="50" alt="twitter" class="linksc1"></a><a href="https://linkedin.com" target="_blank"><img title="LinkedIn" src="img/linkedin.png" width="50" height="50" alt="linkedin" class="linksc1"></a></div>
	  </div></div></div></div>
</body>
</html>
