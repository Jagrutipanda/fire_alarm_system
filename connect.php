<?php
$host = "localhost"; // or check Hostinger's DB Hostname
$username = "u807244070_gpbbsr";
$password = "Jagrut@2006";
$database = "u807244070_gpbbsr";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>
