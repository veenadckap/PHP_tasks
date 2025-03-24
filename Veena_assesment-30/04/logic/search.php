 <?php
require "../logic/Dbconnect.php";
require "../view/index.php";


$search = isset($_GET["search"]) ? $_GET["search"] : "";
$search = $conn->real_escape_string($search);


$sql = "SELECT title FROM Blog WHERE title LIKE '%$search%'";
$result = $conn->query($sql);


$sql1 = "SELECT productName FROM product WHERE productName LIKE '%$search%'";
$result1 = $conn->query($sql1);

if ($result->num_rows > 0) {
    header("Location:../logic/blog.php");
    exit;
} elseif ($result1->num_rows > 0) {
    header("Location:../logic/product.php");
    exit;
} else {
    echo "Not found";
}
?>
 
