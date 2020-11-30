<!DOCTYPE html>
<html>
<head>
	<title>Movie Theater Booking | REGISTER/SIGNUP</title>
	<style>
		h1{text-align: center;}
		.error {color: #FF0000;}
	
	</style>
</head>
<body>
	<br><br>
	<h1>REGISTRATION</h1> 
	<br>
    <form method="post" action="php/register.php">
		<table align="center">
			<tr>
				<td>Email: </td>
				<td><input name="email" placeholder="email" type="email" required>
				<span class="error">*</span></td>
			</tr>
			<tr>
				<td>Re-enter Email: </td>
				<td><input name="re-enter email" placeholder="re-enter email" type="email" required>
				<span class="error">*</span></td>
			</tr>
			<tr>
				<td>Favourite Movie Genre: </td>
				<td><input name="genre" placeholder="none" type="genre" required>
				<span class="error">*</span></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;"><input type="submit" align="center"></td>
			</tr>
		</table>
		<br>

	</form>
</body>
</html>