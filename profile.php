<?php 
session_start();
include 'include/db_config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Coder</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="extra/css/main10.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript">
			$(document).ready(function() {
		   $('#example').DataTable();
		} );
	</script>

    <style>
        #logout{
            transition-duration: 1s;
        }
        #logout:hover{
            background-color: aqua;
            color: white;
        }
    </style>
</head>
<body style="color: black;" class="row">
    <div id="home" class="row">
    <a href="https://facebook.com/rxgvnd" class="fa fa-facebook"></a>
    <a href="https://twitter.com/rxgvnd" class="fa fa-twitter"></a>
    <a href="mailto:suryaniira11@gmail.com?subject=subjecttext" class="fa fa-google"></a>
    <a href="https://www.instagram.com/rxgvnd" class="fa fa-instagram"></a>
    <a href="https://www.snapchat.com/add/rxgvnd" class="fa fa-snapchat-ghost"></a>
    <a href="https://join.skype.com/invite/c5k7qIK5LOuB" class="fa fa-skype"></a>
    </div>
    <div class="container" style="float: left;">
        <img src="extra/images/aboutme.png" alt="gallery" style="width: 670px; height: 225px;">
            <div class="col-12 center" style="color: black;">
                <h1>RXGVND's Profile</h1>
            </div>
        <nav class="navbar">
            <menu>
            <li><a href="profile.php">My Profile</a></li>
            <li><a href="view/admin.php">Back</a></li>
            <li><<a href="controller/logout.php" id="logout">LOG OUT</a></li>
            </menu>
        </nav>
        <div id="portofolio" class="row white padding-32">
            <p class="portofolio">00000031410</p>
            <p class="portofolio">Ira Suryani Anggraini</p>
            <p class="portofolio">2018</p><br>
            <p class="portofolio">My Photo's</p>
            <img class="square3a" src="extra/images/11.jpg" alt="11">
            <img class="square3b" src="extra/images/12.jpg" alt="12">
            <img class="square3c" src="extra/images/14.jpg" alt="14">
            <img class="square3d" src="extra/images/13.jpg" alt="13">
            <img class="square3e" src="extra/images/15.jpg" alt="15">
            <img class="square" src="extra/images/4.jpg" alt="4">
            <img class="square" src="extra/images/2.jpg" alt="2">
            <img class="square" src="extra/images/3.jpg" alt="3"> 
            <img class="square" src="extra/images/1.jpg" alt="1">
            <img class="square" src="extra/images/5.jpg" alt="5">
            <img class="square2" src="extra/images/6.jpg" alt="6">
            <img class="square2" src="extra/images/7.jpg" alt="7">
            <img class="square2" src="extra/images/9.jpg" alt="9">
            <img class="square2" src="extra/images/8.jpg" alt="8">
            <img class="square2" src="extra/images/10.jpg" alt="10">
        </div>
    </div>
</body>
</html>