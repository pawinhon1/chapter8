<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d2=strtotime("next friday");
echo date("Y-m-d h:i:sa", $d2) . "<br>";

$d3=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d3) . "<br>";
?>