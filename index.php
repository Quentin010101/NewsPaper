<?php 

function redirect($url){
    $adresse = './template/view/' . $url . '.php';
    require_once($adresse);
}
if(isset($_GET['action']) && !empty($_GET['action'])){
    redirect($_GET['action']);
}else{
    require_once('./template/view/accueil.php');
}