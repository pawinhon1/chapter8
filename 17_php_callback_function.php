<?php
function exclaim($str) {
  return $str;
}

function ask($str) {
  return $str;
}

function callFunction($format, $str) {
  // Calling the $format callback function
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
callFunction("exclaim", "My name's : ");
callFunction("ask", "Pawin");
?>