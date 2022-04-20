<?php 
    include "connectDB.php";
    $id=$_GET["id"];
    $sql="select * from hanghoa where mshh='$id'";
    $result=$con->query($sql);
    $con->close();
    $arr=array();
    while($row=mysqli_fetch_assoc($result)){
        $temp=array("hinh"=>$row["hinh"],"ten"=>$row["tenhh"],"gia"=>$row["gia"],"nhom"=>$row["manhom"],"id"=>$row["mshh"]);
        array_push($arr,$temp);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Web bán hàng</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/chitietsp.css">
        <script src='slide.js'></script>
    </head>
    <body>
        <div class=top>
            <div class=top-1>
                <img src="./anh/logotop.png" width="400px" height="100px">
            </div>
            <div class=top-1>
                <a href="#">Giỏ hàng</a>
            </div>
            <div class=top-1>
                <a href="dangnhap.php">Đăng nhập</a>
            </div>
        </div>
        <div class="menu">
            <ul>
            <li><a href="index.html">Trang chủ</a></li>
                <li><a href="sp.php">Sản Phẩm</a></li>
                <li><a href="https://vi.wikipedia.org/wiki/L%E1%BA%ADp_ph%C6%B0%C6%A1ng_Rubik">Giới thiệu</a></li>
                <li><a href="https://genk.vn/rubik.htm">Tin tức</a></li>
                <li><a href="https://rubikonline.vn/cach-choi-rubik-3x3-de-hieu-nhat">Hướng dẫn chơi</a></li>
                <li><a href="#">Mua Hàng</a></li>
                <li><a href="lienhe.html">Liên Hệ</a></li>
                <li><a href="themsp.php">Admin</a></li>>
            </ul>
        </div>
        <table>
            <tr>
                <td class="tsp"><img src="./anh/icon3.gif" alt=""><?php echo($arr[0]["ten"]);?></td>
            </tr>
        </table>
        <table>
            <tr class="tr">
                <td class="td">
                    <img src="./anh/<?php echo($arr[0]["hinh"]);?>" alt="" width="300px" height="300px">
                </td>
                <td class="td">
                    <table>
                        <tr>
                            <td><a><?php echo($arr[0]["ten"]);?></a></td>
                        </tr>
                        <tr>
                            <td>Khuyến mãi:	Miễn phí vận chuyển thường với đơn hàng từ 200k.</td>
                        </tr>
                        <tr>
                            <td>Bảo hành: </td>
                        </tr>
                        <tr>
                            <td>Kho: Còn hàng</td>
                        </tr>
                        <tr>
                            <td>Giá: <?php echo($arr[0]["gia"]);?>.000 VNĐ</td>
                        </tr>
                        <tr>
                        <td><button type="submit" name="sub" id="sub" >Mua hàng ngay</button></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div class="bot">
            <p>Copyright © 2020 Thế giới Rubik</p>
            <p>Công ty Cổ phần Công nghệ Rubik</p>
            <p>Số ĐKKD: 11111111 - Ngày cấp: 31/12/2020, được sửa đổi lần thứ 3, ngày 01/01/2021.</p>
            <p>Cơ quan cấp: Sở Kế hoạch và Đầu tư TPHCM.</p>
            <p>Địa chỉ: KTX B, ĐHCT, Đường 3/2, Phương Xuân Khánh, quận Ninh Kiều, TP.Cần Thơ</p>
            <p>Email: linhb1812280@student.ctu.edu.vn</p>
        </div>    
    </body>
</html></div>