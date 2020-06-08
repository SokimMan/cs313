<?php

$externalid = $_POST['externalid'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$address = $_POST['address'];
$city = $_POST['city'];


require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO Salesforce(externalid, lastname, firstname, address, city) VALUES(:externalid, :lastname, :firstname, :address, :city)';
	$statement = $db->prepare($query);

	$statement->bindValue(':externalid', $externalid);
	$statement->bindValue(':lastname', $lastname);
	$statement->bindValue(':firstname', $firstname);
	$statement->bindValue(':address', $address);
	$statement->bindValue(':city', $city);

	$statement->execute();

}
catch (Exception $ex)
{

	echo "Error with DB. Details: $ex";
	die();
}


header("Location: ponder05.php");

die(); 

?>