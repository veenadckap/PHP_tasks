<?php

class ConnectDb{
    public $username;
    public $password;
    public $connection;

    public function __construct()
    {
        $this->username = "root";
        $this->password = "welcome";
        $dsn = "mysql:host=localhost;port=674;dbname=demo";
        $this->connection = new PDO($dsn,$this->username,$this->password);

    }

    public function query(){

        $statement = $this->connection->prepare("select * from posts");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

