<?php
// Database connection using object-oriented MySQLi
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'admission_db';

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
