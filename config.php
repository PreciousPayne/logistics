<?php
$servername = "localhost";
$dbusername = "root";
$dbname = "logistics";
$dbpassword = "";

$conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}
