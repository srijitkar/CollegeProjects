
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
    .abc{
      position: relative;
      bottom:190px;
    2
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
        <li><a href="#">ABOUT US</a></li>
        
        <li><a href="#">Contact Us </a></li>
      </ul>
      
      <!--<div class="dropdown">
     <div class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </div>-->
       <div class="nav navbar-nav navbar-right">
           <li><a href="index.php?id=1"><span class="glyphicon glyphicon-log-out"></span> LogIN</a></li>

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
    <h1>FORGET PASSWORD ?</h1>
    <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
      <!--  <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>-->
      </div>
      
     <div class="col-md-9 personal-info">
      <?php
    if(isset($_REQUEST['submit']))
    {
      include('connect.php');
      $flag=0;
      $phno=$_REQUEST['fname'];
      $email=$_REQUEST['email'];
      $sql="SELECT user_name,user_email,user_pass,user_phno FROM user";
      $result=mysql_query($sql) or die();
      while($rws=mysql_fetch_array($result))
      {
        $first=$rws[0];
        $last=$rws[1];
        if($first==$phno && $last==$email)
        {
          $pw=$rws[2];
          echo "<div class='alert alert-info alert-dismissable'>
          <a class='panel-close close' data-dismiss='alert'>×</a> 
          <i class='fa fa-coffee'></i>
          Your Password is:  <strong>
          $pw
          </strong>
          </div>
          ";
          $flag=1;
        }
        

      }
      if($flag==0)
        echo "
       <div class='alert alert-info alert-dismissable'>
          <a class='panel-close close' data-dismiss='alert'>×</a> 
          <i class='fa fa-coffee'></i>
      <strong>Please enter your valid  name and ph no/email id </strong>
      </div>
      ";
    }?>
       <!-- <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>-->
        <h3>Personal info</h3>
        
        <form class="form-horizontal" method="post">
          <div class="form-group">
            <label class="col-lg-3 control-label">Enter your name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="fname" value="<?php if(!empty($_REQUEST['submit'])) echo $_REQUEST['fname']?>" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Enter your Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value="<?php if(!empty($_REQUEST['submit'])) echo $_REQUEST['email']?>">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <!--<input type="submit" class="btn btn-primary" name="submit" id="display" value="GET PASSWORD" data-toggle="modal" data-target="#add_data_Modal">-->
               <input type="submit" name="submit" id="display" class="btn btn-primary" value="GET PASSWORD" data-toggle="modal" data-target="#add_data_Modal">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>





    


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


