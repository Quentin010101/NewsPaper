<?php



require_once('./modele/Modele.php');
require_once('./modele/Check.php');

class Inscription extends Database
{

    private $pseudo;
    private $email;
    private $password;

    protected $status;                   // admin, chroniqueur, utilisateur, visiteur

    public function __construct($pseudo, $email, $password, $passwordConfirm, $status)
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
        $stmt = self::connect()->prepare($query);
        $stmt->execute(array($this->pseudo, $this->email, $this->password, $this->status));

    }


}



