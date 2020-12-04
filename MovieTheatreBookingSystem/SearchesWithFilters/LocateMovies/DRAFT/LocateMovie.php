<!DOCTYPE html>
<html>

<head>
    <title>Movies</title>
	<meta charset="utf-8"></meta>
	<link type="text/css" rel="stylesheet" href="../Resources/css_Theme/mainTheme.css">
	
	<style> 
		/* Align the side bar, the div element for containing multiple movie information tables, 
		and the text inside each of those tables,  vertically to the top of the element */
    	.menu, .movieBlock /*table tbody td:last-child*/{
			vertical-align: top;
		}

		/* setup display of the div element containing multiple movie information tables (content div) */
		.movieBlock{ 
			overflow:auto;
			height:75vh;
			width:100%;
			margin:0;
		}

		/* setup display of each movie information table */
		.poster{
			text-align: left;
			width: 44%; 
			min-width: 320px;
			max-width: 400px;
			height: 310px;
			float:left;			
		}

		/* redefine style set in stylesheet, for the width of the image in each movie information table  */
		.boxImg{ width:100px; }

		/* Force minimum width of menu */
		.menu td{ min-width:6rem; }
	
		</style>
</head>

<body>
<div class="included">

<!-- ___ Display on Webpage _________________________________________________________________________________________ -->
	<table class="mainPageTable">
	
	<!-- Browse Movies Header -->
		<thead> 	
			<tr>
				<th colspan="2"><h1>Browse Movies</h1></th>
			</tr>
		</thead>

		<tbody>
	<!-- Genre Menu -->
		<tr class="menu" >      <!-- ------------------------------------------------ -->
			<td id="filterMenu" rowspan="2">
				<br><br>
				<b>GENRE: </b><br>
				<form method="POST" action="">
					<input type="radio" name='checkSelect[]' value="All">			<label>All</label>		<br>
					<input type="radio" name='checkSelect[]' value="Action">		<label>Action</label>	<br>
					<input type="radio" name='checkSelect[]' value="Adventure">		<label>Adventure</label><br>
					<input type="radio" name='checkSelect[]' value="Comedy">		<label>Comedy</label>	<br>
					<input type="radio" name='checkSelect[]' value="Drama">			<label>Drama</label>	<br>
					<input type="radio" name='checkSelect[]' value="Fantasy">		<label>Fantasy</label>	<br>
					<input type="radio" name='checkSelect[]' value="Horror">		<label>Horror</label>	<br>
					<input type="radio" name='checkSelect[]' value="Mystery">		<label>Mystery</label>	<br>
					<input type="radio" name='checkSelect[]' value="Romance">		<label>Romance</label>	<br>
					<input type="radio" name='checkSelect[]' value="Sci-Fi">		<label>Sci-Fi</label>	<br>
					<input type="radio" name='checkSelect[]' value="Thriller">		<label>Thriller</label>	<br>
					<input type="submit" value="Filter" name="submit">
				</form></br>

				<!-- Genre Menu (Selection Output Text)-->
				<div id="SelectedGenera">
					<?php include "../LocateMovies/LocateMovie_Functions.php" ?>
				</div>
			</td>
		</tr>	
	                                             
	<!-- Output Movie Poster & Information Block -->
		<tr>
			<td>
				<div class="movieBlock">
					<?php require "../LocateMovies/LocateMovie_db.php"; ?>
				</div>
			</td>
		</tr>
	</tbody>
	</table>

</div>

</body>
</html>