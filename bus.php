

<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		
        
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo1.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

<link type="text/css" rel="stylesheet" href="css/style.css" />
		<script src="js/modernizr-2.6.2.min.js"></script>



	</head>
	<body>
        <video autoplay muted loop id="myVideo">
            <source src="images/bus.webm" type="video/webm">
        </video>
        <div class = "topic">
      <h1>BUS BOOKING</h1>
        </div>
        
        
        <div class="tanish">
            <div class = "dhruv">
						<div class="booking-form">
							<form action="bbook.php" method = "post">
								<div class="form-group">
				
									<span class="form-label">From</span>
									<input class="form-control" list="dest" placeholder="Enter a destination or hotel name" name = "dest" autocomplete="off">
                                     <datalist id="dest">
                                        <option value="Delhi                DEL">
                                        <option value="Mumbai               BOM">
                                        <option value="Lucknow              LKO">
                                        <option value="Banglore             BLR">
                                        <option value="Pune                 PNQ">
                                        <option value="Goa                  GOI">
                                        <option value="Chennai              MAA">
                                        <option value="Cochin               COK">
                                        <option value="Kolkata              CCU">
                                        <option value="Ahmedabad            AMD">
                                      </datalist>
								
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">To</span>
									<input class="form-control" list="retr" placeholder="Enter a destination or hotel name" name = "retr" autocomplete="off">
                                     <datalist id="retr">
                                        <option value="Delhi                DEL">
                                        <option value="Mumbai               BOM">
                                        <option value="Lucknow              LKO">
                                        <option value="Banglore             BLR">
                                        <option value="Pune                 PNQ">
                                        <option value="Goa                  GOI">
                                        <option value="Chennai              MAA">
                                        <option value="Cochin               COK">
                                        <option value="Kolkata              CCU">
                                        <option value="Ahmedabad            AMD">
                                      </datalist>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Departure Date</span>
											<input class="form-control" type="date" required name="ret">
										</div>
									</div>
								</div>
								<div class="row">
									
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adults</span>
											<select class="form-control" name="adults">
												<option value = "1">1</option>
												<option value = "2">2</option>
												<option value = "3">3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Children</span>
											<select class="form-control" name="child">
												<option value = "0">0</option>
												<option value = "1">1</option>
												<option value = "2">2</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<input class="submit-btn" type ="submit" value="Check availability">
								</div>
							</form>
                            
                            
						</div>
					</div>
            <div class = "prayas">
                <h2>Book Flights fast and easy.</h2>
                <span>
                <p>Traveligo uses fast and secure<br>servers to give you the fastest<br>results.</p>
                </span>
            </div>
        </div>
        
        <div class="navbar">
  <a href="booking.php" >Flight</a>
  <a href="train.php" >Train</a>
  <a href="bus.php" class="active">Bus</a>
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
        <?php
                                if(isset($_POST['dest'])){
                                $dest = $_POST['dest'];
                                $dept = $_POST['retr'];
                                $ret = $_POST['ret'];
                                $adult = $_POST['adults'];
                                $child = $_POST['child'];
                                
                                $host = "localhost:3307";
                                $user = "root";
                                $password = "";
                                $conn = mysqli_connect($host , $user , $password , "traveligo");
                                if(!$conn){
                                    die(mysql_error());
                                }
        
                                //$sql = "insert into fBooking values('$dest' , '$dept' , '$ret' , '$adult' , '$child' , NULL)";
                                
                                //$query = mysqli_query($conn , $sql);
                                    $dest = substr($dest, 0, strpos($dest, ' '));
                                    $dept = substr($dept, 0, strpos($dept, ' '));
                                   // echo strlen($dept) ,$dest;
                                    $_SESSION["travelno"] = $adult + $child;
                                    $_SESSION["date"] = $ret;
                                    //echo $_SESSION["travelno"];
                                    
                                    
                                }
        ?>
	</body>
</html>