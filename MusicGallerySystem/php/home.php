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
  <style>
    
    .search{
      background-color:#4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
  float: right;
  border-radius: 4px;
  position: absolute;
  right:30px;


    }
.search:hover {opacity: 1}
  </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <a href="playlist_exmpl.php">PLAYLIST</a>
  <div class="dropdown-content_playlist">
    
  </div></div>
   <br>
  <a href="newsfeed\index.php">SONG RELATED NEWS</a><br>
  <a href="front.php#team">TEAM</a><br>
  <a href="front.php#aboutus">ABOUT US</a><br> 
    <div class="dropdown">
  <a href="editprofile.php" >SETTINGS</a>
        <div class="dropdown-content">
       <!-- <a href="#">Edit profile</a>-->
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
<form class="background">
<!--<input type="text" name="search" placeholder="Search By                                                                                                                                         Movie , Artist , Song Name">-->
<a href="s_index.php" class="search">Search Any Song</a>


</form>
</div>
          
                                       <!--End Header Part and staring of Main Part-->

<br><br></br>
 

<!--<h3 class="newsong2">FEATURED ARTISTS</h3>-->

<div id="wrapper">
  <div>
    <hr class="hr1">
    <h3 class="newsong1">OLD IS GOLD</h3>
  <div class="gallery">
  <a target="_blank" href="playlist.php?id=1">
    <img src="image\m5.jpg" alt="" width="300" height="200">
  </a>
  <div class="desc">RABINDRA NATH TAGORE</div>
</div>
<div class="gallery">
  <a target="_blank" href="playlist.php?id=2">
    <img src="image\m8.png" alt="" width="600" height="400">
  </a>
  <div class="desc">KAJI NAJRUL ISLAM</div>
</div>

<div class="gallery">
  <a target="_blank" href="playlist.php?id=3">
    <img src="image\m9.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">MANNA DEY</div>
</div>

<div class="gallery">
  <a target="_blank" href="playlist.php?id=4">
    <img src="image\m10.png" alt="" width="600" height="400">
  </a>
  <div class="desc">HEMANTYA MUKHOPADHYA</div>
</div> 

<div class="gallery">
  <a target="_blank" href="playlist.php?id=5">
    <img src="image\m11.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">SANDHYA MUKHOPADHYA </div>
</div> 

<div class="gallery">
  <a target="_blank" href="playlist.php?id=6">
    <img src="image\m_rafi.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">RAFI</div>
</div>
</div>

<div class="newsong">
  <hr class="hr1">
  <h3 class="newsong1">FEATURED ARTISTS</h3>
<div class="gallery">
  <a target="_blank" href="playlist.php?id=7">
    <img src="image\1.jpg" alt="" width="300" height="200">
  </a>
  <div class="desc">Udit Narayan</div>
</div>
<div class="gallery">
  <a target="_blank" href="playlist.php?id=8">
    <img src="image\2.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Shantanu Moitra</div>
</div>

<div class="gallery">
  <a target="_blank" href="playlist.php?id=9">
    <img src="image\3.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">A. R. Rahman</div>
</div>

<div class="gallery">
  <a target="_blank" href="playlist.php?id=10">
    <img src="image\4.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Sonu Nigam</div>
</div> 

<div class="gallery">
  <a target="_blank" href="playlist.php?id=11">
    <img src="image\5.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Alka Yagnik</div>
</div> 

<div class="gallery">
  <a target="_blank" href="playlist.php?id=12">
    <img src="image\m4.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Arijit Singh</div>
</div>
</div> 
 

                    <!-- ID PASS TO home_playlist.php -->
<!--
 <div id="wrapper">
  <div>
    <hr class="hr1">
    <h3 class="newsong1">OLD IS GOLD</h3>
  <div class="gallery">
  <a target="_blank" href="home_playlist.php?id=1">
    <img src="image\m5.jpg" alt="" width="300" height="200">
  </a>
  <div class="desc">RABINDRA NATH TAGORE</div>
</div>
<div class="gallery">
  <a target="_blank" href="song_playlist(Nazrul).php">
    <img src="image\m8.png" alt="" width="600" height="400">
  </a>
  <div class="desc">KAJI NAJRUL ISLAM</div>
</div>

<div class="gallery">
  <a target="_blank" href="song_playlist(Manna).php">
    <img src="image\m9.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">MANNA DEY</div>
</div>

<div class="gallery"
<a target="_blank" href="song_playlist.php">
    <img src="image\m10.png" alt="" width="600" height="400">
  </a>
  <div class="desc">HEMANTYA MUKHOPADHYA</div>
</div> 

<div class="gallery">
  <a target="_blank" href="song_playlist.php">
    <img src="image\m11.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">SANDHYA MUKHOPADHYA </div>
</div> 

<div class="gallery">
  <a targ
et="_blank" href="song_playlist(Rafi).php">
    <img src="image\m_rafi.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">RAFI</div>
</div>
</div>

<div class="newsong">
  <hr class="hr1">
  <h3 class="newsong1">FEATURED ARTISTS</h3>
<div class="gallery">
  <a target="_blank" href="m1.jpg">
    <img src="image\1.jpg" alt="" width="300" height="200">
  </a>
  <div class="desc">Udit Narayan</div>
</div>
<div class="gallery">
  <a target="_blank" href="m2.jpg">
    <img src="image\2.jpg" alt="" width="600" height="400">
  </a>

  <div class="desc">Shantanu Moitra</div>
</div>

<div class="gallery">
  <a target="_blank" href="m8.jpg">
    <img src="image\3.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">A. R. Rahman</div>
</div>

<div class="gallery">
  <a target="_blank" href="m4.jpg">
    <img src="image\4.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Sonu Nigam</div>
</div> 

<div class="ga
llery">
  <a target="_blank" href="m4.jpg">
    <img src="image\5.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Alka Yagnik</div>
</div> 

<div class="gallery">
  <a target="_blank" href="m4.jpg">
    <img src="image\m4.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Arijit Singh</div>
</div>
</div> 
-->
</body>
</html>