<?php
    include '../Resources/connection.php';

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
            if($theatre_Selected == $theatreID && !($theatre_Selected == null || $theatre_Selected == "" ))
            {
                echo("
                    <a href='../../TicketReservation_Files/ticketReservationForm.html'>
                        <table class='poster'>
                        <td>
                            
                            <img src='../Resources/movieImgs/movies/".$movieID.".jpg' class='boxImg'>
                            
                        </td>
                        <td>
                            <p><strong>Theater:</strong> ".$theatreName."</p>
                            <p><strong>Title:</strong> ".$movieTitle."</p>
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
        echo("<td>No Movies Currently Available for this theatre</td>");
        echo("</table>");
    }
    else {$count = 0;} //reset count

    $connection->close();
?>