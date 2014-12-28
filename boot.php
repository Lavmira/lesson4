<?php

function __autoload($class)
{

    $artClassDir = ["classes", "controller", "models"];

        foreach  ($artClassDir as $class)
    {
        $classPath = __DIR__ . "/../" . $artClassDir . "/" . $class . ".php";

        if(is_readable($classPath))
        {
            require $classPath;
            break;
        }
    }
}



/*



function __autoload($class)
{
    require __DIR__ . '/classes/' . $class . '.php';
}

require_once __DIR__ . '/models/ModelNews.php';
;

spl_autoload_register('autoloadClasses');

function autoloadModels($class)
{
    $filename = __DIR__ .'/models/' . $class . '.php';
    if (file_exists($filename))
    {
        require_once $filename;
    }
}
spl_autoload_register('autoloadModels');*/