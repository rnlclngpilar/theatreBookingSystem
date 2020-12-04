<?php
    include 'connection.php';

    //retreive movie details
    $mysql_movInf = "SELECT * FROM cinemadetail";
    $result = $connection->query($mysql_movInf);
    $count = 0;
    
    if ($result->num_rows > 0) {
        
        while ($row = mysqli_fetch_array($result)){
            $theatreID = ($row['theatreID']);
            $theatreName = ($row['theatreName']);
            $movieTitle = ($row['movieTitle']);
            $movieID = ($row['movieID']);


            //create table
            if($theatre_Selected == $theatreID || $theatre_Selected == null)
            {
                echo "<table class='poster'>";
                echo("<td>");
                echo("<img src='../movieImgs/movies/".$movieID.".jpg' class='boxImg'>");
                echo("</td>");
                echo("<td>");
                echo("<p><strong>Theater:</strong> ".$theatreName."</p>");
                echo("<p><strong>Theatre ID:</strong> ".$theatreID."</p>");
                echo("<p><strong>Title:</strong> ".$movietitle."</p>");
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
        echo("<td>No Movies Currently Available for this theatre</td>");
        echo("</table>");
    }
    else {$count = 0;} //reset count

    $connection->close();
?>