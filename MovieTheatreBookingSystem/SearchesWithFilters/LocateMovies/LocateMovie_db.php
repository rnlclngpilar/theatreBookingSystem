<?php
    include '../Resources/connection.php';

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
                echo("
                <a href='../../TicketReservation_Files/ticketReservationForm.html'>
                    <table class='poster'>
                    <td>
                        
                        <img src='../Resources/movieImgs/movies/".$movieID.".jpg' class='boxImg'>
                        
                    </td>
                    <td>
                        <p><strong>Title:</strong> ".$title."</p> 
                        <p><strong>Length:</strong> ".$duration."</p> 
                        <p><strong>Genre:</strong> ".$genre."</p>  
                        <p><strong>Release Date:</strong> ".$releaseDate."</p> 
                        <p><strong>Movie ID:</strong> ".$movieID."</p>             
                    </td>
                    </table>
                </a>
                ");
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