<!doctype html>
<html class="no-js" lang="en">
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  
    <!--Preloader start-->
    <div id="fakeLoader"></div>
    <!--Preloader end-->
    <div class="wrapper white_bg">
        <!--Header section start-->
       

        <!--My account start-->
        <div class="agent-details-page pt-130">
            <div class="agent-details">
                <div class="container">
                        <div class="row">
                            <div class="">
                                
                            </div>
                            <div class="col-lg-8 col-12">
                                <div class="profile-update">
                                    <div class="profile-title">
                                        <h5>THÔNG TIN TÀI KHOẢN</h5>
                                    </div>
                                    <div class="profile-desc">
                                        <?php
                                           if(isset($_SESSION['taikhoan_user'])&& (is_array($_SESSION['taikhoan_user']))){
                                            extract($_SESSION['taikhoan_user']);

                                           }

                                           
                                        ?>
                                        <form action="index.php?act=edit_tk" method="post">

                                            <div class="row profile-top-form">
                                                <div class="col-md-6 col-12">
                                                    <div class="input-type">
                                                        <label>Tên tài khoản</label>
                                                        <input type="text" name="taikhoan_user" value="<?=$taikhoan_user?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="input-type">
                                                        <label>Email</label>
                                                        <input type="text" name="email" value="<?=$email?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="input-type">
                                                        <label>Số điện thoại</label>
                                                        <input type="text" name="std" value="<?=$std?>">
</div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="input-type">
                                                        <label>Địa chỉ</label>
                                                        <input type="text" name="diachi" value="<?=$diachi?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="input-type">
                                                        <label>Mật khẩu</label>
                                                        <input type="text" name="matkhau" value="<?=$matkhau?>">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            
                        <div class="row">
                            <div class="col-12">
                                <div class="update-profile-submit">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <!-- <button type="submit" name="capnhat">CẬP NHẬT MỚI</button> -->
                                    <input type="submit" name="capnhat" value="CẬP NHẬT" style="width: 200px; background-color: #ccac00; color: white;">
                                           
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>

        </div>
        
    </div>