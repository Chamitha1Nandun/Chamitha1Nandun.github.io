
<!doctype html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/home1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">		
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
		<meta name="keywords" content="HTML,CSS,PHP,JavaScript">
		<meta name="author" content="Buddika Lakshan">
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
        
        <div class="middle">
            <div class="editable">
            <table border="1px">
                <tr><th>Service Number</th><th>Service</th><th>Service Cost</th><th>Service Point</th><th>Discount Description</th><th>Action</th></tr>
                <?php
                
                include 'includes/dbh.inc.php';
                
                $qry = mysqli_query($conn ,"select * from service");
                while ($row = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
                     
                    echo '<tr><td>'.$row["service_code"].'</td>'; 
                    
                    echo "<td>"; 
                    echo $row["our_service"];
                    echo "</td>";
                    
                    echo "<td>"; 
                    echo $row["service_cost"];
                    echo "</td>";
                    
                    echo "<td>"; 
                    echo $row["service_point"];
                    echo "</td>";
                    
                    echo "<td>"; 
                    echo $row["discount_descrip"]; 
                    echo "</td>";
                    
                    
                    echo '<td><form action="" method="post"><input type="submit" name="del" value="Delete"/></form></td></tr>';
                }
                ?>
            </table>

            </div> 
                      
            
            <div class="editable">
            <table border="1px">
<tr><th>User Id</th><th>National ID</th><th>Score Points</th><th>Previous offer took point</th><th>User Rating</th><th>Action</th></tr>                
<?php
                
                include 'includes/dbh.inc.php';
                
                $qry = mysqli_query($conn ,"select * from scorepoint");
                while ($row = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
                     
                    echo '<tr><td>'.$row["user_id"].'</td>'; 
                    
                    echo "<td>"; 
                    echo $row["user_point"];
                    echo "</td>";
                    
                    echo "<td>"; 
                    echo $row["pre_offer_took_point"];
                    echo "</td>";
                    
                    echo "<td>"; 
                    echo $row["user_ratings"]; 
                    echo "</td>";
                    
                    
                    echo '<td><form action="" method="post"><input type="submit" name="del" value="Delete"/></form></td></tr>';
                }
                ?>
            </table>

            </div>
            <div class="adm_btn">
                 <form action="adm_disc_edit.php" method="POST"> 
                    <button type="submit" name="edit" >Edit</button> 
                </form>
            
            </div>
            
            </div>       
     
        
        <div class="footer">
            
        </div>
    </body>    
</html>