<?php
    include './Resources/connection.php';

    //retreive movie details
    $mysql_movInf = "SELECT * FROM movieInformation";
    $result = $connection->query($mysql_movInf);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $movieID = $row['movieID'];

        $title = $row['title'];
        $availability = ($row['availability'] == 1) ? $availability="Currently Showing" : $availability="Coming Soon...";
        $releaseDate = $row['releaseDate'];
        $rating = $row['rating'];
        $genre = $row['genre'];
        $description = $row['description'];
        $cc = ($row['cc']) ? $cc="Yes" : $cc="No";
        $hour = date('h', strtotime($row['duration']));
        $min = date('m', strtotime($row['duration']));
        $duration = "$hour h $min m";

        echo("<table class='poster'>");
        echo("<td>");
        echo("<img src='Resources/movieImgs/movies/".$movieID.".jpg' class='boxImg' height='210px'>");
        echo("</td>");
        echo("<td>");
        echo("<p><strong>Title:</strong> ".$title."</p>");
        echo("<p><strong>Availablity:</strong> ".$availability."</p>");
        echo("<p><strong>Release Date:</strong> ".$releaseDate."</p>");
        echo("<p><strong>Rating:</strong> ".$rating."</p>");
        echo("<p><strong>Genre:</strong> ".$genre."</p>");
        echo("<p><strong>Description:</strong> ".$description."</p>");
        echo("<p><strong>Closed Captioning:</strong> ".$cc."</p>");
        echo("<p><strong>Duration:</strong> ".$duration."</p>");
        echo("</td>");
        echo("</table>");
    } 
    
    $connection->close();
?>