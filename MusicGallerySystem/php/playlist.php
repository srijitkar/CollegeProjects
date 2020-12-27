<?php
require('connect.php');
ob_start();
session_start();
if(empty($_SESSION['id']))
    header('Location:front.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>PLAYLIST</title>
	<link rel="stylesheet" type="text/css" href="playlist_style.css">

	<style>
div#sub-upper-content a:link, a:visited {
    background-color: #000004;
    border-radius: 25px;
    font-size: 20px;
    margin-left: 25px;
    height: 30px;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


div#sub-upper-content a:hover, a:active {
    background-color: #0b1626;
    font-size: 22px;
    font-style: italic;
 }
     #playlist{
            list-style: none;
            font-size: 27px;
            text-align: center;
        }
        #playlist li a{
            color:white;
            text-decoration: none;
        }
        #playlist .current-song a{
            color:lightblue;
            font-style: italic,bold;
            font-size: 37px;

		}

  #table{

background-image:url   border: 1px solid black;
 float: left;
 position: relative;
    background-repeat: no-repeat;
     background-size: 1000px 210px;
    background-size: content;
border-radius: 10px;
    <?php
if ($_GET['id']==1) {
        echo 'background-image:url("images/1.jpg") '; //RabindraNath
    }
    else if($_GET['id']==2)
{
    echo 'background-image:url("images/2.jpg")'; //Nazrul
}
else if($_GET['id']==3)
{
    echo 'background-image:url("images/m3.jpg")'; //Manna dey
}
else if($_GET['id']==4)
{
    echo 'background-image: url("images/3.jpg")'; //Hemanta
}
else if($_GET['id']==5)
{
    echo 'background-image: url("images/4.jpg")'; //Sondha
}
else if($_GET['id']==6)
{
    echo 'background-image: url("images/5.jpg")'; //Rafi
}
else if($_GET['id']==7)
{
    echo 'background-image: url("image/1.jpg")'; //Udit Narayan
}
else if($_GET['id']==8)
{
    echo 'background-image: url("image/2.jpg")'; //S moitro
}
else if($_GET['id']==9)
{
    echo 'background-image: url("image/3.jpg")'; //AR Rahaman
}
else if($_GET['id']==10)
{
    echo 'background-image: url("image/4.jpg")'; //Sonu Nigam
}
else if($_GET['id']==11)
{
    echo 'background-image: url("image/5.jpg")'; //Alka Yagnik
}
else if($_GET['id']==12)
{
    echo 'background-image: url("images/m4.jpg")'; //Arijit singh
}
else{
 echo 'background-color: blue'; 
}
?>
    }

</style>

</head>
<body bgcolor="#1f1f20">

<div id="wrapper">
<div id="sub-banner">
  <center><font size="5" color="#021a3c" ><h4>Jukebox</font></center>
</div>

<div id="banner">
 <table   style="border-radius: 20px"  width="100%"  id="table" >
 <tr><td> </td></tr>  <tr><td> </td></tr>
    <tr><td> </td><td width="155" height="165"  style="border-radius: 20px" />
 	</td>
 	<td width="45%" align="center"  style="font-size: 35px">
   <font color="lightblue" >  </font>
 	</td>
 	<td  align="center" >
       
    </audio>
    </td></tr>
 </table>

 </div>

<div id="content" >
<div id="sub-upper-content">
<br>
<center><audio src="" controls id="audioPlayer" autopause > </audio></center>
<!--	<a href="playlist_exmpl.php" >Create New Playlist</a>

 <select id="border2" name="playlist-id" >
	<option>Select Playlist</option>
<?php
      $uid=$_SESSION['id'];
      $query=mysql_query("SELECT u_id,name,id FROM playlist WHERE u_id='$uid'");
    while($run=mysql_fetch_array($query))
    {
        if ($run[1]!=NULL) {
    ?>
        <option value="<?php echo $run[2] ?>"> <?php echo $run[1] ?> </option>
    <?php
}
 else{
    echo "<option> No created Playlist </option>";
 }
    }
    ?>

</select> 

	<input type="submit" name="add_playlist" value="+" id="border3"> -->

</div>

<div id="sub-content">
	<ul id="playlist">
    <li class="current-song"></li>

	<?php 
        include('connect.php');

            if ($_GET['id']==1) {

    
    $sql="SELECT * FROM audios2 WHERE s_genre='Rabindra Sangeet'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>"."<hr bgcolor='lightblue'>";
            
                            
    }
                
            }
            else if ($_GET['id']==12){
                $sql="SELECT * FROM audios2 WHERE s_artist='Arijit Singh'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>"."<hr bgcolor='lightblue'>";
            
                            
    }

            }
            else if ($_GET['id']==2){
                $sql="SELECT * FROM audios2 WHERE s_movie='Nazrul Geeti'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
            
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>"."<hr bgcolor='lightblue'>";
            
                            
    }
            }
            else if ($_GET['id']==3){
                $sql="SELECT * FROM audios2 WHERE s_movie='Best of manna dey'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>"."<hr bgcolor='lightblue'>";
            
                            

    }
            }
            else if ($_GET['id']==6){
                $sql="SELECT * FROM audios2 WHERE s_movie='Best of Rafi'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>"."<hr bgcolor='lightblue'>";
            
            
                            
    }
}
    else if ($_GET['id']==7){
                $sql="SELECT * FROM audios2 WHERE s_movie='Best of Udit Narayan'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>";
            
                            
    }
}
    else if ($_GET['id']==9){
                $sql="SELECT * FROM audios2 WHERE s_movie='Best of A.R.Rahaman'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>";
            

    }
}
    else if ($_GET['id']==11){
                $sql="SELECT * FROM audios2 WHERE s_genre='Best of Alka Yagnik'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>";
            
                            
    }
}
else if ($_GET['id']==4){
                $sql="SELECT * FROM audios2 WHERE s_movie='Hemanta Mukhopadhya Collections'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>";
            
                            
    }

}
else if ($_GET['id']==5){
                $sql="SELECT * FROM audios2 WHERE s_movie='Sondha Mukhopadhya Collections'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>";
            
                            
    }
}
else if ($_GET['id']==8){
                $sql="SELECT * FROM audios2 WHERE s_artist='Santunu Moitro'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>";
            
                            
    }
}
else if ($_GET['id']==10){

                $sql="SELECT * FROM audios2 WHERE s_movie='Sonu Nigam Collection'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>";
            
                            
    }
}
            else
            {
                echo "wrong id";
            }

        ?>



        
    </ul> 
    <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script src="audioPlayer.js"></script>
    <script>
        // loads the audio player
        audioPlayer();
    </script>  
</div>
</div>

</div>

</body>
</html>

