<?php

require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/classes/AModel.php';

function News_getAll()
{
    return DBQuery("
    SELECT * FROM news
    ");
}


