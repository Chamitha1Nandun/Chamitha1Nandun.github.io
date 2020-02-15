
<!doctype html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/home1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
		<meta name="keywords" content="HTML,CSS,PHP,JavaScript">
		<meta name="author" content="Chamitha Nandun Jayalath">
        <title>Clean Street Auto Service Inc.</title>
        
    </head>
	
    <body >
           
        <div class="header">
            <div class="logo2">
                <img  src="icon/logo.png"/>
            </div>
            <div class="logo">
            <img src="icon/com_name1.gif"/ height=90px>
            </div>
            <div class="subnavi">
                <?php
                session_start();
                    if(isset($_SESSION['user_name'])){
                    echo '  <form action="includes/logout.inc.php" method="POST" >'
                    .'<img src="'.$_SESSION['pro'].'" width=50px height=auto>'.'<h4>Hello! | '.$_SESSION['name'].'</h4><br />             
                     &nbsp&nbsp&nbsp<button style="margin-top:-20px; font-size:15px" type="submit" name="out">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button>                  
                    </form>';
                    
                    }
                                        
                ?>
                
            </div>
          
        </div>
       
        <div class="menu-area">
        <ul>
            <li><a href="admin.php"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp; DASHBOARD</a></li>  
            <li><a href="adm_discount.php"><i class="fa fa-balance-scale" aria-hidden="true"></i> &nbsp;DISCOUNTS</a></li>
            <li><a href="adm_income.php"><i class="fa fa-money" aria-hidden="true"></i> &nbsp;INCOMES</a></li>	  
            <li><a href="adm_profile.php"><i class="fa fa-user" aria-hidden="true"></i> &nbsp;PROFILES</a></li>    
            <li><a href="admin_add_news.php"><i class="fa fa-bullhorn" aria-hidden="true"></i> &nbsp;NEWS</a></li>
			<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;HOME</a></li>
        </ul>
            <div class="search">
            <form action="">
                <input type="text" name="search" placeholder="  Search...">
            </form>
            </div>    
        </div> 
        
        <!--middle part of the page-->
        
        <div class="middle" style="color:pink" >
		
		<h1><u>About Web Developers</u></h1>
		<hr>
		<h4>We Are Group 52</h4>
		<center><h3><u>Project proposal for the On-line Company Detail Management System</u></h3></center>
		<h4>Introduction of the website:</h4>
		<h5>Company name/Title: Clean Street Auto Service Inc.</h5>
		<p style="font-size:12px; align:justify;">This company is a car wash and maintenance company. Vehicle repair service business is all about the time consumed and quality. Reduction of service downtime and planning service recourses (including mechanics and equipment) are fundamental tasks of this.  Clean Street Auto Service Inc. is designed to gives a complete idea to customers about their vehicles and how the process is carried out. Transparency of this website facilitates fast and flexible responses to the customers. And also the Operators could always have a complete overview about the company. Therefore, managing their company is going to be more easy with this novel web site. </p>
        <h4>Goal :- -  To become one of the Top-Quality car service companies in Sri Lanka within the next 10 years.</h4>
		<h4>Objectives</h4>
		<ul><li>This website should be responsive, browser independent and should function as a key information resource for the company and customers.</li>
		    <li>Administrators should be able to edit, delete and add new information to the site.</li>
			<li>Customers and Staff members should be able to Register, Login, and Edit, their Profiles.</li>
			<li>The site should be search engine optimized and designed with high page loading speed to provide an enjoyable user experience.  </li>
			<li>Administrators should be able to view the statistics of the web site.</li>
			<li>Customers should be able to view the status of their vehicle service and pay bills online.</li>
		</ul>
            <div class="adm_btn">
                 <form action="profile.php"> 
                    <button type="submit" name="edit" >Back</button> 
                </form>
            
            </div>
            
        </div>       
     
        
        <div class="footer">
            
        </div>
    </body>    
</html>
