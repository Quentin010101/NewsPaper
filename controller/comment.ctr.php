<?php
require_once('./modele/Comment.php');

if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    if(isset($_POST['commentText']) && !empty($_POST['commentText']) && isset($_GET['id']) && !empty($_GET['id'])){
    
        $newComment = new Comment();
        $newComment->set($_SESSION['id'], $_GET['id'], $_POST['commentText'], 0);
    
        header('Location: ../index.php?action=new&id=' . $_GET['id']);
    }
}
else {
    header('Location: ../index.php?action=new&erreur=nosession&id=' . $_GET['id']);
}