<?php
    include "connectDB.php";
    if (isset($_POST["submit"]) && $_POST["username"] !='' && $_POST["password"] !=''){
        $user=$_POST["username"];
        $pass=$_POST["password"];
        $username;
        $sql = "select chucvu from dangnhap where tk='$user' and mk='$pass'";
        $result=$con->query($sql);
        $row = $result -> fetch_row();
        $username=$row[0];
        $use = mysqli_query($con,$sql);
        $text1='kh';
        $text2='admin';
        if(mysqli_num_rows($use) >0 && $username==$text1){
            header("location:index.php");
        }
        if(mysqli_num_rows($use) >0 && $username==$text2){
            header("location:themsp.php");
        }
        else {
            echo("Đăng nhập thất bại");
        }
    }
    else {
        echo("Đăng nhập thất bại!");
    }
?>