<!DOCTYPE html>
<html>
<body>

<p>Display database:</p>

<?php
try
{
  
  $dbUrl = getenv('DATABASE_URL');

  if (empty($dbUrl)) {
  // example localhost configuration URL with postgres username and a database called db
  $dbUrl = "postgres://postgres:password@localhost:58767/DATABASE";
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
