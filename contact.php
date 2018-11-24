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
        <link type="text/css" rel="stylesheet" href="css/stylex3.css" />
		<script src="js/modernizr-2.6.2.min.js"></script>



	</head>
	<body>
        <video autoplay muted loop id="myVideo">
            <source src="images/rain.webm" type="video/webm">
        </video>
        <div class = "topic">
      <h1>CONTACT US</h1>
        </div>
            
            <div class="container">  
  <form id="contact" action="" method="post">
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
  </form>
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