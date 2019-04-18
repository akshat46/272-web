<!DOCTYPE html>
<?php
$lv_1 = "service_0";
$lv_2 = "";
$lv_3 = "";
$lv_4 = "";
$lv_5 = "";
if(isset($_COOKIE[$lv_1])){
    $lv_2 = $_COOKIE[$lv_1];
}
if(isset($_COOKIE[$lv_2])){
    $lv_3 = $_COOKIE[$lv_2];
}
if(isset($_COOKIE[$lv_3])){
    $lv_4 = $_COOKIE[$lv_3];
}
if(isset($_COOKIE[$lv_4])){
    $lv_5 = $_COOKIE[$lv_4];
}
setcookie($lv_1, $lv_2, $lv_3, $lv_4, $lv_5, time() + (86400 * 30), "/");
?>
<html>
<body>

<?php
//
?>

</body>
</html>
