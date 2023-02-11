<?php

ob_start();
session_start();

date_default_timezone_set("Asia/Manila");

$servername = "localhost";
$username = "root";
$password = "";
$db = 'attendance';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";