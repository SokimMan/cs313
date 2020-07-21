<?php
// First let's process all the input

// using constants for the names of the elements in the form would be better...

// It would also be better to use an ID of some sort for the
// value that is submitted such as "cs" as opposed to "Computer Science",
// then in PHP we could process that value and determine the exact
// presentation text to render.

$items = $_POST["items"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Submission Results</title>
</head>

<body>
	<h1>Submission Results</h1>

	<p>Your Shopping Cart:</p>
	
<?
	echo "<form method='POST' action='view.php'>";
	foreach ($items as $item)
	{
		echo "<input type='checkbox' name='cart[]' id=$item value=$item 'checked'><label for=$item>$item</label><br /><br />";
	}
	echo "<input type='submit' value='Confirm Cart'>";
?>


</body>


</html>

