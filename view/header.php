<?php
$dmnew= loadall_dm();
?>
<!doctype html>
<html class="no-js" lang="en">
<!-- Mirrored from preview.hasthemes.com/haven-preview/haven/index-8.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2023 17:46:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Trang chủ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="view/img/apple-touch-icon.png" type="view/images/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/core.css">
    <link rel="stylesheet" href="view/css/shortcode/shortcodes.css">
    <link rel="stylesheet" href="view/style.css">
    <link rel="stylesheet" href="view/css/responsive.css">
    <!-- customizer style css -->
    <link rel="stylesheet" href="view/css/style-customizer.css">
    <link href="#" data-style="view/styles" rel="stylesheet">

    <!-- Modernizr JS -->
    <script src="view/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/whakblojpzki7rtp4fo9bebfzcomvzte1bzokapk7bg2m6cf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: '#noidung',
        plugins: 'preview',
        
      });
    </script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--Preloader start-->
    <div id="fakeLoader"></div>
    <!--Preloader end-->
    <div class="wrapper white_bg">
        <!--Header section start-->
        <header class="header header-2">
            <div class="header-top-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="haven-call">
                                <p>+84 898 676 218</p>
                            </div>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="header-1-top-inner">
                                <div class="header-topbar-menu">
                                <ul>
                                        <?php 
                                        if(isset($_SESSION['taikhoan_user'])){
                                            extract($_SESSION['taikhoan_user'])
                                            
                                            
                                            ?>
                                            <li><a >XIN CHÀO:| <?=$taikhoan_user?> |</a></li>
                                            <li><a href="index.php?act=edit_tk">Chỉnh sửa thông tin</a></li>

                                            <?php if (isset($quyen) && $quyen == 1) { ?>
                                                <li><a href="admin/index.php">đăng nhập admin</a></li>
                                            <?php } ?>

                                            <?php if (isset($quyen) && $quyen == 2) { ?>
                                                <li><a href="admin/index.php?act=listlh">Trả lời tin nhắn</a></li>
                                            <?php } ?>




                                            <li><a href="index.php?act=dangxuat">Đăng xuất</a></li>
                                        <?php 
                                        }else{

                                        
                                        ?>
                                        <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                                        <li><a href="index.php?act=dangky">Đăng kí</a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="header-search">
                                    <div class="search-icon">
                                        <a href="#"><img src="view/img/icon/search.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-top sticky-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="logo">
                                <a href="index-8.html"><img src="view/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-10 d-none d-lg-block">
                            <div class="mgea-full-width">
                                <div class="header-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="index.php">Trang chủ</a>
                                                
                                            </li>
                                            
                                            <li><a href="index.php?act=tintuc"> Tin tức</a>
                                                <ul class="dropdown_menu">
                                                    <?php 
                                                    // extract($dmnew);
                                                    // var_dump($dmnew);die();
                                                        foreach ($dmnewtt as $dm){
                                                            extract($dm);
                                                            $linkdm = "index.php?act=tt_dm&iddmtt=".$id;
                                                            echo'
                                                            <li><a href="'.$linkdm.'">'.$tendanhmuc_tt.'</a></li>
                                                            ';
                                                        }
                                                    ?>                                                    
                                                        
                                                </ul>
                                            </li>
                                            <li><a href="index.php?act=sanpham"> BÀI ĐĂNG </a>
                                                <ul class="dropdown_menu">                                                    
                                                    <ul class="dropdown_menu">
                                                        <?php 
                                                        // extract($dmnew);
                                                        // var_dump($dmnew);die();
                                                            foreach ($dmnew as $dm){
                                                                extract($dm);
                                                                $linkdm = "index.php?act=sp_dm&iddm=".$id;
                                                                echo'
                                                                <li><a href="'.$linkdm.'">'.$tendanhmuc_sp.'</a></li>
                                                                ';
                                                            }
                                                        

                                                        ?>
                                                    
                                                </ul>
                                                
                                                
                                                
                                                </li>
                                                    
                                                </ul>
                                            </li>
                                            <li><a href="index.php?act=lienhe"> Liên hệ chúng tôi</a></li>
                                                    <?php 
                                                if(isset($_SESSION['taikhoan_user'])){
                                                    extract($_SESSION['taikhoan_user'])                                       
                                                    ?>
                                                    <li><a href="index.php?act=lichsu"> Lịch sử đăng bài</a></li>
                                                <?php 
                                                }else{                                       
                                                ?>                                        
                                                <?php } ?>


                                                <?php 
                                        if(isset($_SESSION['taikhoan_user'])){
                                            extract($_SESSION['taikhoan_user'])                                       
                                            ?>
                                             <li><a href="index.php?act=addsp">Đăng Bài</a></li>

                                        <?php 
                                        }else{                                       
                                        ?>                                        
                                        <?php } ?>

                                                
                            
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Search box inner start-->
            <div class="search-box-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="search-form">
                                <div class="search-form-inner">
                                    <form action="#">
                                        <input type="text" placeholder="Search..">
                                        <button type="submit"><i class="icofont icofont-search-alt-1"></i></button>
                                    </form>
                                </div>
                                <div class="search-close-btn">
                                    <a href="#"><i class="zmdi zmdi-close"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Search box inner end-->
        </header>
        <!--Header section end-->

        <!--Welcome fixed text-->
        <div class="welcome-fixed-area parallax overlay">
            <div class="display-table">
                <div class="display-tablecell">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slide1-text">
                                    <div class="middle-text">
                                        <div class="title-1">
                                            <h3>BẠN ĐANG QUAN TÂM ĐẾN BẤT ĐỘNG SẢN?</h3>
                                        </div>
                                        <div class="title-2">
                                            <h1> KHÁM PHÁ <span>Bất động sản</span> GẦN BẠN</h1>
                                        </div>
                                        <div class="desc">
                                            <p> “Nguồn đầu tư tốt nhất trên Trái Đất chính là đầu tư Bất động sản”<br> - Louis Glickman – </p>
                                        </div>
                                        <div class="contact-us">
                                            <a href="index.php?act=lienhe">LIÊN HỆ VỚI CHÚNG TÔI</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Welcome fixed text end-->