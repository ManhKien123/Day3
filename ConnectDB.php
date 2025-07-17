<?php
$host = "localhost";
$username = "root";
$password = "";
$port = 3306;

$conn = new mysqli($host, $username, $password, "", $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
