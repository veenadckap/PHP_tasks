<?php
include "../model/connectDb.php";
session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = '';
}

// Register user
if (isset($_POST['submit'])){
    $id = unique_id();
    $name = $_POST['name'];
//    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $pass = $_POST['password'];
//    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $cpass = $_POST['cpass'];
//    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

    $select_user = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $select_user->execute([$email]);
    $row = $select_user->fetch(PDO::FETCH_ASSOC);

    if ($select_user->rowCount() > 0){
        $message[] = 'email already exist';
        echo "email already exist";
    } else {
        if ($pass != $cpass){
            $message[] = 'confirm your password';
            echo "confirm your password";
        } else {
            $insert_user = $conn->prepare("INSERT INTO users (id, name, email, password) VALUES (?, ?, ?, ?)");
            $insert_user->execute([$id, $name, $email, $pass]);
            $select_user = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
            $select_user->execute([$email, $pass]);
            $row = $select_user->fetch(PDO::FETCH_ASSOC);
            if ($select_user->rowCount() > 0){
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_email'] = $row['email'];

                header("Location: /view/home.php");
                exit();
            }
        }

    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>green tea - register</title>
    <link rel="stylesheet" href="/view/style.css">
</head>
<body>
<div class="main-container">
    <section class="form-container">
        <div class="title">
            <img src="/view/src/download.png" alt="">
            <h1>register now</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, praesentium, quaerat! Distinctio eaque est provident?</p>
        </div>
        <form method="post">
            <div class="input-field">
                <p>your name</p>
                <input type="text" name="name" required placeholder="enter your name" maxlength="50">
            </div>
            <div class="input-field">
                <p>your email</p>
                <input type="email" name="email" required placeholder="enter your email" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="input-field">
                <p>your password</p>
                <input type="password" name="password" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <div class="input-field">
                <p>confirm password</p>
                <input type="password" name="cpass" required placeholder="enter your password" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            </div>
            <input type="submit" name="submit" value="register now" class="btn">
            <p>already have an account? <a href="/view/login.php">login now</a></p>
        </form>
    </section>
</div>
</body>
</html>
