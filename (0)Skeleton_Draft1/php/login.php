<?php
   session_start();
   require 'connection.php';

   if (!empty($_POST['user']) && !empty($_POST['pass'])) {
      //get input from form
      $user=$_POST['user'];
      $pass=$_POST["pass"];

      //sql
      $sqlLogin = "SELECT*FROM useraccount 
               WHERE (email='$user' or userID='$user')
               AND password='$pass'";
      $resultLogin = mysqli_query($connection, $sqlLogin);

      //if user/pass matches data
      if (mysqli_num_rows($resultLogin) == 1) {
         $_SESSION['loggedin'] = true;

         while ($rowLogin = mysqli_fetch_assoc($resultLogin)){
            $_SESSION['user_id'] = $rowLogin['userID'];
            $_SESSION['user_email'] = $rowLogin['email'];
            $_SESSION['f_name'] = $rowLogin['firstN'];
            $_SESSION['l_name'] = $rowLogin['lastN'];
            $_SESSION['full_name'] = $rowLogin['firstN']. ' ' .$rowLogin['lastN'];
         }

         header("Location: ../USER-PAGE-files-dec3--7_30pm/userAccountPage.php");    //redirect
      }

      //invalid user
      else {
         $_SESSION['isSuccessful'] = "Login Failed!";
         $_SESSION['invalidLogin'] = '<br><br>*INVALID username/password please try again.';
         $_SESSION['loggedin'] = false;
      }  

   }else{
      $_SESSION['invalidLogin'] = '<br><br>*Required Field';
      $_SESSION['isSuccessful'] = "";
      $_SESSION['loggedin'] = false;
   }
      
   $connection->close(); //close connec
?>