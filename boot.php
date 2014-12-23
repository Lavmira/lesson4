<?php
function __autoload($class)
{
    require __DIR__ . '/classes/' . $class . '.php';
}

require_once __DIR__ . '/models/news.php';
require_once __DIR__ . '/function/db.php';

/*

function __autoload($class)
{
    $artClassDir = ["classes", "controller", "models"];
    {
        $classPath = __DIR__ . "/../" . $folder . "/" . $class . ".php";

        if(is_readable($classPath))
        {
            require $classPath;
            break;
        }
    }
}
*/
