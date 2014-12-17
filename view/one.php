<?php
<!DOCTYPE html>
<html>
<head>
    <title>Новость <?=$article['id'];?></title>
<meta charset="UTF-8">
<style>
    fieldset{width: 250px;}
    input[type="text"]{width:150px;margin-bottom: 8px;}
    legend{font-weight: bold;}
</style>
</head>
<body>

<?php include 'view/one.php'; ?>

<?php if(null === $article): ?>
    <?php if(null !== $id): ?>
        Нет новости с таким номером
    <?php endif; ?>
<?php else: ?>
    <h1><?=$article['title'] . " " . $article['id'];?></h1>
    <div><?=$article['text'];?></div>
<?php endif; ?>

</body>
</html>