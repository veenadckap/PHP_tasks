<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
   

    <?php
      require "../view/index.php";
    
      require "../logic/Dbconnect.php";
    
    $sql = "SELECT id, title, content FROM Blog";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $title = $row["title"];
            $content = $row["content"];
    ?>
            <div class="container flex pt-20 mx-auto mb-10 ">
                <div class="flex flex-wrap  justify-center mx-4">
                    <div class="w-[50%] px-5 mb">
                        <div class="bg-white rounded-lg shadow-md p-5">
                            <div class="p-4">
                                <h1 class="text-xl font-semibold text-gray-800 mb-2"><?php echo $title; ?></h1>
                                <p class="text-gray-600 text-justify mt-5"><?php echo $content; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    } else {
        echo "0 results";
    }
     require "../view/footer.php";
    $mysqli->close();
      
    ?>
 
</body>
</html>