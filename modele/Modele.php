<?php
require_once('./modele/Database.php');


class Modele extends Database
{
    protected $item;

    protected function find($id){

        $query = 'SELECT * FROM ' . $this->item . ' WHERE id = ?';
        $stmt = $this->dbb->prepare($query);
        $stmt->execute(array($id));

    }

    protected function delete($id){

        $query = 'DELETE FROM ' . $this->item . ' WHERE id = ?';
        $stmt = $this->dbb->prepare($query);
        $stmt->execute(array($id));

    }
    
}