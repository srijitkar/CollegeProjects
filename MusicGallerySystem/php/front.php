<?php
require('connect.php');
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="CustomStyles.css" rel="stylesheet" />
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
        
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar" >
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#aboutus">ABOUT US</a></li>
        <li><a href="#gallery">GALLERY</a></li>
         <li><a href="#team">TEAM</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <?php
        if(empty($_SESSION['id']))
        {
        ?>
         <li><a href="index.php?id=<?php echo "1";?>">REGISTER</a></li>
         <?php
       }
       else
       {
       ?>
        <li><a href="home.php">PROFILE</a></li>
        <?php
      }
      ?>


        <!--<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">ABC</a></li>
            <li><a href="#">XYZ</a></li>
            <li><a href="#">EFG</a></li> 
          </ul>
        </li>-->
       <!-- <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>-->
      </ul>
       <h1>MUSICALLY</h1>
        
    </div>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="photo\m1.jpg" alt="New York" width="1000" height="300">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="photo\m2.jpg" alt="Chicago" width="1000" height="300">
        <div class="carousel-caption">
        </div>      
      </div>
    
      <div class="item">
        <img src="photo\m3.jpg" alt="Los Angeles" width="1000" height="300">
        <div class="carousel-caption">
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (about us section) -->
<div id="aboutus" class="container text-center">
  <h3 >ABOUT US</h3>
  <p><em>We love music!</em></p>
  <p>Musically is a place for you to enjoy your favorite music as well as <br>
    discover new ones under oneroof.Il's tailored to suit your own convinience;<br> 
    keeping all your tracks in well organized and personalized librariesans that too at free of cost!<br>
    If you have any doubts/suggestions/complaints,feel free to contact our development team.</p>
  <br>
 
</div>

<!-- Container (Gallery Section) -->
<div id="gallery" class="bg-2">
  <div class="container">
    <h3 class="text-center">GALLERY</h3>
   <!--<br><br>
<div class="gallery">
  <a target="_blank" href="song_playlist(R_Sangeet).php">
    <img src="photo\m5.jpg" alt="" width="300" height="200">
  </a>
  <div class="desc">Rabindra Nath Tagore</div>
</div>

<div class="gallery">
  <a target="_blank" href="song_playlist(Nazrul).php">
    <img src="photo\m8.png" alt="" width="600" height="400">
  </a>
  <div class="desc">Kaji Najrul Islam</div>
</div>

<div class="gallery">
  <a target="_blank" href="song_playlist(Manna).php">
    <img src="photo\m9.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Manna Dey</div>
</div>

<div class="gallery" >
  <a target="_blank" href="m4.jpg">
    <img src="photo\m10.png" alt="" width="600" height="400">
  </a>
  <div class="desc">Hemanta mukhopadhyay</div>
</div> 

<div class="gallery">
  <a target="_blank" href="m4.jpg">
    <img src="photo\m11.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Sandhya mukhopadhyay</div>
</div> 

<div class="gallery" style="position: relative;left:830px; bottom: 307px;">
  <a target="_blank" href="m4.jpg">
    <img src="photo\m4.jpg" alt="" width="600" height="400">
  </a>
  <div class="desc">Arijit Singh</div>
