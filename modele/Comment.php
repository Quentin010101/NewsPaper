<?php
require_once('./Modele.php');

class Comment extends Modele
{
    protected $item = 'comment';

    public function set($userId, $content, $grade){

        $query = 'INSERT INTO article(userId, content, grade)';
        $stmt = $this->dbb->prepare($query);
        $stmt->execute(array($userId, $content, $grade));

    }
    
}