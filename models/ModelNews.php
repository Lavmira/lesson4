<?php
//require_once __DIR__ . '/models/DBConnect.php';

require_once __DIR__. '/boot.php';

class Model
    extends AbstractModel
{
    static protected $table = 'news';
    static function updateArticle($id, $new_title, $new_text)
    {
        $sql = "UPDATE " . static::$table . " SET title=:new_title, text=:new_text  WHERE id=:id";
        $db = new DBConnection();
        return $db->toExecute($sql,[':id'=>$id,':new_title'=>$new_title,':new_text'=>$new_text]);
    }
    static function insertArticle($title,$text)
    {
        $sql = "INSERT INTO " . static::$table . " (title,text) VALUES (:title, :text)";
        $db = new DBConnection();
        return $db->toExecute($sql,[':title'=>$title,':text'=>$text]);
    }
    static function deleteArticle($id)
    {
        $sql = "DELETE FROM " . static::$table . " WHERE id=:id";
        $db = new DBConnection();
        return $db->toExecute($sql,[':id'=>$id]);
    }
}









/*

require_once __DIR__ . '/classes/AModel.php';

function News_getAll()
{
    return DBQuery("
    SELECT * FROM news
    ");
}

*/
