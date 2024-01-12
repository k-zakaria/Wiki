<?php
require_once '../database/database.php';
class Category{
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

    static public function getAllCategory(){
        $sql = "SELECT * FROM `categorys`";
        $stmt = Database::connexion()->getPdo()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function addCategory() {
        $sql = "INSERT INTO `categorys` (`name`) VALUES (?)";
        $stmt = Database::connexion()->getPdo()->prepare($sql);
        $stmt->execute([ $this->name]);
        if ($stmt) {
            return true;
        }else{
            return false;
        } 
    }

    public function deleteCategory($id) {
        $sql = "DELETE FROM `categorys` WHERE `categoryId` = $id";
        $stmt = Database::connexion()->getPdo()->query($sql);
        
        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }
}