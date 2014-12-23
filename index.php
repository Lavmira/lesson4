<?php

require __DIR__ . '/boot.php';
require __DIR__ . '/classes/AController.php';
// r=news/all

$route = $_GET['r'];
$routeParts = explode('/', $route);
$controllerClassName = ucfirst($routeParts[0] . 'Controller');
$actionName = $routeParts[1];
$controller = new $controllerClassName();
$controller->action('$routeParts[1]');


