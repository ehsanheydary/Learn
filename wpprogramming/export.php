<?php
require_once '2/oop/classes/htmlExport.php';
require_once '2/oop/classes/jsonExport.php';
require_once '2/oop/classes/xmlExport.php';

$export = 'html';
$handler = $export . 'Export';
$handler = new $handler;


class exportHandler
{
    public function doExport1($handler)
    {
        if ($handler instanceof htmlExport && method_exists($handler, 'export')):
            $handler->export();
        endif;
    }

    public function doExport(canExport $handler)
    {
        $handler->export();
    }
}

$ObjectHandler = new exportHandler();
$ObjectHandler->doExport($handler);