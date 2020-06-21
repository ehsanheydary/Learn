<?php
$conn = mysqli_connect('localhost','Esi',
    '1ds91Dp9SIkvfC3k','dbdsoon');
$query = mysqli_query($conn,"select * from jahad where FirstName='ehsan' limit 3 offset 4");
while ($arrayQuery = mysqli_fetch_assoc($query))
{
    echo $arrayQuery['id'].'<br>';
}
echo $arrayQuery['FirstName'];