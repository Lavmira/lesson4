<!DOCTYPE html>
<html>
<head>
    <title>Просмотр новости по ID</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div id="page-admindex">

    <?php include "admmenu.php"; ?>

    <?php if(isset($message)): ?>
        <?=$message;?>
    <?php else: ?>
        <div class="news-number">ID=<?=$article->id;?></div>
        <div class="title"><?=$article->title;?></div>
        <div class="text"><?=$article->text;?></div>
    <?php endif; ?>

</div>


</body>
</html>