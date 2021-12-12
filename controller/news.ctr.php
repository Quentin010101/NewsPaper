<?php 

require_once('./modele/Article.php');

if(isset($_GET['type']) && !empty($_GET['type'])){
    $type = $_GET['type'];
    $newArticle = new Article();
    $requests = $newArticle->findByType($type);

    require_once('./template/view/news.php');
}