<?php
    include 'connection.php';

    $user = $_SESSION['user_id'];

    //retreive movie details
    $sql_movHis = "SELECT * FROM userhistory WHERE userID='$user'";
    $resultHis = $connection->query($sql_movHis);
    echo "$user";

    if ($resultHis->num_rows > 0) {
        while ($row = mysqli_fetch_array($resultHis)){

            //create tabl
            echo("
                <tr>
                    <td></td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td>
                </tr>
                <tr>
                    <td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td>
                </tr>
                <tr><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td></tr>
                <tr><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td></tr>
                <tr><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td></tr>
                  
            ");
        }
    } 

    $connection->close();
?>