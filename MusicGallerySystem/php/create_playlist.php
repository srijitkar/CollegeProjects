<?php
require('connect.php');
ob_start();
session_start();
if(empty($_SESSION['id']))
	header('Location:front.php');
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>minor3</title>
		<link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <link rel="stylesheet" type="text/css" href="song_design.css">
		
	</head>
	<body oncontextmenu="return false">
		<!--<video autoplay loop id="vid">
        <source src="v1.mp4" type="video/mp4">
        </video>-->
        <div id="header" >
           <!--<img src="m11.png" height="44% " width="50%" style="position:absolute;left:310px; top:7px;">-->
             <h1 style="color:lightblue;" >MUSICALLY</h1>
        
            <div class="btn-group">

            
            <a href="logout.php" class="button" style="position:absolute;left:1100px;">LOG OUT</a>
           <!-- <a href="index.php" class="button" style="position:absolute;left:1100px;">Create another Account</a>-->
            </div>

       
   <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="front.php" >HOME</a><br>

  <div class="dropdown">
  <a href="home.php">PROFILE</a>
  <div class="dropdown-content_playlist">
    
  </div></div>
   <br>
  <a href="#">SONGS</a><br>
  <a href="#">TEAM</a><br>
  <a href="#">ABOUT US</a><br> 
    <div class="dropdown">
  <a href="#" >SETTINGS</a>
        <div class="dropdown-content">
        <a href="#">Edit profile</a>
        </div></div><br>

</div>

<div id="main" class="background"  >
 <span style="font-size:30px;cursor:pointer" onclick="openNav()" >&#9776;</span>
</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("main").style.marginLeft = "250px";
   /* document.body.style.backgroundColor = "rgba(0,0,0,0.1)";*/
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    /*document.body.style.backgroundColor = "white";*/
}
</script>
<hr color="FAF0E6"></hr>

</div>
          
                                      


 

 

</body>
</html>