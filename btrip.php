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
        <link type="text/css" rel="stylesheet" href="css/stylex2.css" />
		<script src="js/modernizr-2.6.2.min.js"></script>



	</head>
	<body>
        <video autoplay muted loop id="myVideo">
            <source src="images/bus.webm" type="video/webm">
        </video>
        <div class = "topic">
      <h1>TRAVELLERS</h1>
        </div>
        
        <form action="#" method="post">
        
        <div id="div1" style="height: 500px;">
        <div id="div2" style="height: inherit; overflow: auto;">
            
            
            <?php
            //session_start();
            
                ob_start();
            include 'buserdetails.php';
            //$seatssel = $seating;
            //print_r($seating);
        ob_end_clean();
            $host = "localhost:3307";
                                $user = "root";
                                $password = "";
                                $conn = mysqli_connect($host , $user , $password , "traveligo");
                                if(!$conn){
                                    die(mysql_error());
                                }
            
            $flightno = $_GET['role'];
            $sql = "select a.bname , r.from_x , r.to_x , r.timedept, r.timearr , a.basefare from bus a join routes r on a.routeno = r.routeid where a.bid = '$flightno'";
            
            
            
                      
                      $usernames = $_SESSION['username'];
                      $emails = $_SESSION['emails'];
                      $phone = $_SESSION['phoneno'];
            
                
                /*$usernames = $_POST['username'];
            $emails = $_POST['email'];
            $phone = $_POST['phoneno'];*/
            
                $j = 0;
            $totalamount = 0;
            
            //$seating = $_POST['seat'];
           // $seatsel = $_SESSION["seats"];
            
            //print_r($_SESSION);
            
            while($j<sizeof($usernames)){
                $query = mysqli_query($conn , $sql);
                echo "<div class = \"div3\">";
                echo "<div class = \"userdetail\">";
                echo "<p class = \"timefont\">".$usernames[$j]."</p>";
                echo "<br>";
                echo "<p class = \"timefont2\">".$emails[$j]."</p>";
                echo "<br>";
                echo "<p class = \"timefont2\">".$phone[$j]."</p>";
                echo "<br>";
                echo "</div>";
                echo "<div class = \"flightdetail\">";
                while($data = mysqli_fetch_row($query)){
                //echo "<p>".$flightno."</p>";
                echo "<p class = \"timefont2\">".$data[0]."</p>";
                    echo "<br>";
                    $_SESSION['flightname'] = $data[0];
                echo "<p class = \"timelavel\" style = \"font-family: 'Sofia';text-align: center;font-size: 20px;color: powderblue;\">".$data[1]."</p>";
                    echo "<br>";
                echo "<p class = \"timelavel\" style = \"font-family: 'Sofia';text-align: center;font-size: 20px;color: powderblue;\">".$data[2]."</p>";
                    echo "<br>";
                echo "<p class = \"timefont2\">".$_SESSION["date"]."</p>";
                echo "<br>";
                echo "<p class = \"timefont2\">".$data[3]." - ".$data[4]."</p>";
                echo "<br>";
                //echo "<p style = \"font-family: 'Sofia';text-align: center;font-size: 18px;\"><span style = \"font-family: 'Sofia';text-align: center;font-size: 20px;\">Seat No. : </span>".$seatsel[$j]."</p>";
                    echo "<br>";
                echo "</div>";
                echo "<div class = \"pricedetail\">";
                $basefare = $data[5];
                    $_SESSION['basefare'] = $basefare;
                $fuel = $_SESSION['fuel'];
                $gst = $_SESSION['gst'];
                $passservice = $_SESSION['passservice'];
                $userdevfee = $_SESSION['userdevfee'];
                $totaltax = $fuel + $gst + $passservice + $userdevfee;
                $totalpamount = $basefare + $totaltax;
                echo "<p style = \"font-family: 'Sofia';text-align: center;font-size: 20px;\">Basefare :   ".$basefare."</p>";
                    echo "<br>";
                echo "<p style = \"font-family: 'Sofia';text-align: center;font-size: 16px;\">Airline Fuel :   ".$fuel."</p>";
                    echo "<br>";
                echo "<p style = \"font-family: 'Sofia';text-align: center;font-size: 16px;\">G.S.T. :   ".$gst."</p>";
                    echo "<br>";
                echo "<p style = \"font-family: 'Sofia';text-align: center;font-size: 16px;\">Passenger Service Charge :   ".$passservice."</p>";
                    echo "<br>";
                echo "<p style = \"font-family: 'Sofia';text-align: center;font-size: 16px;\">User Dev. Fees :   ".$userdevfee."</p>";
                    echo "<br>";
                echo "<p style = \"font-family: 'Sofia';text-align: center;font-size: 16px;\">Total Tax :   ".$totaltax."</p>";
                    echo "<br>";
                echo "<p style = \"font-family: 'Sofia';text-align: center;font-size: 16px;\">Total Amount :   ".$totalpamount."</p>";
                    echo "<br>";
                //echo "<p>".$totalpamount."</p>";
                }
                echo "</div>";
                echo "</div>";
                $totalamount = $totalamount + $totalpamount;
                $j++;
            }
            $l=1;
            ?>
            
            
            <!--
            <div class = "div3">
                
            </div>
            -->

        </div>
        </div>
        <div id = "footer" style="background-color: crimson; margin= 2px;">
            <p id = "ftext" style="font-family: 'Sofia';font-size: 26px; background-color: crimson;">Total payable Amount : <?php echo $totalamount;?> </p>
            <input type="submit" value="Pay" id = "userbut" name = "userbut"/>
            
            
        
        
    <?php
                
                $traveldate = $_SESSION["date"];
                if(isset($_POST['userbut'])){
                    $k = 0;
                    while($k < sizeof($usernames)){
                        $sql1 = "insert into user(username , email , phoneno , trav_date , busno) values('$usernames[$k]' , '$emails[$k]' , '$phone[$k]' , '$traveldate' , '$flightno')";
                        $query = mysqli_query($conn , $sql1);
                        $k++;
                    }
                    //echo "<form action = \"leave.php?role=".$_GET['role']."\"";
                    // echo "<input type=\"submit\" value=\"Print\" id = \"userbut1\" name = \"userbut\" onclick=\"location.href='leave.php?role=".$_GET['role']."';\" />";
                    //echo "</form>";
                    echo "<div id = \"userbut1\">";
                    echo "<a href = \"tleave.php?role=".$_GET['role']."\">Print</a>";
                    echo "</div>";
                }
                
               
            
            ?>
            </div>
            </form>
         <div class="navbar">
  <a href="booking.php">Flight</a>
  <a href="train.php" >Train</a>
  <a href="bus.php"  class="active">Bus</a>
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