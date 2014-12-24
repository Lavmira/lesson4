<?php
class DBConnection
{
    protected $pdo;
    function config()
    {
        return include __DIR__ . '/../config.php';
    }
    public function __construct()
    {
        try {
            $config = $this->config();
            $dsn = $config['db']['driver'] . ':host=' . $config['db']['host'] . '; dbName=' . $config['db']['dbname'];
            $this->pdo =  new PDO($dsn, $config['db']['user'], $config['db']['password']);
        }
        catch (PDOException $e) {
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
    public function Execute($query, array $parameters = [])
    {
        $statement = $this->toPrepare($query);
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