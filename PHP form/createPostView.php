<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<div class="min-h-screen flex item-center justify-center bg-slate-200 pt-5">
    <div style="height: 500px;" class="bg-white p-8 rounded shadow-2xl w-[40%]">
        <h2 class="text-center text-3xl font-bold mb-6">Create A New inspiring Post</h2>
         <form class="space-y-10 pt-6" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
           <div>
                <label for="title" class="block font-bold ">Title</label>
                <input type="text" id="title" name="title"  value="<?php echo $title ?>"
                       class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-sky-100 <?php if (!empty($titleError)) echo 'error'; ?>">
                <span class="error-message"><?php echo $emailError ?></span>
            </div>
            <div>
                <label for="content" class="block mb-1 font-bold ">Content</label>
                           <textarea name="content" id="content" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-sky-100 <?php if (!empty($content)) echo 'error'; ?>" ></textarea>

                <span class="error-message"><?php echo $contentError ?></span>
            </div>
            <button name="submit" class="block w-full bg-purple-400 hover:bg-purple-300 p-4 rounded text-purple-900">Create</button>
        </form>
    </div>
</div>
    
</body>
</html> -->