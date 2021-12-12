<?php 

require_once('./modele/Article.php');
require_once('./modele/Comment.php');

if(isset($_GET['erreur']) && !empty($_GET['erreur'])){
    if($_GET['erreur'] == 'nosession'){
        $erreurComment = 'Vous devez être connecter pour laisser un commentaire';
    }
}

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $newArticle = new Article();
    $newArticle->incremente($id);
    $request = $newArticle->findByItem($id);

    $newUser = new Modele();
    $pseudo = $newUser->getPseudo($request['userId']);

    //----comments
    $newComment = new Comment();
    $comments = $newComment->getCommentByArticleId($id);

    require_once('./template/view/new.php');
}