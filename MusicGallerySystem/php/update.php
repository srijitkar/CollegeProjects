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
                // $sql= "DELETE  FROM playlist_song WHERE ID='$_GET[ps_id]'";
                 $id= $_GET['id'];
                 $sql= "UPDATE playlist SET name='$_POST[name2]' WHERE id='$id' ";

                if(mysqli_query($con,$sql))
                
                	header("refresh:1;url=playlist_exmpl.php");
                else
                	 echo "error";

?>