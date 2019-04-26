<body>
    <link rel="stylesheet" type="text/css" href="table.css">
    <?php

    include 'allUsers.php';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://165.227.54.167/allUsers.php");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $contents = curl_exec ($ch);
    echo $contents;
    curl_close ($ch);
    ?>

</body>
