<?php

if(!empty($_REQUEST['sub']) && !empty($_REQUEST['name']) && !empty($_REQUEST['gen']) && !empty($_REQUEST['ph_no']) && !empty($_REQUEST['pws']) && !empty($_REQUEST['day']) && !empty($_REQUEST['month']) && !empty($_REQUEST['year']))
{
  include('connect.php');
  $name=$_REQUEST['name'];
  $gender=$_REQUEST['gen'];
  $day=$_REQUEST['day'];
  $month=$_REQUEST['month'];
  $year=$_REQUEST['year'];
  $birth=$day."/".$month."/".$year;
  $email=$_REQUEST['ph_no'];
  $password=$_REQUEST['pws'];

  mysql_query("INSERT INTO `photo`.user(user_name,user_gen,user_birth,user_email,user_pwd) Values('$name','$gender','$birth','$email','$password')") or die(mysql_error());
  header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Your Account</title>
	<link rel="stylesheet" type="text/css" href="register_style.css">
</head>
<body bgcolor="#eee">

<div class="wrapper">

 <div id="acnt_header" >
  <br/>
 <font size="20%" style="color:#D2FDFD">
 <table align="center" >
 <tr><td align="center" class="style" style="color:grey">
<i><b> Create Your Account</b></i>
 	</td></tr></table></font>
</div>


<div id="menu">
<font size="5%" style="font-family:georgia;color:black">
<form action="" method="POST">
<table align="center" width="80%">
<tr><td>
<table align="center" width="100%">
<tr><td>
 Name</td>
  	   <td><input type="text" name="name" value="<?php if(!empty($_REQUEST['sub']))
        echo $_REQUEST['name'];?>"<?php if(! empty($_REQUEST['sub']) && empty($_REQUEST['name'])) echo"id='error';"?>>   </td></tr>

  		<td>Gender</td>
  		<td>male<input type="radio" name="gen" value="male">
  		 female<input type="radio" name="gen" value="female"></td></tr>


<tr><td>D.O.B</td>
         <td>
         <select name="day">
            <?php
            echo " <option> DD</option>";
             for($i=1;$i<=31;$i++)
               echo " <option> $i </option> ";
                       
             ?> 
           </select>
           <select  name="month">
            <?php
             echo " <option> MM</option>"; 
             for($i=1;$i<=12;$i++)
               echo " <option> $i </option> ";
             ?> 
           </select>
           <select  name="year">
            <?php
            echo " <option>YY</option>";
             for($i=1980;$i<=2020;$i++)
               echo " <option> $i </option> ";
             ?> 
           </select>
           </td></tr>

<tr><td>
Phone Number/Email</td>
  	   <td><input type="text" name="ph_no" value="<?php if(!empty($_REQUEST['sub']))
        echo $_REQUEST['ph_no'];?>"<?php if(! empty($_REQUEST['sub']) && empty($_REQUEST['ph_no'])) echo"id='error';"?>>   </td></tr>

<tr><td>

<tr><td>
Password</td>
  	   <td><input type="password" name="pws" value="<?php if(!empty($_REQUEST['sub']))
        echo $_REQUEST['pws'];?>"<?php if(! empty($_REQUEST['sub']) && empty($_REQUEST['pws'])) echo"id='error';"?>>   </td></tr>
  </table>
  </td></tr>
  <tr><td align="center" > <br><br><br> <input type="submit" name="sub" value="Create_Account" class="acnt_box" style="color: white">      
</td></tr>
</table>
</form>
</font>
</div>
</div>
</body>
</html>