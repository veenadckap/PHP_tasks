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
    <div style="height: 500px;" class="bg-white p-10 rounded shadow-2xl w-[40%]">
        <h2 class="text-center text-3xl font-bold ">Login</h2>
         <form class="space-y-10" method="post" >
            
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
            <h6 class="text-center tracking-wide">Don't have an account ? <a class="text-cyan-500 underline "  href="/kalashree-url task/signup.php">Signup</a></h6>
        </form>
    </div>
</div>
</body>
</html>
