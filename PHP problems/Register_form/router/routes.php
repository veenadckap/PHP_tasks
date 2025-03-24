<?php 

return [

    '/' => function () {
        require './home.php';
    },
    '/home' => function () {
        require './home.php';
    },
    '/register' => function () {
        require './register.php';
    },
    '/login' => function () {
        require './login.php';
    },
    '/success' =>function () {
        require './success.php';
    }

];



