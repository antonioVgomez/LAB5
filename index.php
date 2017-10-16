<?php
    // connect our mysql DB server
$servername = "localhost";
$username = "root";
$password = "phpTonydb17";
$dbname = "tech_devices_app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstName,lastName FROM User WHERE role = 'Student'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "user id: ". $row["id"]."<br>".": ".$row["firstName"]." ".$row["lastName"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


?>