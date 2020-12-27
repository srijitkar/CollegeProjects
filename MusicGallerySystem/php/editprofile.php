<?php
require('connect.php');
ob_start();
session_start();
if(empty($_SESSION['id']))
  header('refresh:1;url:home.php');
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Search</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="playlist_style.css">
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
	<body class="">

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
        <li><a href="newsfeed/index.php">SONG REALTED NEWS</a></li>
        <li><a href="s_index.php">SEARCH ANY SONG</a></li>
        <li><a href="front.php#contact">Contact Us </a></li>
      </ul>
      
      <!--<div class="dropdown">
     <div class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </div>-->
       <div class="nav navbar-nav navbar-right">
      <li class="dropdown">
        
                            
          <a class="dropdown-toggle" data-toggle="dropdown" href=" "><span style="position: relative;left:-5px;" class=""></span>
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
        </li>
       </div>
   <!--<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>-->
</div>


    </div>
  </div>
</nav>
 
 
    <div class="col-sm-9">




<div class="container">
    <h1>Profile Section</h1>
    <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
<!---<div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>-->
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <!--<div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
           <strong>your data is updated sucessfullly</strong>
        </div>-->
        <h3>Personal info</h3>
                          <?php
                            $uid=$_SESSION['id'];
                 $query=mysql_query("SELECT user_id,user_name,user_email,user_phno,user_pass FROM user WHERE user_id='$uid'");
                            while($run=mysql_fetch_array($query))
                           {
                            ?>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Your Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $run[1];?>" readonly>
            </div>
          </div>
         
         
          <div class="form-group">
            <label class="col-lg-3 control-label">Your Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $run[2];?>" readonly>
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-md-3 control-label">Your Phno</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?php echo $run[3];?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?php echo $run[4];?>" readonly>
            </div>
          </div>
        
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" name="sub_btn" id="btn_font" class="btn btn-primary" value="Change" data-toggle="modal" data-target="#add_data_Modal">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>

<?php
 }
?>

<?php
  if(!empty($_REQUEST['sub_btn']) || !empty($_REQUEST['update']))
  {
    $formnumber=$_SESSION['id'];

    if(!empty($_REQUEST['update']))
    {
      $name=$_REQUEST['name'];
    
      $email=$_REQUEST['email'];
      $phno=$_REQUEST['phno'];
      $password=$_REQUEST['pws'];
      $sql="UPDATE `music2`.`user` SET user_name='$name',user_email='$email',user_phno='$phno',user_pass='$password' WHERE 
           user_id='$formnumber'";
      mysql_query($sql) or die(mysql_error());
      header('Location:editprofile.php');

    }
    $sql="SELECT user_name,user_email,user_phno,user_pass FROM `music2`.user WHERE user_id='$formnumber'";
    $result=mysql_query($sql) or die(mysql_error());
    $rws=mysql_fetch_array( $result)or die(mysql_error());

?>



<?php
   }
?>



<div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Update Your profile</h4>  
                </div>  
                 <div class="modal-body"> 
                     <form method="post" id="insert_form" action=""> 
                           <?php
                            $uid=$_SESSION['id'];
                  $query=mysql_query("SELECT user_id,user_name,user_email,user_phno,user_pass FROM user WHERE user_id='$uid'");
                            while($run=mysql_fetch_array($query))
                           {
                            ?>
                          
                         <label>Your Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="<?php echo $run[1];?>" required /><br>
                           <label>Your Email</label>  
                          <input class="form-control" name="email" type="text" id="email" value="<?php echo $run[2];?> " required><br>
                            <label>Your Phno</label>
                           <input class="form-control" name="phno" type="text" id="phno" value=" <?php echo $run[3];?>" required><br>
                            <label>Your Password</label>
                     <input class="form-control" name="pws" type="text" id="password" value="<?php echo $run[4];?>" required>
                         
                          <br />  
                          <input type="hidden" name="fnumber" value="<?php echo $formnumber;?>" /> 
                          <input type="submit" name="update" id="insert" value="update" class="btn btn-success" /> 
                     </form>  
                     <?php
                       }
                     ?>

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

	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>


