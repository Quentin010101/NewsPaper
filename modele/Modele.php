<?php
require_once('./modele/Database.php');


class Modele extends Database
{
    protected $item;
    protected $notation;

    public function findByUser($id){

        $query = 'SELECT * FROM ' . $this->item . ' WHERE userId = ? ORDER BY dataActu DESC';
        $stmt = self::connect()->prepare($query);
        $stmt->execute(array($id));
        $request = $stmt->fetchAll();
        
        return $request;

    }

    public function findByItem($id){

        $query = 'SELECT * FROM ' . $this->item . ' WHERE id = ?';
        $stmt = self::connect()->prepare($query);
        $stmt->execute(array($id));
        $request = $stmt->fetch();
        
        return $request;

    }
    
    public function getPseudo($id){
        

        $query = 'SELECT pseudo FROM user WHERE id = ?';
        $stmt = self::connect()->prepare($query);
        $stmt->execute(array($id));

        $request = $stmt->fetch();

        return $request;

    }

    public function delete($id){

        $query = 'DELETE FROM ' . $this->item . ' WHERE id = ?';
        $stmt = self::connect()->prepare($query);
        $stmt->execute(array($id));

    }

    public function incremente($id){

        $query = 'UPDATE ' . $this->item . ' SET ' . $this->notation . '=' .$this->notation . '+1 WHERE id = ?';
        $stmt = self::connect()->prepare($query);
        $stmt->execute(array($id));
        
    }
    
}