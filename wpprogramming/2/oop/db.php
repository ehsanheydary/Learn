<?php

class Db
{
    public $table;

    public function all()
    {
        return "SELECT * FROM {$this->table}";
    }

    public function find($id, $columns = null)
    {
        $columns = !is_null($columns) ? implode(',', $columns) : '*';
        return "Select $columns From {$this->table} WHERE id={$id}";
    }

    public function delete($id)
    {
        return "Delete From {$this->table} WHERE id={$id}";
    }

    public function sort()
    {

    }

    public static function export()
    {

    }
}

$connection = new Db();
$connection->table = "user";
$connection->find(56, array('id', 'name'));

Db::export();

new finalClass();
function __autoload($lassName)
{

}

?>