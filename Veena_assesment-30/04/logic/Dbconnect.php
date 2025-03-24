<?php
        $servername = "localhost";
        $dbusername = "dckap";
        $dbpassword = "Dckap2023Ecommerce";
        $dbname = "veena_assessment";

        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else {
            echo "successfully";
        }




