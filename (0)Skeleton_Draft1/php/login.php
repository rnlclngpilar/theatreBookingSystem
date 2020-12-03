<?php
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
      $rowLogin = mysqli_num_rows($resultLogin);

      //if user/pass matches data
      if($rowLogin == 1){
         $_SESSION['user_id'] = $rowLogin['userID'];
         $_SESSION['user_email'] = $rowLogin['email'];

         header("Location: userAccountPage.html");    //redirect

      //invalid user
      }else {
         $_SESSION['invalidLogin'] = '<br><br>*INVALID username/password please try again.';
         $_SESSION['isSuccessful'] = "Login Failed!";
      }  

   }else{
      $_SESSION['invalidLogin'] = '<br><br>*Required Field';
      $_SESSION['isSuccessful'] = "";
   }
      
   $connection->close(); //close connec
?>