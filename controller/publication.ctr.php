<?php
require_once('./modele/Check.php');
require_once('./modele/Article.php');


// ---------post
if(isset($_SESSION['id']) && isset($_POST['title']) && isset($_POST['objet']) && isset($_FILES['file']) && isset($_POST['content']) && isset($_POST['type'])){
    if(!empty($_SESSION['id']) && !empty($_POST['title']) && !empty($_POST['objet']) && !empty($_FILES['file']) && !empty($_POST['content']) && !empty($_POST['type'])){
        $newArticle = new Article();
        if($newArticle->checkFile($_FILES['file'])){
            $fileName = $newArticle->uploadFile($_FILES['file']);
            $newArticle->set($_SESSION['id'], $_POST['title'], $_POST['objet'], $_POST['content'], $fileName, 0, $_POST['type']);
            header('Location: ../index.php?action=publication');
        }
        else{
            $erreur = "image non valide.";
        }
    } 
}
//---------Delete
if(isset($_GET['item']) && !empty($_GET['item'])){
    if($_GET['item'] == 'delete'){
        $delete = new Article();
        $delete->deletePhoto($_GET['id']);
        $delete->delete($_GET['id']);
        header('Location: ../index.php?action=publication');
    }
}
if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    $article = new Article();
    $requests = $article->findByUser($_SESSION['id']);

    require_once('./template/view/publication.php');

}

