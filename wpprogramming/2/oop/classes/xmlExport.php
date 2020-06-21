<?php

require_once '3/interface/canExport.php';

class xmlExport implements canExport
{
    public function export()
    {
        echo 'data format xml';
    }
}