<?php
    include "connectDB.php";
    $sql='select * from hanghoa';
    $arr=array();
    $result=$con->query($sql);
    while($row=mysqli_fetch_assoc($result)){
        $temp=array("hinh"=>$row["hinh"],"ten"=>$row["tenhh"],"gia"=>$row["gia"],"nhom"=>$row["manhom"],"id"=>$row["mshh"]);
        array_push($arr,$temp);
    }
     $con->close();
     $rb2='rb2';
     $rb3='rb3';
     $rb4='rb4';
     $rb5='rb5';
?>