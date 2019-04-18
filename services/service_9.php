<!DOCTYPE html>
<?php
if(isset($_COOKIE["service_9"])){
    $count = $_COOKIE["service_9"];
    $count += 1;
    setcookie("service_9", $count, time() + (86400 * 30), "/"); // 86400 = 1 day
}
else{
    setcookie("service_9", 1, time() + (86400 * 30), "/"); // 86400 = 1 day
}
$lv_1 = "service_9";
$lv_2 = "";
$lv_3 = "";
$lv_4 = "";
$lv_5 = "";

if(isset($_COOKIE["lv_1"])){
    $lv_2 = $_COOKIE["lv_1"];
    $cookie_name = "lv_2";
    setcookie($cookie_name, $lv_2, time() + (86400 * 30), "/"); // 86400 = 1 day
}
if(isset($_COOKIE["lv_2"])){
    $lv_3 = $_COOKIE["lv_2"];
    $cookie_name = "lv_3";
    setcookie($cookie_name, $lv_3, time() + (86400 * 30), "/"); // 86400 = 1 day
}
if(isset($_COOKIE["lv_3"])){
    $lv_4 = $_COOKIE["lv_3"];
    $cookie_name = "lv_4";
    setcookie($cookie_name, $lv_4, time() + (86400 * 30), "/"); // 86400 = 1 day
}
if(isset($_COOKIE["lv_4"])){
    $lv_5 = $_COOKIE["lv_4"];
    $cookie_name = "lv_5";
    setcookie($cookie_name, $lv_5, time() + (86400 * 30), "/"); // 86400 = 1 day
}
$cookie_name = "lv_1";
setcookie($cookie_name, $lv_1, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>
<h1>Service 9</h1>
<img src="https://images.pexels.com/photos/2127021/pexels-photo-2127021.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" height="500">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce consequat cursus quam a tincidunt. Duis semper nisi eget convallis efficitur. Vivamus tristique ex quis mi gravida tempor. Vestibulum quis mi lectus. Nulla ornare, sapien vel cursus hendrerit, tortor velit suscipit dolor, sit amet ornare metus ligula a arcu. Suspendisse sollicitudin, eros ut gravida ultricies, enim risus malesuada enim, id pulvinar urna velit maximus felis. Sed fermentum massa vitae varius viverra. Proin tristique lacus massa, sed scelerisque libero ultricies at. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

Nullam efficitur tortor nec pellentesque gravida. Quisque suscipit vestibulum hendrerit. Quisque tristique tortor nibh, vel mattis eros rutrum nec. Aliquam erat volutpat. Vivamus id lorem vitae nisl ullamcorper scelerisque. Aenean in suscipit lectus, in feugiat nibh. Sed sit amet justo ipsum. Praesent malesuada felis vel leo bibendum, at tincidunt justo eleifend. Maecenas volutpat nisi eu porta consequat. Proin tincidunt ac magna id gravida. Aliquam bibendum pretium consequat. Nam sed sollicitudin sapien, quis molestie dolor. Fusce auctor ac arcu sit amet venenatis.</p>
<?php
//
?>

</body>
</html>
