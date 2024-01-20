
<!-- <form  action="index.php?act=dangnhap" method="post" >
        <h2>Đăng nhập</h2>
        <label for="taikhoan_user">Tài khoản:</label>
        <input type="text"  name="taikhoan_user" required>

        <label for="matkhau">Mật khẩu</label>
        <input type="password"  name="matkhau" required>
        
        



        <input type="submit" value="Đăng nhập" name="dangnhap">

        <div class="register-link">
            Chưa có tài khoản <a href="index.php?act=dangky">Đăng kí tại đây</a>.
        </div>
    </form> -->
    <div class="register-page-inner ptb-100 bg-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-12">
                        <div class="register-page-form">
                            <div class="account-title">
                                <h5>Login</h5>
                            </div>
                            <form action="index.php?act=dangnhap" method="post">
                                <div class="username">
                                    <input type="text" placeholder="Username" name="taikhoan_user" >
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Password" name="matkhau" required>
                                </div>
                                <div class="login">
                                    <input type="submit" value="Đăng nhập" name="dangnhap">
                                </div>
                                <div class="register-link">
                                    Chưa có tài khoản <a href="index.php?act=dangky">Đăng kí tại đây</a>.
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php   
            if(isset($thongbao)&& ($thongbao!= "")){
                echo $thongbao;
            }
        
        ?>