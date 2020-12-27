 <?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "music2");  
 if(isset($_POST["playlist_id"]))  
 {  
      $query = "SELECT * FROM playlist WHERE id = '".$_POST["playlist_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 
 ?>