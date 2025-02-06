<?php
$servername = "localhost";
$username = "root";  // default username
$password = "";      // leave empty if no password is set in XAMPP
$db_name = "db2";    // make sure this is the correct database name

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
