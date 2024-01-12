<?php
require_once '../database/database.php';
class User  {
    private $id;
    private $username;
    private $email;
    private $password;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

   

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }   


    public function signup() {
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`username`,`email`, `password`, `roleId`) VALUES ( ?, ?, ?, 2)";
        $stmt = Database::connexion()->getPdo()->prepare($sql);
        $stmt->execute([ $this->username, $this->email, $hashedPassword]);
        if ($stmt) {
            return true;
        }else{
            return false;
        } 
        

    }
    public function login($email,$password){
        $sql = "SELECT * FROM `users` WHERE email = ?";
        $stm = Database::connexion()->getPdo()->prepare($sql);
        $stm->execute([$email]);
        $result = $stm->fetchObject();
        if ($result && password_verify($password, $result->password)) {
            return $result;
        } else {
            return false; 
        }
    }

}