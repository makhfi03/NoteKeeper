<?php
session_start();

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/NoteController.php';

$database = new Database();
$db = $database->getConnection();
$authController = new AuthController($db);
$noteController = new NoteController($db);


$request_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$protected_routes = ['/dashboard', '/notes/create', '/notes/edit', '/notes/delete'];
if (in_array($request_path, $protected_routes) && !isset($_SESSION['user'])) {
    header("Location: /login");
    exit;
}

switch ($request_path){
    case '/home':
        require_once'../app/views/home.php';
        break;


    case '/register':
        $authController->register();
        break;
    
    case '/login':
        $authController->login();
        break;

    case '/dashboard':
        $noteController->read();        
        break;

    case '/notes/create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $noteController->create();
            header("Location: /dashboard");
            exit;
        }
        break;

    case '/notes/edit':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;
            if ($id) {
                $noteController->update($id);
            }
            header("Location: /dashboard");
            exit;
        }
        break;

    case '/notes/delete':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;
            if ($id) {
                $noteController->delete($id);
            }
            header("Location: /dashboard");
            exit;
        }
        break;

    case '/logout':
        session_destroy();
        header("Location: /home");
        exit;
        break;

    default:
        require_once'../app/views/home.php';
        break;
}