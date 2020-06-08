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
	$query = 'UPDATE Salesforce SET lastname = :lastname, firstname = :firstname, address = :address, city = :city WHERE externalid = :externalid';
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