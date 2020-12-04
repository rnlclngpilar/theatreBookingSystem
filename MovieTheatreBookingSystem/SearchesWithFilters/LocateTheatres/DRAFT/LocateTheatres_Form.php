<!DOCTYPE html>
<html>

<head>
    <title>Theatres</title>
	<meta charset="utf-8"></meta>
	<link type="text/css" rel="stylesheet" href="../Resources/css_Theme/mainTheme.css">
</head>

<body>

<!-- ___ Display on Webpage _________________________________________________________________________________________ -->
	<table class="mainPageTable">
	<!-- Browse Theatres Header -->
		<tr>
			<th><h1>Browse Movies By Theatre</h1></th>
		</tr>

	<!-- Browse Theatres Form -->
	<tr class="menu">
	<td>
	<form method="POST" action="">
		<label for="optSelect">
			<select name='optSelect' id="optSelect">
				<optgroup>
					<option value=""> -- Select Theatre -- </label>
					<option value="1">Paramount Theatre</option>
					<option value="2">Millenium Cinema</option>
					<option value="3">Regal Amphitheater</option>
					<option value="4">Courtyard Amphitheater</option>
				</optgroup>
			</select>
		</label>
		<input type="submit" value="Filter" name="submit">
	
		<!-- Selected Theatre (Set Global Variable for Selection Output)-->
		<div id="SelectedTheatre">
			<?php include "../LocateTheatres/LocateTheatres_Functions.php"?>
		</div>
	</form>
	</td>
	</tr>


	<!-- Output Movie Poster & Information Block -->
		<tr>
			<td class="movieBlock">
				<div>
					<?php require "../LocateTheatres/LocateTheatres_db.php"; ?>
				</div>
				<br>
			</td>
		</tr>

	</table>

</body>
</html>