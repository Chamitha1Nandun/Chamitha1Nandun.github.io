
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divice-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/home1.css"> 
        <link rel="stylesheet" type="text/css" href="css/calan.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <meta name="keywords" content="HTML,CSS,PHP,JavaScript">
		<meta name="author" content="Buddika Lakshan">
        <title>Clean Street Auto Service Inc.</title>
      
	  <script language="javascript">
    
	<!--
		function exportdb() {		
			return confirm("Do you want to Export Database?");
		}
		function deletedb() {		
			return confirm("Do you want to Delete Database?");
		}
	//-->
	</script>	
  
 </head>

    <body onload="displayCalendar()">
    
        
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
                            
             <div class="container-fluid">
 <div id="columnchart12" style="width: 70%; height: 470px; margin-top: 10px"></div>
 </div>
           
      

            <div id="calendar" style="margin-top: -180px"></div> 
            <div class="clock">
            <canvas id="canvas" width="200" height="200" accesskey="" style="float: right; margin-top: -440px; margin-right:7%">
            </canvas>
            </div><br>
			<div>
<form method="post" action="" onSubmit="return deletedb()"><button style="margin-left:1250px; cursor:pointer; font-size:20px" type="submit" name="delete" id="delete"> DELETE DATABASE </button></form><br>
<form method="post" action="export.php" onSubmit="return exportdb()"><button style="margin-left:1250px; cursor:pointer; font-size:20px" type="submit" name="export" id="export" > EXPORT DATABASE </button>  </form><br>
<form action=""><button style="margin-left:1250px; cursor:pointer; font-size:20px" type="submit" name="import" id="import" > IMPORT DATABASE </button>  </form>
</div>

<?php

/*$link = mysqli_connect('localhost', 'root', '19950901');
if (!$link) {
      die('Could not connect: ' . mysql_error());
    }

	if(isset($_GET['export'])){   
    $dbcon = mysql_select_db($link,'loginsystem');
	$tables= array("admins","appointments","companies","company_vehicles","contacts","customer_vehicle","customers","staff","income","users");
    $sql = "SELECT * INTO OUTFILE 'backup/loginsystem.sql' FROM '$tables' ";
 
    if (mysqli_query($dbcon, $sql)) {
      echo "<h3 style='color:white'>Database Was Successfully Exported\n </h1>";
    } else {
      echo '<h3 style="color:white">Error Exporting Database!!</h1> ';
    }
  }
  */
  
if (isset($_GET['delete'])){
	
    $sql = "DROP DATABASE fun";
 
    if (mysqli_query($link, $sql)) {
      echo "<h3 style='color:white'>Database was successfully deleted\n </h1>";
    } else {
      echo '<h3 style="color:white">Error deleting database!!</h1> ';
    }  
  }
?>
            
            <?php
 $con = mysqli_connect('localhost','root','19950901','loginsystem');
?>
            <?php 
	$query = "SELECT * from income";
	$exec = mysqli_query($con,$query);
	while($row = mysqli_fetch_array($exec)){
	echo "['".$row['date']."',".$row['balance']."],";
	 }
?>
            
            <?php
 $con = mysqli_connect('localhost','root','19950901','loginsystem');
