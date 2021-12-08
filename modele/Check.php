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
        $patern = '/[0-9A-Za-z]/'; // Valeur requise pour mdp
        if(preg_match($password, $patern)){
            throw new Exception('Maj, min, number required');
            exit;
        }
    }

}

class Hash
{
    // hachage mdp
    
}