<?php
require_once __DIR__ . "/../models/User.php";
require_once __DIR__ . "/../../config/database.php";

class AuthController {
    private PDO $conn;

    public function __construct(PDO $conn){
        $this->conn = $conn;
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $query = "SELECT * FROM users WHERE email = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if($user && password_verify($password, $user['password'])){
                $_SESSION['user'] = $user;
                header("Location: /dashboard");
            }else{
                header("Location: /login");
            }
        }else{
            require_once __DIR__ . "/../views/auth/login.php";
        }
    }

    public function register(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstname = $_POST['firstname'];
            $lastname  = $_POST['lastname'];
            $email     = $_POST['email'];
            $password  = $_POST['password'];

            $user = new User(null, $firstname, $lastname, $email, $password, $this->conn);
            $user->register();
        } else {
            require_once __DIR__ . "/../views/auth/register.php";
        }
    }
}