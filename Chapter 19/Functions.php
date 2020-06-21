<?php
function AddOption($OPTION_NAME , $OPTION_VALUE = NULL)
{
    if(!$OPTION_NAME)
    {
        return null;
    }
    if(!$OPTION_VALUE)
    {
        $OPTION_VALUE = '0';
    }
    global $db;
    if(!ExistsOptions($OPTION_NAME))
    {
        $db->query("INSERT INTO OPTIONS(OPTION_NAME,OPTION_VALUE)VALUES('$OPTION_NAME','$OPTION_VALUE')");
    }
    else
    {
        $db->query("UPDATE OPTIONS SET OPTION_VALUE = '$OPTION_VALUE' WHERE OPTION_NAME = '$OPTION_NAME'");
    }
}
function GetOption($OPTION_NAME , $RowFlag = false)
{
    if(!$OPTION_NAME)
    {
        return;
    }
    global $db;
    $select = $db->query("SELECT * FROM OPTIONS WHERE OPTION_NAME = '$OPTION_NAME'");
    $row = $select->fetchArray(SQLITE3_ASSOC);
    if($row)
    {
        if($RowFlag == true)
        {
            return $row;
        }
        else
        {
            return $row['OPTION_VALUE'];
        }
    }
    else
    {
        return null;
    }
}
function ExistsOptions($OptionName)
{
    $row = GetOption($OptionName, true);
    return isset($row['ID']);
}
function UpdateOptions($OPTION_NAME , $OPTION_VALUE = NULL)
{
    AddOption($OPTION_NAME, $OPTION_VALUE);
}
function DeleteOption($Option_Name)
{
    echo 'A';
    if(!ExistsOptions($Option_Name))
    {
        return false;
    }
    echo 'B';
    global $db;
    $db->query("Delete from OPTIONS WHERE OPTION_NAME = '$Option_Name'"
    );
}