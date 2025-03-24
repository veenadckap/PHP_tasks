<?php
class User {
    private $name;
    private $email;
    private $password;
    private $dob;

    public function __construct($name, $email, $password, $dob) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->dob = $dob;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDob() {
        return $this->dob;
    }
}
