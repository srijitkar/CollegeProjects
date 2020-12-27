<?php
$connect = mysqli_connect("localhost", "root", "", "music2");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM audios2 WHERE s_name LIKE '%".$search."%'OR s_artist LIKE '%".$search."%' OR s_genre LIKE '%".$search."%' OR s_movie LIKE '%".$search."%'  LIMIT 6 ";
}
else
{
	$query = "SELECT * FROM audios2 ORDER BY RAND() LIMIT 6";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>


							<th> Song Name</th>
							<th>Artist Name</th>
							<th>Genre Type</th>
							<th>Movie name</th>
							<th> PLAY </th>
							<th>DOWNLOAD SONG</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$path=$row["s_path"];
		$output .= '
			<tr>
			   
			   
				<td>'.$row["s_name"].'</td>
				<td>'.$row["s_artist"].'</td>
				<td>'.$row["s_genre"].'</td>
				<td>'.$row["s_movie"].'</td>
				<td >'.
' <audio src="uploads/'.$row[1].'" controls autopause > </audio>'.'</td>
<td>'.'<a href="uploads/'.$row[1].' "  download><input type="button" name="download" value="DOWNLOAD SONG" id=" " class="btn btn-info btn-xs download_data" /></a>'.'</td>
				
			</tr>
		';
	}
	echo $output;

}
else
{
	echo 'Song Not Found';
}
?>
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