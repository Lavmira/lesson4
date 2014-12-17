<html>
<head>
    <title>Новости</title>
</head>
<body>
/**
* @var array $articles Список всех новостей
*/
?>
<h1>TEST</h1>

<?php foreach ($articles as $art): ?>
    <h2><?= $art['title']; ?></h2>

    <article>
        <h1><?=$art['title'];?></h1>
        <div><?=$art['text'];?></div>
    </article>
    <?php endforeach; ?>
</body>
</html>