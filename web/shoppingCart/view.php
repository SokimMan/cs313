<?php
// First let's process all the input

// using constants for the names of the elements in the form would be better...

// It would also be better to use an ID of some sort for the
// value that is submitted such as "cs" as opposed to "Computer Science",
// then in PHP we could process that value and determine the exact
// presentation text to render.

$items = $_POST["cart"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Submission Results</title>
</head>

<body>

	<h1>Confirmation Page</h1>

	<p>The following items are in your cart:</p>
	
	<?
	echo "<form method="POST" action="confirm.php">";
	foreach ($items as $item)
	{
		echo "<input type="hidden" name="confirm[]" id=$item value=$item><br /><br />";
	}
	echo "<input type="text" id = "credit" name = "credit"> Credit Card<br /><br />";
	echo "<input type="text" id = 'address' name = 'address'> Address<br /><br />";
	echo "<input type="text" id = 'zip' name = 'zip'> Zip Code<br /><br />";
	echo "<input type="text" id = 'city' name = 'city'> City<br /><br />";
	echo "<input type="text" id = 'state' name = 'state'> State<br /><br />";
	echo "<input type='submit' value='Confirm Cart'>";
	?>

</body>
</html>