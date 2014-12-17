<?php
function __autoload($class)
{
    require 'classes/' . $class . '.php';
}

require_once __DIR__ . '/models/news.php';