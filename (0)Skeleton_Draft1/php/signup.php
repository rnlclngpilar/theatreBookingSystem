<?php
    require 'connection.php';

    //declar variables
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $reemail = $_POST['re-email'];
    $repass = $_POST['re-pass'];
    $genre = $_POST['genre'];

    if($email==$reemail && $pass==$repass){
        //sql
        $sql = "SELECT*FROM useraccount WHERE email='$email'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);

        $year=date("Y");
        $sixDigit=mt_rand(100000,999999);;
        $ID="".$year."-".$sixDigit."";

        //if no similar user/email found
        if ($row == 0) {
            $sql = "INSERT INTO useraccount (userID, email, password, favGenre) 
                    VALUES ('$ID','$email','$pass','$genre')";
            $insert = $connection->query($sql);

            //if successful
            if ($insert == true) {
                session_start();
                $success = "registration successful...";
                $_SESSION['success'] = $success;

                header("Location: loginForm.php");
            } else 
                echo "Error: " . $sql;
            
        }else{
            if ($email==$row['email'])
                $invalidInput="* Email already exist! Try again with another<br><br>";
            else 
                $invalidInput="* oh oh... something went wrong...<br><br>";
        }

    }else if($email!=$reemail){
        $invalidInput="* oh oh... email entered DOES NOT match...<br><br>";
    }else if($pass!=$repass){
        $invalidInput="* oh oh... password entered DOES NOT match...<br><br>";
    }

    $connection->close(); //close connec
?>