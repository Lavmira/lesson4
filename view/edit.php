<!DOCTYPE html>
<html>
<head>
    <title>Редактирование новости</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Редактирование новости:</h1>
<form action="?r=news/edit" method="post">
    <p>Заголовок:<br />
        <input type="hidden" name="id" value="<?=$edit_article['id'];?>"> <br />
        <input type="text" name="title" value="<?=$edit_article['title'];?>" required placeholder=" |Enter title" autofocus=""/><br />
    </p>
    <p>Текст:<br />
        <textarea name="text" cols="40" rows="3" required><?=$edit_article['text'];?></textarea>
    </p>
    <input type="submit" name="submit" value="Отправить"/>
</form>
<a href="/../index.php">На главную</a>
<br />
</body>
</html>
