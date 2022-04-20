<?php
    $hostname = 'localhost:3306';
    $username = 'root';
    $password = '';
    $dbname = "web";
    $con = new mysqli($hostname, $username, $password,$dbname);
    mysqli_set_charset($con,"utf8");
    if ($con->connect_error) {
        die("Không thể kết nối: " . mysqli_error($con));
        exit();
    }
   // else echo "Kết nối thành công"."<br>";
