<?php
      include 'connection.php';

      $email = $_POST['email'];
   
      $sql = "SELECT*FROM useraccount WHERE email='$email'";
      $result = mysqli_query($connection, $sql);
   
      if(mysqli_num_rows($result) > 0){
         while($row=mysqli_fetch_assoc($result)){
            $id = $row["ID"];
            $email = $row["email"];
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;
         }
         header("Location: ../bookingForm.php");
      }else{
         
      }
?>