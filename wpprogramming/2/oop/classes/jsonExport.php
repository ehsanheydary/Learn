<?php
require_once '3/interface/canExport.php';

class jsonExport implements canExport
{
    public function export()
    {
        echo 'data format json';
    }
}