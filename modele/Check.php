<?php 

class Check
{
    // verifier si champs existe
    public static function checkIsset(...$objets){
        foreach($objets as $objet):
            if(!isset($objet)){
                throw new Exception('champs n\'existe pas');
                exit;
            }
        endforeach;
    }

    // verifier si champs empty
    public static function checkEmpty(...$objets){
        foreach($objets as $objet):
            if(empty($objet)){
                throw new Exception('champs vide');
                exit;
            }
        endforeach;
    }

    // verifier si password est un choix valid
    public static function checkPassword($password){
        if(strlen($password) < 4 ){
            throw new Exception('mot de passe invalide');
            exit;
        }
        $patern = '/[0-9]/'; // Valeur requise pour mdp
        $patern1 = '/[A-Z]/'; 
        $patern2 = '/[a-z]/'; 

        if(!preg_match($patern, $password) && !preg_match($patern1, $password) && !preg_match($patern2, $password)){
            throw new Exception('Maj, min, number required');
            exit;
        }
    }

    // verifier si les password sont identique
    public static function checkSame($password, $passwordConfirmed){
        if($password != $passwordConfirmed){
            throw new Exception('les mot de passe sont different');
            exit;
        }
    }

    //verifier si email valid
    public static function checkEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception('l\'email n\'est pas valid ');
            exit;
        }
    }

    //-------------------------------------------------------------------------------------



}

class Hash
{
    // hachage mdp
    public static function hachage($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }

    //verification si mdp correspond
    public static function checkHachage($password, $passworConfirmed){
        if(!password_verify($password, $passworConfirmed)){
            throw new Exception('Les mots de passe ne correspondent pas');
        }
    }
    
}