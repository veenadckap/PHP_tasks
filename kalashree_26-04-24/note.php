<?php

$config = require('config.php');
require 'Database.php';
$db = new Database($config);


$post = $db->query('select * from posts where id = :id', ['id' => $_GET['id']])->fetch();

?>
<div>
    <p>
        <a href="/demo/tryme.php" class="text-blue-500 underline">go back...</a>
    </p>
    <p><?= $post['name'] ?></p>
    <p><?= $post['content'] ?></p>
</div>
