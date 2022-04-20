<!DOCTYPE html>
<html>
    <head>
        <title>Trang chủ</title>
        <link rel="stylesheet" href="./css/dangnhap.css">
    </head>
    <body>
        <div class="A">
        <div class="B">
                <!-- <div class="C">THẾ GIỚI RUBIK</div> -->
            </div>
            <div class="B">
                <div class="fom">
                    <h1>ĐĂNG NHẬP</h1>
                        <form action="pdangnhap.php" method="POST">
                                <table>
                                    <tr>
                                        <td><h4>Tài khoản:</h4></td>
                                        <td><input type="text" name="username" style='height:30px'></td>
                                    </tr>
                                    <tr>
                                        <td><h4>Mật khẩu:<h4></td>
                                        <td><input type="password" name="password" style='height:30px'></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" name="submit">Đăng nhập</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan=2>
                                            <a href="./dangky.php">Đăng ký</a>
                                        </td>
                                    </tr>
                                </table>
                        </form>
                        <a>(*)Dùng tài khoản:nvlinh mk:123456 để vào trang chủ</a>
                        <a>(*)Dùng tài khoản:admin mk:123456 để vào trang quản lý sản phẩm</a>
                </div>
            </div>
        </div>
    </body>
</html>