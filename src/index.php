<?php
echo 'This is testing git and docker files and modified odn date 18-2-2017.';


echo "<br/>";
echo "<br/>";
echo "<br/>";


$servername = "172.17.0.2";
$username = "root";
$password = "tracking";
$dbname = "tracking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, email, first_name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Username: " . $row["username"]. "<br/> Email: " . $row["email"]. "<br/>firstName: ". $row['first_name'] ."<br><br/>";
    }
} else {
    echo "0 results";
}
$conn->close();
