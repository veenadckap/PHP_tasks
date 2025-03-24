<?php
$servername = "localhost";
$username = "dckap";
$password = "Dckap2023Ecommerce";
$dbname = "example_db";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Collect and sanitize input data
    $user = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL and bind parameters
        $stmt = $conn->prepare("INSERT INTO users (username, email) VALUES (:username, :email)");
        $stmt->bindParam(':username', $user);
        $stmt->bindParam(':email', $email);

        // Execute the statement
        $stmt->execute();

        echo "New record created successfully";
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
} else {
    echo "Invalid request method.";
}
?>
