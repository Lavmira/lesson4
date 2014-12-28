<!DOCTYPE html>
<html>
<head>
    <title>Добавить новость</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div id="page-index">

    <?php include "menu.php"; ?>
    <div>
        <form action="index.php?route=news/add" method="POST">
            <fieldset>
                <legend>Добавьте новость</legend>
                <span>Заголовок</span><br/>
                <input type="text" name="title"><br/>
                <span>Текст новости</span><br/>
                <textarea name="text" cols="40" rows="8"/></textarea><br/>
                <input type="submit" value="Отправить"/>
            </fieldset>
        </form>


    </div>
</body>
</html>
