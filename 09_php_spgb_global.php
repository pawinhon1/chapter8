<?php
$a = 100;
$b = 800;

function sumNumber(){
    $GLOBALS['c'] = $GLOBALS['a']+$GLOBALS['b'];
}

sumNumber();

echo $c;

?>