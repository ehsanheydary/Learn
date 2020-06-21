<?php
$c = 0;
$db = new SQLite3('phpdata.db');
$select = $db->query("SELECT * FROM OPTIONS");
echo '<pre>';
while(true)
{
    $c++;
    $row = $select->fetchArray(SQLITE3_ASSOC);
    if(!$row)
    {
        break;
    }
    echo "Row $c <br/>";
    var_dump($row);
}
echo '</pre>';