</div> -->
<div class="row">
            <div class="col-xs-12">

                <div id="imageCarousel-2" class="carousel slide" data-interval="2000"
                     data-ride="carousel" data-pause="hover" data-wrap="true">

                    <ol class="carousel-indicators" style="position:absolute;top: 270px;">
                        <li data-target="#imageCarousel-2" data-slide-to="0" class="active"></li>
                        <li data-target="#imageCarousel-2" data-slide-to="1"></li>
                       <!-- <li data-target="#imageCarousel-2" data-slide-to="2"></li>-->
                    </ol>

                    <div class="carousel-inner" style="position: absolute;left:25px;">
                        <div class="item active">
                            <div class="row">

                              <div class="gallery">
                            <a target="_blank" href="index.php?id=1">
                            <img src="photo\m5.jpg" alt="" width="300" height="200"></a>
                             <div class="desc">Rabindra Nath Tagore</div>
                            </div>

                        <div class="gallery">
                       <a target="_blank" href="index.php?id=1">
                       <img src="photo\m8.png" alt="" width="600" height="400"></a>
                       <div class="desc">Kaji Najrul Islam</div>
                       </div>

                       <div class="gallery">
                        <a target="_blank" href="index.php?id=1">
                       <img src="photo\m9.jpg" alt="" width="600" height="400"></a>
                       <div class="desc">Manna Dey</div>
                        </div>
                         <div class="gallery">
                        <a target="_blank" href="index.php?id=1">
                       <img src="photo\m10.png" alt="" width="600" height="400"></a>
                       <div class="desc">Hemanta Mukhopadhya</div>
                        </div>
                         <div class="gallery">
                        <a target="_blank" href="index.php?id=1">
                       <img src="photo\m11.jpg" alt="" width="600" height="400"></a>
                       <div class="desc">Sondha Mukhopadhya</div>
                        </div>
                    
                      </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="gallery">
                        <a target="_blank" href="index.php?id=1">
                       <img src="images/m_rafi.jpg" alt="" width="600" height="400"></a>
                       <div class="desc">Mahammad Rafi</div>
                        </div>
                         <div class="gallery">
                        <a target="_blank" href="index.php?id=1">
                       <img src="image/1.jpg" alt="" width="600" height="400"></a>
                       <div class="desc">Udit Narayan</div>
                        </div>
                         <div class="gallery">
                        <a target="_blank" href="index.php?id=1">
                       <img src="image/2.jpg" alt="" width="600" height="400"></a>
                       <div class="desc">Santunu Moitro</div>
                        </div>
                         <div class="gallery">
                        <a target="_blank" href="index.php?id=1">
                       <img src="image/3.jpg" alt="" width="600" height="400"></a>
                       <div class="desc">A.R.Rahaman</div>
                        </div>
                         <div class="gallery">
                        <a target="_blank" href="index.php?id=1">
                       <img src="image/4.jpg" alt="" width="600" height="400"></a>
                       <div class="desc">Sonu Nigam</div>
                        </div>
                              
                                
                            </div>
                        </div>

                       <!-- <div class="item">
                            <div class="row">
                                <div class="gallery">
                        <a target="_blank" href="song_playlist(Manna).php">
                       <img src="photo\m9.jpg" alt="" width="600" height="400"></a>
                       <div class="desc">Manna Dey</div>
                        </div>
                         <div class="gallery">
                        <a target="_blank" href="song_playlist(Manna).php">
                       <img src="photo\m9.jpg" alt="" width="600" height="400"></a>
                       <div class="desc">Manna Dey</div>
                        </div>
                         <div class="gallery">
                        <a target="_blank" href="song_playlist(Manna).php">
                       <img src="photo\m9.jpg" alt="" width="600" height="400"></a>
                       <div class="desc">Manna Dey</div>
                        </div>
                         <div class="gallery">
                        <a target="_blank" href="song_playlist(Manna).php">
                       <img src="photo\m9.jpg" alt="" width="600" height="400"></a>
                       <div class="desc">Manna Dey</div>
                        </div>
                         <div class="gallery">
                        <a target="_blank" href="song_playlist(Manna).php">
                       <img src="photo\m9.jpg" alt="" width="600" height="400"></a>
                       <div class="desc">Manna Dey</div>
                        </div>
                               
                               
                            </div>
                        </div>-->
                    </div>

                    <a href="#imageCarousel-2" class="carousel-control left" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" style="position:absolute;top: 120px;"></span>
                    </a>
                    <a href="#imageCarousel-2" class="carousel-control right" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" style="position:absolute;top: 120px;"></span>
                    </a>
                </div>

            </div>
        </div>

    
    
    
    </div>
  </div>

<br><br>
  <!-- Container (TEAM Section) -->
<div id="team" class="bg-1">
   <div class="container">
    <h3 class="text-center" style="position: relative;right: px;">OUR TEAM</h3><br>
     <!--<p class="text-center"></p>-->
     <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="photo\s2.jpg" alt="Paris" width="400" height="300">
          <p><strong>SRIJIT KAR</strong></p>
          <p>phno-9564247814</p>
          <!--<button class="btn"></button>-->
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="photo\p1.jpg" alt="New York" width="400" height="300">
          <p><strong>PROTIM GHOSH</strong></p>
          <p>phno-9836257959 </p>
          <!--<button class="btn">Buy Tickets</button>-->
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="photo\a.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>ALAPAN BARIK</strong></p>
          <p>phno-8017859710</p>
          <!--<button class="btn">Buy Tickets</button>-->
        </div>
      </div>
            <div class="col-sm-4">
        <div class="thumbnail" style="position: relative; left:970px; bottom: 400px;">
          <img src="photo\s1.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>SOUVIK BANERJEE</strong></p>
          <p>phno-9748859085</p>
          <!--<button class="btn">Buy Tickets</button>-->
        </div>
      </div>
    </div>
    
    
    </div>
  </div>

  
 

<!-- Container (Contact Section) -->
<div id="contact" class="container1" >
  <h3 class="text-center" style="color: #fff;">CONTACT</h3>
  <p class="text-center" style="position: relative; top:70px;"><em>Please give your feedback in Comment</em></p>

  <div class="row">
    <div class="col-md-4"  style="position: relative;right:320px; top:100px;">
      <p>Music Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Kolkata, West Bengal</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: 033 2448 1097</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8" style="position: relative;left:420px; bottom: 80px;" >
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
</div>


<!-- Add Google Maps -->
<div id="googleMap"></div>

<script>
function myMap() {
var myCenter = new google.maps.LatLng(22.4491,88.3915);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwYTO47p18VVl3n01R96n5kVQYipuZdvE&callback=myMap"></script>-->

</div>
<!-- Footer -->

<footer class="text-center nopadding">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p> <a href="" data-toggle="tooltip" title="">TOP</a></p> 
</footer>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
