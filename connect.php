<?php
// Database configuration


// Create connection
$conn = new mysqli('localhost', 'root', '', 'registration');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>