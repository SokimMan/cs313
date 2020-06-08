<?php
require "dbConnect.php";
$db = get_db();
?>

<!DOCTYPE html>
<html>
<body>

<h4>Salesforce Contacts:</h4>

<?php
	if(array_key_exists('salesforceButton', $_POST)) { 
        displaySalesforceData(); 
    } 
    else if(array_key_exists('dynamicsButton', $_POST)) { 
        displayDynamicsData(); 
    } 

	function displaySalesforceData() {

		$statement = $db->prepare("SELECT firstname, lastname, address, city FROM Salesforce");
		$statement->execute();

		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$externalid = $row['externalid'];
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$address = $row['address'];
			$city = $row['city'];

			echo "<p><strong>$firstname $lastname:</strong> ($externalid)<p>";
			echo "<p>	$address, $city <p>";
			echo "</br>";
		}
	}

	function displayDynamicsData() {
		$statement = $db->prepare("SELECT firstname, lastname, address, city FROM Dynamics");
		$statement->execute();

		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			$contactid = $row['contactid'];
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$address = $row['address'];
			$city = $row['city'];

			echo "<p><strong>$firstname $lastname:</strong> ($contactid)<p>";
			echo "<p>$address, $city <p>";
			echo "</br>";
		}
	}
?>

<form method="post"> 
    <input type="submit" name="salesforceButton"
            class="button" value="Display Salesforce Data" /> 
          
    <input type="submit" name="dynamicsButton"
            class="button" value="Display Dynamics Data" /> 
</form> 

<a href="salesforceEntry.php">Insert new Contact to Salesforce</a>
<a href="salesforceUpdate.php">Modify Existing Contact in Salesforce</a>

<br>

<a href="dynamicsEntry.php">Insert new Contact to Dynamics</a>
<a href="dynamicsUpdate.php">Modify Existing Contact in Dynamics</a>

</body>
</html>
