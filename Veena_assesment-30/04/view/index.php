<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>E-commerce</title>
    <style>
        header{
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        }  
        ::placeholder{
            padding-left: 9px;
        }  
        body{
            background: #C9D6FF; 
            background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);  
            background: linear-gradient(to right, #E2E2E2, #C9D6FF); 
        }
    </style>
</head>
<body>
    <header class="bg-white  fixed h-[12%] w-full">
        <nav class=" flex justify-between items-center w-[92%] mx-auto pt-[11px]">
            <div id="web">
                <h1 class="font-bold " ><span class="text-3xl">P</span><span class="text-xl">roduct</span><span class="text-2xl">V</span><span class="text-xl">erse</span></h1>
            </div>
            <div class="">
                <ul class="flex  gap-[4vw]">
                    <li class="pt-1" >
                        <a class="hover:text-gray-500" href="../view/body.php">Home</a>
                    </li>
                     <li class="pt-1" >
                        <a class="hover:text-gray-500" href="../logic/product.php">Show Product</a>
                    </li>
                    <li class="pt-1">
                        <a  class="hover:text-gray-500" href="../logic/blog.php">Blog</a>
                    </li>
                    <li>
                        <form action="../logic/search.php" method="GET">
                            <input type="text" name="search" class="w-80 h-9 border border-slate-400 outline-none rounded" placeholder="Search">
                            
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>

</html>
