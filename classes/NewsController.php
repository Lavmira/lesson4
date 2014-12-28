<?php


class NewsController
    extends AController
{
    private $view;
    private $model;
    public function __construct()
    {
        $this->view = new View();
        $this->model = new NewsModel();
    }
    // главная страница
    protected function actionIndex()
    {
        $this->view->news = $this->model->findAll();
        $this->view->display('view/index.php');
    }

    // просмотр всех новостей
    protected function actionAll()
    {
        $this->view->news = $this->model->findAll();
        $this->view->display('view/all.php');
    }
    //просмотр 1-ной новости
    protected function actionOne()
    {
        $this->view->one_article = $this->model->findByPk($_GET['id']);
        $this->view->display('view/one.php');
    }
//форма добавления новости
    protected function actionFormAdd()
    {
        $this->view->display('view/save.php');
    }
    //добавление новости
    protected function actionAdd()
    {
        if (isset($_POST['title']) && isset($_POST['text']))
        {
            $this->model->insertArticle($_POST['title'], $_POST['text']);
            header("Location: all.php");
        }
    }
    //форма редактирования новости
    protected function actionFormEdit()
    {
        $this->view->edit_article = $this->model->findByPk($_GET['id']);
        $this->view->display('view/edit.php');
    }
    // update новости
    protected function actionEdit()
    {
        if (isset($_POST['title']) && isset($_POST['text']))
        {
            $this->model->updateArticle($_POST['id'],$_POST['title'],$_POST['text']);
        }
        header("Location: all.php");
    }
    //удаление новости
    protected function actionDelete()
    {
        $this->model->deleteArticle($_GET['id']);
        header("Location: all.php");
    }
}

} 