<!DOCTYPE html>
<html>
    <head>
        <title>Web bán hàng:Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/admin.css">
        <script src='slide.js'></script>
    </head>
    <body>
        <div class=top>
            <a>Xin chào ADMIN!!!!</a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="themsp.php">Sản phẩm Rubik</a></li>
                <li><a href="index.html">Trang chủ</a></li>
                <li><a href="sp.php">Trang Sản Phẩm</a></li>
                <li><a href="#">Khách hàng</a></li>
            </ul>
        </div>
        <div class="nl">
            <form action="themsanpham.php" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td colspan="3"><h1 style="color:red; text-align:center">Thêm sản phẩm mới</h1>
                            <p>Vui lòng điền đầy đủ thông tin bên dưới để thêm sản phẩm</p>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="mhh">Mã sản phẩm</label></td>
                        <td><input type="text" name="mhh" id="mhh" placeholder="001"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="ten">Tên sản phẩm</label></td>
                        <td><input type="text" name="ten" id="ten" placeholder="Rubik Gan"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="gia">Giá sản phẩm (VND)</label></td>
                        <td><input type="text" name="gia" id="gia"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="sl">Số lượng</label></td>
                        <td><input type="text" name="sl" id="sl" placeholder="30"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="mahang">Mã hàng hóa</label></td>
                        <td><input type="text" name="mahang" id="mahang" placeholder="rb2"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="myfile">Hình mô tả</label></td>
                        <td><input type="file" id="myfile" name="myfile"></td>
                        <td></td>
                    </tr>
                        <td><input type="submit" name="sign_up" value="Lưu sản phẩm">
                        <td></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="hsp">
            <table id="table">
                <tr>
                    <th>MSSP</th>
                    <th>Tên SP</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Ảnh minh họa</th>
                    <th>Ghi chú</th>
                </tr>
                <?php
                    include "laysanpham.php";
                    for($i=0;$i<count($arr);$i++){
                        $line="<tr>
                                <td>".$arr[$i]["mssp"]."</td>
                                <td>".$arr[$i]["tensp"]."</td>
                                <td>".$arr[$i]["gia"]."</td>
                                <td>".$arr[$i]["soluong"]."</td>
                                <th><img src='./anh/".$arr[$i]["hinh"]."' width='100px' height='100px'></th>
                                <td>
                                <button type='submit' name='s_submit'><a href='del.php?id=".$arr[$i]["mssp"]."'>Xóa</a></button></td>
                                    </tr>";
                        echo($line);
                        } 
                ?>
            </table>
        </div>
    </body>
</html></div>