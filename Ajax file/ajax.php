<?php

if (isset($_GET['q'])) {
 
    $servername = "localhost";
    $username = "dckap"; // Replace with your MySQL username
    $password = "Dckap2023Ubuntu"; // Replace with your MySQL password
    $dbname = "ecommerce";

    // Create connection to MySQL database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the query parameter from the AJAX request
    $q = $_GET['q'];
    $query = "SELECT name FROM products WHERE name LIKE '$q%'";
    
    // Execute the query
    $result = $conn->query($query);
    if ($result === false) {
        die("Query failed: " . $conn->error);
    }
    
    // Fetch all results as an associative array
    $data = $result->fetch_all(MYSQLI_ASSOC);
    // print_r($data);
//    echo $data;

// header('Content-Type: application/json');
 $data= json_encode($data);
echo $data;
    // Print the results
  
   
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>


  <!-- ................Input box........... -->
<div>
  <input type="search" autocomplete="false" name="search" id="default-search" onkeyup="productShowFun(this.value)" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
  <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >Search</button>
</div>          

 <!-- Suggestion------------->

<div class="mr-10 hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none suggestion_box" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100", Not Active: "" -->
        <!-- <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0"><</a>
         <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a
       <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>  -->
          </div>

      
<script src="./ajax.js"></script>

</body>
</html>

