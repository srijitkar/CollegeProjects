<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	
</head>
<link rel="stylesheet" type="text/css" href="p.css">	
<link rel="stylesheet" type="text/css" href="p-left.css">  
<body>
    <div id="wrapper">
       <div id="header">
          <p id="text"><font size="6%">SPSRS</p></font>
       	<a href="home.php  " id="swagbtna" style="position:absolute;left:800px;">HOME</a>
       	<!--<a href="#.php" id="swagbtna" style="position:absolute;left:550px;">ABOUT US</a>-->
    
        <form method="POST">
     <!-- <input type="text" name="search" placeholder="Search" id="swagbtna1" style="position:absolute;left:550px;">
      <input type="submit" name="srch_btn" value="Search" id="swagbtna1"  style="position:absolute;left:850px;">-->
      </form>
      <?php
        if(empty($_SESSION['id'])){
            echo "<a href='login.php' id='swagbtna' style='position:absolute;left:950px;'>ADMIN PANEL</a>";
                      }
                      else
                      {
                         echo "<a href='profile.php' id='swagbtna' style='position:absolute;left:950px;'>ADMIN PANEL</a>";

                      }
                      ?>
        
       </div>
       <div id="leftpannel"></div>
       <div id="content"><br>
       <div id="outerbox">
       <div id="sliderbox">
              <center>
              <img  src="19.jpg" height="500" width="900"  style="border-radius: 12px;">
              <img src="14.jpg" height="500" width="900">
              <img src="15.jpg" height="500" width="900">
              <img src="16.jpg" height="500" width="900">
               <!--<img src="5.jpg" height="500" width="900">-->
           </center>

       </div>

       </div>
       <br><br>

         <hr height="67%" width="100%" outline="hide"> <br> 
         <center><font size="7%" style="font-family: georgia;color: blue"> Photo Gallery</font></center>
  <br/>
         <table>
         <tr><td align="center" width="15%">
           <?php
            ;
            ?>
         </td><td>
         <?php
         $query=mysql_query("SELECT image,img_id FROM image ORDER BY img_id DESC LIMIT 9");
         while($rws=mysql_fetch_array($query)){
          $image=$rws[0];
        ?> 
         
                      <div id="view_box">

                      <a href="display.php?id=<?php echo $rws[1];?>"/>
                      <table align="center">
                      <tr>
                      <td><img src ="<?php echo $image ?>" height="200px" width="300px" /></td>
                       </tr>
                       </table> 
                        </div>


       <?php
        }
        ?>
        
      </td>
      </tr>
      </table>

       	</div>
       </div>

     </div>  
</body>
</html>
 