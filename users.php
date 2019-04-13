<?php
$servername = "localhost";
$username = "leap-user";
$password = "leap123456";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}

extract($_POST);

if(isset ($SearchUser)){
    $sql = "SELECT * FROM Users WHERE
        first_name = $firstname" OR
        last_name = $lastname OR
        email = $email OR
        home_phone = $homephone OR
        cell_phone = $mobilephone;
    if ($res = mysqli_query($link, $sql)) {
        if (mysqli_num_rows($res) > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Firstname</th>";
            echo "<th>Lastname</th>";
            echo "<th>Email</th>";
            echo "<th>Address</th>";
            echo "<th>Home Phone</th>";
            echo "<th>Cell Phone</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>".$row['Firstname']."</td>";
                echo "<td>".$row['Lastname']."</td>";
                echo "<td>".$row['Age']."</td>";
                echo "<td>".$row['Address']."</td>";
                echo "<td>".$row['Home Phone']."</td>";
                echo "<td>".$row['Cell Phone']."</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_res($res);
        }
        else {
            echo "No matching records are found.";
        }
    }
}
else{
    if(!$firstname || !$lastname || !$email || !$address || $homephone || $mobilephone)){
        fieldsBlank();
        die();
    }

    $sql = "INSERT INTO users (first_name, last_name, email, address, home_phone, cell_phone) VALUES ($firename, $lastname, $email, $address,$homephone, $mobilephone)";

    if ($conn->query($sql) === TRUE) {
        echo "New user added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close()

function fieldsBlank(){
    print("<h1>All fields should be filled.</h2>");
}
?>
