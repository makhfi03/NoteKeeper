<?php

class User{
    private ?int $id;
    private string $firstname; 
    private string $lastname;
    private string $email;
    private string $password;
    private PDO $conn;

    public function __construct(?int $id, string $firstname, string $lastname, string $email, string $password, PDO $conn)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->conn = $conn;
        }

    public function register(){
        $query = "INSERT INTO users (firstname, lastname, email, password) VALUES (?,?,?,?)";
        $pass = password_hash($this->password, PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$this->firstname, $this->lastname, $this->email, $pass]);
        header("Location: /login");
    }
}