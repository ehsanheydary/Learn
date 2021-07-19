<?php
$n = 100000;
echo "<table style='font-size: 18pt; height: 250px;width: 250px;text-align: center;'  border='1'>";
echo "<caption>";
echo "تاس";
echo "</caption>";
echo "<thead>";
echo "<tr>
        <th>
        شماره
        </th>
        <th>
        تاس
        </th>
        <tr/>";
echo "</thead>";
for($i = 1;$i <= $n ; $i++)
{
    $r = rand(1,6);

    echo "<tr>
    <td>
        $i
    </td>
    <td>
        $r
    </td>
    </tr>";
}
echo "</table>";