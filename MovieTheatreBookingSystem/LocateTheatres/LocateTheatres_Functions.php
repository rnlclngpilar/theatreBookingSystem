<?php

Global $theatre_Selected;
$theatre_Selected = null;		/* Use to store the value of the filter, type global */

/* Display Selected Theme */
	if(isset($_POST['submit'])) 
	{
		if (!empty($_POST['optSelect']))
		{
			foreach ($_POST['optSelect'] as $theatreFilter)
			{ 
				echo $theatreFilter . "</br>";
				$theatre_Selected = $theatreFilter;
			}
		}
		else { echo "Pick at most one option to filter.";}
	}
	else { echo "Make a selection."; }
?>