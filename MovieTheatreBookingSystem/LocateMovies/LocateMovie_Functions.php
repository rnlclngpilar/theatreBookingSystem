<?php
echo "selection " . count($_GET['checkSelect']) . "values";
foreach ($_GET['checkSelect'] as $genreFilter)
{
	
	echo $genreFilter . ",";
}
?>