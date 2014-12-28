<?php


class AdminController
    extends AController{

    protected function actionIndex(){
        $template_path = __DIR__ . '/../view/';
        $view = new View($template_path);

        $html = $view->display('admindex.php');
        echo $html;
    }

    protected function actionAll(){

        $template_path = __DIR__ . '/../view/';
        $view = new View($template_path);

        $view->news = NewsModel::findAll();
        $html = $view->display('admall.php');
        echo $html;
    }

    protected function actionGet_viewform(){

        $template_path = __DIR__ . '/../view/';

        $view = new View($template_path);

        $html = $view->display('admform.php');
        echo $html;

    }
    protected function actionOne(){
        $template_path = __DIR__ . '/../view/';
        $view = new View($template_path);

        try{
            $view->article = NewsModel::findByPk($_GET["id"]);
            if(null === $view->article){
                $view->message = "Нет такой новости";
            }
        }
        catch(PDOException $e)
        {
            $view->message = "Проверьте корректность ввода номера";
        }

        $html = $view->display('admarticle.php');
        echo $html;
    }
    protected function actionGet_addform(){

        $template_path = __DIR__ . '/../view/';

        $view = new View($template_path);

        $html = $view->display('admaddform.php');
        echo $html;

    }
    protected function actionAdd()
    {
        $template_path = __DIR__ . '/../view/';

        $view = new View($template_path);

        if(isset($_POST["title"])&&isset($_POST["text"]))
        {
            $news_model = new NewsModel();
            $news_model->title = $_POST["title"];
            $news_model->text = $_POST["text"];

            try{
                $news_model->save();
                $view->message = "Новость добавлена";
            }
            catch(PDOExceptionException $e)
            {
                $view->message = "Что то пошло не так";
            }
        }
        else
        {
            $view->message = "Неверный запрос";
        }
        $html = $view->display('admaddarticle.php');
        echo $html;

    }
    protected function actionGet_ideditform(){

        $template_path = __DIR__ . '/../view/';

        $view = new View($template_path);

        $html = $view->display('adminediteform.php');
        echo $html;

    }
    protected function actionGet_editform(){

        $template_path = __DIR__ . '/../view/';
        $view = new View($template_path);

        try{
            $view->article = NewsModel::findByPk($_GET["id"]);
            if(null === $view->article){
                $view->message = "Нет такой новости";
            }
        }
        catch(PDOException $e)
        {
            $view->message = "Проверьте корректность ввода номера";
        }

        $html = $view->display('admediteform.php');
        echo $html;

    }
    protected function actionEdit(){

        $template_path = __DIR__ . '/../view/';

        $view = new View($template_path);

        if(isset($_POST["title"])&&isset($_POST["text"]))
        {
            $news_model = new NewsModel();
            $news_model->title = $_POST["title"];
            $news_model->text = $_POST["text"];
            $news_model->id = $_POST["id"];

            try{
                $news_model->save();
                $view->message = "Новость изменена";
            }
            catch(PDOExceptionException $e)
            {
                $view->message = "Что то пошло не так";
            }
        }
        else
        {
            $view->message = "Неверный запрос";
        }
        $html = $view->display('admeditearticle.php');
        echo $html;

    }





    protected function actionGet_deleteform(){

        $template_path = __DIR__ . '/../view/';

        $view = new View($template_path);

        $html = $view->display('admdeleteform.php');
        echo $html;

    }
    protected function actionDelete(){

        $template_path = __DIR__ . '/../view/';
        $view = new View($template_path);

        try{

            NewsModel::deleteByPk($_GET["id"]);
            $view->message = "Новость удалена";

        }
        catch(PDOException $e)
        {
            $view->message = "Проверьте корректность ввода номера";
        }

        $html = $view->display('admdeletearticle.php');
        echo $html;

    }
}