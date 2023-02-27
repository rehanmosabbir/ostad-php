<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include "person.php";

$name = $_POST["name"];
$email = $_POST["email"];

$personNew = new Person( $name, $email );
$personNew->setName( $name );
$personNew->setEmail( $email );

echo "<h2>Person Information:</h2>";
echo "Name: " . $personNew->getName() . "<br>";
echo "Email: " . $personNew->getEmail() . "<br><br>";

?>
</body>
</html>