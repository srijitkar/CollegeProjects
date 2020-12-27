<?php
require('connect.php');
if(empty($_SESSION['id']))
  header('Location:home.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	
		<link rel="stylesheet" type="text/css" href="p-left.css">
			<link rel="stylesheet" type="text/css" href="protim.css">
</head>
<body bgcolor="#eee">
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
		<li><a href="view_albm.php">Upload photo</li>
	</ul>
	</li>

	<li><a href="#.php">Settings
	<ul>
	<li><a href="#.php">Edit Profile</li>
	</ul>
	<li><a href="logout.php">Log out </li>	

	</div>
</td></tr>
</table>
</center>
</div>
	<div id="mid">
	<center>
<div id="acnt_header">
   <form method="POST">
  <!-- <font size="5%">
       <center>  
         <input type="text" name="fnumber" placeholder="Email Name" style="padding: 10px;">
       </center>
     </font>
     <br>-->
     <center><input type="submit" name="sub_btn" value="show your profile" id="btn_font"></center>
   </form>
</div>

<?php
  if(!empty($_REQUEST['sub_btn']) || !empty($_REQUEST['update']))
  {
  	$formnumber=$_SESSION['id'];

  	if(!empty($_REQUEST['update']))
  	{
  		$name=$_REQUEST['name'];
  	
      $email=$_REQUEST['ph_no'];
      $password=$_REQUEST['pws'];
  		$sql="UPDATE `photo`.`user` SET user_name='$name',user_email='$email',user_pwd='$password' WHERE 
  		     user_id='$formnumber'";
  		mysql_query($sql) or die(mysql_error());
      header('Location:profile.php');
    }
    $sql="SELECT user_name,user_email,user_pwd FROM `photo`.user WHERE user_id='$formnumber'";
    $result=mysql_query($sql) or die(mysql_error());
    $rws=mysql_fetch_array( $result)or die(mysql_error());
?>
<br><br><br>
<div id="menu">
<font size="5%" style="font-family:georgia;color:black">
<form action="" method="POST">
<table align="center" width="60%">
<tr><td>
<table align="center" width="100%">
<tr><td>
 Name</td>
  	   <td><input type="text" id="text" name="name" value="<?php echo $rws[0];?>">   </td></tr>

<tr><td>
Phone Number/Email</td>
  	   <td><input type="text" id="text" name="ph_no" value="<?php echo $rws[1];?>">  </td></tr>
<tr><td>
Password</td>
  	   <td><input type="text" id="text" name="pws" value="<?php echo $rws[2];?>">   </td></tr>
  </table>
  </td></tr>
  <tr><td><input type="hidden" name="fnumber" value="<?php echo $formnumber;?>"></td></tr>
  <tr><td align="center" > <br><br>
  <input type="submit" name="update" value="Edit_Account" id="btn_style">      
</td></tr>
</table>
</form>
</font>
</div>

</div>

	</div>
</center>
</div>

 <?php
}
?>
</body>
</html>