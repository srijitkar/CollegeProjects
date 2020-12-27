<?php
include('head.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>forget</title>
	<link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>
<div id="wrapper">
<div id="header">
	 	<a href="home.php  " id="swagbtna" style="position:absolute;left:800px;">HOME</a>
	 	<a href="login.php" id="swagbtna" style="position:absolute;left:950px;">ADMIN PANEL</a>
</div>
<br><br><br>
	<div id="content">
	<img src="17.jpg" border-radious="4px;">
		<form method="POST">
			<br /><br><br>
			<input type="text" name="fname" placeholder="Enter your Name" value="<?php if(!empty($_REQUEST['submit'])) echo $_REQUEST['fname']?>">
			<input type="text" name="email" placeholder="Enter your ph no/Email-id" value="<?php if(!empty($_REQUEST['submit'])) echo $_REQUEST['email']?>"><br />
			<input type="submit" name="submit" value="display password" id="display">
		</form>

		<?php
		if($_REQUEST['submit'])
		{
			include('connect.php');
			$flag=0;
			$fname=$_REQUEST['fname'];
			$email=$_REQUEST['email'];
			$sql="SELECT user_name,user_email,user_pwd FROM user";
			$result=mysql_query($sql) or die();
			while($rws=mysql_fetch_array($result))
			{
				$first=$rws[0];
				$last=$rws[1];
				if($first==$fname && $last==$email)
				{
					$pw=$rws[2];
					echo "<br><br>.<input type='submit' name='no' value='$pw' id='display'>";
					$flag=1;
				}
				

			}
			if($flag==0)
				echo "<br><br>.<input type='submit' value='Please enter your valid  name and ph no/email id' id='display'>";
		}
		?>
	</div>
	</div>
</body>
</html>