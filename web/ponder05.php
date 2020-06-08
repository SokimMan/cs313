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

	<p>Welcome to the Contacts management tool, we have two databases of Contacts: Salesforce and Dynamics. Using the buttons below you can view the contents of the database, modify contacts through the use of the ID for the contact and add new contacts. I am doing something similar to this for my job. We have business contacts in an old system (Dynamics) and have recently ported them all to Salesforce. I am using SQL to verify that all the contacts ported correctly. I ran out of time to implement an inner join that would return all the contacts that matched in both databases but I think this is enough for most of the requirements for the project. </p>

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
