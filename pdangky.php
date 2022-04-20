<?php
    include "connectDB.php";
    if(isset($_POST["submit"]) && $_POST["username"] !='' && $_POST["password"] !='' && $_POST["repassword"]){
        $username =$_POST["username"];
        $password =$_POST["password"];
        $repassword =$_POST["repassword"];
        $sdt =$_POST["sdt"];
        if( $password != $repassword){
            header("location:dangky.php");
        }
        $sql = "SELECT * from dangnhap where tk='$username' ";
        $old =mysqli_query($con,$sql);
        if (mysqli_num_rows($old) > 0 ){
            header("location:dangky.php");
        }
        $sql="INSERT INTO dangnhap(tk,mk,chucvu,sdt) VALUES ('$username','$password','kh','$sdt') ";
        mysqli_query($con,$sql);
        echo("Đăng ký thành công");
    }
    else {
        header("location:dangky.php");
    }
?>