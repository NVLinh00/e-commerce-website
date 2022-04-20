<!DOCTYPE html>
<html>
    <head>
        <title>Web bán hàng: Sản phẩm</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/sp.css">
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
                <li><a href="themsp.php">Admin</a></li>
            </ul>
        </div>
        <div class="center">
            <table>
                <tr>
                    <td class="tsp"><img src="./anh/icon3.gif" alt=""> RUBIK 2x2x2</td>
                </tr>
            </table>
            <div class="right">
                <table id="table">
                    <tr class='tr'>
                    <?php
                        include "sanpham1.php";
                        for($i=0;$i<count($arr);$i++){
                            if($arr[$i]["nhom"]==$rb2){
                                $line="
                                            <td>
                                                <table class='td'>
                                                    <tr>
                                                        <td><img src='./anh/".$arr[$i]["hinh"]."' width='200px' height='200px'></td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["ten"]."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["gia"].".000 VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <td><button type='submit' name='sub' ><a href='chitietsp.php?id=".$arr[$i]["id"]."'>Mua hàng ngay</a></button></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        ";
                                echo($line);
                            }
                        } 
                    ?>
                    </tr>
                </table>
                <table>
                <tr>
                    <td class="tsp"><img src="./anh/icon3.gif" alt=""> RUBIK 3x3x3</td>
                </tr>
            </table>
            <div class="right">
                <table id="table">
                    <tr class='tr'>
                    <?php
                        include "sanpham1.php";
                        for($i=0;$i<count($arr);$i++){
                            if($arr[$i]["nhom"]==$rb3){
                                $line="
                                            <td>
                                                <table class='td'>
                                                    <tr>
                                                        <td><img src='./anh/".$arr[$i]["hinh"]."' width='200px' height='200px'></td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["ten"]."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["gia"].".000 VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <td><button type='submit' name='sub' ><a href='chitietsp.php?id=".$arr[$i]["id"]."'>Mua hàng ngay</a></button></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        ";
                                echo($line);
                            }
                        } 
                    ?>
                    </tr>
                </table>
                <table>
                <tr>
                    <td class="tsp"><img src="./anh/icon3.gif" alt=""> RUBIK 4x4x4</td>
                </tr>
            </table>
            <div class="right">
                <table id="table">
                    <tr class='tr'>
                    <?php
                        include "sanpham1.php";
                        for($i=0;$i<count($arr);$i++){
                            if($arr[$i]["nhom"]==$rb4){
                                $line="
                                            <td>
                                                <table class='td'>
                                                    <tr>
                                                        <td><img src='./anh/".$arr[$i]["hinh"]."' width='200px' height='200px'></td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["ten"]."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["gia"].".000 VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <td><button type='submit' name='sub' ><a href='chitietsp.php?id=".$arr[$i]["id"]."'>Mua hàng ngay</a></button></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        ";
                                echo($line);
                            }
                        } 
                    ?>
                    </tr>
                </table>
                <table>
                <tr>
                    <td class="tsp"><img src="./anh/icon3.gif" alt=""> RUBIK 5x5x5</td>
                </tr>
            </table>
            <div class="right">
                <table id="table">
                    <tr class='tr'>
                    <?php
                        include "sanpham1.php";
                        for($i=0;$i<count($arr);$i++){
                            if($arr[$i]["nhom"]==$rb5){
                                $line="
                                            <td>
                                                <table class='td'>
                                                    <tr>
                                                        <td><img src='./anh/".$arr[$i]["hinh"]."' width='200px' height='200px'></td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["ten"]."</td>
                                                    </tr>
                                                    <tr>
                                                        <td>".$arr[$i]["gia"].".000 VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <td><button type='submit' name='sub' ><a href='chitietsp.php?id=".$arr[$i]["id"]."'>Mua hàng ngay</a></button></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        ";
                                echo($line);
                            }
                        } 
                    ?>
                    </tr>
                </table>
            </div>
        </div>
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