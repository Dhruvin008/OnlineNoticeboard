<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "noticeinfo";
// Create connection
$connect = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



?>