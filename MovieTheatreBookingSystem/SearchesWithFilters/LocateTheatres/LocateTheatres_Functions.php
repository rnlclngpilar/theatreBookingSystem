<?php

Global $theatre_Selected;
$theatre_Selected = null;		/* Use to store the value of the filter, type global */

/* Display Selected Theme */
	if(isset($_POST['submit'])) 
	{
		if (!empty($_POST['optSelect']))
		{
			$theatre_Selected = $_POST['optSelect'];
		}
		else { echo "Pick at most one option to filter.";}
	}
	else { echo "Make a selection."; }
?>