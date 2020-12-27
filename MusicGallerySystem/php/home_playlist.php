<?php
require('connect.php');
ob_start();
session_start();
if(empty($_SESSION['id']))
    header('Location:front.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML5 Audio Player</title>
    <style>
    body{
        <?php
if ($_GET['id']==1) {
        echo 'background-image: url("images/m5.jpg")'; //RabindraNath
    }
    else if($_GET['id']==2)
{
    echo 'background-image: url("images/m8.png")'; //Nazrul
}
else if($_GET['id']==3)
{
    echo 'background-image: url("images/m3.jpg")'; //Manna dey
}
else if($_GET['id']==4)
{
    echo 'background-image: url("images/m10.png")'; //Hemanta
}
else if($_GET['id']==5)
{
    echo 'background-image: url("images/m11.jpg")'; //Sondha
}
else if($_GET['id']==6)
{
    echo 'background-image: url("images/m_rafi.jpg")'; //Rafi
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
 echo 'background-color: black'; 
}
?>
    }
        #playlist{
            list-style: none;
        }
        #playlist li a{
            color:grey;
            text-decoration: none;
            
        }
        #playlist .current-song a{
            color:lightblue;
            font-style: italic,bold;
            font-size: 20px;
        }
    </style>
    <!-- Source Code From YouTube.com/MicroTechTutorials  you may remove this message on your webpage but please do not redistribtue -->
</head>
<body>
    <br><br><br><br><br><br><br><br>
   <table align="center" bgcolor="black">
    <tr><td width="100">
    <audio src="" controls id="audioPlayer">
        Sorry, your browser doesn't support html5!
    </audio>
    <ul id="playlist">
        <li class="current-song">
        <?php 
        include('connect.php');

            if ($_GET['id']==1) {

    
    $sql="SELECT * FROM audios2 WHERE s_genre='Rabindra Sangeet'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>";
            
                            
    }
                
            }
            else if ($_GET['id']==12){
                $sql="SELECT * FROM audios2 WHERE s_artist='Arijit Singh'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>";
            
                            
    }

            }
            else if ($_GET['id']==2){
                $sql="SELECT * FROM audios2 WHERE s_movie='Nazrul Geeti'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>";
            
                            
    }
            }
            else if ($_GET['id']==3){
                $sql="SELECT * FROM audios2 WHERE s_movie='Best of manna dey'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>";
            
                            
    }
            }
            else if ($_GET['id']==6){
                $sql="SELECT * FROM audios2 WHERE s_movie='Best of Rafi'";
    $query=mysql_query($sql) or die(mysql_error());
    while($run=mysql_fetch_array($query))
    {        
        
                echo "<li >"."<a href='uploads/$run[1]'>".$run[2]."</a>"."</li>";
            
                            
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
</td></tr>
</body>
</html>