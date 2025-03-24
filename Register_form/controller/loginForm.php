<?php
session_start();

require_once("../model/DB.php");
$config = require('../config.php');
$databaseConnection = new DatabaseConnection($config);
$conn = $databaseConnection->getConnection();

define('ENCRYPTION_KEY', 'e5f6d7e8c9b10f11e5f6d7e8c9b10f11');

if (isset($_POST['email'], $_POST['password'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result === false) {
        $error = 'Error executing SQL query: ' . $conn->error;
    } elseif ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];
        $decryptedPassword = openssl_decrypt($storedPassword, 'AES-128-ECB', ENCRYPTION_KEY);

        if ($password === $decryptedPassword) {
            $_SESSION['name'] = $email;
            $_SESSION['is_admin'] = ($email === "Admin@gmail.com");
            
            header("Location: ../success.php");
            exit;
        } else {
            header("Location:../register.php");
            exit;
        }
    } else {
        header("Location: ../register.php");
        exit;
    }
} else {
    $error = 'Invalid input data';
}

$conn->close();

if (isset($error)) {
    echo 'Error: ' . $error;
}
?>
