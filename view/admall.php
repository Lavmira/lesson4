<!DOCTYPE html>
<html>
<head>
    <title>Новости</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div id="page-adminindex">

    <?php include "adminmenu.php"; ?>

    <table id="admin-view-all-tbl">
        <rov id=" table-header">
            <th>ID</th>
            <th>Title</th>
            <th>Text</th>
        </rov>

        <?php foreach ($news as $article): ?>
            <tr>
                <td class="table-id"><?=$article->id;?></td>
                <td><?=$article->title;?></td>
                <td><?=$article->text;?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
