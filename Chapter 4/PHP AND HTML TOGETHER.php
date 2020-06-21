
<?php
$Max = 10;
$p = 0;
$T = 2;
$result = 0;
echo "<table style='width:250px;height:250px;text-align:center;border: 10px solid gray; float:c;'border='1'>";
echo "<thead>";
echo "<tr > <th > P </th> &nbsp;&nbsp;&nbsp;<th > P^T </th> </tr>";
echo "</thead>";
while($p <= $Max)
{
    $result = $p**$T;
    echo "<tr >";
    echo "<td >" . $p . "</td >" ;
    echo "<td >" . $result . "</td>";
    echo "</tr>";
$p++;
}
echo "</table>";