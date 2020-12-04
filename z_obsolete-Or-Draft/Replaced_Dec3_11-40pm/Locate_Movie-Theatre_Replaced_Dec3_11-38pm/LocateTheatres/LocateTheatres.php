<!DOCTYPE html>
<html>

<head>
    <title>Theatres</title>
	<meta charset="utf-8"></meta>
	<link type="text/css" rel="stylesheet" href="css_Theme/mainTheme.css">
</head>
	
<body>
<div class="included">

<!-- ___ Display on Webpage _________________________________________________________________________________________ -->
	<table class="mainPageTable">
		
	<!-- Theatre Menu -->
		<tr class="menu">
			<td id="filterMenu" rowspan=5>
				<br><br>
				<b>Find A Theatre</b><br>
				<form method="POST" action="">
					<select id="input">
							<label>-- Select Theatre --</label>
							<option name='optSelect[]' value="1">Paramount Theatre</option>
							<option name='optSelect[]' value="2">Millenium Cinema</option>
							<option name='optSelect[]' value="3">Regal Amphitheater</option>
							<option name='optSelect[]' value="4">Courtyard Amphitheater</option>
					</select>					
					<input type="submit" value="Filter" name="submit">

				<!-- Selected Theatre (Selection Output Text)-->	
				<div id="SelectedTheatre">
					<?php include "../LocateTheatres/LocateTheatres_Functions.php"?>
				</div>

				<div class="paragraph-style">
					<a align="left" id="theatre_name"></a>
					<p id="theatre_address"></p>
				</div>
				</form></br>

			</td>
		</tr>

	<!-- Browse Theatres Header -->
		<tr>
			<th><h1>Browse Theatres</h1></th>
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

</div>

</body>
</html>