<!DOCTYPE html>
<html>
<head>
    <title>Новости</title>
    <meta http-equiv="refresh" content="10" />
    <meta charset="UTF-8">
</head>
<body>
<div>
    <? foreach ($news as $key => $value): ?>
        <a href="?r=news/one&id=<?= $value->id; ?>">Просмотр новости № <?= $key+1; ?></a><br />
    <?php endforeach; ?>
</div>
<br/>
<div>
    <a href="?r=news/all">Все новости</a>
</div>
<br/>
<div>
    <a href="?r=news/formAdd">Добавление новостей</a>
</div>
</body>
</html>