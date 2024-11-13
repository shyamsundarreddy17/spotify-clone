<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $database = "userdata"; 
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<script>alert('Login successful'); window.location.href='index1.html';</script>";
        exit(); 
    } else {
        echo "<script>alert('Invalid email or password');window.location.href='index1.html';</script>";
    }

    $conn->close();
}
?>