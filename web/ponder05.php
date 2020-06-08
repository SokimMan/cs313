<?php
require "dbConnect.php";
$db = get_db();
?>

<!DOCTYPE html>
<html>
<body>



<h4>Salesforce Contacts:</h4>

<?php
$statement = $db->prepare("SELECT firstname, lastname, address, city FROM Salesforce");
$statement->execute();

// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$address = $row['address'];
	$city = $row['city'];

	echo "<p><strong>$firstname $lastname:</strong><p>";
	echo "<p>	$address, $city <p>";
	echo "</br>";
}
?>

<a href="salesforceEntry.php">Insert new Contact to Salesforce</a>

<h4>Dynamics Contacts:</h4>

<?php
$statement = $db->prepare("SELECT firstname, lastname, address, city FROM Dynamics");
$statement->execute();

// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$address = $row['address'];
	$city = $row['city'];

	echo "<p><strong>$firstname $lastname:</strong><p>";
	echo "<p>$address, $city <p>";
	echo "</br>";
}
?>

<a href="dynamicsEntry.php">Insert new Contact to Dynamics</a>
</body>
</html>
