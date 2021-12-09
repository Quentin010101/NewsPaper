<?php 

class Database
{
    
    public static function connect(){

        $username = 'root';
        $password = '';

        $dbb = new PDO('mysql:host=localhost;dbname=newspaper;charset=utf8', $username, $password);

        return $dbb;
        
    }
}