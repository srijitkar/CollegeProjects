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
    <li><a href="home.php">HOME</a></li>
    </ul>

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
<font size="7%" style="font-family: georgia"><center>YOUR ALBUMS ARE HERE:</font>
<br/>
	<?php 
	$user_id=$_SESSION['id'];
			$query=mysql_query("SELECT alb_id,alb_name FROM album WHERE user_id='$user_id'");
			while($run=mysql_fetch_array($query)){
				$album_id=$run[0];
				$album_name=$run[1];
				$query1=mysql_query("SELECT image FROM image WHERE alb_id='$album_id'");
				$run1=mysql_fetch_array($query1);
				$pic=$run1[0];

			?>
	
				<a href="view_image.php?id=<?php echo $album_id;?>">
				<div id="view_box">
						<img src="<?php echo $pic;?>" width="150" heigth="150" style="border-radius:30px";/>
						<br/>
						<font size="5%" style="font-family: georgia;"><b><?php echo $album_name ?> </b>
					
				</div>							
				</a>
				
		<?php	
		}

	?>	
<div class="clear"> </div>
	</div>

</div>
</body>
</html>