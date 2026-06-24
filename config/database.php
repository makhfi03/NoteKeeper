<?php

class Database{
    private $host = "localhost";
    private $dbname = "notekeeper";
    private $username = "root";
    private $password = "";
    public $conn;

public function getConnection(){
    $this->conn = null;
    try{
        $this->conn = new PDO(dsn:"mysql:host=" . $this->host . ";dbname=" . $this->dbname, username: $this->username, password: $this->password);
        $this->conn->setAttribute(attribute:PDO::ATTR_ERRMODE,
        value:PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $exception){
        echo "Erreur de connexion: " . $exception->getMessage();
    }
    return $this->conn;
    }
}