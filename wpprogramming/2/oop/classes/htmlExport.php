<?php
require_once '3/interface/canExport.php';

class htmlExport implements canExport
{
    public function export()
    {
        echo 'data format html';
    }
}