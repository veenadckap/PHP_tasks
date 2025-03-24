<?php
require "../new/connect.php";

$sql = "SELECT `id`, `productName`, `price`, `productDescription`, `productImage` FROM `product`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $productName = $row["productName"];
        $price = $row["price"];
        $description = $row["productDescription"];
        $image = $row["productImage"];

        echo "<div>";
        echo "<img src='$image' alt='$productName'>";
        echo "<h2>$productName</h2>";
        echo "<p>$description</p>";
        echo "<p>Price: $price</p>";
        echo "</div>";
    }
}