<?php

require("dbConnect.php");
$db = get_db();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dynamics Contact Update</title>
</head>

<body>
<div>

<h1>Enter the Contact ID of the contact you wish to modify with the updated information</h1>

<form id="mainForm" action="modifyToDynamics.php" method="POST">

	<input type="text" id="contactid" name="contactid"></input>
	<label for="contactid">Contact ID</label>
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

	<input type="submit" value="Modify" />

</form>


</div>

</body>
</html>