<?php
    error_reporting(0);
    session_start();
    require 'connection.php';

    if ($_SESSION['loggedin'] == true) {
        if (!empty($_POST['f_name']) && !empty($_POST['l_name']) && !empty($_POST['email'])
            && !empty($_POST['user']) && !empty($_POST['pass'])) {
            //declar variables
            $fName = $_POST['f_name'];
            $lName = $_POST['l_name'];
            $email = $_POST['email'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            $sessionID = $_SESSION['user_id'];

            $sql=mysqli_query($connection, "SELECT* FROM useraccount
                                            WHERE userID=$user OR email=$email");
            
            //IF USERNAME AND EMAIL ALREADY EXIST IN DATABASE
            if($sql->num_rows>0){
                $_SESSION['isSuccessful'] = "*Account Update FAILED! EMAIL or USERNAME already exist. try again with another...";
                // $row = mysqli_fetch_array($sql);

                // if ($email==$row['email'])
                //     $_SESSION['invalidUpdate']="<br><br>* EMAIL already exist! Try again with another<br><br>";
                // else if ($user==$row['userID'])
                //     $_SESSION['invalidUpdate']="<br><br>* USERNAME already exist! Try again with another<br><br>";
            
            //IF AVAILABLE
            }else{
                $insert = mysqli_query($connection, "UPDATE useraccount 
                                                        SET userID='$user',
                                                            firstN='$fName',
                                                            lastN='$lName',
                                                            email='$email',
                                                            password='$pass',
                                                            favgenre='TBD' 
                                                        WHERE userID='$sessionID'
                                                    ");

                if($insert==true){
                    session_destroy();
                    session_start();
                    
                    // update session
                    $_SESSION['loggedin'] = true;
                    $_SESSION['user_id'] = $user;
                    $_SESSION['full_name'] = $fName.' '.$lName;

                    $_SESSION['isSuccessful'] = "*Account Update SUCCESSFUL!";
                    $_SESSION['invalidUpdate'] = '<br><br>*All Fields Required';
                }else{
                    //echo("Error description: " . mysqli_error($connection));
                    $_SESSION['isSuccessful'] = "*Account Update FAILED! EMAIL or USERNAME already exist. try again with another...";
                }
            }

        }else{
            $_SESSION['invalidUpdate'] = '<br><br>*All Fields Required';
            $_SESSION['isSuccessful'] = "";
        }
    } else if (!$_SESSION['loggedin']){
        session_destroy();
        session_start();
        $_SESSION['isSuccessful'] = 'Please log in first to see the page.';
        header("Location: enterUserPage.php");   //redirect
    }

    $connection->close(); //close connec
?>