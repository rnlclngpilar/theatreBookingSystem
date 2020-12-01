<?php
   session_start();

   require 'connection.php';

   //get input from form
   $email=$_POST['email'];
   $pass=$_POST["pass"];
   $dbEmailAd=$dbPassword="";

   //sql
   $sql = "SELECT*FROM useraccount 
            WHERE email='$email'
            AND password='$pass'";
   $result = mysqli_query($connection, $sql);
   $row = mysqli_fetch_assoc($result);

   //if user/pass matches data
   if(mysqli_num_rows($result) == 1){
      //start session
      session_start();
      $_SESSION['genre'] = $row['favGenre'];

      header("Location: bookingForm.php");    //redirect
   //invalid user
   }else {
      $invalidUser="* INVALID email and password!!<br><br>";
   }  

   $connection->close(); //close connec
?>