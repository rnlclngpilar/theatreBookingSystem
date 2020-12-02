<?php
    require 'connection.php';

    if (!empty($_POST['email']) && !empty($_POST['pass'])) {
        //declar variables
        $fName = $_POST['f_name'];
        $lName = $_POST['l_name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

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

                header("Location: loginForm.php");
            } else 
                echo "Error: " . $sql;
            
        }else{
            if ($email==$row['email'])
                $invalidInput="* Email already exist! Try again with another<br><br>";
            else 
                $invalidInput="* oh oh... something went wrong...<br><br>";
        }

    }else{
        echo("<p>* All field are required.<br></p>");
    }

    $connection->close(); //close connec
?>