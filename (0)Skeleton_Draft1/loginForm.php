<!DOCTYPE html>
<html>
    <head>
        <title>Movie Theater Booking | LOGIN</title>
        <style>
            a{ margin: 75pt;}
            .error {color: #FF0000;}
        </style>
    </head>
    <body align="center">
        <br><br>
        <h1 style="display:inline;">LOGIN</h1> <p style="display:inline;">to movie theater booking</p>
        <br><br><br>
        <div id="userLogin">
            <form method="post" action="php/login.php">
                Email: <input name="email" placeholder="email@abc.xyz" type="email" required>
                <!-- <input name="password" placeholder="password" type="password"> -->
                <input type="submit">
                <span class="error">*</span>
            </form>
        </div>
        <br>
        <!-- <a href="theaterInfo.php">continue as GUEST...</a> -->
        <a href="bookingForm.php">continue as GUEST...</a>
        <a href="registerForm.php">register NOW...</a>
    </body>
</html> 