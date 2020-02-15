<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="keywords" content="HTML,CSS,PHP,JavaScript">
<link rel="stylesheet" href="css/text.css" type="text/css"/>
<link rel="stylesheet" href="css/slider.css" type="text/css"/>
<link href="css/acc.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<title>Clean Street Auto Service Inc.</title>
<meta name="author" content="Chamitha Nandun Jayalath">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-1732547780322877",
    enable_page_level_ads: true
  });
</script>
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
<div class="search"><script>
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
<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="255" data-height="285" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
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
<br />
<div class="slider"> 
<input type="radio" name="img1" value="" id="i1" checked>
<input type="radio" name="img1" value="" id="i2" >
<input type="radio" name="img1" value="" id="i3" >        
          <div class="slider_img" id="one">
              <img src="img/oilladd.jpg" alt=""/>
              <label for="i3" class="pre">Previous</label>
              <label for="i2" class="nxt">Next</label>
          </div>
            <div class="slider_img" id="two">
              <img src="img/check.jpg" alt="">
              <label for="i1" class="pre">Previous</label>
              <label for="i3" class="nxt">Next</label>
          </div>
            <div class="slider_img" id="three">
              <img src="img/slide1.jpg" alt="">
              <label for="i2" class="pre">Previous</label>
              <label for="i1" class="nxt">Next</label>
          </div>
          <div class="navslider">
                <label class="dots" id="d1" for="i1"></label>
                <label class="dots" id="d2" for="i2"></label>
                <label class="dots" id="d3" for="i3"></label>
            </div>
        </div>
<div class="content">
<div class="compnews">
<p class="text7">About Us<br /><img src="img/06.png" alt="" /></p>
<p class="text8">No:1 car service in sri lanka</p>
<img class="imgabt" src="img/slide1.jpg" width="189" height="91" alt=""/>
<p class="text9">Our company is a one of the best car wash and maintenance company in Asia. Vehicle repair service business is all about...</p>
<a href="aboutus.php" target="_self"><img class="animatedlink" src="img/10.png" alt="aboutus"></a>
</div>
<div class="research">
<p class="text7">Our Vision <br /><img src="img/06.png" alt="" /></p>
<p class="text8">Our first concern is quality of service </p> 
<p class="imgg"><img src="img/tuf-shine-tyre-clearcoat(1)(1).jpg" width="189" height="91" alt=""/></p>
<p class="text9">Clean Street Auto Service is a leader in its field. to maintain that position, its plans for the upcomming yeares include many of the...</p>
<a target="_self" href="aboutus.php"><img class="animatedlink" src="img/10.png" alt="vision" /></a>
</div>
<div class="workmarter">
<p class="text7">Our Mission<br /><img src="img/06.png" alt="" /></p>
<p class="text8">Provide Quality service for affordable price</p>
<p class="imgg"><img src="img/BMWX5.jpg" width="189" height="91" alt=""/></p>
<p class="text9">Our target is excellence and the maintaince of strict performance standards, aimed at creating "a unique Modern...</p>
<a target="_self" href="aboutus.php"/#mission><img class="animatedlink" src="img/10.png" alt="mission" /></a>
</div>
</div>
<div class="well2"><img src="img/11.png" alt="" /><br />
<p><span class="text10">Well being of our clients first!</span><br />
<span class="text11">We think long term when dealing with our customers. By keeping our customers happy,they willbe loyal and throuh word of mout,will do the marketing for us. In fact, According to researchers, a satisfied customer tells at least three friends. So we are interested in well-being of our customers. <a target="_self" href="aboutus.php">more&gt;</a></span></p>
<img  src="img/11.png" alt="" /><br /></div>
<div class="well"><p><span class="text10">We ensure our best service for you!</span><br />
<span class="text11">Our continuous success depends largerly on the satisfication of our customers both locally and worldwide. We provide the pre-sales advice and after-sales support. It is for this reason that our primary focus is to ensure customer satisfaction, from the selection of a product?service that will suit your needs. <a target="_self" href="aboutus.php">more&gt;</a></span></p>
<img  src="img/11.png" alt="" /></div>

</div><div class="social"><strong> Hotline :- 111-1111-1111/ 222-2222-2222 </strong>
	  <div class="linksc">
		  <a href="https://facebook.com" target="_blank"><img title="Facebook" width="50" height="50" alt="facebook" class="linksc1" src="img/fb.png"></a><a href="https://plus.google.com" target="_blank"><img title="GooglePlus" src="img/g-.png" width="50" height="50" alt="googleplus" class="linksc1"></a><a href="https://twitter.com" target="_blank"><img title="Twitter" src="img/twitter.png" width="50" height="50" alt="twitter" class="linksc1"></a><a href="https://linkedin.com" target="_blank"><img title="LinkedIn" src="img/linkedin.png" width="50" height="50" alt="linkedin" class="linksc1"></a></div>
	  </div></div></div></div></div>
</body>
</html>
