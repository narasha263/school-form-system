<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example query to retrieve data from the students table
$sql = "SELECT * FROM school";
$result = $conn->query($sql);

// Example loop to display the results
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "name: " . $row["name"]. " - password: " . $row["password"]. " - address: " . $row["address"] . "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>