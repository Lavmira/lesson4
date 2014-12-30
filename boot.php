<?php

function __autoload($class)
{
    $namespace = explode('\\', $class);
    array_shift($namespace);
    require __DIR__ . '/' .  implode('/', $namespace) . '.php';
}


/*
 require_once __DIR__ . '/Models/news.php';

function __autoload($class)
{

    $artClassDir = ["classes", "controller", "Models"];

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


function __autoload($class)
{
    $filename = __DIR__ .'/classes/' . $class . '.php';
    if (file_exists($filename))
    {
        require_once $filename;
    }
}


spl_autoload_register('autoloadClasses');


function __autoload($class)
{
    $filename = __DIR__ .'/Models/' . $class . '.php';
    if (file_exists($filename))
    {
        require_once $filename;
    }
}
spl_autoload_register('autoloadModels');


function __autoload($class)
{
    $filename = __DIR__ .'/view/' . $class . '.php';
    if (file_exists($filename))
    {
        require_once $filename;
    }
}
spl_autoload_register('autoloadView');

*/