<?php
require 'class.php';
require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$dob = $_POST['dob'];


$user = new User($name, $email, $password, $dob);

$properties = $user->getAllProperties();


$sql = "INSERT INTO users (name, email, password, dob) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $properties['name'], $properties['email'], $properties['password'], $properties['dob']);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
