<?php 
    $invalidInput = "";
    if (!empty($_POST['submitSignup'])) {
        include "php/signup.php";
    }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Movie Theater Booking | REGISTER/SIGNUP</title>
        <link rel="stylesheet" href="css/loginSignupStylesheet.css">
	</head>
	<body>
		<br><br><br>
		<div id="box">
			<a href="signupForm.php" id="signup" class="tab active">Sign Up</a>
			<a href="loginForm.php" id="login" class="tab">Log In</a>
			<br><br><br>

			<div id="title" align="center">
				<h1 id="signup">REGISTER</h1> 
				<p id="signup">to movie theater booking</p>
			</div>

			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<span class="error"><?php echo "".$invalidInput."";?></span>

				Email: 				<input type="email" name="email" placeholder="example@email.ex" required><br>
				Re-enter Email: 	<input type="email" name="re-email" placeholder="example@email.ex" required><br>
				Password:			<input type="password" name="pass" placeholder="password" required><br>
				Re-enter Password: 	<input type="password" name="re-pass" placeholder="password" required><br>
				Favourite Genre: 	<input type="text" name="genre" placeholder="movie genre"><br><br>

				<input type="submit" value="SIGNUP" name="submitSignup">
			</form>
		</div>
	</body>
</html>