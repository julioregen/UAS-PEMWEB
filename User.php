<?php
class User {
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}
?>
