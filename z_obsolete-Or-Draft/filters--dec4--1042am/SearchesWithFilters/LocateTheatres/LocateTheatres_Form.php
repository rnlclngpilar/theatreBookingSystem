<!DOCTYPE html>
<html>

<head>
    <title>Theatres</title>
	<meta charset="utf-8"></meta>
	<link type="text/css" rel="stylesheet" href="../Resources/css_Theme/mainTheme.css">
	<link type="text/css" rel="stylesheet" href="../Resources/css_Theme/horizontalMenu.css">	
</head>

<body>
<div class="included">

<!-- ___ Display on Webpage _________________________________________________________________________________________ -->
	<table class="mainPageTable">

	<!-- Browse Theatres Header -->
		<thead>
			<tr>
				<th colspan="2"><h1>Browse Movies By Theatre</h1></th>
			</tr>
		</thead>
		
		<tbody>
	<!-- Browse Theatres Form -->
		<tr class="menu" colspan="2">
			<td id="filterMenu">
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
					</form>
			</td>
			
			<!-- Selected Theatre (Set Global Variable for Selection Output)-->
			<td>
				<div id="SelectedTheatre">
					<?php include "../LocateTheatres/LocateTheatres_Functions.php"?>
				</div>
			</td>
		</tr>

	<!-- Output Movie Poster & Information Block -->
		<tr>
			<td colspan="2">
				<div class="movieBlock">
					<?php require "../LocateTheatres/LocateTheatres_db.php"; ?>
				</div>
			</td>
		</tr>
	</tbody>
	</table>

</div>

</body>
</html>