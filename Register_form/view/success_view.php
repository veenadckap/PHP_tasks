<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script src="https://cdn.tailwindcss.com"></script>
    <title>success Login</title>
    <style>
    body{
      background: #C9D6FF; 
      background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);  
      background: linear-gradient(to right, #E2E2E2, #C9D6FF); 

    }
            .head {
            background-color: #B8AAAA;
            border: 5px solid #B8AAAA;
        }

        .login-btn{
            position: relative;
            bottom: 22px;
            right:20px;
        }
    
        .btn{
            background-color: #F2A54A;
           width: 15%;
           height: 60px;
          
        }
    </style>
</head>      
<body>

    <?php require "./view/partial/nav.php";?>
  <div class="flex justify-center pt-28">
      <div id="welcome-message" class=" bg-white p-8 rounded-lg shadow-lg w-full max-w-md text-center">
        <h2 class="text-2xl font-bold mb-6">Welcome, <span id="user-name" class="text-blue-500"></span>!</h2>
        <p>We're glad to see you.</p>
    </div>
    </div>

</body>
</html>