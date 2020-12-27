<?php
$con= mysqli_connect('localhost','root','');
                 mysqli_select_db($con,'music2');
                 $sql= "DELETE  FROM playlist WHERE ID='$_GET[id]'";
                if(mysqli_query($con,$sql)) 
                {
                	//header("refresh:1;url=playlist_exmpl.php");
                	header("Location:playlist_exmpl.php");
                	
                }
                else
                {
                	 echo "error";
                }

?>