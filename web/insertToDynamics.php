<?php

$contactid = $_POST['contactid'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$address = $_POST['address'];
$city = $_POST['city'];


require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO Dynamics(contactid, lastname, firstname, address, city) VALUES(:contactid, :lastname, :firstname, :address, :city)';
	$statement = $db->prepare($query);

	$statement->bindValue(':contactid', $contactid);
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