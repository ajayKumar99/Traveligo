<?php session_start();?>
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
        <link type="text/css" rel="stylesheet" href="css/stylex.css" />
		<script src="js/modernizr-2.6.2.min.js"></script>



	</head>
	<body>
        <video autoplay muted loop id="myVideo">
            <source src="images/train.webm" type="video/webm">
        </video>
        <div class = "topic">
      <h1>TRAVELLERS</h1>
        </div>
        
        <form action="ttrip.php?<?php echo "role=".$_GET['role']; ?>" method="post">
        
        <div id="div1" style="height: 500px;">
        <div id="div2" style="height: inherit; overflow: auto;">
            
            
                <?php
                
               // session_start();
        
        $i=0;
            
            //print_r($seatsel);
            $user = array();
                    while($i < $_SESSION['travelno']){
                        echo "<div class = \"div3\">";
                        echo "<div class = \"users_image\"><img src = \"images/users.jpg\" class = \"users_image\"></div>";
                        echo "<div class = \"traveller\"><p class = \"timefont2\">Traveller ".($i + 1)."</p></div>";
                        echo "<div class = \"usename\">";
                        echo "<p class = \"timefont\">Name</p>";
                        echo "<input type = \"text\" name = \"username[]\" class = \"user_name\">";
                        echo "</div>";
                        echo "<div class = \"emailid\">";
                        echo "<p class = \"timefont\">Email</p>";
                        echo "<input type = \"email\" name = \"email[]\" class = \"user_name\">";
                        echo "</div>";
                        echo "<div class = \"phone\">";
                        echo "<p class = \"timefont\">Mobile</p>";
                        echo "<input type = \"text\" name = \"phoneno[]\" class = \"user_name\">";
                        echo "</div>";
                        
                        $i = $i + 1;
                    }
                ?>
            
            
</div>
        </div>
            <input type="submit" value="Book" id = "userbut"/>
        </form>  
        <?php
        if(isset($_POST['username'])){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['emails'] =  $_POST['email'];
            $_SESSION['phoneno'] = $_POST['phoneno'];
            
            //print_r($usernames);
        }
        ?>
        <div class="navbar">
  <a href="booking.php">Flight</a>
  <a href="train.php" class="active">Train</a>
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