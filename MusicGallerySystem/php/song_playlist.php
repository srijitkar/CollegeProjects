<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML5 Audio Player</title>
    <style>
    body{
        background-color: black;
    }
        #playlist{
            list-style: none;
        }
        #playlist li a{
            color:white;
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
<body background-color="black" >
    <br><br><br>
   <table align="center" border="1">
    <tr><td>
    <audio src="" controls id="audioPlayer">
        Sorry, your browser doesn't support html5!
    </audio>
    <ul id="playlist">
        <li class="current-song"><a href="songs/Enna sona.mp3">Enna sona</a></li>
        <li><a href="songs/khola haoyay.mp3">Khola haoyay</a></li>
        <li><a href="songs/Zalima.mp3">Zalima</a></li>
		<li><a href="Udi Udi Jaye.mp3">Udi Udi Jaye</a></li>
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