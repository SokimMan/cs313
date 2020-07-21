<?php
// First let's process all the input

// using constants for the names of the elements in the form would be better...

// It would also be better to use an ID of some sort for the
// value that is submitted such as "cs" as opposed to "Computer Science",
// then in PHP we could process that value and determine the exact
// presentation text to render.

$items = $_POST["confirm"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Submission Results</title>
</head>

<body>

	<h1>Confirmation Page</h1>

	<p>The following items are in your cart:</p>
	
	<ul>

	
	<?
	foreach ($items as $item)
	{
		$item_clean = htmlspecialchars($item);
		echo "<li><p>$item_clean</p></li>";
	}
	?>			

	</ul>

</body>
</html>