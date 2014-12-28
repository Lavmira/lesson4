<!DOCTYPE html>
<html>
<head>
    <title>Редактировать новость</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div id="page-adminindex">

    <?php include "admmenu.php"; ?>

    <?php if(isset($message)): ?>

        <?=$message;?>

    <?php else : ?>

        <form action="index.php?route=admin/edit" method="POST">
            <fieldset>
                <legend>Редактировать новость</legend>
                <span>Заголовок</span><br/>
                <input type="hidden" name ="id" value="<?=$article->id;?>" />
                <input type="text" name="title" value="<?=$article->title;?>" /><br/>
                <span>Текст новости</span><br/>
                <textarea name="text" cols="40" rows="8"  /><?=$article->text;?></textarea><br/>
                <input type="submit" value="Отправить"/>
            </fieldset>
        </form>

    <?php endif; ?>

</div>
</body>
</html>
