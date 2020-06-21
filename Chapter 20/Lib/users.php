<?php
function UserCount()
{
    global $db;
    $result = $db->query("SELECT * FROM users");
    $Counter = 0;
    while($Row = $result->fetchArray(SQLITE3_ASSOC))
    {
        $Counter++;
    }
    return $Counter;
}
function InitializeUsers()
{
    if (UserCount() == 0)
    {
        global $db;
        $EncryptedPassword = sha1('1234');
        $db->query("INSERT INTO users (UserName , Password , FirstName , LastName ) VALUES ('Ehsan' , '$EncryptedPassword' , '' , '');");
    }
}
function GetUser($UserName)
{
    if (!$UserName)
    {
        return null;
    }
    global $db;
    $select = $db->query("SELECT * FROM users WHERE Username = '$UserName'");
    $row = $select->fetchArray(SQLITE3_ASSOC);
    return $row;
}
function UserExists($UserName)
{
    $User = GetUser($UserName);
    return isset($User['Id']);
}
function AddUsers($UserData)
{

    $UserName = $UserData['UserName'];
    if(!$UserName)
    {
        return;
    }
    $Password = sha1($UserData['Password']);
    $FirstName = $UserData['FirstName'];
    $LastName = $UserData['LastName'];
    global $db;
    if(!UserExists($UserName))
    {
        $db->query("INSERT INTO users (UserName , Password, FirstName , LastName) VALUES ('$UserName' , '$Password' , '$FirstName' , '$LastName');");
    }
    else
    {
        $db->query("Update users set Password = '$Password' , FirstName = '$FirstName' , LastName = '$LastName' WHERE UserName = '$UserName';");
    }
}
function UpdateUsers($UserData)
{
    AddUsers($UserData);
}
function DeleteUsers($UserName)
{
    if(!UserExists($UserName))
    {
        return;
    }
    global $db;
    $db->query("Delete from users WHERE UserName = '$UserName';");

}