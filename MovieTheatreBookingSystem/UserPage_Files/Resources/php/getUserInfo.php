<?php
    include 'connection.php';

    $user = $_SESSION['user_id'];

    //retreive movie details

    $sql = "SELECT *
                    FROM useraccount
                    WHERE userID = '$user'
                    ";
                //ORDER BY userhistory.dateWatched

    $result = mysqli_query($connection,$sql);
    

    //for user profile
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)){
            $userID = $row['userID'];
            $firstN = $row['firstN'];
            $lastN = $row['lastN'];
            $email = $row['email'];
            $password = $row['password'];
            $address = $row['address'];

            //create table
            echo("
                <tr>
                    <td>Username: </td>
                    <td>$userID</td>
                </tr>
                <tr>
                    <td>First Name: </td>
                    <td>$firstN</td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td>$lastN</td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td>$password</td>
                </tr>
                <tr>
                    <td>Street Address: </td>
                    <td>$address</td>
                </tr>
            ");
        }

    } 


    $connection->close();
?>