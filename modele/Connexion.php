<?php 

require_once('./modele/Database.php');
require_once('./modele/Check.php');

class Connexion extends Database{

    private $pseudo;
    private $email;
    private $status;
    private $id;

    public function __construct($email, $password)
    {
        $query = 'SELECT * FROM user WHERE email = ?';
        $stmt = self::connect()->prepare($query);
        $stmt->execute(array($email));
        $request = $stmt->fetch();

        $count = $stmt->rowCount();

        if($count > 0){
            Hash::checkHachage($password, $request['password']);
            $this->pseudo = $request['pseudo'];
            $this->email = $request['email'];
            $this->status = $request['status'];
            $this->id = $request['id'];
        }
        else{
            throw new Exception('Utilisateur pas trouvé');
            exit;
        }
    }

    public function startSession(){

        $_SESSION['pseudo'] = $this->pseudo;
        $_SESSION['email'] = $this->email;
        $_SESSION['status'] = $this->status;
        $_SESSION['id'] = $this->id;

    }
}