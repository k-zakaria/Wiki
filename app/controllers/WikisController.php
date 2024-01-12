<?php
require_once '../app/core/Router.php';
require_once '../app/models/Wikis.php';
class WikisController
{
    public Router $router;
    public Wikis $wikis;

    public function __construct()
    {
        $this->router = new Router();
        $this->wikis = new Wikis();
    }

    public function getAllWikis() {
        $wikis = Wikis::getAllWikis();
        if ($wikis){
            return $this->router->renderView('homePage', ['wikis' => $wikis]);
        } else {
            return false;
        }
    }
    public function getWikis() {
        $wiki = Wikis::getAllWikis();
        if ($wiki){
            return $this->router->renderView('dashWiki', ['wiki' => $wiki]);
        } else {
            return false;
        }
    }

    public function getWikiById($id) {
        $id = $_GET['id'];
        exit(var_dump($id));
        $wiki = Wikis::getWikiById($id);
        if ($wiki) {
            return $this->router->renderView('contentWiki', ['wiki' => $wiki]);
        } else {
            return var_dump($wiki);
        }
    }
    
 
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['date'])) {
                $title = $_POST['title'];
                $content = $_POST['content'];
                $date = $_POST['date'];

                $wiki = new Wikis;
                $wiki->setTitle($title);
                $wiki->setContent($content);
                $wiki->setDate($date);

                if ($wiki->addWiki()) {
                    return $this->router->renderView('homePage');
                }
            }
        }
    }

    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['date'])) {
                $title = $_POST['title'];
                $content = $_POST['content'];
                $date = $_POST['date'];
    
                $wiki = new Wikis;
                $wiki->setId($id);
                $wiki->setTitle($title);
                $wiki->setContent($content);
                $wiki->setDate($date);
    
                if ($wiki->updateWiki()) {
                    return $this->router->renderView('homePage');
                } else {
                    return false;
                }
            }
        } else {
            $currentWiki = Wikis::getWikiById($id);
            return $this->router->renderView('updateForm', ['currentWiki' => $currentWiki]);
        }
    }
    

    public function deleteWiki() {
        $id = $_GET['id'];
        if($this->wikis->deleteWiki($id)){
            return header("location:dashWiki");
        } else {
            return false;
        }
    }
    
}
