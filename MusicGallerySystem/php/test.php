<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo $_GET['id'];
?>

<?PHP
 
$a="hello";
 
?>
<script>
function echoHello(){
 alert("<?PHP hello(); ?>");
 }
</script>
 
<?PHP
FUNCTION hello(){
 GLOBAL $a;
 ECHO $a;
 }
 
?>
 
<button onclick="echoHello()">Say Hello</button>
</body>
</html>