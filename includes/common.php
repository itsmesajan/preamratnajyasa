<?php
ob_start(); // Output buffering starts before any output
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
