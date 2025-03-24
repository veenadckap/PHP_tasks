<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            padding-top: 2rem;
            display: flex;
            justify-content: center;
            align-items:center ;
            flex-direction: column;
        }
        .class{
            background: #c2bbdd;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            width: 24%;
            padding: 2.5rem 3.5rem;
        }
        input{
            padding: 0.5rem 1.5rem;
            width: 89%;
        }
        button{
            padding: 14px;
            width: 50%;
         }
    </style>
    <title>User Registration</title>
</head>
<body>
<div class="class">
<h2>User Registration Form</h2>
<form action="function_register.php" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <label for="dob">Date of Birth:</label><br>
    <input type="date" id="dob" name="dob" required><br><br>
    <button type="submit" >Register</button>
</form>
</div>
</body>
</html>
