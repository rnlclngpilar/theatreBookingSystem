<?php
    session_start();
    require 'connection.php';
    $fullname = $_SESSION['full_name'];

    if ($_SESSION['loggedin'] == true) {
        $sessUser=$_SESSION['user_id'];

        if (!empty($_POST['f_name']) && !empty($_POST['l_name']) && !empty($_POST['email'])
            && !empty($_POST['user']) && !empty($_POST['pass'])) {
            //declar variables
            $fName = $_POST['f_name'];
            $lName = $_POST['l_name'];
            $email = $_POST['email'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $sqlUpdate = "SELECT*FROM useraccount 
                            WHERE email='$sessUser'";
            $resultUpdate = mysqli_query($connection, $sqlUpdate);
            $rowUpdate = mysqli_fetch_assoc($resultUpdate);

            //if USER IS FOUND and user/email is available
            if (!($email == $rowUpdate['email']) || !($user == $rowUpdate['userID'])) {
                $sqlUpdate = "UPDATE useraccount 
                                SET userID='$user',
                                    firstN='$fName',
                                    lastN='$lName',
                                    email='$email',
                                    password='$pass' 
                                WHERE userID='$sessUser'";
                
                $insert = $connection->query($sqlUpdate);

                //if successful
                if ($insert == true) {
                    //update session
                    $_SESSION['user_id'] = $rowUpdate['userID'];
                    $_SESSION['user_email'] = $rowUpdate['email'];
                    $_SESSION['f_name'] = $rowUpdate['firstN'];
                    $_SESSION['l_name'] = $rowUpdate['lastN'];
                    $_SESSION['full_name'] = $rowUpdate['firstN']. ' ' .$rowUpdate['lastN'];
                    

                    $_SESSION['isSuccessful'] = "Account Update Successful!<br>".$_SESSION['full_name'];
                    $_SESSION['invalidUpdate'] = '<br><br>*Required Field';


                //failed
                } else {
                    $_SESSION['isSuccessful'] = "*Account Update FAILED!";

                    if ($email==$rowUpdate['email'])
                        $_SESSION['invalidUpdate']="<br><br>* EMAIL already exist! Try again with another<br><br>";
                    else if ($user==$rowUpdate['userID'])
                        $_SESSION['invalidUpdate']="<br><br>* USERNAME already exist! Try again with another<br><br>"; 
                }
            
            //user already exist
            }else {
                $_SESSION['isSuccessful'] = "*Account Update FAILED!";

                if ($email==$rowUpdate['email'])
                    $_SESSION['invalidUpdate']="<br><br>* EMAIL already exist! Try again with another<br><br>";
                else if ($user==$rowUpdate['userID'])
                    $_SESSION['invalidUpdate']="<br><br>* USERNAME already exist! Try again with another<br><br>"; 
            }
            
        }else{
            $_SESSION['invalidUpdate'] = '<br><br>*Required Field';
            $_SESSION['isSuccessful'] = "";
        }
    } else{
        $_SESSION['isSuccessful'] = "Please log in first to see the page.";
        header("Location: enterUser.php");   //redirect
    }

    $connection->close(); //close connec
?>