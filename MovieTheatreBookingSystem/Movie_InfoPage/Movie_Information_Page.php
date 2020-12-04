<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"></meta>
    <link type="text/css" rel="stylesheet" href="Resources/css_Theme/mainTheme.css">
    <Title>Movie Information</Title> 
</head>
<body>

   <table class="mainPageTable">
	<!-- ~ Movie Information ~ Header -->
        <tr>
			<th><h1> ~ Movie Information ~ </h1></th>
	    </tr>

    <!-- Output Movie Poster & Information Block -->
		<tr>
			<td class="movieBlock">
				<?php include './getMovieInfo.php'; ?>
			</td>
		</tr>
</body>
</html>