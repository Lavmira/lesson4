<?php

namespace App\Models;



class ModelException extends Exception {}
abstract class AbstractModel

{
    static protected $table;
    static protected $columns = [];

    static function DBConnection()
    {
        return include __DIR__ . '/../Models/DBConnect.php';
    }

    static function findAll()
    {
        try
        {
            $sql = 'SELECT * FROM ' . static::$table;
            $dbh = static::DBConnection();
            $sth = $dbh->prepare($sql);
            $sth->setFetchMode(\PDO::FETCH_CLASS, get_called_class());
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
        $sql = 'SELECT * FROM ' . static::$table . 'WHERE id=>:id' ;
        $dbh = static::DBConnection();
        $sth = $dbh->prepare($sql);
        $sth->setFetchMode(\PDO::FETCH_CLASS, get_called_class());
        $sth->execute([':id' => $id]);
        return $sth->fetch();
    }



    public function save()
    {
        $dbh = static::DBConnection();
        $tokens = [];
        $values = [];

        foreach (static::$columns as $column)
        {
            $tokens[] = ':' . $column;
            $values[':' . $column] = $this->$column;
        }


        if (!isset($this->id))
        {
            $sql = 'INSERT INTO ' . static::$table . '(' . implode(',', static::$columns) . ')
           VALUES(' . implode(',', $tokens) . ')';
            $sth = $dbh->prepare($sql);
            $sth->execute($values);
            $this->id = $dbh->lastInsertId();
        } else {
            $columns = [];
            foreach (static::$columns as $column)
            {
                $columns[] = $column . '=:' . $column;
            }

            $sql = '
            UPDATE ' . static::$table . '
            SET ' . implode(',', $columns) . '
            WHERE id=:id
            ';
            $sth = $dbh->prepare($sql);
            $sth->execute([':id'=>$this->id] + $values);



            public function delete()
            {
                $dbh = static::DBConnection();
                $tokens = [];
                $values = [];
                foreach (static::$columns as $column)
                {
                    $tokens[] = ':' . $column;
                    $values[':' . $column] = $this->$column;
                }


                if (!isset($this->id))
                {
                    $sql = 'INSERT INTO ' . static::$table . '(' . implode(',', static::$columns) . ')
           VALUES(' . implode(',', $tokens) . ')';
                    $sth = $dbh->prepare($sql);
                    $sth->execute($values);
                    $this->id = $dbh->dba_delete();
                } else {
                    $columns =[];
                    foreach (static::$columns as $column)
                    {
                        $columns[] = $column . '=:' . $column;
                    }

                    $sql = '
            UPDATE ' . static::$table . '
            SET ' . implode(',', $columns) . '
            WHERE id=:id
            ';
                    $sth = $dbh->prepare($sql);
                    $sth->execute([':id'=>$this->id] + $values);



                    class News extends Model
                    {
                        static protected $table = 'news';
                        static protected $columns = ['title', 'text'];
                    }
                    try
                    {
                        $news = News::findAll();
                    }catch (Exception $e) {
                        echo $e->getMessage();
                        die;
                    }

                    $article =News::findByPk(3);
                    $article->title = 'Суперновость!!!';


                    $article = new News;
                    $article->title = 'Новая новость';
                    $article->text = 'Ее текст';
                    $article->save();
                    var_dump($article->id);

