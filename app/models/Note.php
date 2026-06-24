<?php

class Note{
    private ?int $id;
    private string $title;
    private string $content;
    private int $user_id;
    private PDO $conn;

    public function __construct(?int $id, string $title, string $content, int $user_id, PDO $conn = null){
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->user_id = $user_id;
        if($conn) {
            $this->conn = $conn;
        }
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getContent() : string
    {
        return $this->content;
    }

    public function getUserId() : int
    {
        return $this->user_id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setContent(string $content)
    {
        $this->content = $content;
    }

    public function setUserId(int $user_id)
    {
        $this->user_id = $user_id;
    }

    public function create() : bool
    {
        $query = "INSERT INTO notes (titre, contenu, user_id) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$this->title, $this->content, $this->user_id]);
    }

    public function read() : array {
        $query = "SELECT * FROM notes WHERE user_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$this->user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update() : bool{
        $query = "UPDATE notes SET titre = ?, contenu = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$this->title, $this->content, $this->id]);
    }

    public function delete($id) : bool{
        $query = "DELETE FROM notes WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$id]);
    }
}