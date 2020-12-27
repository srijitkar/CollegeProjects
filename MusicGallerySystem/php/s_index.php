<?php
require('connect.php');
ob_start();
session_start();
if(empty($_SESSION['id']))
  header('Location:home.php');
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
	<body class="bg-info text-white">

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
 
 
    <!--<div class="col-sm-9">-->


		<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Search Any Song Here</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by song,artist,genra,movie name" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />


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
			url:"s_fetch.php",
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


