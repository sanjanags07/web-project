
<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "exam__portal";

$conn = new mysqli("localhost", "root","", "exam__portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
