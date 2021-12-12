<?php 
require_once('./modele/Comment.php');


if(isset($_GET['idC']) && !empty($_GET['idC'])){
    $newGrade = new Comment();
    $newGrade->incremente($_GET['idC']);

    header('Location: ../index.php?action=new&id=' . $_GET['idA']);

}