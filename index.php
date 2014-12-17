<?php

require 'boot.php';

// r=news/all

$route = $_GET['r'];
$routeParts = explode('/', $route);
$controllerClassName = ucfirst($routeParts[0] . 'Controller');
$actionName = $routeParts[1];
$controller = new $controllerClassName();
$controller->action('$routeParts[1]');


