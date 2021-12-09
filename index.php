<?php 
session_start();

function redirect($url){
    $adresse = './controller/' . $url . '.ctr.php';
    require_once($adresse);
}

try{
    if(isset($_GET['action']) && !empty($_GET['action'])){
        redirect($_GET['action']);
    }else{
        require_once('./template/view/accueil.php');
    }

}catch(Exception $e){
    die('Erreur ' . $e->getMessage());
}