<?php
require "dbConnect.php";
$db = get_db();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			Contacts Verification Tool
		</title>
	</head>
<body>

<form method="post"> 
    <input type="submit" name="displaySalesforceData"
            class="button" value="Display Salesforce Data" /> 
          
    <input type="submit" name="displayDynamicsData"
            class="button" value="Display Dynamics Data" /> 
</form>

<?php
	//if(array_key_exists('displaySalesforceData', $_POST)) { 
    //    displaySalesforceData(); 
    //} 
    //else if(array_key_exists('displayDynamicsData', $_POST)) { 
    //    displayDynamicsData(); 
    //}

    if ($_GET) {
        if (isset($_GET['displaySalesforceData'])) {
            displaySalesforceData();
        } elseif (isset($_GET['displayDynamicsData'])) {
            displayDynamicsData();
        }
    }

	function displaySalesforceData() {

		$statement = $db->prepare("SELECT externalid, firstname, lastname, address, city FROM Salesforce");
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

		$statement = $db->prepare("SELECT contactid, firstname, lastname, address, city FROM Dynamics");
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

<a href="salesforceEntry.php">Insert new Contact to Salesforce</a>
<a href="salesforceUpdate.php">Modify Existing Contact in Salesforce</a>

<br>

<a href="dynamicsEntry.php">Insert new Contact to Dynamics</a>
<a href="dynamicsUpdate.php">Modify Existing Contact in Dynamics</a>

</body>
</html>
