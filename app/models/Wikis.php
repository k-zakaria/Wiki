<?php
require_once '../database/database.php';
class Wikis{
    private $id;
    private $title;
    private $content;
    private $date;
    


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
        $sql = "SELECT * FROM `wikis` WHERE `wikiId` = ?";
        $stmt = Database::connexion()->getPdo()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        var_dump($result);die();
        return $result;
    }
    

    public function addWiki() {
        $sql = "INSERT INTO `wikis` (`title`, `content`, `dateCreate`) VALUES ( ?, ?, ?, 5, 1)";
        $stmt = Database::connexion()->getPdo()->prepare($sql);
        $stmt->execute([ $this->title, $this->content,  $this->date]);
        if ($stmt) {
            return true;
        }else{
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