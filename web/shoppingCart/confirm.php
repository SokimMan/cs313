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
	<title>Confirmation Page</title>
</head>

<body>

	<h1>Confirmation Page</h1>

	<p>Your order for the following items has been processed:</p>
	
	<ul>

	
	<?
	foreach ($items as $item)
	{
		echo "<li><p>$item</p></li>";
	}
	?>			

	</ul>

	<p>Thank you for shopping with us:</p>

</body>
</html>