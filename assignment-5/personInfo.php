<?php
include "person.php";
$person = new Person( "Md. Mosabbir Hossain", "rehanmosabbir@gmail.com" );
$person->setName( "Rezwana Sarmin" );
$person->setEmail( "rokti.red@gmail.com" );

echo "<h2>Person Information:</h2>";
echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail() . "<br><br>";
