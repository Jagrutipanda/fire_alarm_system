<?php
include 'connect.php'; // include database connection

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // encrypt password
$role_id = $_POST['role_id'];

// Insert query
$sql = "INSERT INTO users (name, email, password, role_id) VALUES ('$name', '$email', '$password', '$role_id')";

if ($conn->query($sql) === TRUE) {
    echo "User registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
