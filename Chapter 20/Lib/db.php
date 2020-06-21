<?php

global $db;
$db = new SQLite3(DB_FILENAME);

function CreateTables()
{
    global $db;
    $db->query("CREATE TABLE IF NOT EXISTS users (Id INTEGER PRIMARY  KEY AUTOINCREMENT, UserName TEXT NOT NULL , Password Text NOT NULL  , FirstName Text NOT NULL , LastName Text NOT NULL );");
    $db->query("CREATE TABLE IF NOT EXISTS options (Id INTEGER PRIMARY  KEY AUTOINCREMENT, OptionName TEXT NOT NULL , OptionValue Text NOT NULL);");
}
