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
	<button class="tablinks" onClick="openText(event,'what')" >Importance</button>
	<button class="tablinks" onClick="openText(event,'how')">How to check </button></div>
		
<div class="tabcontent" id="what" style="display: block"><h2>The Importance of Wheel Alignment and Tyre Balancing</h2><hr>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;Wheel alignment and tyre balancing are one of the most common auto repair services offered by technicians. One of the reasons for this is that it is a vital part of maintaining your vehicle and the importance of wheel alignment and tyre balancing in relation to the life of the tyres on your vehicle cannot be underestimated. Whether your wheels have been aligned correctly and your tyres are correctly, directly impacts on how often you will have to change the tyres on your vehicle.
As all motorists are aware, purchasing a quality set of tyres can be of a relatively high cost so it is beneficial to take every measure possible to ensure that a set of tyres last as long as possible. This means it is important that when you purchase a new set of tyres and fit them to your vehicle, you ask a mechanic to perform a wheel alignment to ensure that excessive tyre wear does not occur. This will ensure that your tyres will not wear out quickly and will save you having to change your tyres regularly.
Some motorists do not understand the importance of wheel alignment and tyre balancing and how this can affect tyre life, as well as possibly having an effect on other mechanical factors. So FMP Motors have provided you with the information on why regularly carrying out wheel alignment and tyre balancing can save motorists spending money on new tyres regularly.</p>
	<h3>The Importance of Wheel Alignment</h3>
	<p>&nbsp;&nbsp;&nbsp;&nbsp;It is very important that motorists get their wheels aligned to maximise the lives of their tyres as much as possible. Tyres that have not been aligned properly are more prone to excessive tyre wear and will result in you having to change your tyres a lot more regularly, resulting in you having to pay out costs that are unnecessary. Motorists will be able to tell if their wheels have not been aligned correctly when the vehicle will not move straight when the steering wheel is not being held. If this occurs, you should find a mechanic that can align your wheels as it could lead to some problems with your vehicle such as problems with your suspension and vibrations when you are driving.
When your tyres are not aligned, it can also put your safety at risk. Improper alignment of the vehicle’s wheels will also result in poor cornering and handing of your vehicle and this will make it less safe for the driver and its passengers, especially in icy and wet conditions. Also, drivers will have to make more of an effort driving the vehicle when the tyres are not aligned as the vehicle will tend to steer to one side which will mean that the driver will have to constantly correct it when driving. This means it requires an increase in concentration and effort at all times in order to drive safely and especially with long journeys, can result in the driver becoming tired quicker and become unsafe for everyone.</p>
	<h3>The Importance of Tyre Balancing</h3>
    <p>You will need tyre balancing as soon as you purchase new tyres for your vehicle. This process is performed in order to ensure that all of the tyres are balanced with the wheel weights to ensure the smooth running of each of the tyres. When there is an imbalance in your tyres, the steering wheel will rock back and forth as you drive, especially when you drive at a certain speed. When you notice this happening, you should contact a mechanic to fix the problem straight away as it can be very dangerous to drive with imbalanced tyres.<br><br>
You will be able to tell that your tyres are not balanced when certain tyres are wearing at a faster rate than others. This means that your tyres are imbalanced and you will need to correct this as soon as possible. It is importance that all of your tyres are balanced as when they are not, you will start to feel vibrations when travelling at certain speeds and this is very dangerous for the driver and its passengers. These vibrations also result in stress being created in the lower ball joints, axles and other essential parts of the vehicle. This increased stress on these parts will lead to them wearing at a faster rate and will mean you will have to replace these parts a lot sooner than you would have had to with balanced tyres.<br><br>
Unbalanced tyres will also result in an increase in the tyre wear. This is because to compensate for the added stress on the tyres that the imbalance has created, the tyres start to wear from the edges, whereas with balanced tyres, they will wear from the middle. When this occurs, it will mean that you will have to change your tyres as they will no longer provide you with the necessary grip to drive safely.<br><br>
So when you notice that either your wheels are not aligned correctly or an imbalance with your tyres, ensure that you find a mechanic that you can trust to address the issue as it will result in an increase in excessive tyre wear and more importantly but yours and others safety at risk.<br><br>
At FMP Motor Factors we work with a wide network of garages and car dealers as well as individual car owners to provide the best quality car parts such as high quality tyres for used cars as well as training and advice on the importance of wheel alignment and tyre balancing.</p>
</div>
<div class="tabcontent" id="how"><h2>How to know when vehicle tire need replacing.</h2><hr>
	
</div>
	
</div><div class="social"><strong> Hotline :- 111-1111-1111/ 222-2222-2222 </strong>
	  <div class="linksc">
		  <a href="https://facebook.com" target="_blank"><img title="Facebook" width="50" height="50" alt="facebook" class="linksc1" src="img/fb.png"></a><a href="https://plus.google.com" target="_blank"><img title="GooglePlus" src="img/g-.png" width="50" height="50" alt="googleplus" class="linksc1"></a><a href="https://twitter.com" target="_blank"><img title="Twitter" src="img/twitter.png" width="50" height="50" alt="twitter" class="linksc1"></a><a href="https://linkedin.com" target="_blank"><img title="LinkedIn" src="img/linkedin.png" width="50" height="50" alt="linkedin" class="linksc1"></a></div>
	  </div></div></div></div>
</body>
</html>
