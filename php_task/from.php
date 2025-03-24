<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

</head>
<body>
    



    <form action="index.php" method="post">
    <label for="firstname">First name</label><br>
    <input type="text" name="firstname" id="firstname" placeholder="firstname"><br><br>
    <label for="lastname">Last Name</label><br>
    <input type="text" name="lastname" id="lastname" placeholder="lastname"><br><br>
    <label for="email">email</label><br>
    <input type="text" name="email" id="email" placeholder="email ID"><br><br>
    <label for="address">address</label><br>
    <input type="text" name="address" id="address" placeholder="address"><br><br>
    <label for="mobile">Mobile Number</label><br>
    <input type="text" name="mobile" id="mobile" placeholder="mobile"><br><br>
    <label for="password">password</label><br>
    <input type="text" name="password" id="password" placeholder="password"><br><br>
     <label for="passwordConfirm">password Confirm</label><br>
    <input type="text" name="passwordConfirm" id="passwordConfirm" placeholder="password Confirm"><br> <br>
    <button name="submit" id="submit" >submit</button><br>
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <!-- Add any styles you want here -->
</head>
<body>
    <form action="index.php" method="post">
     <form action="index.php" method="post">
    <label for="firstname">First name</label><br>
    <input type="text" name="firstname" id="firstname" placeholder="firstname"><br><br>
    <label for="lastname">Last Name</label><br>
    <input type="text" name="lastname" id="lastname" placeholder="lastname"><br><br>
    <label for="email">email</label><br>
    <input type="text" name="email" id="email" placeholder="email ID"><br><br>
    <label for="address">address</label><br>
    <input type="text" name="address" id="address" placeholder="address"><br><br>
    <label for="mobile">Mobile Number</label><br>
    <input type="text" name="mobile" id="mobile" placeholder="mobile"><br><br>
    <label for="password">password</label><br>
    <input type="text" name="password" id="password" placeholder="password"><br><br>
     <label for="passwordConfirm">password Confirm</label><br>
    <input type="text" name="passwordConfirm" id="passwordConfirm" placeholder="password Confirm"><br> <br>
    <button name="submit" id="submit" >submit</button><br>
    </form>
    </form>

    <?php
    $servername = 'localhost';
    $username = 'dckap';
    $password = 'Dckap2023Ecommerce';
    $dbname = 'formdetails';

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['passwordConfirm'];

    $sql = "INSERT INTO userDetails (first_name, last_name, email_id, user_address, mobile_Number, user_password, confirm_password) VALUES ('$firstName', '$lastName', '$email', '$address', '$mobile', '$password', '$confirmPassword')";

    if ($conn->query($sql) === true) {
        echo "Data inserted successfully";
        header("location: db_table.php");
    } else {
        echo "Failed to store data: " . $conn->error;
    }

    $conn->close();
    ?>
</body>
</html>
