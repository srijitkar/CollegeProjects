<?php
require('connect.php');
ob_start();
session_start();
if(empty($_SESSION['id']))
  header('Location:home.php');
?>
<?php
$con= mysqli_connect('localhost','root','');
                 mysqli_select_db($con,'music2');
                 $id=$_GET['id'];
                // $sql= "DELETE  FROM playlist_song WHERE ID='$_GET[ps_id]'";
                 $sql= "DELETE  FROM playlist_song WHERE s_id='$id'";

                if(mysqli_query($con,$sql))
                {
                   
                   $id=$_GET['id1'];
					  
                	//header("refresh:1;url=song.php");
                	header("Location:song.php?id=$id");
				            
                }
                else
                	 echo "error";

?>