<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your major is: <?php echo $_POST["major"]; ?><br>

<?php

$name = $_POST['continent'];

if (isset($_POST['continent'])) {
    echo "You chose the following continent(s): <br>";

    foreach ($name as $continent){
        echo $continent."<br />";
    }
} else {
    echo "You did not choose a continent.";
}

?>

</body>
</html>