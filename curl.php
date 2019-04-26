<?php

    include 'allUsers.php';

    echo "testing curl";
    $ch = curl_init();
    echo "testign curl2";
    curl_setopt($ch, CURLOPT_URL, "http://www.roopeshrai.com/myusers.php");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec ($ch);
    echo $contents;
    curl_close ($ch);
?>
