<!DOCTYPE html>
<html>
	<head>
		
        <link rel="stylesheet" type="text/css" href="css/seat.css" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo1.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
        
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

<link type="text/css" rel="stylesheet" href="css/style.css" />
		<script src="js/modernizr-2.6.2.min.js"></script>
        
        <?php
        session_start();
          $_SESSION['role'] = $_GET['role'];
          $flightno = $_SESSION['role'];
                                $seats = array();
                                $host = "localhost:3307";
                                $user = "root";
                                $password = "";
                                $conn = mysqli_connect($host , $user , $password , "traveligo");
                                if(!$conn){
                                    die(mysql_error());
                                }
        
                                $sql = "select seatbooked from seats where flightno = '$flightno';";
                                $query = mysqli_query($conn , $sql);
                                while($row = mysqli_fetch_array($query , MYSQLI_ASSOC)) {
//echo($row['booked_seats']);
                                    $seats[] = $row['seatbooked'];
                                }
        ?>

        
        <script type="text/javascript">
            function chkcontrol(j) {
                var total=0;
                console.log(document.seat.length);
                for(var i=0; i < document.seat.length; i++){
                    if(document.seat[i].checked){
                        total =total +1;
                    }
                    if(total > <?php echo $_SESSION["travelno"];?>){
                        alert("Please Select only <?php echo $_SESSION["travelno"];?> seat<?php if($_SESSION["travelno"]>1) echo "s";?>"); 
                        document.seat[j].checked = false ;
                        return false;
                    }
                }
            } 
        </script>


	</head>
	<body>
        <video autoplay muted loop id="myVideo">
            <source src="images/flight.webm" type="video/webm">
        </video>
        <div class = "topic">
      <h1>SEAT SELECTION</h1>
        </div>
        <div class="back">
        <form action="userdetails.php?<?php echo "role=".$flightno; ?>" name="seat" method="post">
       <div class="plane">
      <div class="cockpit">
        <?php
          
          echo "<h1>Please select a seat for flightno : ".$flightno."</h1>";
        ?>
      </div>
      <div class="exit exit--front fuselage">

      </div>
           
        <ol class="cabin fuselage">
        <li class="row row--1">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(0);'id="1A" value = "1A"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"1A") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="1A">1A</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(1);'id="1B" value = "1B"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"1B") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="1B">1B</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(2);' id="1C" value = "1C"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"1C") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="1C">1C</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(3);'disabled id="1D" value = "1D"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"1D") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="1D">1D</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(4);'id="1E" value = "1E"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"1E") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="1E">1E</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(5);'id="1F" value = "1F"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"1F") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="1F">1F</label>
            </li>
          </ol>
        </li>
        <li class="row row--2">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(6);'id="2A" value = "2A"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"2A") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="2A">2A</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(7);'id="2B" value = "2B"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"2B") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="2B">2B</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(8);'id="2C" value = "2C"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"2C") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="2C">2C</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(9);'id="2D" value = "2D" 
                     <?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"2D") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="2D">2D</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(10);'id="2E" value = "2E"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"2E") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="2E">2E</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(11);'id="2F" value = "2F"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"2F") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="2F">2F</label>
            </li>
          </ol>
        </li>
        <li class="row row--3">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(12);'id="3A" value = "3A"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"3A") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="3A">3A</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(13);'id="3B" value = "3B"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"3B") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="3B">3B</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(14);'id="3C" value = "3C"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"3C") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="3C">3C</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(15);'id="3D" value = "3D"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"3D") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="3D">3D</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(16);'id="3E" value = "3E"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"3E") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="3E">3E</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(17);'id="3F" value = "3F"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"3F") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="3F">3F</label>
            </li>
          </ol>
        </li>
        <li class="row row--4">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(18);'id="4A" value = "4A"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"4A") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="4A">4A</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(19);'id="4B" value = "4B"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"4B") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="4B">4B</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(20);'id="4C" value = "4C"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"4C") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="4C">4C</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(21);'id="4D" value = "4D"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"4D") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="4D">4D</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(22);'id="4E" value = "4E"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"4E") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="4E">4E</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(23);'id="4F" value = "4F"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"4F") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="4F">4F</label>
            </li>
          </ol>
        </li>
        <li class="row row--5">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(24);'id="5A" value = "5A"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"5A") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="5A">5A</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(25);'id="5B" value = "5B"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"5B") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="5B">5B</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(26);'id="5C" value = "5C"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"5C") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="5C">5C</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(27);'id="5D" value = "5D"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"5D") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="5D">5D</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(28);'id="5E" value = "5E"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"5E") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="5E">5E</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(29);'id="5F" value = "5F"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"5F") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="5F">5F</label>
            </li>
          </ol>
        </li>
        <li class="row row--6">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(30);'id="6A" value = "6A"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"6A") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="6A">6A</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(31);'id="6B" value = "6B"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"6B") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="6B">6B</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(32);'id="6C" value = "6C"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"6C") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="6C">6C</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(33);'id="6D" value = "6D"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"6D") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="6D">6D</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(34);'id="6E" value = "6E"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"6E") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="6E">6E</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(35);'id="6F" value = "6F"
                     <?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"6F") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="6F">6F</label>
            </li>
          </ol>
        </li>
        <li class="row row--7">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(36);'id="7A" value = "7A"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"7A") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="7A">7A</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(37);'id="7B" value = "7B"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"7B") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="7B">7B</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(38);'id="7C" value = "7C"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"7C") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="7C">7C</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(39);'id="7D" value = "7D"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"7D") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="7D">7D</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(40);'id="7E" value = "7E"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"7E") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="7E">7E</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(41);'id="7F" value = "7F"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"7F") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="7F">7F</label>
            </li>
          </ol>
        </li>
        <li class="row row--8">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(42);'id="8A" value = "8A"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"8A") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="8A">8A</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(43);'id="8B" value = "8B"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"8B") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="8B">8B</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(44);'id="8C" value = "8C"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"8C") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="8C">8C</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(45);'id="8D" value = "8D"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"8D") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="8D">8D</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(46);'id="8E" value = "8E"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"8E") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="8E">8E</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(47);'id="8F" value = "8F"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"8F") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="8F">8F</label>
            </li>
          </ol>
        </li>
        <li class="row row--9">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(48);'id="9A" value = "9A"
                     <?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"9A") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="9A">9A</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(49);'id="9B" value = "9B"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"9B") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="9B">9B</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(50);'id="9C" value = "9C"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"9C") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="9C">9C</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(51);'id="9D" value = "9D"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"9D") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="9D">9D</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(52);'id="9E" value = "9E"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"9E") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="9E">9E</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(53);'id="9F" value = "9F"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"9F") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="9F">9F</label>
            </li>
          </ol>
        </li>
        <li class="row row--10">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(54);'id="10A" value = "10A"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"10A") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="10A">10A</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(55);'id="10B" value = "10B"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"10B") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="10B">10B</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(56);'id="10C" value = "10C"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"10C") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="10C">10C</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(57);'id="10D" value = "10D"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"10D") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="10D">10D</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(58);'id="10E" value = "10E"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"10E") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="10E">10E</label>
            </li>
            <li class="seat">
              <input type="checkbox" name = "seat[]"  onclick='chkcontrol(59);'id="10F" value = "10F"<?php
                     foreach($seats as $s){
                         //print_r($s);
                         if(strcmp($s,"10F") == 0)
                             echo 'disabled';
                     }?>/>
              <label for="10F">10F</label>
            </li>
          </ol>
        </li>
      </ol>
      <div class="exit exit--back fuselage">

      </div>
               
    
    </div>
                
                   <input type="submit" value="Select" class="button">
            
                </form>
        </div>
        
        <?php
        
                                $host = "localhost:3307";
                                $user = "root";
                                $password = "";
                                $conn = mysqli_connect($host , $user , $password , "traveligo");
                                if(!$conn){
                                    die(mysql_error());
                                }
                                
                                global $seating;
                               
                                if(isset($_POST['seat'])){
                                    $seating = $_POST['seat'];
                                    $_SESSION["seats"] = $seating;
                                    print_r($seating);
                                    //$seatsbooked = array();
                                    //foreach($seating as $x){
                                        //array_push($seatsbooked , $x);
                                        //echo $x;
                                        //$sql = "insert into seats values('$flightno' , '$x')";
                                        //$query = mysqli_query($conn , $sql);
                                    //}
                                }
        
                                //echo $seatsbooked;
        
        ?>
        
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
        
	</body>
</html>

