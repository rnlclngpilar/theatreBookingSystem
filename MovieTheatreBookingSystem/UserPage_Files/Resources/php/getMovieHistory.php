<?php
    include 'connection.php';

    $user = $_SESSION['user_id'];

    //retreive movie details

    $sql_movHis = "SELECT *
                    FROM userhistory, movieinformation
                    WHERE userhistory.title = movieinformation.title 
                        AND userhistory.userID = '$user'
                    ";
                //ORDER BY userhistory.dateWatched

    $resultHis = mysqli_query($connection,$sql_movHis);
    

    //for movie history
    if (mysqli_num_rows($resultHis) > 0) {
        while ($row_MovHis = mysqli_fetch_array($resultHis)){
            $movieTitle = $row_MovHis['title'];
            $movieID = $row_MovHis['movieID'];
            $genre = $row_MovHis['genre'];
            $description = $row_MovHis['description'];
            $rating = $row_MovHis['rating'];
            $theatre = $row_MovHis['theatreAttended'];
            //$dateWatched = $row_MovHis['dateWatched'];

            //create table
            echo("
                <tr>
                    <td><img src='Resources/movieImgs/movies/".$movieID.".jpg' class='boxImg'></td>
                    <td>".$movieTitle."</td>
                    <td>".$genre."</td>
                    <td>".$description."</td>
                    <td>".$rating."</td>
                    <td>".$theatre."</td>
                </tr>
            ");
        }

    } 


    $connection->close();
?>