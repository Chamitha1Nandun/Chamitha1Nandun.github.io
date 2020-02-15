
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/home1.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
        <title>Clean Street Auto Service Inc.</title>
        <meta name="author" content="Chamitha Nandun Jayalath">
		
		<script language="javascript">
		
	<!--
		function deletef() {
			return confirm("Are you sure want to delete this news ?");
		}		
	
	    function addnews()	{
			if(document.news.heading.value=='') {
				if(document.news.content.value=='') 
				{
				alert("Heading and Content are Required");
				return false;
				}
				else {
					  alert("Heading is Required");
				      return false;
					  }
			}
			if(document.news.content.value=='') {
				alert("Content is Required");
			    return false;
			}
		return confirm("News adding to database press OK to proceed");
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
		            include 'server.php';
             
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
		<br><h1 style="color:Green; text-align:center"><u>Add New News</u></h1>
		
		<br><br>
		<form name="news" action="" enctype = 'multipart/form-data' method="POST" onSubmit="return addnews()">
     	<label style="color:white; font-size:20px">Heading</label>
		<input type="text" name="heading" style="width:80%; height:40px; margin-left: 4.8%; font-size:20px"><br><br>
		<label style="color:white; font-size:20px">Content</label>
		<input type="field" name="content" style="width:80%; height:200px; margin-left:5%; font-size:15px"><br><br>
		<label style="color:white; font-size:20px">Date</label>
		<input type=date name=date value="<?php echo date('Y-m-d');?>" style="width:12%; height:40px; margin-left: 6.6%; font-size:20px;"><br><br>
		<label style="color:white; font-size:20px">Picture</label>
		<input type="file" name="file" id="uplod_pic" style="width:12%; height:40px; margin-left: 6.6%; font-size:20px;">
		<br><button class="button_adm1" type="submit" name="add_news" >Add News</button> 
		</form>
		<br><br><h1 style="color:pink; text-align:center"><u>News in Database</u></h1>
            <div class="editable">
            <table border="1px" align=center cellpadding=10px width=85%>
                <tr><th>News_ID</th><th> &nbsp;&nbsp;Date&nbsp;&nbsp;  </th><th>Headline</th><th>Content</th><th>Picture</th><th>Delete</th>
                </tr>
                <?php
                
                include 'includes/dbh.inc.php';
                
                $qry = mysqli_query($conn ,"select * from news");
                while ($row = mysqli_fetch_array($qry,MYSQLI_ASSOC)){
                     
                    echo '<tr align=center><td>'.$row["idnews"].'</td>';                     
                    echo "<td>"; 
                    echo $row["date"];
					echo "</td>";                    
                    echo "<td>"; 
                    echo $row["Headline"]; 
                    echo "</td>";
                    echo "<td>"; 
                    echo $row["Content"]; 
                    echo "</td>";
					echo '<td><img src="'; 
                    echo $row["picture_path"]; 
                    echo '" width=350px height=auto></td>';
				    echo '<td><form method="POST" action="delete.php" onSubmit="return deletef()"><input type ="hidden" name="id_news" value="'.$row["idnews"].'"><button style="height:40px; cursor:pointer; font-weight:bold" type="submit" name="delete_news">Delete <i class="fa fa-trash"></i></button></form></td></tr>'; 
                            
                    
                }
                ?>
            </table>

            </div>
                      
            </div>
        
     
        
        <div class="footer">
            
        </div>
    </body>    
</html>