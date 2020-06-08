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

	<form action="salesforceEntry.php">
    	<input type="submit" value="Insert new Contact to Salesforce" />
	</form>

	<form action="salesforceUpdate.php">
    	<input type="submit" value="Modify Existing Contact in Salesforce" />
	</form>

	<br>

	<form action="displayDynamics.php">
    	<input type="submit" value="Display Dynamics Contacts" />
	</form>

	<form action="dynamicsEntry.php">
    	<input type="submit" value="Insert new Contact to Dynamics" />
	</form>

	<form action="dynamicsUpdate.php">
    	<input type="submit" value="Modify Existing Contact in Dynamics" />
	</form>


</body>
</html>
