<!DOCTYPE html>
<html>
<head>
    <title>Новости</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div id="page-admindex">

    <?php include "admmenu.php"; ?>

    <form action="index.php" method="GET">
        <fieldset id="newsgetform-fieldset">
            <legend>Введите номер новости</legend>
            <input type="text" name="id" /><br/>
            <input type="hidden" name="route" value="admin/one"/>
            <input type="submit" value="Отправить"/>
        </fieldset>
    </form>

</div>
</body>
</html>