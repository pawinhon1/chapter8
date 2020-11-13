<?php
session_start();

$_SESSION['name'] = "pawin";
$_SESSION['lastname'] = "khenphukhiaw";

echo "My name's : ".$_SESSION['name']." ".$_SESSION['lastname'];

?>