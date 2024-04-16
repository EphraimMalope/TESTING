<?php
$servername = "localhost";
$dbusername = "root"; // replace with your database username
$dbpassword = ""; // replace with your database password
$dbname = "Store_Database"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>