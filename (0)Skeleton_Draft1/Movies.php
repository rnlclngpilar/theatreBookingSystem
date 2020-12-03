<!DOCTYPE html>
<html>

<head>
    <title>Movies</title>
    <meta charset="utf-8"></meta>
    <style type="text/css">
        .boxImg { 
			position:float;
			background-color: white;
			float:left;
			border-collapse: separate;
			border: solid black medium;
			
			max-height:200px;
			max-width:100px;
			margin:5px;
			border-radius: 2vw;
		}
    </style>
	<style>

		html,body{box-sizing: border-box; padding:0; margin:0;}
		table, th, tr,td{ border-collapse: collapse;}

		label{
			text-align: left;
		}			

		#divHeader{
			background-color: darkgrey; 
			border-radius: 15px;
			width:100%; 
			position:relative;
			border: solid medium black; 
			padding: 2px;
		}
/*-----------*/
		.div2  table{box-sizing: border-box;  width:max-content; margin:5px;}
        .div2  img{box-sizing: border-box; height:20vh; padding:5px; }

        .div2{
            box-sizing: border-box;
            overflow:auto;
			height:70vh;
			width:100%;
			text-align: center ;			
            background-color:darkred;
            border-radius: 20px;
        }
/*-----------*/
		.poster:hover{
			background-blend-mode: multiply;
			background-color:yellow;
		}
	
		.poster {
			position:float;
			background-color: white;
			float:left;
			border-collapse: separate;
			border: solid black medium;
		}
		
		.outline{ padding:5px;}
		
		body {	
			background-image: url("https://img.freepik.com/free-vector/pattern-snacks-theme-popcorn_85534-194.jpg?size=338&ext=jpg");			
			background-size: 20vw;
			/*background-repeat: <!-- -------------- -->;*/
			background-attachment: fixed;
			background-color: grey; 
			background-blend-mode: hard-light; }

		table {border-radius: 2vw;}


		#ticketImg {
			background-color:white; 
			border: double 4px black; 
			padding:5px;	
			border-radius: 15px;
		}
		#ticketImg:hover {
			background-color: lightyellow; 
			border: solid 4px black;
		}

		#mainPageTable {margin:5vw; background:lightgrey;}
		#menuStyle{background:darkgrey; border-radius: 30px; margin:30px; border-right: thick black solid; padding:40px; width:100px;}
	
	</style>
</head>

<body>
<div class="included">
<table id="mainPageTable">
	<tr>
		<td id="menuStyle" rowspan=5> Menu 
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
		<td style="border-bottom: thick black solid; background:darkred; border-radius:2vw; padding:5px;">
			<table style="background:darkred">
				<td style="width:max-content">
					<div id="divHeader">header here</div><!-- is this the right tag? -->
				</td>
			</table>	
		</td>
	</tr>

	<tr>
		<td style="border-bottom: thick black solid;background:darkgrey; border-radius: 10px; margin:20px; padding:5px;">	
		<button id="btn1" style="width:100%; position:relative;">Use this to change the display of action - unhide it </button>
<!-- is button position okay? -->

			<!-- Method 1 _________________________________________________________ -->	
			<div id="div2" class="div2" >
				<legend style="background-color: ivory;">Class Method</legend>
				<script type="text/javascript" language="javascript" src="js/consoleUserInfo_and_outputMovieOptions.js"></script>
				<?php require 'php/displayMovie.php';?>		<!-- For displaying movie database -->
			</div>
			<br>
			
			<!-- Method 2 _________________________________________________________ -->				
			<div id="div2" class="div2" >
				<legend style="background-color: ivory;">Number Method</legend>
				<div class="passport-box">

				<div class="action">
				<table class="poster"><td>00</td><td><img src="https://i.pinimg.com/originals/85/5b/73/855b7304439953eb7f6261ec9f644d40.jpg"></img></td>
				</table>	<!-- Ford Ferrari -->
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

			</div>
</div>
			
		
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

		</td>
	</tr>
	<tr>

	<tr>
		<td class="outline">
			<input type="date" ... /> <br>
			<input type="time" ... /><br>
			<input type="datetime-local" ... /><br>
			<input type="datetime"  ... /><br>
		</td>
	</tr>
</table>


</body>
</html>