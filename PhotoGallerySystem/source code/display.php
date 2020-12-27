<?php
require('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Display image</title>
</head>
<body bgcolor="#eee">
<form method="POST">
<table align="right">

<tr>
<td>
<textarea name="comment" cols="40" rows="4" placeholder="Write your comment on this image...."></textarea>
</td>
</tr>
<tr>
<td>
<input type="submit" name="send" value="Send"> 
</td>
</tr>

<tr><td><br><br><br>
<a href="home.php">Back to Home</a>
</td>
</tr>
</table>
</form>


<?php

$image_id=$_GET['id'];
$query=mysql_query("SELECT img_name,image FROM image WHERE img_id='$image_id'");
while($run=mysql_fetch_array($query))
{
		$image=$run[1];
		$image_name=$run[0];
?>

<div id="view_box">
		<img src ="<?php echo $image ?>" height="500" width="700" />
		<br/>
		<b><?php echo $image_name ;?></b>

		</div>  

<?php		
}
?>

<br/><b><u>Comment-Section</u></b>
<br/><br/>
<?php 												//comment	

if(!empty($_REQUEST['send']))
{  
	$image_id=$_GET['id'];
	$comment=$_REQUEST['comment'];
	if(empty($comment)){
        		echo "please write comment<br/>";
        	}else{
        		mysql_query("INSERT INTO comment(img_id,comment) VALUES ('$image_id','$comment')") or die(mysql_error());
        		
        	}
	
}
?>

<?php
$image_id=$_GET['id'];
$query=mysql_query("SELECT comment FROM comment WHERE img_id='$image_id'");
  while($run=mysql_fetch_array($query)){
  	$comment=$run[0];
   echo " $comment "."<br/>"."<br/>";
}
?>
</body>
</html>