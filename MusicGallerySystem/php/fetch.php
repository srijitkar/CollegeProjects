<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "music2");
$request = mysqli_real_escape_string($connect, $_POST["query"]);
$query = "SELECT * FROM audios2  WHERE s_name  LIKE '%".$request."%'  LIMIT 4 ";

$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["s_name"];


 }
 echo json_encode($data);
}

?>