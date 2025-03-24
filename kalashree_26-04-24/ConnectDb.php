<?php

class ConnectDb{
    public $connection;

    public function __construct($config,$username='root',$password='welcome')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        //$dsn = "mysql:host=localhost;dbname=demo";
        $this->connection = new PDO($dsn,$username,$password);

    }

    public function query($query){

        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

