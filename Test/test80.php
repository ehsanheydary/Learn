<?php
$conn = mysqli_connect
(
    'localhost',
    'root',
    '',
    'civilsociety'
);
//$record = $db->first("SELECT * FROM n_invoice LEFT OUTER JOIN n_transaction ON n_invoice.hash=n.transaction.invoice_hash WHERE n_invoice.hash=:invoice_hash")
//"SELECT * FROM civil_users WHERE Users_Id IN (SELECT Users_Id FROM civil_votes)"
$query = mysqli_query($conn,"SELECT COUNT(*) as vote FROM civil_users");
$query = $query->fetch_assoc();
echo '<pre>';
var_dump($query['vote']);
echo '</pre>';
/*while ($arrayQuery = mysqli_fetch_assoc($query))
{
    echo '<pre>';
    var_dump($arrayQuery);
    echo '</pre>';
    echo '<br/>';
}*/