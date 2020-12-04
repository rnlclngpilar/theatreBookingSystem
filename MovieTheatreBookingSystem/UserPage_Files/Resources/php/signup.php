<?php
    require 'connection.php';

    if (!empty($_POST['f_name']) && !empty($_POST['l_name']) && !empty($_POST['email'])
        && !empty($_POST['user']) && !empty($_POST['pass'])) {
        //declar variables
        $fName = $_POST['f_name'];
        $lName = $_POST['l_name'];
        $emailS = $_POST['email'];
        $userS = $_POST['user'];
        $passS = $_POST['pass'];

        //sql
        $sqlSignUp = "SELECT*FROM useraccount WHERE (email='$emailS' OR userID='$userS')";
        $resultSignUp = mysqli_query($connection, $sqlSignUp);
        $rowSignUp = mysqli_fetch_assoc($resultSignUp);


        //if no similar user/email found
        if ($rowSignUp == 0) {
            $sqlSignUp = "INSERT INTO useraccount (userID, password, firstN, lastN, email, address, favGenre) 
                    VALUES ('$userS','$pass','$fName','$lName','$emailS', ' ', 'TBD')";
            $insert = $connection->query($sqlSignUp);

            //if successful
            if ($insert == true) {
                $_SESSION['isSuccessful'] = "Registration Successful!";
                $_SESSION['loggedin'] = false;

            } //else 
                //echo "Error: " . $sql . "<br>" . $db->error;
                //$_SESSION['invalidSubmit']="* something went wrong...Try again later.<br><br>";

            
        }else{
            $_SESSION['isSuccessful'] = "Registration FAILED!";

            if ($emailS==$rowSignUp['email'])
                $_SESSION['invalidSubmit']="<br><br>* EMAIL already exist! Try again with another<br><br>";
            else if ($userS==$rowSignUp['userID'])
                $_SESSION['invalidSubmit']="<br><br>* USERNAME already exist! Try again with another<br><br>"; 
            else 
                $_SESSION['invalidSubmit']="<br><br>* BOTH EMAIL and USER already exist! Try again with another<br><br>"; 
        }

    }else{
        $_SESSION['invalidSubmit'] = '<br><br>*All fields required';
        //$_SESSION['isSuccessful'] = "";
    }

    $connection->close(); //close connec
?>