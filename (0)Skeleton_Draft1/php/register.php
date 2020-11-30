<?php
    require_once('connection.php');

    $email = $_POST['email'];
    $genre = $_POST['genre'];

    $sql = "INSERT INTO useraccount (ID, email, favGenre) VALUES ('$ID','$email', '$genre')";
    $result = mysqli_query($connection, $sql);
    
    if($result){
        header("Location: ../index.php");
    }
    else{
        echo "Error :".$sql;
}
?>