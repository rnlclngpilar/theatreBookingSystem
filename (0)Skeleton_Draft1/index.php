<!DOCTYPE html>
<html>
    <head>
        <title>Movie Theater Booking | LOGIN</title>
        <style>
            a{ margin: 75pt;}
        </style>
    </head>
    <body align="center">
        <br><br>
        <h1 style="display:inline;">LOGIN</h1> <p style="display:inline;">to movie theater booking</p>
        <br><br><br>
        <div id="userLogin">
            <form method="post" action="checklogin.php">
                <input name="username" placeholder="username" type="text">
                <input name="password" placeholder="password" type="password">
                <input type="submit">
            </form>
        </div>
        <br>
        <!-- <a href="theaterInfo.php">continue as GUEST...</a> -->
        <a href="booking.php">continue as GUEST...</a>
        <a href="register.php">register NOW...</a>
    </body>
</html>