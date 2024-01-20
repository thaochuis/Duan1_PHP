
    <div class="register-page-inner ptb-100 bg-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-12">
                        <div class="register-page-form">
                            <div class="account-title">
                                <h5>Login</h5>
                            </div>
                            <form action="index.php?act=dangnhap_ad" method="post">
                                <div class="username">
                                    <input type="text" placeholder="Username" name="taikhoan_nv" >
                                </div>
                                <div class="password">
                                    <input type="password" placeholder="Password" name="matkhau" required>
                                </div>

                                <div class="password">
                                    <input type="password" placeholder="quyen" name="phanquyen" required>
                                </div>
                                <div class="login">
                                    <input type="submit" value="Đăng nhập" name="dangnhap_ad">
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