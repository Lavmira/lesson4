<?php

class ModelException extends Exception {}
abstract class Model

{
    static protected $table;

    $conn = new DBConnection;
    $result = $conn->query('SELECT * FROM table' WHERE id=:id',
                        [':id'=>$id])->fetch();


    static function findAll()
    {
        try
        {
            $sql = 'SELECT * FROM ' . static::$table;
            $dbh = static::DBConnection();
            $sth = $dbh->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());
            $sth->execute();
            return $sth->fetchAll();
            /*$data = $sth->fetchObject();
            echo $data->title;*/
        } catch (Exception $e)
        {
            echo $e->getMessage();
            die;
        }
    }

    static function findByPk($id)
{
    try
    {
        $sql = 'SELECT * FROM' . static::$table;
        $dbh = static::getConnection();
        $sth = $dbh->prepare( “SELECT * FROM news WHERE id=:id” );
        $sth->setFetchMode(PDO::FETCH_CLASS, get_called_class());
        $sth->execute([:id => 1]);
        return $sth->fetchOne();
    } catch (Exception $e)
    {
        echo $e->getMessage();
        die;
    }
}
}


/*
class News extends Model
{
    static protected $table = 'all';
}
class One extends Model
{
    static protected $table = 'one';
}
class Edit extends Model
{
    static protected $table = 'edit';
}
class Save extends Model
{
    static protected $table = 'save';
}

try
{
    $new = News::findAll();
} catch (Exception $e)
        {
            echo $e->getMessage();
            die;
        }

$model = new News();


function News_getOne()
{
    return DBQuery("
    SELECT * FROM news
    ");
}



interface IModel
{
    public  function getAll();
    public  function getOne($id);
}
interface IHasAuthor
{
    public  function getAuthor();
}

class NewsModel
    implements IModel, IHasAuthor
{

    public function getAll()
    {
        echo 'Get all news';
    }

    public function getOne($id)
    {
        echo 'Get one article #' . $id . '!' ;
    }

    public function getAuthor()
    {
        echo 'Лев Толстой';
    }
}
$model = new  NewsModel();
$model->getAll();
$model->getOne(1);
$model->getAuthor();*/
