<?php

Global $genre_Selected;
$genre_Selected = null;		/* Use to store the value of the filter, type global */

/* Display Selected Theme */
	if(isset($_POST['submit'])) 
	{
		if (!empty($_POST['checkSelect']))
		{
			foreach ($_POST['checkSelect'] as $genreFilter)
			{ 
				echo $genreFilter . "</br>";
				$genre_Selected = $genreFilter;
			}
		}
		else { echo "Pick at most one option to filter.";}
	}
	else { echo "Make a selection."; }
?>