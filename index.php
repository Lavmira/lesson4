<?php
//require_once __DIR__. '/model/ModelNews.php';
//require_once __DIR__. 'view/index.php';

//единая точка входа

// подключаем автозагрузку классов

require_once __DIR__. '/boot.php';

//задаем стартовую страницу

$controllerClassName = 'NewsController';
$actionPart = 'index';

//роутер
//?r=news/one&id=1
//здесь используем контроллер newsController, метод actionOne, id - номер новости
$route = $_GET['r'];
if (null !== $route)
{
    $routeParts = explode('/',$route);
    $controllerClassName = ucfirst($routeParts[0]).'Controller';
    $actionPart = $routeParts[1];
}

//фронт-контроллер
$controller = new $controllerClassName;
$controller->action($actionPart);










