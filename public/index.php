<?php

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'login':
        require_once '../app/views/auth/login.php';
        break;
    case 'register':
        require_once '../app/views/auth/register.php';
        break;
    case 'dashboard':
        require_once '../app/views/notes/index.php';
        break;
    case 'home':
    default:
        require_once '../app/views/home.php';
        break;
}