<!DOCTYPE html>
<html>
<head lang="en">
    <title><?=$article['id'] === null ? "Нет Новости" : "Новость " . $article['id'];?></title>
    <meta charset="UTF-8">
    <style>
        fieldset{width: 200px;}
        input[type='text']{margin-bottom: 8px;}
        input[name="title"]{width:340px;margin-bottom: 8px;}
        legend{font-weight: bold;}
    </style>
</head>
<body>
<?php include __DIR__ . '/view/newsgetform.php'; ?>
<?php if(null === $article && isset($_GET['id'])): ?>
    "Нет новости с таким номером
<?php endif; ?>

<?php if(null !== $article ): ?>
    <form action=<?=$action ;?> method="POST">
        <fieldset>
            <legend>Отредактируйте новость <?=$article['id'];?></legend>
            <input type="hidden" name="id" value="<?=$article['id'];?>" />
            <span>Заголовок</span><br/>
            <input type="text" name="title" value="<?=$article['title'];?>"><br/>
            <span>Текст новости</span><br/>
            <textarea name="text" cols="40" rows="8" /><?=$article['text'];?></textarea><br/>
            <input type="submit" value="Отправить" />
        </fieldset>
    </form>
<?php endif ?>
</body>
</html>