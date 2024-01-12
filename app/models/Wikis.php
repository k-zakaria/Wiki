<?php
require_once '../database/database.php';
class Wikis{
    private $id;
    private $title;
    private $content;
    private $date;
    private $auteur;
    private $category;
    


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

   

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        $this->date = $date;
    }
     public function getAuteur() {
        return $this->auteur;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }
    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }


    static public function getAllWikis(){
        $sql = "SELECT * FROM `wikis`";
        $stmt = Database::connexion()->getPdo()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    static public function getWikis(){
        $sql = "SELECT * FROM `wikis`";
        $stmt = Database::connexion()->getPdo()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    
    static public function getWikiById($id) {
        $sql = "SELECT * FROM `wikis` WHERE `wikiId` = $id";
        $stmt = Database::connexion()->getPdo()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    

    public function addWiki() {
        $sql = "INSERT INTO `wikis` (`title`, `content`, `dateCreate`, `userId`, `categoryId`) VALUES ( ?, ?, ?, ?, ?)";
        $stmt = Database::connexion()->getPdo()->prepare($sql);
        $stmt->execute([ $this->title, $this->content,  $this->date, $this->category, $this->auteur]);
        if ($stmt) {
            $last_id = Database::connexion()->getPdo()->query('SELECT MAX(id) FROM wikis')->fetchcolumn();
            return $last_id;
        } 
        else {
        
            return false;
        }
    }

    public function deleteWiki($id) {
        $sql = "DELETE FROM `wikis` WHERE `wikiId` = $id";
        $stmt = Database::connexion()->getPdo()->query($sql);
        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }

    public function updateWiki() {
        $sql = "UPDATE `wikis` SET `title` = ?, `content` = ?, `dateCreate` = ? WHERE `id` = ?";
        $stmt = Database::connexion()->getPdo()->prepare($sql);
        $stmt->execute([$this->title, $this->content, $this->date, $this->id]);
    
        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }
    
    
}