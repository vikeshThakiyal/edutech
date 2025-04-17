<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bright_future";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT id, name, password FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password === $row['password']) {
        $_SESSION['name'] = $row['name'];
        echo "Login successful!";
    } else {
        echo "Username or password doesn't match!";
    }
} else {
    echo "User doesn't exist!";
}

$conn->close();
?>