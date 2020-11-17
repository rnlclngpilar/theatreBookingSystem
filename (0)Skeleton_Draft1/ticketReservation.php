<?php
    if (!empty($_POST)){
        include 'connection.php';

        //check is wheelchair is 'checked' | 1 = yes / 0 = no
        $wheelchair = isset($_POST['wheelchair']) ? $wheelchair=1 : $wheelchair=0;
        $support = isset($_POST['support']) ? $support=1 : $support=0;

        //insert query | TICKET RESERVATIONS
        $mysql = "INSERT INTO ticketreservation (adult, senior, child, wheelchair, support, theatre, email) VALUES (
            '{$connection->real_escape_string($_POST['adult'])}',
            '{$connection->real_escape_string($_POST['senior'])}',
            '{$connection->real_escape_string($_POST['child'])}',
            '{$connection->real_escape_string($wheelchair)}',
            '{$connection->real_escape_string($support)}',
            '{$connection->real_escape_string($_POST['theatre'])}',
            '{$connection->real_escape_string($_POST['email'])}')";
                $insert = $connection->query($mysql);

        //Print response from MySQL
        if($insert == TRUE) {
            echo "Success! Thank you for purchashing a ticket.";
        }else {
            die("Error: {$connection->errno} : {$connection->error}");
        }

        //Close our connection
        $connection->close();
    }
?>