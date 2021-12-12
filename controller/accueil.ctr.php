<?php
require_once('./modele/Article.php');

if (isset($_GET['action']) && !empty($_GET['action'])) {
    if (isset($_GET['item']) && $_GET['item'] == 'destroy') {
        session_destroy();
        header('Location: ../index.php');
    }
} else {
    $tendance = new Article();
    $requestsTendance = $tendance->findArticleTendance();
    require_once('./template/view/accueil.php');
}



