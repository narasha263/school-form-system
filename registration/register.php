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

// Get the form data
$name = $_POST["name"];
$password = $_POST["password"];

if (isset($_POST["address"])) {
    $address = $_POST["address"];
} else {
    $address = "";
}


// Prepare the SQL statement
$sql = "INSERT INTO school (name, password, address) VALUES ('$name', '$password', '$address')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();

?>
