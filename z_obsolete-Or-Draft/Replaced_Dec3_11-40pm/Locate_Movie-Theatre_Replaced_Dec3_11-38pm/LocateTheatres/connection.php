<?php
    //1.Create a database connection
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="movietheatredb";

    //connect to server
    $connection = mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);

    //Check connection
    if (mysqli_connect_errno()){
        die ("Database connection failed: ".mysqli_connect_error().
        "(".mysqli_connect_errno().")");
    }
?>