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

$person = new Person( "Md. Mosabbir Hossain", "rehanmosabbir@gmail.com" );
$person->setName( "Rezwana Sarmin" );
$person->setEmail( "rokti.red@gmail.com" );

echo "<h2>Person Information:</h2>";
echo "Name: " . $person->getName() . "<br>";
echo "Email: " . $person->getEmail() . "<br><br>";
