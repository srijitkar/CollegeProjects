<!DOCTYPE html>
<html>
<head>
  <title>search item</title>
  <link rel="stylesheet" type="text/css" href="p.css">  
<link rel="stylesheet" type="text/css" href="p-left.css">  
</head>
<body>

<div id="wrapper">
       <div id="header">
          <p id="text" >SPSRS</p>
        <a href="home.php  " id="swagbtna" style="position:absolute;left:400px;">HOME</a>
        <a href="#.php" id="swagbtna" style="position:absolute;left:550px;">ABOUT US</a>
       <!-- <a href="#.html" id="swagbtna" style="position:absolute;left:700px;">GALLERY</a>        
        <a href="#.html" id="swagbtna" style="position:absolute;left:865px;">BLOG</a>          
      <a href="#.html" id="swagbtna" style="position:absolute;left:990px;">CONTACT</a>-->
      <input type="search" name="search" placeholder="Search" id="swagbtna1" style="position:absolute;left:750px;">
        <a href="login.php" id="swagbtna" style="position:absolute;left:1050px;">ADMIN PANEL</a>      
       </div>
       <div id="leftpannel"></div>
       <div id="content"><br>
       <div id="outerbox">
       <div id="sliderbox">
              <center><img  src="5.jpg" height="500" width="900"  style="border-radius: 12px;">
              <img src="2.jpg" height="500" width="900">
              <img src="3.jpg" height="500" width="900">
              <img src="4.jpg" height="500" width="900">
               <!--<img src="5.jpg" height="500" width="900">-->
           </center>

       </div>

       </div>
       <br><br>
         <hr height="67%" width="100%" outline="hide"> <br> 


<?php
$search=$_GET['id'];
require('connect.php');
         $query=mysql_query("SELECT image,img_id FROM image WHERE img_name='$search' ");
         while($rws=mysql_fetch_array($query)){
          $image=$rws[0];
        ?> 
         
                      <div id="view_box">

                     
                      <img src ="<?php echo $image ?>" height="200" width="250" />
                        
                        </div>
       <?php
        }
        ?>




</body>
</html>