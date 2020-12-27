<?php
require('connect.php');
if(empty($_SESSION['id']))
  header('Location:home.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>log-in page</title>
	<link rel="stylesheet" type="text/css" href="s.css">
  <link rel="stylesheet" type="text/css" href="protim.css">
  <link rel="stylesheet" type="text/css" href="p-left.css">
  
</head>
<body>
<div id="main">
<div id="head">

 <center>
  <table align="center" width="70%">
  <tr><td>
    <div id="menu">
     <ul>
      <li><a href="home.php">Home</a></li>
    </ul>
    <ul>
      <li><a href="profile.php">View Album</a></li>
    </ul>

    <ul>
  <li><a href="#.php">Album
  <ul>
    <li><a href="#.php">Create album</a></li>
    <li><a href="view_albm.php">Upload photo</a></li>
  </ul>
  </li>
  <li><a href="#.php">Settings
  <ul>
  <li><a href="edit_profile.php">Edit Profile</li>
  </ul>
  <li><a href="logout.php">Log out </li>  
  </div>
</td></tr>
</table>
</center>
</div>
    <div id="mid">

<div id="content">

<?php                     //create album            
        if(!empty($_REQUEST['sub'])){
          $name=$_REQUEST['albumname'];
          $user_id=$_SESSION['id'];
          if(empty($name)){
            echo "please enter the album name";
          }else{
            mysql_query("INSERT INTO album (user_id,alb_name) VALUES ('$user_id','$name')") or die(mysql_error());
            echo "album created successfully!!</br>";
          }
        }
        ?>


      <br><br>
   <form method="POST">
        <h1>CREATE ALBUM</h1>
        <br><br><br><br>
       <h2 align="left" id="font">ENTER THE ALBUM NAME :</h2>
       <br>
       <!--<img src="alb.jpg">-->
       <input type="text" name="albumname" placeholder="Album Name">
        <br><br><br><br>
      <input type="submit" name="sub" value="CREATE" id="btntype">
       <br><br><br><br><br><br><br>
     <!--<p style="font-size:22px;text-align:center;">Add another account?<a href=login.php>Register</p> </a>-->     
     </form>
   </div>  
</div>
</div>
</body>
</html>