<?php
session_start(); 

$username = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    if (empty($username)) {
        $nameError = "Name is required";
    } elseif (empty($email)) {
        $emailError = "Email is required";
    } elseif (empty($password)) {
        $passwordError = "Password is required";
    } else {
        $servername = "localhost";
        $dbusername = "dckap";
        $dbpassword = "Dckap2023Ecommerce";
        $dbname = "post";

        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO User_data (Name, Email, Password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
           
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $email;

        
            $stmt->close();
            $conn->close();

        
            header("Location: ../view/navBar.view.php");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .error {
            border-color: red !important;
        }
        .error-message {
            text-align: right;
            display: block;
             font-size: 12px;
            color: red;
        }
        body{
            overflow: hidden;
        }

    </style>
</head>
<body>
<div class="min-h-screen flex item-center justify-center bg-slate-200 pt-5">
    <div style="height: 500px;" class="bg-white p-6 rounded shadow-2xl w-[40%]">
        <h2 class="text-center text-3xl font-bold mb-2">Create Your Account</h2>
         <form class="space-y-5" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div>
                <label for="name" class="block mb-1 font-bold ">Name</label>
                <input type="text" id="name" name="name" value="<?php echo $username ?>"
                       class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-sky-100 <?php if (!empty($nameError)) echo 'error'; ?>">
                <span class="error-message"><?php echo $nameError ?></span>
            </div>
            <div>
                <label for="email" class="block font-bold ">Email</label>
                <input type="email" id="email" name="email"  value="<?php echo $email ?>"
                       class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-sky-100 <?php if (!empty($emailError)) echo 'error'; ?>">
                <span class="error-message"><?php echo $emailError ?></span>
            </div>
            <div>
                <label for="Password" class="block mb-1 font-bold ">Password</label>
                <input type="password" id="Password" name="password"  value="<?php echo $password ?>"
                       class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-sky-100 <?php if (!empty($passwordError)) echo 'error'; ?>">
                <span class="error-message"><?php echo $passwordError ?></span>
            </div>
            <button name="submit" class="block w-full bg-purple-400 hover:bg-purple-300 p-4 rounded text-purple-900">Sign Up</button>
                        <h6 class="text-center tracking-wide">you  have an account ? <a class="text-cyan-500 underline "  href="/kalashree-url task/login.php">Login</a></h6>

        </form>
    </div>
</div>
</body>
</html>
