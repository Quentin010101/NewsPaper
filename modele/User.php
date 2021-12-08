<?php
require_once('./Modele.php');


class User extends Modele
{

    private $pseudo;
    private $email;
    private $password;

    protected $status;                   // admin, chroniqueur, utilisateur, visiteur

    protected function __construct($pseudo, $email, $password, $status)
    {
        check::checkIsset($pseudo, $email, $password, $status);
        check::checkEmpty($pseudo, $email, $password, $status);
        check::checkPassword($password);
        
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = $password;
        $this->status = $status;
    }


}



