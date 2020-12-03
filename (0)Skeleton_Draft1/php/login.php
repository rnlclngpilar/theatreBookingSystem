<?php
   require 'connection.php';
   session_start();

   if (!empty($_POST['user']) && !empty($_POST['pass'])) {
      //get input from form
      $user=$_POST['user'];
      $pass=$_POST["pass"];

      //sql
      $sqlLogin = "SELECT*FROM useraccount 
               WHERE (email='$user' or userID='$user')
               AND password='$pass'";
      $resultLogin = mysqli_query($connection, $sqlLogin);
      $rowLogin = mysqli_num_rows($resultLogin);

      //if user/pass matches data
      if ($rowLogin == 1) {
         $_SESSION['loggedin'] = true;
         $_SESSION['user_id'] = $rowLogin['userID'];
         $_SESSION['user_email'] = $rowLogin['email'];
         $_SESSION['f_name'] = $rowLogin['firstN'];
         $_SESSION['l_name'] = $rowLogin['lastN'];

         header("Location: userAccountPage-NEW-DEC3.php");    //redirect
      }

      //invalid user
      else {
         $_SESSION['isSuccessful'] = "Login Failed!";
         $_SESSION['invalidLogin'] = '<br><br>*INVALID username/password please try again.';

      }  

   }else{
      $_SESSION['invalidLogin'] = '<br><br>*Required Field';
      $_SESSION['isSuccessful'] = "";
   }
      
   $connection->close(); //close connec
?>