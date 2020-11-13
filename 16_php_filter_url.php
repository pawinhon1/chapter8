<?php
$url = "https://www.narasak.com/";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url รูปแบบของ URL ถูกต้อง");
} else {
  echo("$url รูปแบบของ URL ไม่ถูกต้อง");
}
?>