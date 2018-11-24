<?php session_start();?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		
        
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo1.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
        <style>
            div#div5{
                width: 500px;
                margin-left: 525px;
            }
            .filesel{
                width: 200px;
                float:left;
            }
            .insbut{
                margin-top: -18.5px;
                width: 200px;
                float: right;
            }
            
            #insert{
                background-color: #f4511e;
              border: none;
              color: white;
              padding: 16px 32px;
              text-align: center;
              font-size: 16px;
              margin: 4px 2px;
              opacity: 0.6;
              transition: 0.3s;
                height: 56.5px;
            }
            #insert:hover {opacity: 1}
            
            #image{
                background-color: dodgerblue;
              border: none;
              color: white;
              padding: 16px 32px;
              text-align: center;
              font-size: 16px;
              margin: 4px 2px;
              opacity: 0.6;
              transition: 0.3s;
                width: 300px;
            }
            #image:hover {opacity: 1}
            .img-block{float: left; margin-right: 5px; text-align: center;}
    img{width: 375px; 
        min-height: 250px; 
        margin-bottom: 10px; 
        box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; 
        border:6px solid #f7f7f7;
        border-radius: 16px;
            }
            
            .images{
                margin-left: 190px;
            }
        </style>
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

<!--link type="text/css" rel="stylesheet" href="css/style.css" /-->
        <link type="text/css" rel="stylesheet" href="css/stylex3.css" />
		<script src="js/modernizr-2.6.2.min.js"></script>

        
        <?php  
 $host = "localhost:3307";
                                $user = "root";
                                $password = "";
                                $conn = mysqli_connect($host , $user , $password , "traveligo");
                                if(!$conn){
                                    die(mysql_error());
                                }
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO images(name) VALUES ('$file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  


	</head>
	<body>
        <video autoplay muted loop id="myVideo">
            <source src="images/rain.webm" type="video/webm">
        </video>
        <div class = "topic">
      <h1>IMAGE GALLERY</h1>
        </div>
        
        
        <div id = "div5">
        
        <form method="post" enctype="multipart/form-data">  
            <div class = "filesel">
                     <input type="file" name="image" id="image" />
                </div>
                     <br />  
            <div class = "insbut">
                     <input type="submit" name="insert" id="insert" value="Insert" class="userbut" />
                </div>
                </form>  
        
        </div>
        
        
        <div class = "images">
                <?php  
                $query = "SELECT * FROM images ORDER BY id DESC";  
                $result = mysqli_query($conn, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  <div class = "img-block">
                          
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="300" class="img-thumnail" />  
                               </div>
                     ';  
                }  
            ?>  
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