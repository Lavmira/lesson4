<?php

//единая точка входа

// подключаем автозагрузку классов

require_once __DIR__. '/boot.php';

$article = \App\Models\News::findByPk(2);

//echo json_encode($article);

//$encoded = json_encode($article);
//$article = json_decode($article);



//задаем стартовую страницу
/*
$controllerClassName = 'NewsController';
$actionPart = 'index';

//роутер
//?r=news/one&id=1
//здесь используем контроллер NewsController, метод actionOne, id - номер новости
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

*/








