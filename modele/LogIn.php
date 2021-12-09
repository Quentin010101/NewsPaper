<?php 
session_start();


class LogIn extends Database{

    private $pseudo;
    private $email;
    private $status;
    private $id;

    public function __construct($email, $password)
    {
        $query = 'SELECT * FROM user WHERE email = ?';
        $stmt = $this->dbb->prepare($query);
        $request = $stmt->execute(array($email));

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

        $_SESION['pseudo'] = $this->pseudo;
        $_SESION['email'] = $this->email;
        $_SESION['status'] = $this->status;
        $_SESION['id'] = $this->id;

    }
}