 <?php  
 $connect = mysqli_connect("localhost", "root", "", "music2");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $name = mysqli_real_escape_string($connect, $_POST["name"]);  
   
      if($_POST["playlist_id"] != '')  
      {  
           $query = "UPDATE playlist SET name='$name' WHERE id='".$_POST["playlist_id"]."'";  
           $message = 'Your updation is sucessfull';  
      }  
      else
      {  
           $query = "INSERT INTO playlist(name)VALUES('$name'); ";  
           $message = 'You sucessfully create a playlist';  
      }  
    
     
}
    
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM playlist ORDER BY id DESC";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Playlist Name</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                          <th width="15%">Delete</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["name"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td> 
                          <td><input type="button" name="delete" value="delete" id="' . $row["id"] . '" class="btn btn-info btn-xs delete_data" /></td>   
                          
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 
 ?>
 