<body>
    <link rel="stylesheet" type="text/css" href="table.css">
    <?php
    $servername = "localhost";
    $username = "leap-user";
    $password = "leap123456";
    $dbname = "leap";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users";
    if ($result = $conn->query($sql)) {
        if ($result->num_rows > 0) {
            echo "<h2>All Users from Akshat's application:</h2>";
            echo '<table class="zui-table">';
            echo "<tr>";
            echo "<th>Firstname</th>";
            echo "<th>Lastname</th>";
            echo "<th>Email</th>";
            echo "<th>Address</th>";
            echo "<th>Home Phone</th>";
            echo "<th>Cell Phone</th>";
            echo "</tr>";
            while ($row = $result->fetch_assoc()) {
                //echo '<pre>'; print_r($array); echo '</pre>';
                echo "<tr>";
                echo "<td>".$row['first_name']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['home_phone']."</td>";
                echo "<td>".$row['cell_phone']."</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_res($result);
        }
        else {
            echo "No users found.";
        }
    }

    $conn->close();


    // create curl resource
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, "www.roopeshrai.com/myusers.php");

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $output = curl_exec($ch);

    echo "curl output: ".$output;

    // close curl resource to free up system resources
    curl_close($ch);

    ?>

</body>
