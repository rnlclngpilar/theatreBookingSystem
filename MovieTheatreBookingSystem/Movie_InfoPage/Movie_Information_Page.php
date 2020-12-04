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
                    <!-- add image-database? -->
                    <!-- possibly link theater contact info here-->
                    <script>
                        function onClick($movieID) { /* Send them to ticket form and pass to it MovieID */};
                    </script>
			</td>
		</tr>
</body>
</html>