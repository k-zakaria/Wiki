<?php
require_once '../app/core/Router.php';
require_once '../app/models/Wikis.php';
require_once '../app/models/Tag.php';
require_once '../app/models/Pivo.php';
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

  
        
        public function getWikiById(){
            $id = $_GET['id'];
            $wiki = $this->wikis->getWikiById($id);       
        if ($wiki) {
            return $this->router->renderView('contentWiki', ['wiki' => $wiki]);
        } else {
            return var_dump($wiki);
        }
    }
    
 
    public function addWiki(){ 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['tag']) && !empty($_POST['categotie']))
            {
                $title = $_POST['title'];
                $content = $_POST['content'];
                $tags = $_POST['tag'];
                $categorie = $_POST['categoty'];
                $auteur = $_SESSION['id'];
                
                $this->wikis->setAuteur($auteur);
                $this->wikis->setTitle($title);
                $this->wikis->setCategory($categorie);
                $this->wikis->setDate(date("Y-m-d"));
                $this->wikis->setContent($content);
                $id=$this->wikis->addWiki();
                foreach($tags as $tag){
                    $tagWiki = new Pivo;
                    $tagWiki->setTag($tag);
                    $tagWiki->setWiki($id);
                    $tagWiki->addwikitag();
                }
                header('Location: /');
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
