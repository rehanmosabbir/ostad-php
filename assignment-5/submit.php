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
class Person
{
    private $name;
    private $email;

    public function __construct( $name, $email )
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function setName( $name )
    {
        $this->name = $name;
    }
    public function setEmail( $email )
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }

}

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