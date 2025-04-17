<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bright_future";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password !== $confirm_password) {
    echo "Passwords do not match!";
    exit();
}

$sql = "INSERT INTO users (name, email, gender, dob, password) VALUES ('$name', '$email', '$gender', '$dob', '$password')";

if ($conn->query($sql)) {
    echo "Profile created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>