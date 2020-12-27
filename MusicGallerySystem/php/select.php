<?php  
 if(isset($_POST["playlist_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "music2");  
      $query = "SELECT * FROM playlist WHERE id = '".$_POST["playlist_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>playlist Name</label></td>  
                     <td width="70%">'.$row["name"].'</td>  
                </tr>  
               
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>
 