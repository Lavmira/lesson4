<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Добавить новость</title>
    <style>
        fieldset{width: 300px;}
        input[type="text"]{width:340px;}
        legend{font-weight: bold;}
    </style>
</head>
<body>
<div>
    <fieldset>
        <legend>Добавьте новость</legend>
        <form action="/save.php" method="POST">
            <span>Заголовок</span><br/>
            <input type="text" name="title"><br/>
            <span>Текст новости</span><br/>
            <textarea name="text" cols="40" rows="8"/></textarea><br/>
            <input type="submit" value="Отправить"/>
        </form>
    </fieldset>
</div>
</body>
</html>
