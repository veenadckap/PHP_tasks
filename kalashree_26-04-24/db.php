<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

$config = require('config.php');
$db = new Database($config);

$id = $_GET['id'];
//echo $id;
$query = "SELECT * FROM posts WHERE id={$id}";
//echo $query;
$posts = $db->query($query)->fetchAll();

foreach ($posts as $post) {
    echo "<li>" . $post['name'] . "</li>";
}
