<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
<?php
include './class.php';


$users = [
    new User("John Doe", "john@example.com", "password123", "1990-01-01"),
    new User("Jane Smith", "jane@example.com", "password456", "1992-02-02"),
    new User("Alice Johnson", "alice@example.com", "password789", "1994-03-03"),
    new User("Alice ", "alice@example.com", "password789", "1994-03-03"),
    new User("Owen ", "owen@example.com", "password789", "1994-03-03")


];
?>

<h2>User Details</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Date of Birth</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo htmlspecialchars($user->getName()); ?></td>
            <td><?php echo htmlspecialchars($user->getEmail()); ?></td>
            <td><?php echo htmlspecialchars($user->getPassword()); ?></td>
            <td><?php echo htmlspecialchars($user->getDob()); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
