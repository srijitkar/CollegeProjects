<?php
ob_start();
session_start();
if(empty($_GET['id']))
  header('Location:front.php')
?>
<?php                                            //USER LOG IN SECTION//
ob_start();
if(!empty($_REQUEST['submitbtn']))
{
  include('connect.php');
  $name=$_REQUEST['name'];
  $email=$_REQUEST['email'];
  $phno=$_REQUEST['phno'];
  $pwd=$_REQUEST['pwd'];
  $flag=0;
 
  $sql1="SELECT user_email,user_phno FROM user";
  $result1=mysql_query($sql1) or die(mysql_error());
  while($rws=mysql_fetch_array($result1))
  {
    if($rws[0]==$email)
    {
      $flag=1;
      break;
    }
    elseif ($rws[1]==$phno) {
      $flag=2;
      //break;
    }
    else
    {
      $flag=0;
    }
  }


  if($flag==0)
  {
 
  if($name =="") {
    $errorMsg=  "error : You did not enter a name.";
    $code= "1" ;
  }
  
  //check if email field is empty
  elseif($email == ""){
    $errorMsg=  "error : You did not enter a email.";
    $code= "2";
} //check for valid email 
elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([a-zA-Z][a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
  $errorMsg= 'error : You did not enter a valid email.';
  $code= "2";
}
elseif($phno == "") {
    $errorMsg=  "error : Please enter number.";
    $code= "3";
  }
  //check if the number field is numeric
  elseif(is_numeric(trim($phno)) == false){
    $errorMsg=  "error : Please enter numeric value.";
    $code= "3";
  }
  elseif(strlen($phno)>10 or strlen($phno)<10){
    $errorMsg=  "error : Number should be ten digits.";
    $code= "3";
  }
else{
  $sql=("INSERT INTO user VALUES('','$name','$email','$phno','$pwd')");
  mysql_query($sql)or die(mysql_error());
    $errorMsg=  "Registration Sucessfull !!!";
    $code= "4";

  }
    }
elseif($flag==1)
{
  $errorMsg=  "error : your email already exits.";
    $code= "2";
}
else{
  $errorMsg=  "error : your ph no already exits.";
    $code= "3";
}
}
?>

                                            <!--LOG IN SECTION FOR USER-->            



<?php                                       
if(!empty($_REQUEST['submit']))
{
  include('connect.php');
  $user=$_REQUEST['user'];
  $pass=$_REQUEST['password'];
  $sql="SELECT user_email,user_pass,user_id,user_phno FROM user";
  $result=mysql_query($sql) or die(mysql_error());
  while($row=mysql_fetch_array($result))
  {
    if(($user==$row[0] && $pass==$row[1]) or ($user==$row[3] && $pass==$row[1]) )
      {
        $_SESSION['id']=$row[2];
        header('Location:home.php');
      }
     
    else
      {
       $flag=1;
      }
  }

  if($flag==1)
  {
    
    $errorMsg1="invalid email/phno and password";
  }

}
?>




                                            <!--HTML section-->

<!DOCTYPE html>
<html>
<head>
  <title>database in php</title>
  <link rel="stylesheet" href="index_style.css">
  <!--<style type="text/css" >
  .errorMsg{border:1px solid red; }
  .message{color: ; font-weight:bold; }
 </style>-->
 
</head>
<body>
    <!--<video autoplay loop id="vid">
        <source src="vedio.mp4" type="video/mp4">
        </video>-->
       <!-- <div id="header">
   <center>
 <table align="center" width="80%">
    <tr><td>
    <div id="menu">
     <ul>
     <li><a href="home.php">HOME</a></li>
     </ul>
     <ul>
     <li><a href="#">GALLERY</a></li>
     </ul>
     <ul>
     <li><a href="#">ABOUT US</a></li>
     </ul>
     <ul>
     <li><a href="#.php">TEAM</a></li>
     </ul>
     <ul>
     <li><a href="#">CONTACT </a></li>
     </ul>
    </td></tr>
 </table>
</center>
</ul></div>-->
        <div class="loginBox">
      <img src="user.png" class="user">
   
      <h2>Log In Here</h2>
      <?php if (isset($errorMsg1)) { echo "<p class='message'>" .$errorMsg1. "</p>" ;}
      ?>
      <form action="" method="POST">
        <!--<p>Email</p>-->
        <input type="text" name="user" placeholder="Enter Email / Ph no" required>
        <!--<p>Password</p>-->
        <input type="Password" name="password" placeholder="**********" required>
        <input type="submit" name="submit" value="Sign In" > <!--<?php if(isset($submitbtn)){echo $submitbtn; }?>"
<?php if(isset($code) && $code == 4){echo "class=errorMsg" ;}?>>-->
        <!--<a href="#">Forget Password?</a>--> 
        </form><br>
        <label style="color: white;"> <a href="forgetpass.php">Forget password?</a></label>
    </div>
     <div class="loginBox1">
       <img src ="user.png" class="user1">
         <form method="POST">
      <h2> New Registration</h2>
         <?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>
         <form method="POST">
            <input  type="text"    name="name"   placeholder="Name" required>
<?php if(isset($code) && $code == 1)/*{echo "class=errorMsg" ;}*/ ?>  <br>
            <input  type="text"    name="email"  placeholder="Email" required>
<?php if(isset($code) && $code == 2)/*{echo "class=errorMsg" ;}*/?>   <br>
            <input  type="text"    name="phno"  placeholder="Ph no"  required>
<?php if(isset($code) && $code == 3)/*{echo "class=errorMsg" ;}*/?>  <br>
            <input type="Password" name="pwd"    placeholder="Enter Password" required><br>

            <input type="submit"   name="submitbtn"    value="Sign Up"   <?php if(isset($submitbtn)){echo $submitbtn; }?>"
<?php if(isset($code) && $code == 4){echo "class=errorMsg" ;}?>>
    </form>
</body>
</html>



