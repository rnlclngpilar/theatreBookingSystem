<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"></meta>
    <link type="text/css" rel="stylesheet" href="mainTheme.css"> <!-- href="stucture_Draft1.css"> -->
    <script type="text/javascript" src="../js/mainScript.js"></script>
    <Title>Movie Theater</Title> 

    <style>
        table { background-color: darkred; }
    </style>

</head>
<body>

    <!-- ____________ Top Navigation Bar ________________ -->
    <!-- Can Contain: Horizontal Navigation Links, Site logo, 1 or 2 horizontal banners -->
    <header class="navBar">
        <nav >
            <ul>
                <li>Home</li>
                <li>Booking</li>
                <li>Trailers</li>
                <li>Snacks</li>
            </ul>
        </nav>
    </header>
    
   
    <!-- ____________ ~ Information ~ (Start) _______________-->
    
    
    <table class="mainPageTable">

	<!-- Browse Movies Header -->
        <tr>
			<th><h1> ~ Movie Information ~ </h1></th>
		</tr>

    <!-- Output Movie Poster & Information Block -->
    <?php include './getMovieInfo.php'; ?>

		<tr>
			<td class="movieBlock">
				
 <!--image-database? -->
                <table class='poster'>
                    <td rowspan="10"><image src="posters/<?php echo "".$row["movieID"].""?>" height="210px"></image></td>
                    <td>
                    <p>
                        <strong>Title:</strong>
                        <span id="chosenMovie" value="chosenMovie"><?php echo "".$row["title"].""?></span>
                    </p>
                    <p>
                        <strong>Availablity:</strong>
                        <span id="chosenMovie" value="chosenMovie"><?php echo "".$row["availability"].""?></span>
                    </p>
                    <p>
                        <strong>Release date:</strong>
                        <span id="chosenMovie" value="chosenMovie"><?php echo "".$row["releaseDate"].""?></span>
                    </p>
                    <p>
                        <strong>Rating:</strong>
                        <span id="chosenMovie" value="chosenMovie"><?php echo "".$row["rating"].""?></span>
                    </p>
                    <p>
                        <strong>Genre:</strong>
                        <span id="chosenMovie" value="chosenMovie"><?php echo "".$row["genre"].""?></span>
                    </p>
                    <p>
                        <strong>Description:</strong>
                        <span id="chosenMovie" value="chosenMovie"><?php echo "".$row["description"].""?></span>
                    </p>
<!--
                    <p>
                        <strong>3D:</strong>
                        <span id="chosenMovie" value="chosenMovie"><?php echo "".$row["threeD"].""?></span>
                    </p>
-->
                    <p>
                        <strong>Closed Captioning:</strong>
                        <span id="chosenMovie" value="chosenMovie"><?php echo "".$row["cc"].""?></span>
                    </p>
                    <p>
                        <strong>Duration:</strong>
                        <span id="chosenMovie" value="chosenMovie"><?php echo "".$row["duration"].""?></span>
                    </p>

                    </td>

                    <!-- possibly link theater contact info here-->
                </table>
            </fieldset>
        </div>
    </div>
    <!-- _____________ ~ Information ~ (End) ________________-->
    </div>
                    </div>
				<br>
			</td>
		</tr>
</tr>
    </table>

    <footer  class="navBar">
        <nav>                   <!-- Horizontal Navigation Links -->
            <ul>
                <li>Back to Top</li>
                <li>Site Map</li>
                <li>Contact</li>
                <li>About</li>
            </ul>
        </nav>
    </footer>
<!--______________________________________________________________________________________________-->
</body>
</html>



    <!--
        <div class="nestWithBackgroundImage" id="bImg_Home">
            <div class="outerRim">
                <div class="innerBlockTitle">
                    <fieldset>
                    <table class="formTable">
                        <caption>Information:</caption>
    -->

