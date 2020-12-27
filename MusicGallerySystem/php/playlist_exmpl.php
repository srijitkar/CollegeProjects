<?php
require('connect.php');
ob_start();
session_start();
if(empty($_SESSION['id']))
  header('Location:home.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <li><a href="s_index.php">SEARCH ANY SONG</a></li>
        <li><a href="front.php#contact">Contact Us </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href=""><span style="position: relative;left:-5px;" class=""></span>
          <span class="caret" style="width: 10px;"></span>
 <?php
                            $uid=$_SESSION['id'];
                  $query=mysql_query("SELECT user_id,user_name FROM user WHERE user_id='$uid'");
                            while($run=mysql_fetch_array($query))
                           {
                                   echo $run[1];
                            }
                            ?>       
          
        </a>
          <ul class="dropdown-menu">
           <li><a href="logout.php"><span style="position: relative;left:-5px;" class="glyphicon glyphicon-log-out"></span>Log-Out</a></li>
          <li><a href="editprofile.php"> <span style="position: relative;left:-5px;" class="glyphicon glyphicon-user"></span>My Profile</a></li>
       
      </ul>
    </div>
  </div>
</nav>
 
 
    <div class="col-sm-9">
     
      <br>
     
     <!--<form method="POST">
       <input type="text" name="playlist" placeholder="create your new playlist..." required>
     <input type="submit" name="create" value="Create">
     </form>-->
     <form method="POST">
    <div  class="form-inline">
      <label for="ex3">Enter Playlist Name:</label>
      <input type="text" name="playlist" class="form-control" id=" " placeholder="Enter playlist name" required>
    
    <button type="submit"  name="create" value="create" class="btn btn-success"  >Submit</button>

  </div>
  </form>


  <?php


if (!empty($_REQUEST['create']) ) {
  $playlist=$_REQUEST['playlist'];
  $uid=$_SESSION['id'];
  if(mysql_query("INSERT INTO playlist VALUES('','$uid','$playlist')") or die(mysql_error()) )
  {
    echo " <br>
    <div class='alert alert-info alert-dismissable' style='width:50%;'>
          <a class='panel-close close' data-dismiss='alert'>×</a> 
          <i class='fa fa-coffee'></i>
      <strong>Playlist creation successfull </strong>
      </div>
    ";
  }
  
  
}
?>
 <br />

 <!--<center>
 <table border="1">
  <tr>
  <th>CREATED PLAYLIST</th>
  </tr>--> 

                <br />  
                <div class="table-responsive">  
                     
                     <br />  
                     <div id="playlist_table">  
                          <table class="table table-bordered" style="width: 60%">  
                               <tr>  
                                    <th style="width:25%">Playlist Name</th>  
                                    <th style="width:25%">Edit playlistname</th>  
                                    <th style="width:5%">ADD song</th>
                                    <th style="width:5%">Delete</th>   
                               </tr>  

                     

  
  <?php
    $uid=$_SESSION['id'];
    $query=mysql_query("SELECT u_id,name,id FROM playlist WHERE u_id='$uid'");
  while($run=mysql_fetch_array($query))
  {
  ?>
    <tr> 
     <!-- <td> <a href="song.php?id=<?php echo $run[2] ?>"> <?php echo $run[1] ?> </a> </td> -->
         <td><?php echo $run[1]; ?></td>  

      <!-- <td><input type="button" name="edit" value="<?php echo $run[2];?>" data-toggle="modal" data-target="#add_data_Modal"  id=" " class="btn btn-info btn-xs edit_data" onclick='test(){"<?php  $a=$run[2]; ?>"}' /></td> -->  
      <td><form method="POST" action="update.php?id=<?php echo $run[2]; ?>">
        <input type="text" class="form-control" name="name2" required> <br>
        <input type="submit" name="edit" value="edit" data-toggle="modal" data-target="#add_data_Modal"  id=" " class="btn btn-info btn-xs edit_data">
      </form></td>

 <td><a href="song.php?id=<?php echo $run[2] ?>"><input type="button" name="Add " value="Add Song" id="" class="btn btn-info btn-xs Add_data" /></a></td>
      <td><a href="delete.php?id=<?php echo $run[2]?>"><input type="button" name="delete" value="delete" id=" " class="btn btn-info btn-xs delete_data" /></a></td>
    </tr>
  <?php
  }
  ?>

 </table>
</div>

 
<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Rename playlist</h4>  
                </div>  
                 <div class="modal-body"> 
              
                            
                  <!--   <form method="post" id="insert_form" action="test.php?id=<?php echo $a; ?>"> 
                   
                          <label>Enter Updated-Playlist Name</label>  
                          
                          <input type="text" name="name" id="name" class="form-control" value="" required />  
                          <br />  
                        
                       <a href="update.php?id=<?php echo $run[2]; ?>">   <input type="submit" name="update" id="insert" value="update" class="btn btn-success" /> </a> 
                       
                     
                    </form>  -->

                  </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  






</div>
</div>
</div>
      

<script>
                 function edit( n){ return n;} </script>


</body>
</html>

