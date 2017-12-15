<?php
$servername = "mysql-tutorial"; // Can use name of service in docker-compose.yml
$username   = "root";
$password   = "testPassword";
$database   = "tutorial";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM users";
$query  = $conn->query($sql);
$result = $query->fetch_assoc();
print_r($result);
$conn->close();