<?php
require "ConnectDb.php";

$db = new ConnectDb();
$db->username = 'root';
$db->password = 'welcome';
$posts = $db->query();
foreach ($posts as $post) {
    echo "<li>" . $post['name'] . "</li>";
}

