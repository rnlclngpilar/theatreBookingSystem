<?php
    include 'connection.php';

    //retreive movie details
    $mysql_movInf = "SELECT * FROM movieInformation";
    $result = $connection->query($mysql_movInf);

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)){

            $movieID = ($row['movieID']);
            $title = ($row['title']);
            $hour = date('h', strtotime($row['duration']));
            $min = date('m', strtotime($row['duration']));
            $duration = "$hour hour, $min minutes";
            $releaseDate =($row['releaseDate']);

            //create table
            echo "<table class='poster'>";
            echo("<td>");
            echo("<img src='movieImgs/movies/".$movieID.".jpg' class='boxImg'>");
            echo("</td>");
            echo("<td>");
            echo("<p><strong>Title:</strong> ".$title."</p>");
            echo("<p><strong>Length:</strong> ".$duration."</p>");
            echo("<p><strong>Release Date:</strong> ".$releaseDate."</p>");
            echo("<p><strong>Image:</strong> ".$movieID."</p>");
            echo("</td>");
            echo("</table>");
        }
    } 
    
    $connection->close();
?>