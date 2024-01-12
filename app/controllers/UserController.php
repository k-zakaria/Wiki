<?php
require_once '../app/core/Router.php';
require_once '../app/models/User.php';
class UserController{
    public Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }


    public function signup() {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']))
            {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                $user = new User;
                
                $user->setUsername($username);
                
                $user->setEmail($email);
                $user->setPassword($password);
         
                if($user->signup()){
                    header("location:login");
                  } 
            }
        }
    }

    public function login() {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = new User;
            $userlogin = $user->login($email, $password);
           
            if($userlogin){
                $_SESSION['email']= $userlogin->email;
                $_SESSION['username']= $userlogin->username;
                $_SESSION['roleId']=$userlogin->roleId;
                $_SESSION['userId']=$userlogin->userId;
                if ($_SESSION['roleId']=1){
                    header("Location: dashboardAdmin"); 
                }
                elseif($_SESSION['roleId']=2){
                header("Location: /");
                }
           } else {
            return $this->router->renderView('login');
           }
        } 
    }
    
}