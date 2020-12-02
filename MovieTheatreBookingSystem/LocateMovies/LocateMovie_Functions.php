<!--    Was in   [ (0)Skeleton_Draft1 >   "Movies.php" ]  -->
<!--    Must seperate php and javaScript from the final html document that users will see -->

<!DOCTYPE html>
<html>

<head>
    <title>Movies</title>
    <meta charset="utf-8"></meta>
    <link type="text/css" rel="stylesheet" href="../MovieTheatreBookingSystem/css_Theme/mainTheme.css">
</head>

<body>
<div class="included">
<table id="mainPageTable">
	<tr class="menuContainer">
		<td id="filterMenu" rowspan=5> Menu 
			<br><br>
			<b>GENRE: </b><br>
			<label>All</label><input type="checkbox" class="checkme"><br>
			<label>Action</label><input type="checkbox" class="checkme1"><br>
			<label>Adventure</label><input type="checkbox" class="checkme2"  ><br>
			<label>Comedy</label><input type="checkbox"><br>
			<label>Drama</label><input type="checkbox"><br>
			<label>Fantasy</label><input type="checkbox"><br>
			<label>Horror</label><input type="checkbox"><br>
			<label>Mystery</label><input type="checkbox"><br>
			<label>Romance</label><input type="checkbox"><br>
			<label>Sci-Fi</label><input type="checkbox"><br>
			<label>Thriller</label><input type="checkbox"><br>
		 </td>
    </tr>

	<tr>
		<td class="headerContainer">
			<h1 id="divHeader">Browse Movies</h1>
		</td>
	</tr>

	<tr>
		<td class="dropDownFunctionContainer">	
		<button id="btn1" class="dropDownButton">Hide/Unhide Below Content</button>

			<!-- Method 1 _________________________________________________________ -->	
			<div id="div2" class="div2" >
				<legend class="dropDownLabel">Class Method</legend>
				<script type="text/javascript" language="javascript" src="js/consoleUserInfo_and_outputMovieOptions.js"></script>
				<?php require 'php/displayMovie.php';?>		<!-- For displaying movie database -->
			</div>
			<br>
			
			<!-- Method 2 _________________________________________________________ -->			
			<div id="div2" class="div2" >
				<legend class="dropDownLabel">Number Method</legend>
				<div class="passport-box">
					<div class="action">
						<table class="poster"><td>00</td><td><img src="https://i.pinimg.com/originals/85/5b/73/855b7304439953eb7f6261ec9f644d40.jpg"></img></td></table>	<!-- Ford Ferrari -->
						<table class="poster"><td>01</td><td><img src="https://m.media-amazon.com/images/M/MV5BYzg0MjQ0ODUtYTgyNC00Y2Y5LWE5NDctODY3ZTFkYmZkNGFiXkEyXkFqcGdeQXVyMTE1MzI2NzIz._V1_.jpg"></img></td></table>	
						<table class="poster"><td>02</td><td><img src="https://i.pinimg.com/originals/85/5b/73/855b7304439953eb7f6261ec9f644d40.jpg"></img></td></table>
					</div>

					<div class="notaction">
						<div class="adventure">
						<table class="poster"><td>03</td><td><img src="https://m.media-amazon.com/images/M/MV5BYzg0MjQ0ODUtYTgyNC00Y2Y5LWE5NDctODY3ZTFkYmZkNGFiXkEyXkFqcGdeQXVyMTE1MzI2NzIz._V1_.jpg"></img></td></table>	
						<table class="poster"><td>04</td><td><img src="https://i.pinimg.com/originals/85/5b/73/855b7304439953eb7f6261ec9f644d40.jpg"></img></td></table>	
						<table class="poster"><td>05</td><td><img src="https://m.media-amazon.com/images/M/MV5BYzg0MjQ0ODUtYTgyNC00Y2Y5LWE5NDctODY3ZTFkYmZkNGFiXkEyXkFqcGdeQXVyMTE1MzI2NzIz._V1_.jpg"></img></td></table>
					</div>


					<div class="notadventure">
						<table class="poster"><td>06</td><td><img src="https://i.pinimg.com/originals/85/5b/73/855b7304439953eb7f6261ec9f644d40.jpg"></img></td></table>	
						<table class="poster"><td>07</td><td><img src="https://m.media-amazon.com/images/M/MV5BYzg0MjQ0ODUtYTgyNC00Y2Y5LWE5NDctODY3ZTFkYmZkNGFiXkEyXkFqcGdeQXVyMTE1MzI2NzIz._V1_.jpg"></img></td></table>	
						<table class="poster"><td>08</td><td><img src="https://i.pinimg.com/originals/85/5b/73/855b7304439953eb7f6261ec9f644d40.jpg"></img></td></table>	
						<table class="poster"><td>09</td><td><img src="https://m.media-amazon.com/images/M/MV5BYzg0MjQ0ODUtYTgyNC00Y2Y5LWE5NDctODY3ZTFkYmZkNGFiXkEyXkFqcGdeQXVyMTE1MzI2NzIz._V1_.jpg"></img></td></table>	
						<table class="poster"><td>10</td><td><img src="https://i.pinimg.com/originals/85/5b/73/855b7304439953eb7f6261ec9f644d40.jpg"></img></td></table>	
						<table class="poster"><td>11</td><td><img src="https://m.media-amazon.com/images/M/MV5BYzg0MjQ0ODUtYTgyNC00Y2Y5LWE5NDctODY3ZTFkYmZkNGFiXkEyXkFqcGdeQXVyMTE1MzI2NzIz._V1_.jpg"></img></td></table>	
						<table class="poster"><td>12</td><td><img src="https://i.pinimg.com/originals/85/5b/73/855b7304439953eb7f6261ec9f644d40.jpg"></img></td></table>	
						<table class="poster"><td>13</td><td><img src="https://m.media-amazon.com/images/M/MV5BYzg0MjQ0ODUtYTgyNC00Y2Y5LWE5NDctODY3ZTFkYmZkNGFiXkEyXkFqcGdeQXVyMTE1MzI2NzIz._V1_.jpg"></img></td></table>	
						<table class="poster"><td>14</td><td><img src="https://i.pinimg.com/originals/85/5b/73/855b7304439953eb7f6261ec9f644d40.jpg"></img></td></table>	
						<table class="poster"><td>15</td><td><img src="https://m.media-amazon.com/images/M/MV5BMTM1NTU0NTE4MV5BMl5BanBnXkFtZTcwMTQ0MjEzMw@@._V1_.jpg"></img></td></table>
					</div>
				</div>
			</div>
		</td>
	</tr>
			
		
		<script src="js/jquery-latest.min.js"></script>
		<script>//-----------------------------------------------------------------------------------------------------------
			/* Next Steps
				for Method 1
				-update the function that iterates through the objects to create each box containing:
						movie title & information
						movie poster image (get this using relative path to image stored in database), 
						when the posters are clicked, go to the page for ticket purchase
						(innerHTML for the entire table) 
				
				-setup menu items/filters to change the movies display (hide them?) - see pizza form lecture?
				etc... 
			*/ 
			//----------------------------------------------------------------------------------------------------------- 

			//hides or show all movies under
		
			//hides or show action (movies 00 to 02) under div class="action"


			$(function(){
			$(".checkme1").click(function(event) {
			var x = $(this).is(':checked');
			if (x == true) {
				$(this).parents(".included").find('.action').show(); //show action movies when clicked
				$(this).parents(".included").find('.notaction').hide(); //hides non action movies when clicked
			}
			else{
				$(this).parents(".included").find('.action').show(); //show action movies even when unclicked
				$(this).parents(".included").find('.notaction').show(); //show action movies when unclicked
			}

		});
		})


			$(function(){
			$(".checkme2").click(function(event) {
			var x = $(this).is(':checked');
			if (x == true) {
				$(this).parents(".included").find('.adventure').show(); //show action movies when clicked
				$(this).parents(".included").find('.notadventure').hide(); //hides non action movies when clicked
			}
			else{
				$(this).parents(".included").find('.adventure').show(); //show action movies even when unclicked
				$(this).parents(".included").find('.notadventure').show(); //show action movies when unclicked
			}

		});
		})

	</script>

	<tr>
		<td class="outline">
			<input type="date" ... /> <br>
			<input type="time" ... /><br>
			<input type="datetime-local" ... /><br>
			<input type="datetime"  ... /><br>
		</td>
	</tr>
</table>
</div>

</body>
</html>