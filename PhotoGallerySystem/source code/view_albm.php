<?php
require('connect.php');
if(empty($_SESSION['id']))
	header('Location:home.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>profile	</title>
	<link rel="stylesheet" type="text/css" href="protim.css">
	<link rel="stylesheet" type="text/css" href="p-left.css">


</head>
<body>
<div id="main">

	<div id="head">
	<center>
	<table align="center" width="70%" >
	<tr><td>
    <div id="menu">
    <ul>
    <li><a href="home.php">HOME</a></li>
    </ul>
    <ul>
    	<li><a href="profile.php">View Album</li>
    </ul>

		<ul>
	<li><a href="#.php">Album
	<ul>
		<li><a href="create_album.php">Create album</li>
		<li><a href="#.php">Upload photo</li>
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
	   <div id="content1">


<?php  										//image upload
if(!empty($_REQUEST['upload'])){
$target="home/image/".$_FILES['image']['name'];
$image=$_FILES['image']['name'];
$img_name=$_REQUEST['img_name'];
$alb_id=$_REQUEST['albm'];
if(!empty($alb_id) && !empty($img_name))
{
mysql_query("INSERT INTO image (alb_id,image,img_name) VALUES('$alb_id','$target','$img_name')") or die(mysql_error()); 
  
	move_uploaded_file($_FILES['image']['tmp_name'],$target) ;
	echo "File has been uploaded succesfully...";
}
	else{
		echo "Problem has ben occured......";
	}
}
?>


	   <form method="POST" action="view_albm.php" enctype="multipart/form-data" >
	    <br><br>
	   	<h1>UPLOAD YOUR PHOTO</h1>
	   	<br><br><br><br>
	   	<input type="text" name="img_name" placeholder="Enter image name" id="text">
	   	<br><br>
	   	<input type="file" name="image">
	   	<br><br>
	   	<p style="font-size: 22px;">select album 
	   	<select name='albm'>			
	   							
	   		<?php

	$user_id=$_SESSION['id'];
	$query=mysql_query("SELECT alb_id,alb_name,user_id FROM album WHERE user_id='$user_id'");
	while($run=mysql_fetch_array($query))
	{
			$user_id=$run[2];
			$album_id=$run[0];
			$alubum_name=$run[1];
			echo "<option value='$album_id'> $alubum_name </option>";
  } 

	?>
	   	</select>
	   		</p>
	   	<br><br><br>
	   	<input type="submit" name="upload" value="Upload" id="btn_style1">

	   	</form>
	   </div>

	</div>
</div>
</body>
</html>