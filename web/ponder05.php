<!DOCTYPE html>
<html>
<body>

<p>Display database:</p>

<?php
try
{
  echo 'Are we doing anything?';
  $dbUrl = getenv('DATABASE_URL');

  if (empty($dbUrl)) {
  // example localhost configuration URL with postgres username and a database called db
  $dbUrl = "iqpbnpewcumcag://iqpbnpewcumcag:8f20103a48b3a0cc5071ead6d09c37a449052b71cc6ee4f114e3dabe6f20182f@localhost:5432/dc1fiuq2in7au3";
  }

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}


foreach ($db->query('SELECT , firstname, lastname FROM Salesforce') as $row)
{
  echo 'Salesforce first name: ' . $row['firstname'];
  echo 'Salesforce last name: ' . $row['lastname'];
  echo '<br/>';
}
?>
</body>
</html>
