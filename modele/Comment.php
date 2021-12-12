<?php
require_once('Modele.php');

class Comment extends Modele
{
    protected $item = 'comment';
    protected $notation = 'grade';

    public function set($userId, $articleId, $content, $grade){

        $query = 'INSERT INTO comment(userId, articleId, content, grade, date) VALUES(?,?,?,?, NOW())';
        $stmt = self::connect()->prepare($query);
        $stmt->execute(array($userId, $articleId, $content, $grade));

    }

    public function getCommentByArticleId($id){

        $query = 'SELECT comment.id,content, grade, pseudo, date FROM comment INNER JOIN user ON comment.userId = user.id WHERE comment.articleId = ? ORDER BY date DESC';
        $stmt = self::connect()->prepare($query);
        $stmt->execute(array($id));
        $request = $stmt->fetchAll();

        return $request;
    }
    
}