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
	<table align="center" width="70%">
	<tr><td>
    <div id="menu">
    <ul>
    <li><a href="profile.php">View Album</a></li>
    </ul>

		<ul>
	<li><a href="#.php">Album
	<ul>
		<li><a href="create_album.php"> Create album</li>
		<li><a href="view_albm.php"> Upload photo</li>
	</ul>
	</li>
	<li><a href="#.php"> Settings
	<ul>
	<li><a href="edit_profile.php"> Edit Profile</li>
	</ul>
	<li><a href="logout.php"> Log out </li>	

	</div>
</td></tr>
</table>
</center>
</div>
	<div id="mid">
	<font size="7%" style="font-family: georgia;color: blue"> Images:</font>
	<br/>
         <?php
         $album_id=$_GET['id'];
         	$query=mysql_query("SELECT img_id,img_name,image FROM image WHERE alb_id='$album_id'");
         	while($run =mysql_fetch_array($query))
         	{
         		$name=$run[1];
         		$image=$run[2];
         		$image_id=$run[0];
		?>  

		<a href="show.php?id=<?php echo $image_id;?>">
		<div id="view_box">
		<img src ="<?php echo $image ?>" height="200" width="250" />
		<br/>
		

		</div>  
        </a>
		<?php
	}
	?>

	</div>

</div>
</body>
</html>