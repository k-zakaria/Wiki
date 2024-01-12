<?php
require_once '../app/core/Router.php';
require_once '../app/models/Tag.php';
class TagController{
    public Router $router;
    public Tag $tag;

    public function __construct()
    {
        $this->router = new Router();
        $this->tag = new Tag();
    }
    public function getAllTag() {
        $tag = Tag::getAllTag();
        if ($tag){
            return $this->router->renderView('dashTag', ['tag' => $tag]);
        } else {
            return false;
        }
    }

    public function addTag() {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if(!empty($_POST['name']))
            {
                $name = $_POST['name'];
                                
                $tag = new Tag;
                $tag->setName($name);
         
                if($tag->addTag()){
                    header("location:dashTag");
                  } 
            }
        }
    }

    public function updateTag() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit'] == 'update')
            {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $this->tag->setName($name);
                $this->tag->setId($id);
                $this->tag->updateTag($id);
                
                return $this->router->renderView('tags',["tags"=>$this->tag->getAllTag()]);
            }
        
    }
    public function deleteTag() {
        $id = $_GET['id'];
        if($this->tag->deleteTag($id)){
            return header("location:dashTag");
        } else {
            return false;
        }
    }
}