<?php
require "dbConnect.php";
$db = get_db();


$statement = $db->prepare("SELECT contactid, firstname, lastname, address, city FROM Dynamics");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$contactid = $row['contactid'];
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$address = $row['address'];
	$city = $row['city'];

	echo "<p><strong>$firstname $lastname:</strong> $contactid<p>";
	echo "<p>$address, $city <p>";
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