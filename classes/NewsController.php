<?php


class NewsController
extends AController
{
    protected function actionAll()
    {
        $view = new View();
        $view->news = News_getAll();

        $view->display('view/index.php');
    }
    protected function actionOne()
    {
        $view = new View();
        $view->article = News_getOne($_GET['id']);

        $view->display('view/one.php');
    }
    protected function actionEdit()
    {
        $view = new View();
        $view->article = News_getEdit($_GET['id']);

        $view->display('view/edit.php');
    }
    protected function actionSave()
    {
        $view = new View();
        $view->article = News_getSave($_GET['id']);

        $view->display('view/save.php');
    }
} 