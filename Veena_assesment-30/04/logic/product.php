<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    </style>
</head>
<body>
 <?php
    require "../view/index.php";
    require "../logic/Dbconnect.php";
     
     $sql = "SELECT `id`, `productName`, `price`, `productDescription.` FROM `product`";
    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
             $productname = $row["productName"];
             $price = $row["price"];
             $description = $row["productDescription."];    
                    
    ?>
    
         <div class="container flex pt-20 mx-auto mb-10 ">
                <div class="flex flex-wrap  justify-center mx-4">
                    <div class="w-[50%] px-5 ">
                        <div class="bg-white rounded-lg shadow-md p-5">
                            <div class="p-4">
                                <h1 class="text-xl font-semibold text-gray-800 mb-2"><?php echo $productname; ?></h1>
                                <p class="text-green-600 font-semibold "><?php echo "₹". " " . $price; ?></p>
                                 <p class="text-gray-600  text-justify mt-2"><?php echo $description; ?></p>  
                              
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