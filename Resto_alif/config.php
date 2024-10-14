<?php
// Configuration file for database connection
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'Resto_Alif';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>