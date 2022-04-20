<!DOCTYPE html>
<html>
    <head>
        <title>Web bán hàng</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/cssindex.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='slide.js'></script>
    </head>
    <body>
        <div class=top>
            <div class=top-1>
                <img src="./anh/logotop.png" width="400px" height="100px">
            </div>
            <div class=top-1>
                <a href="#"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
            </div>
            <div class=top-1>
                <a href="dangnhap.php"><i class="fa fa-user"></i> Xin chào</a>
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
            <div class="anh1">
                <img id="anh1" src="./anh/giamgia3.jpg">
            </div>
            <div class="anhchay">
                <img id="slide" onclick="changeImage()" src="./anh/rubik1.jpg" width="30%" height=100%/> 
            </div>
            <script>
                var index=0;
                changeImage=function (){
                    var imgs =["./anh/rubik1.jpg","./anh/rubik2.jpg","./anh/rubik3.jpg","./anh/rubik4.jpg","./anh/rubik5.jpg"];
                    document.getElementById('slide').src=imgs[index];
                    index++;
                    if(index==5){
                        index=0;
                    }
                }
                setInterval(changeImage,2000);
            </script>
            <div class="anh2">
                <img id="anh2" src="./anh/giamgia2.jpg">
            </div>
        </div>
        <div id="gg">
            <img class="gg" src="./anh/giamgia5.png">
        </div>
        <table>
            <tr>
                <td class="tsp"><img src="./anh/icon3.gif" alt=""> SẢN PHẨM MỚI NHẤT</td>
            </tr>
        </table>
        <table>
            <tr class="tr">
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/1.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>Rubik Gan MX</td>
                        </tr>
                        <tr>
                            <td>299.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type='submit' name='sub' ><a href='chitietsp.php?id=001'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/2.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>Rubik Gan</td>
                        </tr>
                        <tr>
                            <td>300.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=002'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/4.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>Rubik Gan X</td>
                        </tr>
                        <tr>
                            <td>450.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=003'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="tr">
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/6.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>Rubik Gan XG</td>
                        </tr>
                        <tr>
                            <td>550.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=004'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/21.png" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>MoYu Weipo WR M</td>
                        </tr>
                        <tr>
                            <td>360.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=005'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/22.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>QiYi Valk 2 LM</td>
                        </tr>
                        <tr>
                            <td>380.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=006'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="tr">
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/23.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>GAN 251 M</td>
                        </tr>
                        <tr>
                            <td>520.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=007'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/41.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>YJ MGC Magnetic Black</td>
                        </tr>
                        <tr>
                            <td>380.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=008'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/42.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>YJ MGC 4x4 Stickerless</td>
                        </tr>
                        <tr>
                            <td>400.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=009'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="tr">
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/51.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>QiYi MS Magnetic</td>
                        </tr>
                        <tr>
                            <td>120.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=010'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/52.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>QiYi MS Magnetic XG</td>
                        </tr>
                        <tr>
                            <td>999.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=011'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/53.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>QiYi MS Magnetic LMX</td>
                        </tr>
                        <tr>
                            <td>320.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=012'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td class="tsp"><img src="./anh/icon3.gif" alt=""> SẢN PHẨM BÁN CHẠY</td>
            </tr>
        </table>
        <table>
            <tr class="tr">
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/53.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>QiYi MS Magnetic LMX</td>
                        </tr>
                        <tr>
                            <td>320.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=012'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/42.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>YJ MGC 4x4 Stickerless</td>
                        </tr>
                        <tr>
                            <td>400.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=009'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/23.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>GAN 251 M</td>
                        </tr>
                        <tr>
                            <td>520.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=007'>Mua hàng ngay</a></button></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <table>
            <tr>
                <td class="tsp"><img src="./anh/icon3.gif" alt=""> SẢN PHẨM GIẢM GIÁ</td>
            </tr>
        </table>
        <table>
            <tr class="tr">
                <td>
                    <table class="td">
                        <tr>
                            <td><img src="./anh/6.jpg" alt="" width="200px" height="200px"></td>
                        </tr>
                        <tr>
                            <td>Rubik Gan XG</td>
                        </tr>
                        <tr>
                            <td><strike>550.000 VNĐ</strike></td>
                        </tr>
                        <tr>
                            <td>500.000 VNĐ</td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="sub" ><a href='chitietsp.php?id=004'>Mua hàng ngay</a></button></td>
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