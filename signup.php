<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "userdata"; 
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "INSERT INTO users (full_name, email, password) VALUES ('$full_name', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Account created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>