<?php
require "ConnectDb.php";
$config = require('config.php');
$db = new ConnectDb($config);
$query = "select * from posts";
$posts = $db->query($query);
foreach ($posts as $post): ?>
    <li>
        <a href="/demo/note.php?id=<?= $post['id'] ?>">
            <?= $post['name'] ?>
        </a>
    </li>
 <?php endforeach; ?>

