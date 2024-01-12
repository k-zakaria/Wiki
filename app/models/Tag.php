<?php
require_once '../database/database.php';
class Tag{
    private $id;
    private $name;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    static public function getAllTag(){
        $sql = "SELECT * FROM `tags`";
        $stmt = Database::connexion()->getPdo()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    static public function getTagById($id) {
        $sql = "SELECT * FROM `tags` WHERE `tagId` = ?";
        $stmt = Database::connexion()->getPdo()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        var_dump($result);die();
        return $result;
    }

    public function addTag() {
        $sql = "INSERT INTO `tags` (`name`) VALUES (?)";
        $stmt = Database::connexion()->getPdo()->prepare($sql);
        $stmt->execute([ $this->name]);
        if ($stmt) {
            return true;
        }else{
            return false;
        } 
    }

    public function updateTag($id) {
        $sql = "UPDATE `tags` SET `name` = ? WHERE `tagId` = ?";
        $stmt = Database::connexion()->getPdo()->prepare($sql);
        $stmt->execute([$this->name, $id]);
    
        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteTag($id) {
        $sql = "DELETE FROM `tags` WHERE `tagid` = $id";
        $stmt = Database::connexion()->getPdo()->query($sql);
        
        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }


}