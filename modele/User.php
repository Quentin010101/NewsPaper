<?php
require_once('./Modele.php');


class User extends Database
{

    private $pseudo;
    private $email;
    private $password;

    protected $status;                   // admin, chroniqueur, utilisateur, visiteur

    protected function __construct($pseudo, $email, $password, $passwordConfirm, $status)
    {
        check::checkIsset($pseudo, $email, $password, $status);
        check::checkEmpty($pseudo, $email, $password, $status);
        check::checkPassword($password);
        check::checkEmail($email);
        check::checkSame($password, $passwordConfirm);

        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->password = Hash::hachage($password);
        $this->status = $status;
    }

    public function set(){

        $query = 'INSERT INTO user(pseudo, email, password, status) VALUES(?,?,?,?)';
        $stmt = $this->dbb->prepare($query);
        $stmt->execute(array($this->pseudo, $$this->email, $$this->password, $$this->status));

    }


}



