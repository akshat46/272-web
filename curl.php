<?php

include 'allUsers.php';

$urls = array("http://www.roopeshrai.com/myusers.php", "http://brewgy.com/myUsers.php");

foreach ($urls as &$url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec ($ch);
    echo $contents;
    curl_close ($ch);
}
?>
