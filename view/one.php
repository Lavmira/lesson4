<!DOCTYPE html>
<html>
<head>
    <title>Новости</title>
    <meta charset="UTF-8">
</head>
<body>
<article>
    <h1><?=$one_article->title;?></h1>
    <div><?=$one_article->text;?></div>
</article>
<div><a href="?r=news/formEdit&id=<?=$one_article->id ;?>">Редактировать</a></div>
<div><a href="?r=news/Delete&id=<?=$one_article->id ;?>">Удалить</a></div>
</body>
</html>