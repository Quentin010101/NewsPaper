<?php

require_once('./modele/Connexion.php');

if(isset($_POST['email']) && isset($_POST['password'])){

    $newUser = new Connexion($_POST['email'], $_POST['password']);
    $newUser->startSession();
    header('location: ./index.php');
    
}

require_once('./template/view/connexion.php');
