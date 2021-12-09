<?php
require_once('./Modele.php');

class Article extends Modele
{
    protected $item = 'article';

    public function set($userId, $title, $objet, $content, $view)
    {
        $query = 'INSERT INTO article(userId, title, objet, content, view)';
        $stmt = $this->dbb->prepare($query);
        $stmt->execute(array($userId, $title, $objet, $content, $view));
    }
}
