<?php

$host = 'localhost';
$user = 'root';
$pass = 'Gtba1206!';
$db_name = 'blog';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}
