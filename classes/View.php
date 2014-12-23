<?php

require_once __DIR__ . '/Storage.php';

class View
    extends Storage
{
    public function display($data)
    {
        foreach ($this as $k => $v)
        {
            ${$k} = $v;
        }
        require $data;
    }
}