?>
            
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
 <div><script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['Date','Balance'],
 <?php 
			$query = "SELECT * from income";

			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){

		     echo "['".$row['date']."',".$row['balance']."],";
			 }
			 ?> 
 
 ]);

 var options = {
 title: 'Balance Of Our Capital Account',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.BarChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }
	
    </script></div>
            
            
            
        <script>
        var canvas = document.getElementById("canvas");
        var ctx = canvas.getContext("2d");
        var radius = canvas.height / 2;
        ctx.translate(radius, radius);
        radius = radius * 0.90
        setInterval(drawClock, 1000);

        function drawClock() {
          drawFace(ctx, radius);
          drawNumbers(ctx, radius);
          drawTime(ctx, radius);
        }

        function drawFace(ctx, radius) {
          var grad;
          ctx.beginPath();
          ctx.arc(0, 0, radius, 0, 2*Math.PI);
          ctx.fillStyle = 'white';
          ctx.fill();
          grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
          grad.addColorStop(0, '#333');
          grad.addColorStop(0.5, 'white');
          grad.addColorStop(1, '#333');
          ctx.strokeStyle = grad;
          ctx.lineWidth = radius*0.1;
          ctx.stroke();
          ctx.beginPath();
          ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
          ctx.fillStyle = '#333';
          ctx.fill();
        }

        function drawNumbers(ctx, radius) {
          var ang;
          var num;
          ctx.font = radius*0.15 + "px arial";
          ctx.textBaseline="middle";
          ctx.textAlign="center";
          for(num = 1; num < 13; num++){
            ang = num * Math.PI / 6;
            ctx.rotate(ang);
            ctx.translate(0, -radius*0.85);
            ctx.rotate(-ang);
            ctx.fillText(num.toString(), 0, 0);
            ctx.rotate(ang);
            ctx.translate(0, radius*0.85);
            ctx.rotate(-ang);
          }
        }

        function drawTime(ctx, radius){
            var now = new Date();
            var hour = now.getHours();
            var minute = now.getMinutes();
            var second = now.getSeconds();
            //hour
            hour=hour%12;
            hour=(hour*Math.PI/6)+
            (minute*Math.PI/(6*60))+
            (second*Math.PI/(360*60));
            drawHand(ctx, hour, radius*0.5, radius*0.07);
            //minute
            minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
            drawHand(ctx, minute, radius*0.8, radius*0.07);
            // second
            second=(second*Math.PI/30);
            drawHand(ctx, second, radius*0.9, radius*0.02);
        }

        function drawHand(ctx, pos, length, width) {
            ctx.beginPath();
            ctx.lineWidth = width;
            ctx.lineCap = "round";
            ctx.moveTo(0,0);
            ctx.rotate(pos);
            ctx.lineTo(0, -length);
            ctx.stroke();
            ctx.rotate(-pos);
        }
        </script>

        <script> 
function displayCalendar(){
 
 
 var htmlContent ="";
 var FebNumberOfDays ="";
 var counter = 1;
 
 
 var dateNow = new Date();
 var month = dateNow.getMonth();

 var nextMonth = month+1; //+1; //Used to match up the current month with the correct start date.
 var prevMonth = month -1;
 var day = dateNow.getDate();
 var year = dateNow.getFullYear();
 
 
 //Determing if February (28,or 29)  
 if (month == 1){
    if ( (year%100!=0) && (year%4==0) || (year%400==0)){
      FebNumberOfDays = 29;
    }else{
      FebNumberOfDays = 28;
    }
 }
 
 
 // names of months and week days.
 var monthNames = ["January","February","March","April","May","June","July","August","September","October","November", "December"];
 var dayNames = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday", "Saturday"];
 var dayPerMonth = ["31", ""+FebNumberOfDays+"","31","30","31","30","31","31","30","31","30","31"]
 
 
 // days in previous month and next one , and day of week.
 var nextDate = new Date(nextMonth +' 1 ,'+year);
 var weekdays= nextDate.getDay();
 var weekdays2 = weekdays
 var numOfDays = dayPerMonth[month];
     
 
 
 
 // this leave a white space for days of pervious month.
 while (weekdays>0){
    htmlContent += "<td class='monthPre'></td>";
 
 // used in next loop.
     weekdays--;
 }
 
 // loop to build the calander body.
 while (counter <= numOfDays){
 
     // When to start new line.
    if (weekdays2 > 6){
        weekdays2 = 0;
        htmlContent += "</tr><tr>";
    }
 
 
 
    // if counter is current day.
    // highlight current day using the CSS defined in header.
    if (counter == day){
        htmlContent +="<td class='dayNow'  onMouseOver='this.style.background=\"#FF0000\"; this.style.color=\"#FFFFFF\"' "+
        "onMouseOut='this.style.background=\"#FFFFFF\"; this.style.color=\"#ff0000\"'>"+counter+"</td>";
    }else{
        htmlContent +="<td class='monthNow' onMouseOver='this.style.background=\"#FF0000\"'"+
        " onMouseOut='this.style.background=\"#FFFFFF\"'>"+counter+"</td>";    
 
    }
    
    weekdays2++;
    counter++;
 }
 
 
 
 // building the calendar html body.
 var calendarBody = "<table class='calendar'> <tr class='monthNow'><th colspan='7'>"
 +monthNames[month]+" "+ year +"</th></tr>";
 calendarBody +="<tr class='dayNames'>  <td>Sun</td>  <td>Mon</td> <td>Tue</td>"+
 "<td>Wed</td> <td>Thu</td> <td>Fri</td> <td>Sat</td> </tr>";
 calendarBody += "<tr>";
 calendarBody += htmlContent;
 calendarBody += "</tr></table>";
 // set the content of div .
 document.getElementById("calendar").innerHTML=calendarBody;
 
}
</script>


 
            
        </div>
        
     
        
        <div class="footer">
            
        </div>
    </body>    
</html>

