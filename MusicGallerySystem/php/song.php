<?php
require('connect.php');
ob_start();
session_start();
if(empty($_SESSION['id']))
  header('refresh:1;url:home.php');
?>

<!DOCTYPE html>
<html>
 <head>
  <title>playlist</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
   <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;

    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    .text{
      font-size: 20px;
    }

  </style> 
 </head>
 <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><b>MUSICALLY</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="newsfeed/index.php">SONG RELATED NEWS</a></li>
        <li><a href="playlist_exmpl.php">YOUR PLAYLIST</a></li>
        <li><a href="s_index.php">SEARCH ANY SONG</a></li>
        <li><a href="front.php#contact">Contact Us </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

      </ul>
    </div>
  </div>
</nav>
 
 
    <div class="col-sm-9">
     
 <br /><br />
 <?php
$playlist=$_GET['id'];
$query=mysql_query("SELECT u_id,name,id FROM playlist WHERE id='$playlist'");
$run=mysql_fetch_array($query);
echo '<div class="text">';
echo " <strong>YOUR PLAYLIST NAME: $run[1] </strong>";
echo '</div>'
?>
  
  <!--<div class="container" >-->
   <br /><br />
   <form method="POST">
    <div  class="form-inline">
   <label>SEARCH ANY SONG HERE:</label>
   <form method="POST">
   <input type="text" name="country" id="song" class="form-control" autocomplete="off" placeholder="Type song Name" required/><br><br>
   <button type="submit"  name="add" value="ADD SONG" class="btn btn-success" style="position: relative;left:260px;">ADD SONG IN PALYLIST</button>
   <!--<center><font size="4"><input type="submit" name="add" value="ADD"></font></center>-->
  </div>
  </form>
</div>
  <!--</div>-->
</div>
</div>

 </body>
</html>

<?php                                   //Songs Uploaded in playlist
ob_start();
if (isset($_REQUEST['add'])) {
  $playlist=$_GET['id'];
  $uid=$_SESSION['id'];
  $song=$_REQUEST['country'];
 $query=mysql_query("SELECT u_id,name,id FROM playlist WHERE id='$playlist'");
  $run=mysql_fetch_array($query);
  $query2=mysql_query("SELECT s_name,s_id FROM audios2 WHERE s_name='$song'");
  $run2=mysql_fetch_array($query2);
 mysql_query("INSERT INTO playlist_song VALUES('','$playlist','$run[1]','$run2[0]','$run2[1]')") or die(mysql_error()) ;
}
?>
<br /><br />


<!--<center>
 <table border="1" width="200">
  <tr>
  <th>PLAYLIST SONGS</th>
  </tr>-->
  
                     
                     <br />  
                     <div id="playlist_table">  
            <table class="table table-bordered" align="left" style="position: relative;bottom:130px; left: 670px; width: 50%;">  
                               <tr>  
                                    <th style="width:5%">Playlist Songs</th>  
                                    <th style="width:1%">Remove song</th>  
                                    <th style="width:5%">Play song</th>
                                     
                               </tr>  
  
  <?php

    $playlist=$_GET['id'];
    $uid=$_SESSION['id'];
        //$query=mysql_query("SELECT s_name FROM playlist_song WHERE p_id='$playlist'");
    //$query2=mysql_query("SELECT s_name,s_path FROM audios2 WHERE s_name='$song' ");
    $query=mysql_query("SELECT s_path,playlist_song.s_name,playlist_song.id,audios2.s_id FROM playlist_song,audios2 WHERE playlist_song.s_name= audios2.s_name AND playlist_song.id='$playlist'");
    
   while($run=mysql_fetch_array($query))
   {
    ?>
    <!--$song=$run[0];-->
     <tr>
       <td><?php echo $run[1]; ?></td>  
    <!-- <td >"."<a href='uploads/$run[0]'>".$run[1]."</a>"."</td>"-->
    <td><a href="delete1.php?id=<?php echo $run[3]?>&id1=<?php echo $_GET['id']?>"><input type="button" name="delete" value="Remove" id=" " class="btn btn-info btn-xs delete_data" /></a></td>
    <!--<td >'.' <audio src="uploads/'.$row[1].'" controls autopause> </audio>'.'</td>-->
        <td><audio src="uploads/<?php echo $run[0];?>" controls autopause></audio> </td>
        
     </tr>
  <?php 
  }
  ?>


   

 </table>

<!--</center>-->

                                          


<script>
$(document).ready(function(){
 
 $('#song').typeahead({
  source: function(query, result)
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data)
    {
     result($.map(data, function(item){
      return item;
     }));
    }
   })
  }
 });
 
});
</script>
<script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
    x.play(); 
} 

function pauseAudio() { 
    x.pause(); 
} 
</script>
<script >
  document.addEventListener('play', function(e){
    var audios = document.getElementsByTagName('audio');
    for(var i = 0, len = audios.length; i < len;i++){
        if(audios[i] != e.target){
            audios[i].pause();
        }
    }
}, true);
</script>
