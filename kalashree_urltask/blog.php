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
    require "./view/index.html";
    $mysqli = new mysqli("localhost", "dckap", "Dckap2023Ecommerce", "post");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $sql = "SELECT id, title, content FROM post";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $title = $row["title"];
            $content = $row["content"];
    ?>
            <div class="container flex pt-20 mx-auto ">
                <div class="flex flex-wrap   justify-center mx-4">
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
    $mysqli->close();
    ?>
    <!-- <div class="flex justify-center	p-20">
    <a href="../kalashree-url task/view/createPostView.php">
        <button class="bg-[#87acec] text-white font-medium	tracking-normal px-5 py-2 rounded hover:bg-[#a6c1ee] font-light	">Create new post..</button>
    </a>
    </div> -->
</body>

</html>