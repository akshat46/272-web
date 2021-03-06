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

    extract($_POST);

    if(isset ($SearchUser)){
        $sql = "SELECT * FROM users WHERE first_name = '$firstname' OR last_name = '$lastname' OR email = '$email' OR home_phone = '$homephone' OR cell_phone = '$mobilephone'";
        if ($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
                echo "<h2>Search Results:</h2>";
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
                echo "No matching records are found.";
            }
        }
    }
    else{

        if(!$firstname || !$lastname || !$email || !$address || !$homephone || !$mobilephone){
            fieldsBlank();
            die();
        }

        $sql = "INSERT INTO users (first_name, last_name, email, address, home_phone, cell_phone) VALUES ('$firstname', '$lastname', '$email', '$address', '$homephone', '$mobilephone')";

        if ($conn->query($sql) === TRUE) {
            echo "New user added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();

    function fieldsBlank(){
        print("<h1>All fields should be filled.</h2>");
    }
    ?>

    </body>
