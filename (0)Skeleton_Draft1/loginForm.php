<?php   
    session_start();

    $invalidUser = $success = "";
    if (!empty($_POST['email']) && !empty($_POST['pass'])) {
        include "php/login.php";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Movie Theater Booking | LOGIN</title>
        <link rel="stylesheet" href="css/loginSignupStylesheet.css">
    </head>
    <body>
        <p id="success"><?php echo "".$_SESSION['success']."";?></p>
        <br><br><br>
        <div id="box">
            <a href="signupForm.php" id="signup" class="tab">Sign Up</a>
            <a href="loginForm.php" id="login" class="tab active">Log In</a>
            <br><br><br> 

            <div id="title" align="center">
                <h1 id="login">LOGIN</h1> 
                <p id="login">to movie theater booking</p>
            </div>       

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <span class="error"><?php echo "".$invalidUser."";?></span>

                Email:<br><input type="text" name="email" placeholder="example@email.ex" required><br><br>
                Password:<br><input type="password" name="pass" placeholder="password" required><br><br>

                <input type="submit" value="LOGIN" name="submitLogin">
                <a id="guest" href="bookingForm.php">continue as GUEST...</a>
            </form>
        </div>
    </body>
</html> 
