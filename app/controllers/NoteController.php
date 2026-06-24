<?php
require_once __DIR__ . "/../models/Note.php";
require_once __DIR__ . "/../../config/database.php";

class NoteController {
    private PDO $conn;

    public function __construct(PDO $conn){
        $this->conn = $conn;
    }
    
    public function create(){
        $title = $_POST['title'] ?? '';
        $content = $_POST['content'] ?? '';
        $note = new Note(null, $title, $content, $_SESSION['user']['id'], $this->conn);
        $note->create();
    }

    public function read(){
        $noteModel = new Note(null, '', '', $_SESSION['user']['id'], $this->conn);
        $notes = $noteModel->read();
        require_once __DIR__ . '/../views/notes/index.php';
    }

    public function update($id){
        $title = $_POST['title'] ?? '';
        $content = $_POST['content'] ?? '';
        $note = new Note((int)$id, $title, $content, $_SESSION['user']['id'], $this->conn);
        $note->update();
    }

    public function delete($id){
        $noteModel = new Note(null, '', '', $_SESSION['user']['id'], $this->conn);
        $noteModel->delete($id);
    }
}