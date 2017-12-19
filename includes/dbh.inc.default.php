<?php

    $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbName="";

    $conn = new PDO('mysql:host=' . $dbServername . ';dbname=' . $dbName . ';charset=utf8mb4', $dbUsername, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 ?>
