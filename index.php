<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome | KHUBI PLUMBING</title>
	<link rel="icon" href="img/l.png" sizes="16x16 32x32 64x64" type="image/png">
	<link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<!------------ Header -------->
	<div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.php">
                <img src="img/l.png" />
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php" target="_self">
                            <i class="fas fa-home"></i>HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#info-modal">
                            <i class="fas fa-info fas-2"></i>ABOUT US
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php" target="_self">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    
    <!------------- Banner ------------>
    <div class="banner-container"></div>

    
    <!------------- Marquee ----------->
    <div class="bar-info"> 
		<marquee direction="right" class="roll_over">
			<span style="margin:0 10px">
				<b><i class="fa fa-phone"></i>
				+91-9905260286</b>
			</span>
			<span style="margin: 0 5px">
				<b><i class="fa fa-envelope"></i>
				<a href="mailto:asad11052000@gmail.com" style="color:inherit; text-decoration:none;">asad11052000@gmail.com</a></b>
			</span>
		</marquee>
	</div>

    
    <!------------ Page Container ------------>
    <div class="page-container">
        <h1 class="heading" style="">
            Materials & Works
        </h1>       
    </div>

    
    <!------------------ Posts ------------------->
    <div id="posts">

    </div>

    <div>

    </div>
    <br>
    <br>
    <br>
    <br>
    <!------------------ Footer -------------------->
    <div class="footer">
    	<div class="page-container footer-container">
    		<div class="footer-a">
    			<div class="footer-b">
		    		<b>Contact Us :-<br>
		                <span>ASAD <i class="fa fa-phone"></i>&nbsp; +91-9905260286</span><br>
		                <span><i class="fa fa-envelope"></i>&nbsp; asad11052000@gmail.com</span><br>
		            </b>
		            <b>Address :-<br>
		                <span> BHIKHACHAK, ROAD N0. 21, GARDANIBAGH, PATNA - 800002</span>
		            </b>
		        </div>
		    </div>
		    <div class="footer-copyright">© 2022 Copyright KHUBI PLUMBING </div>
    	</div>
	</div>

    <div id="loading"></div>


</body>
</html>

<?php
    include "includes/info_modal.php";
 ?>s