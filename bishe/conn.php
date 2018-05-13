<?php
$servername = "localhost";
$username = "root";
$password = "103125";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
     die("连接失败: " . $conn->connect_error);
}
?>
                               
