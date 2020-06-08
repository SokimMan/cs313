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

	<form action="displaySalesforce.php">
    	<input type="submit" value="Display Salesforce Contacts" />
	</form>

	<form action="displayDynamics.php">
    	<input type="submit" value="Display Dynamics Contacts" />
	</form>

<a href="salesforceEntry.php">Insert new Contact to Salesforce</a>
<a href="salesforceUpdate.php">Modify Existing Contact in Salesforce</a>

<br>

<a href="dynamicsEntry.php">Insert new Contact to Dynamics</a>
<a href="dynamicsUpdate.php">Modify Existing Contact in Dynamics</a>

</body>
</html>
