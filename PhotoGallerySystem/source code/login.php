<?php
ob_start();
session_start();
?>
<?php                                       //For Log in
if(!empty($_REQUEST['submit']))
{
  include('connect.php');
  $user=$_REQUEST['user'];
  $pass=$_REQUEST['password'];
  $sql="SELECT user_email,user_pwd,user_id FROM user";
  $result=mysql_query($sql) or die(mysql_error());
  while($row=mysql_fetch_array($result))
  {
    if($user==$row[0] && $pass==$row[1])
      {
        $_SESSION['id']=$row[2];
        header('Location:profile.php');
      }
    else
      {
       $flag=1;
      }
  }

  if($flag==1)
  {
    echo 'please enter correct details';
  }
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>log-in page</title>
	<link rel="stylesheet" type="text/css" href="log.css">
</head>
<body bgcolor="#B4B4B4">
<a href="home.php"><img src="18.jpg" height="89px" width="89px" align="right" id="homebtn" style="position: absolute; right: 32px; top:49px; border-radius: 100%;"></a>
<form method="POST">
    <div id="content">
      <img src="student.jpg" style="border-radius:16px;">
        <div id="form-input">
        <input type="text" name="user" placeholder="Enter Email id or phone number">
       <!-- <img src="user.jpg" id="form-input::before">-->
        </div>
        <div id="form-input">
        <input type="password" name="password" placeholder="Enter Password">
        </div>
        <input type="submit" name="submit" value="LOGIN" id="btn-login"><br>

        <a href="forget1.php">Forget Password?</a><br><br><br><br>
        <div style="font-family:georgia;" style="text-decoration: none">
        <!--<font size="7%">-->
        <a href="register.php" id="signin"/> Sign-up</a><br>
       <!--</font>-->
</form>

</body>
</html>