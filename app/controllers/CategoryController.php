<?php
require_once '../app/core/Router.php';
require_once '../app/models/Category.php';
class CategoryController{
    public Router $router;
    public Category $category;

    public function __construct()
    {
        $this->router = new Router();
        $this->category = new Category();
    }
    public function getAllCategory() {
        $category = Category::getAllCategory();
        if ($category){
            return $this->router->renderView('dashCategory', ['category' => $category]);
        } else {
            return false;
        }
    }
    public function addCategory() {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if(!empty($_POST['name']))
            {
                $name = $_POST['name'];
                                
                $tag = new Category;
                $tag->setName($name);
         
                if($tag->addCategory()){
                    header("location:dashCategory");
                  } 
            }
        }
    }

    public function deleteCategory() {
        $id = $_GET['id'];
        if($this->category->deleteCategory($id)){
            return header("location:dashCategory");
        } else {
            return false;
        }
    }
}