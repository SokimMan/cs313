<?php
/**********************************************************
* File: insertTopic.php
* Author: Br. Burton
* 
* Description: Takes input posted from topicEntry.php
*   This file enters a new scripture into the database
*   along with its associated topics.
*
*   This file does NOT do any rendering at all,
*   instead it redirects the user to showTopics.php to see
*   the resulting list.
***********************************************************/

// get the data from the POST
$externalid = $_POST['externalid'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$address = $_POST['address'];
$city = $_POST['city'];

// For debugging purposes, you might include some echo statements like this
// and then not automatically redirect until you have everything working.

// echo "book=$book\n";
// echo "chapter=$chapter\n";
// echo "verse=$verse\n";
// echo "content=$content\n";

// we could (and should!) put additional checks here to verify that all this data is actually provided


require("dbConnect.php");
$db = get_db();

try
{
	// Add the Scripture

	// We do this by preparing the query with placeholder values
	$query = 'INSERT INTO Salesforce(externalid, lastname, firstname, address, city) VALUES(:externalid, :lastname, :firstname, :address, :city)';
	$statement = $db->prepare($query);

	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
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