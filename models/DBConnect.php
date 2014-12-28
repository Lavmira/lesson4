<?php
class DBConnection
{
    protected $pdo;
    public function config()
    {
        return include __DIR__ . '/../config.php';
    }
    public function __construct()
    {
        try {

            $config = static::config();
            $dsn = 'mysql:dbName='.$config['db']['dbName'] . ':host=' . $config['db']['host'];
            $dbh = new PDO($dsn, $config['db']['user'], $config['db']['password']);
            $this->PDO = $dbh;
        }catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            die;
        }
    }

    public function Prepare($query)
    {
        $statement = $this->pdo->prepare($query);
        $statement->setFetchMode(PDO::FETCH_CLASS,get_called_class());
        return $statement;
    }
    public function Query($query,  $parameters = [])
    {
        $statement = $this->Prepare($query);
        $statement->execute($parameters);
        return $statement;
    }
    public function QueryOne($query,  $parameters = [1])
{
    $statement = $this->Prepare($query);
    $statement->execute($parameters);
    return $statement;
}
}

/*
function DBQuery($sql)
{
    DBConnect();
    $res = mysql_query($sql);
    if (!$res) {
        echo mysql_error();
        return [];
    }

    $ret = [];
    while ($row = mysql_fetch_assoc($res))
    {
        $ret [] = $row;
    }
    return $ret;
}
*/