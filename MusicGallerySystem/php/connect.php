<?php
ob_start();
//session_start();
$server="localhost";
$user="root";
$password="";
$db="music2";
mysql_connect($server,$user,$password);
mysql_select_db($db);
?>

