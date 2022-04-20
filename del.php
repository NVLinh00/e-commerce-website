<?php 
    include "connectDB.php";
    $id=$_GET["id"];
    $sql="delete from hanghoa where mshh='$id'";
    $result=$con->query($sql);
    $con->close();
    include_once "themsp.php";
?>