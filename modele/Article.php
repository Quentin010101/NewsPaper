<?php
require_once('Modele.php');

class Article extends Modele
{
    protected $item = 'article';
    protected $notation = 'view';

    public function set($userId, $title, $objet, $content, $photo, $view, $type)
    {
        $query = 'INSERT INTO article(userId, title, objet, content, photo, view, type, dataActu) VALUES(?, ?, ?, ?, ?, ?, ?, NOW())';
        $stmt = self::connect()->prepare($query);
        $request = $stmt->execute(array($userId, $title, $objet, $content, $photo, $view, $type));

    }

    public function checkFile($f){
        $file = $f;
        $fileExtension = strtolower(substr($file['name'], -3));
        $allow_ext = array('jpg', 'png');
        $fileSize = $file['size'];

        if(in_array($fileExtension, $allow_ext)){
            if($fileSize < 160000 && $fileSize > 0){
                return true;
            }
            else {
                return false;
            }
        } else{
            return false;
        }
    }

    public function uploadFile($file){

        $fileNewName = uniqid();
        $fileExtension = strtolower(substr($file['name'], -3));
        $stockageAdresse = './ImageArticleStockage/' . $fileNewName . '.' . $fileExtension;
        move_uploaded_file($file['tmp_name'], $stockageAdresse);
        $fileNewNameExt = $fileNewName . '.' . $fileExtension;

        return $fileNewNameExt;
    }

    public function deletePhoto($id){

        $request = $this->findByItem($id); 
        $link = './ImageArticleStockage/' . $request['photo']; 
        unlink($link);

    }

    public static function findArticleTendance(){

        $query = 'SELECT * FROM article ORDER BY view DESC LIMIT 5 ';
        $stmt = self::connect()->prepare($query);
        $stmt->execute();
        $request = $stmt->fetchAll();

        return $request;
    }
    public static function findByType($type){

        $query = 'SELECT * FROM article WHERE type = ? ORDER BY dataActu DESC';
        $stmt = self::connect()->prepare($query);
        $stmt->execute(array($type));
        $request = $stmt->fetchAll();

        return $request;
    }
}
