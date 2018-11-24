<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		
        
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo1.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

<link type="text/css" rel="stylesheet" href="css/style.css" />
		<script src="js/modernizr-2.6.2.min.js"></script>



	</head>
	<body>
        <video autoplay muted loop id="myVideo">
            <source src="images/flight.webm" type="video/webm">
        </video>
        <div class = "topic">
      <h1>FLIGHT BOOKING</h1>
        </div>
        
        <div id="div1" style="height: 500px;">
        <div id="div2" style="height: inherit; overflow: auto;">
        
        
        <?php
            
            //session_start();
        
        ob_start();
            include 'booking.php';
        ob_end_clean();
            $_SESSION['dest'] = $dest;
            $_SESSION['dept'] = $dept;
            $sql = "select a.flightname , r.timedept , r.timearr , a.basefare , a.flightno from airline a join routes r on a.routeno = r.routeid where r.from_x = '$dest' and r.to_x = '$dept'";
                                    $query = mysqli_query($conn , $sql);
                                    
                                    //echo "<div id = \"route\">";
                                    
            
                                    $fuel = 600;
                                    $gst = 162;
                                    $passservice = 153;
                                    $userdevfee = 12;
            
                                    $_SESSION['fuel'] = $fuel;
                                    $_SESSION['gst'] = $gst;
                                    $_SESSION['passservice'] = $passservice;
                                    $_SESSION['userdevfee'] = $userdevfee;
                                    
            
                                    $totaltax = $fuel + $gst + $passservice + $userdevfee;
                                    while($rows = mysqli_fetch_row($query)){
                                        echo "<div class = \"div3\" onclick = \"location.href = 'seatmap.php?role=".$rows[4]."';\">";
                                        echo "<div class = \"route1\">";
                                        echo "<img src = \"images/".$rows[0].".jpg\" class = \"logo\">";
                                        echo "</div>";
                                        echo "<div class = \"time1\">";
                                        echo "<p class = \"timefont\">".$rows[1]."</p>";
                                        echo "<label class = \"timelabel\">".$dest."</label>";
                                        echo "</div>";
                                        echo "<div class = \"time2\">";
                                        echo "<p class = \"timefont\">".$rows[2]."</p>";
                                        echo "<label class = \"timelabel\">".$dept."</label>";
                                        echo "</div>";
                                        //echo "<img src=\"images/".$rows[0].".jpg\">";
                                        echo "<div class = \"hovering\">";
                                        echo "<div class = \"time2\">";
                                        echo "<p class = \"timefont\">Rs. ".($rows[3] + $totaltax)."</p>";
                                        //echo "";
                                        //echo "<img src = \"images/".$rows[0].".jpg\" class = \"logo\">";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                    
                                    }
                                    
                                    
                                    //print_r($_SESSION);
        ?>
            
        
            </div>
        </div>
        
        <div class="navbar">
  <a href="booking.php" class="active">Flight</a>
  <a href="train.php">Train</a>
  <a href="bus.php">Bus</a>
            <a href="cruise.php">Cruise</a>
</div>
        
        <div class = "menu">
		
			<div class="component">
				<button class="cn-button" id="cn-button">+</button>
				<div class="cn-wrapper" id="cn-wrapper">
				    <ul>
				      <li><a href="imagegallery.php"><span class="icon-picture"></span></a></li>
				      <li><a href="booking.php"><span class="icon-plane"></span></a></li>
				      <li><a href="index.php"><span class="icon-home"></span></a></li>
				      <li><a href="holiday.php"><span class="icon-globe"></span></a></li>
				      <li><a href="contact.php"><span class="icon-envelope-alt"></span></a></li>
				     </ul>
				</div>
				<div id="cn-overlay" class="cn-overlay"></div>
			</div>
		<script src="js/polyfills.js"></script>
		<script src="js/demo1.js"></script>
        </div>