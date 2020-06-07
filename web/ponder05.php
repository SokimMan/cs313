<?php
require "dbConnect.php";
$db = get_db();
?>

<!DOCTYPE html>
<html>
<body>



<h1>Salesforce Contacts:</h1>

<?php
$statement = $db->prepare("SELECT firstname, lastname FROM Salesforce");
$statement->execute();

// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];

	echo "<p><strong>$firstname </strong> - \"$lastname\"<p>";
}
?>

<a href="salesforceEntry.php">Insert new Contact to Salesforce</a>

<?php
$statement = $db->prepare("SELECT firstname, lastname FROM Dynamics");
$statement->execute();

// Go through each result
while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	// The variable "row" now holds the complete record for that
	// row, and we can access the different values based on their
	// name
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];

	echo "<p><strong>$firstname </strong> - \"$lastname\"<p>";
}
?>
</body>
</html>
