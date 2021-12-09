<?php
require_once('./modele/Inscription.php');


if(isset($_POST['pseudoI']) && isset($_POST['emailI']) && isset($_POST['passwordI']) && isset($_POST['passwordIC']) && isset($_POST['statusI'])){
    $newUser = new Inscription($_POST['pseudoI'], $_POST['emailI'], $_POST['passwordI'], $_POST['passwordIC'], $_POST['statusI']);
    $newUser->set();
    header('location: ./index.php');
    
}


require_once('./template/view/inscription.php');