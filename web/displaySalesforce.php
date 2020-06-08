<?php
require "dbConnect.php";
$db = get_db();


$statement = $db->prepare("SELECT externalid, firstname, lastname, address, city FROM Salesforce");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$externalid = $row['externalid'];
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$address = $row['address'];
	$city = $row['city'];

	echo "<p><strong>$firstname $lastname:</strong> $externalid<p>";
	echo "<p>	$address, $city <p>";
	echo "</br>";
}
?>

<!DOCTYPE html>
<html>
<body>
	<form action="ponder05.php">
    	<input type="submit" value="Go back" />
	</form>
</body>
</html>