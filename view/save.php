<!DOCTYPE html>
<html>
<head>
    <title>Добавление новости</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Добавление новости:</h1>
<form action="?r=news/add" method="post">
    <p>Заголовок:<br />
        <input type="text" name="title" required placeholder=" |Enter title" autofocus=""/><br />
    </p>
    <p>Текст:<br />
        <textarea name="text" cols="40" rows="3" required></textarea>
    </p>
    <input type="submit" name="submit" value="Отправить"/>
</form>
<a href="/../index.php">На главную</a>
<br />
</body>
</html>