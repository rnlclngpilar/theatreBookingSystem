<?php
    include 'connection.php';

    //retreive movie details
    $mysql_movInf = "SELECT * FROM movieInformation";
    $result = $connection->query($mysql_movInf);
    $count = 0;
    
    if ($result->num_rows > 0) {
        
        while ($row = mysqli_fetch_array($result)){
            $movieID = ($row['movieID']);
            $title = ($row['title']);
            $hour = date('h', strtotime($row['duration']));
            $min = date('m', strtotime($row['duration']));
            $duration = "$hour hour, $min minutes";
            $releaseDate = ($row['releaseDate']);
            $genre = ($row['genre']);

            //create table
            if($genre_Selected == $genre || $genre_Selected == "All" || $genre_Selected == null)
            {
                echo "<table class='poster'>";
                echo("<td>");
                echo("<img src='../movieImgs/movies/".$movieID.".jpg' class='boxImg'>");
                echo("</td>");
                echo("<td>");
                echo("<p><strong>Title:</strong> ".$title."</p>");
                echo("<p><strong>Length:</strong> ".$duration."</p>");
                echo("<p><strong>Genre:</strong> ".$genre."</p>");
                echo("<p><strong>Release Date:</strong> ".$releaseDate."</p>");
                echo("<p><strong>Movie ID:</strong> ".$movieID."</p>");
                echo("</td>");
                echo("</table>");
                $count++;
            }
        }
    };
    
    if($count == 0)
    { 
        echo("<table class='poster'>");
        echo("<td><img src='https://img.freepik.com/free-vector/pattern-snacks-theme-popcorn_85534-194.jpg?size=338&ext=jpg' class='boxImg'></td>");
        echo("<td>No Movies Currently Available for this Genre</td>");
        echo("</table>");
    }
    else {$count = 0;} //reset count

    $connection->close();
?>