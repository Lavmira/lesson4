<?php
//require_once __DIR__ . '/models/DBConnect.php';

require_once __DIR__. '/../boot.php';

class NewsModel
    extends AbstractModel
{
    static protected $table = 'news';
    static protected $columns = ['title', 'text'];

    static function updateArticle($id, $title, $text)
    {
        $sql = "UPDATE " . static::$table . " SET title=:title, text=:text  WHERE id=:id";
        $db = new DBConnection();
        return $db->Execute($sql,[':id'=>$id,':title'=>$title,':text'=>$text]);
    }
    static function insertArticle($title,$text)
    {
        $sql = "INSERT INTO " . static::$table . " (title,text) VALUES (:title, :text)";
        $db = new DBConnection();
        return $db->Execute($sql,[':title'=>$title,':text'=>$text]);
    }
    static function deleteArticle($id)
    {
        $sql = "DELETE FROM " . static::$table . " WHERE id=:id";
        $db = new DBConnection();
        return $db->Execute($sql,[':id'=>$id]);
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
