
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/home1.css"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
		<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
		<meta name="author" content="Buddika Lakshan">
        <title>Clean Street Auto Service Inc.</title>
		<meta http-equiv='refresh' content='30'>
		
		<script language="javascript">
		
	<!--
		function deleteme() {
			return confirm("Are you sure want to delete this user ?");
		}		
	
	   
	//-->
	</script>
        
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
                    &nbsp&nbsp&nbsp<button style="margin-top:-20px; font-size:15px" type="submit" name="out"> Logout <i class="fa fa-sign-out" aria-hidden="true"></i></button>                
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
            <li><a href="admin_add_news.php"><i class="fa fa-bullhorn" aria-hidden="true"></i> &nbsp;NEWS</a></li>			
			<li><a href="about_creators"><i class="fa fa-address-book-o" aria-hidden="true"></i> &nbsp;ABOUT SITE</a></li>
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
            <table border="1px" width="auto" cellpadding=10 align='center'>
                <tr><th>Id</th><th>User Type</th><th>First Name</th><th>Last Name</th><th>User Name</th>
                <th>Gender</th><th>Email</th><th>National ID</th><th>Permanent Address</th>
                <th>Service Code</th><th>Vehicle Number</th><th>Province</th><th>CHANGE</th><th>DELETE</th></tr>
                <?php
                
                include 'includes/dbh.inc.php';
                
                $qry = mysqli_query($conn ,"select * from users");
                while ($row = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
					if($row["user_ID"]!= $_SESSION['user_ID']){
                     
                    echo '<tr align=center padding=10px><td>'.$row["user_ID"].'</td>';                    
                    echo "<td>"; 
                    echo $row["user_type"];
                    echo "</td>";                    
                    echo "<td>"; 
                    echo $row["first_name"]; 
                    echo "</td>";
                    echo "<td>"; 
                    echo $row["last_name"]; 
                    echo "</td>";
                    echo "<td>"; 
                    echo $row["user_name"]; 
                    echo "</td>";
                    echo "<td>"; 
                    echo $row["gender"]; 
                    echo "</td>";
                    echo "<td>"; 
                    echo $row["email"]; 
                    echo "</td>";
                    echo "<td>"; 
                    echo $row["ID_card"]; 
                    echo "</td>";
                    echo "<td>"; 
                    echo $row["address"]; 
                    echo "</td>";
                    echo "<td>"; 
                    echo $row["code"]; 
                    echo "</td>";
                    echo "<td>"; 
                    echo $row["vehicle_number"]; 
                    echo "</td>";
					echo "<td>"; 
                    echo $row["province"];
                    echo "</td>";
                    echo '<td><form method="POST" action="delete.php"><input type ="hidden" name="id_user" value="'.$row["user_ID"].'"><button style="cursor:pointer; font-weight:bold" type="submit" name="change_me">Change<i class="fa fa-edit"></i></button></form></td>';                  
                    echo '<td><form method="POST" action="delete.php" onSubmit="return deleteme()"><input type ="hidden" name="id_user" value="'.$row["user_ID"].'"><button style="cursor:pointer; font-weight:bold" type="submit" name="delete_me">Delete <i class="fa fa-trash"></i></button></form></td></tr>';
                }
				}
                ?>
            </table>

            </div>
           
                <form action="adm_accounts.php" method="POST"> 
                    <button class="button_adm1" type="submit" name="edit" >Add New User &nbsp;&nbsp;<i class="fa fa-user-plus" aria-hidden="true"></i></button> 
                </form>
			
                <form action="edit_admin.php"> 
                    <button class="button_adm1" type="submit" name="edit" >Edit My Profile &nbsp;&nbsp; <i class="fa fa-edit" aria-hidden="true"></i></button> 
                </form> 				
          
            
            </div>
        
     
        
        <div class="footer">
            
        </div>
    </body>    
</html>