<!-- NOT FINISHED -->

<?php
    require 'connection.php';

    $seat = $_POST['seat'];
    $adult = $_POST['ticket1'];
    $senior = $_POST['ticket2'];
    $child = $_POST['ticket3'];
    $total = $_POST['total'];

    $sql = "INSERT INTO ticketreservation
            (userID, movieID, cinemaID, theatre, seats, adult, senior, child, totalCost)
            VALUES (' ',' ',' ',' ','$seat', '$adult', '$senior', '$child', '$total')
            ";
    
    $insert = $connection->query($sql);
    
    if ($insert == true) {
        echo("Thank you for purchasing a ticket! ENJOY!");
    }
    else{
        echo("failed");
        //mysqli_error($insert);
    }
   
    $connection->close(); //close connec
?>