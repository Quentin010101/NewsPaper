<?php 

class Database
{
    private $username = 'root';
    private $password = '';
    protected $dbb;

    public function __construct(){

        $this->dbb = new PDO('mysql:host=localhost;dbname=newspaper;charset=utf8', $this->username, $this->password);
        
    }
}