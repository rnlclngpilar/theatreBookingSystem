<?php
    include 'connection.php';

    $mysql_cinDet = "SELECT * FROM cinemaDetail";
    $result  = $connection->query($mysql_movInf);

    $row = $result->fetch_assoc();

?>