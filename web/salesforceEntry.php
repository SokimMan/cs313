<?php

require("dbConnect.php");
$db = get_db();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Salesforce Contact Entry</title>
</head>

<body>
<div>

<h1>Enter a New Contact into the Salesforce database</h1>

<form id="mainForm" action="insertToSalesforce.php" method="POST">

	<input type="text" id="externalid" name="externalid"></input>
	<label for="externalid">External ID</label>
	<br /><br />

	<input type="text" id="lastname" name="lastname"></input>
	<label for="lastname">Last Name</label>
	<br /><br />

	<input type="text" id="firstname" name="firstname"></input>
	<label for="firstname">First Name</label>
	<br /><br />

	<input type="text" id="address" name="address"></input>
	<label for="address">Street Address</label>
	<br /><br />

	<input type="text" id="city" name="city"></input>
	<label for="city">City</label>
	<br /><br />

	<br />

	<input type="submit" value="Add to Salesforce" />

</form>


</div>

</body>
</html>