<!DOCTYPE html>
<?php
$lv_1 = "service_5";
$lv_2 = "";
$lv_3 = "";
$lv_4 = "";
$lv_5 = "";
$cookie_name = "lv_1";
setcookie($cookie_name, $lv_1, time() + (86400 * 30), "/"); // 86400 = 1 day

if(isset($_COOKIE[$lv_1])){
    $lv_2 = $_COOKIE[$lv_1];
    $cookie_name = "lv_2";
    setcookie($cookie_name, $lv_2, time() + (86400 * 30), "/"); // 86400 = 1 day
}
if(isset($_COOKIE[$lv_2])){
    $lv_3 = $_COOKIE[$lv_2];
    $cookie_name = "lv_3";
    setcookie($cookie_name, $lv_3, time() + (86400 * 30), "/"); // 86400 = 1 day
}
if(isset($_COOKIE[$lv_3])){
    $lv_4 = $_COOKIE[$lv_3];
    $cookie_name = "lv_4";
    setcookie($cookie_name, $lv_4, time() + (86400 * 30), "/"); // 86400 = 1 day
}
if(isset($_COOKIE[$lv_4])){
    $lv_5 = $_COOKIE[$lv_4];
    $cookie_name = "lv_5";
    setcookie($cookie_name, $lv_5, time() + (86400 * 30), "/"); // 86400 = 1 day
}
?>
<html>
<body>

<?php
//
?>

</body>
</html>
