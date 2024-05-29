<?php
$servername = "localhost";
$username = "root";
$password = "My$QL1234";
$dbname = "webprog";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
