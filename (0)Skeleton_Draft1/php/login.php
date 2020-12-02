<?php
   require 'connection.php';

   if (!empty($_POST['email']) && !empty($_POST['pass'])) {
      //get input from form
      $user=$_POST['user'];
      $pass=$_POST["pass"];
      $dbEmailAd=$dbPassword="";

      //sql
      $sql = "SELECT*FROM useraccount 
               WHERE (email='$user' or userID='$user')
               AND password='$pass'";
      $result = mysqli_query($connection, $sql);

      //if user/pass matches data
      if(mysqli_num_rows($result) == 1){
         //start session
         session_start();
         header("Location: userAccountPage.html");    //redirect

      //invalid user
      }else {
         echo("<p>* INVALID email and password.<br></p>");
         //$invalidUser="* INVALID email and password!!<br><br>";
      }  

   }else{
      echo("<p>* Both username and password is required.<br></p>");
   }
      
   $connection->close(); //close connec
?>