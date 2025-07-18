<?php
// Database configuration
$host = "localhost"; // Server hostname or IP address
$username = "root"; // Database username
$password = "root"; // Database password
$dbname = "hikewise"; // Database name

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If connection is successful
// echo "Connected successfully";

// Close the connection (optional, typically done at the end of the script)
// $conn->close();
?>
