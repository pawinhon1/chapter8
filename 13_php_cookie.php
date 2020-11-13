<?php
date_default_timezone_set("Asia/Bangkok");

$hh = strtotime("+1 hours");

if(isset($_POST['create_cookie'])){
    $username = setcookie("username",$_POST['username'],time() + 3600 , '/');
    $password = setcookie("password",$_POST['password'],$hh, '/');
}

echo $_COOKIE['username']." ".$_COOKIE['password']."<br>";


if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

<form name="f1" method="post" action="" enctype="multipart/form-data">
ชื่อผู้ใช้ : <input type="text" name="username"><br>
รหัสผ่าน : <input type="text" name="password"><br>
<button name="create_cookie" type="submit">สร้าง Cookies</button>
</form>