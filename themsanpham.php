<?php      
    include "connectDB.php";
    $mhh=$_POST["mhh"];
    $ten=$_POST["ten"];
    $gia=$_POST["gia"];
    $sl=$_POST["sl"];
    $mahang=$_POST["mahang"];
    $tmp_file=$_FILES['myfile']['tmp_name'];
    $name_file=$_FILES['myfile']['name'];
    $dir_file="./".$name_file; 
    move_uploaded_file($tmp_file,"./".$name_file);
    $sql="insert into hanghoa values ('$mhh','$ten',$gia,$sl,'$mahang','$dir_file')"; 
    $result=$con->query($sql);
    $con->close();
    header("location:themsp.php");
?>