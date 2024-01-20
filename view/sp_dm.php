<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.hasthemes.com/haven-preview/haven/article.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2023 17:46:19 GMT -->


<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--Preloader start-->
    <div id="fakeLoader"></div>
    <!--Preloader end-->
    <div class="wrapper white_bg">
        <!--Header section start-->
       
        <!--Header section end-->

        <!--Breadcrumbs start-->
       
        <!--Breadcrumbs end-->

        <!--Latest blog start-->
        <div class="blog-pages pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <article class="blog-details">
                        <div class="row">
                <?php   
                        foreach ($dssp as $sp) {
                            extract($sp);
                            $linksp="index.php?act=ct_sp&id=".$id;
                            $hinh = $anhurl . $img;
                            echo '
                            <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-property wow fadeInUp mb-40" data-wow-delay="0s" data-wow-duration="0s">
                                <div class="property-img">
                                    <a href="'.$linksp.'"  style="width:100%;height:270px;">
                                        <img src="'.$hinh.'" alt="" style="width:100%;height:270px;">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <div class="property-desc-top">
                                        <h6><a href="'.$linksp.'" pa>'.$tensp.'</a></h6>
                                        <h4 class="price">'.$gia.' VNĐ</h4>
                                        <div class="property-location">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                            
                            
                            
                            ';
                        }
                 ?>
                    
            </div>
                            
                        </article>

                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-sidbar right-side">
                            <aside class="single-side-box search">
                                <div class="blog-search-inner">
                                    <form action="#">
                                        <input type="text" placeholder="Search..">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </aside>
                            <aside class="single-side-box categories">
                                <div class="aside_title">
                                    <h5>DANH MỤC</h5>
                                </div>
                                <div class="categories-list">
                                    <ul>
                                    <?php 
                                            // extract($dmnew);
                                            // var_dump($dmnew);die();
                                                foreach ($dmnew as $dm){
                                                    extract($dm);
                                                    $linkdm = "index.php?act=sp_dm&iddm=".$id;
                                                    echo'
                                                    <li><a href="'.$linkdm.'">'.$tendanhmuc_sp.'<span>1420</span></a></li>
                                    
                                                        ';
                                                }
                                                   

                                            ?>
                                    </ul>
                                </div>
                                <aside class="single-side-box recent-post">
                                <div class="aside_title">
                                    <h5>Bất động sản mới</h5>
                                </div>
                                <div class="recent-post-inner">
                                <?php  
                                    foreach ($spnew as $sp) {
                                        extract($sp);
                                        $hinh = $anhurl . $img;
                                    echo'
                                        <div class="single-recent-post fix">
                                            <div class="recent-post-thumbnail">
                                                <a href="article.html"><img src="'.$hinh.'" width:100%;height:100px;></a>
                                            </div>
                                            <div class="recent-post-desc">
                                                <div class="post-title">
                                                    <h4><a href="article.html">'.$tensp.'</a></h4>
                                                </div>
                                                <div class="post-publish">
                                                    <p>'.$gia.'</p>
                                                </div>
                                            </div>
                                        </div>
                                                                                                                                                                                
                
                                        ';
                                    } 

                    
                    
                    ?>
                                    
                                </div>
            </aside>
                                
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Latest blog end-->

        <!--Brand section start-->
       
        <!--Brand section end-->
        
    </div>
    <!-- quick view start -->


    <!--=================================
             style-customizer start  -->

    <div class="style-customizer closed">

        <div class="buy-button">
            <a href="#" class="customizer-logo"><img src="view/img/logo/logo.png" alt="Theme Logo"></a>
            <a class="opener" href="#"><i class="fa fa-cog fa-spin"></i></a>
            <div class="buy-now">
                <a class="button button-border" href="#">Buy now!</a>
            </div>
        </div>
        <div class="content-chooser">
            <h3>Layout Options</h3>
            <p>Which layout option you want to use?</p>
            <ul class="layoutstyle">
                <li class="wide-layout selected" data-style="wide" title="wide"> Wide </li>
                <li class="boxed-layout" data-style="boxed" title="boxed"> Boxed </li>
            </ul>
            <h3>Color Schemes</h3>
            <p>Which theme color you want to use? Select from here.</p>
            <ul class="styleChange">
                <li class="skin-default selected" title="skin-default" data-style="skin-default"></li>
                <li class="color-1" title="color-1" data-style="color-1"></li>
                <li class="color-2" title="color-2" data-style="color-2"></li>
                <li class="color-3" title="color-3" data-style="color-3"></li>
                <li class="color-4" title="color-4" data-style="color-4"></li>
                <li class="color-5" title="color-5" data-style="color-5"></li>
                <li class="color-6" title="color-6" data-style="color-6"></li>
                <li class="color-7" title="color-7" data-style="color-7"></li>
                <li class="color-8" title="color-8" data-style="color-8"></li>
                <li class="color-9" title="color-9" data-style="color-9"></li>
                <li class="color-10" title="color-10" data-style="color-10"></li>
                <li class="color-11" title="color-11" data-style="color-11"></li>
            </ul>

            <h3>Background Patterns</h3>
            <p>Which background pattern you want to use?</p>
            <ul class="patternChange clearfix">
                <li class="pattern-0" data-style="pattern-0" title="white background"></li>
                <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
                <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
                <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
                <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
                <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
                <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
                <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
            </ul>
            <h3>Background img</h3>
            <p>Which background image you want to use?</p>
            <ul class="patternChange main-bg-change clearfix">
                <li class="main-bg-1" data-style="main-bg-1" title="Background 1"> <img
                        src="view/img/customizer/bodybg/bg-1.jpg" alt=""></li>
                <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img
                        src="view/img/customizer/bodybg/bg-2.jpg" alt=""></li>
                <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img
                        src="view/img/customizer/bodybg/bg-3.jpg" alt=""></li>
                <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img
                        src="view/img/customizer/bodybg/bg-4.jpg" alt=""></li>
                <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img
                        src="view/img/customizer/bodybg/bg-5.jpg" alt=""></li>
                <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img
                        src="view/img/customizer/bodybg/bg-6.jpg" alt=""></li>
                <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img
                        src="view/img/customizer/bodybg/bg-7.jpg" alt=""></li>
                <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img
                        src="view/img/customizer/bodybg/bg-8.jpg" alt=""></li>
                <li class="main-bg-9" data-style="main-bg-9" title="Background 9"> <img
                        src="view/img/customizer/bodybg/bg-9.jpg" alt=""></li>
                <li class="main-bg-10" data-style="main-bg-10" title="Background 10"> <img
                        src="view/img/customizer/bodybg/bg-10.jpg" alt=""></li>
                <li class="main-bg-11" data-style="main-bg-11" title="Background 11"> <img
                        src="view/img/customizer/bodybg/bg-11.jpg" alt=""></li>
                <li class="main-bg-12" data-style="main-bg-12" title="Background 12"> <img
                        src="view/img/customizer/bodybg/bg-12.jpg" alt=""></li>
            </ul>
            <ul class="resetAll">
                <li><a class="button button-border button-reset" href="#">Reset All</a></li>
            </ul>
        </div>
    </div>

    <!-- style-customizer End -->



    <!-- Placed js at the end of the document so the pages load faster -->


    <!-- Map js code here -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj9b_nyz33KEaocu6ZOXRgqwwUZkDVEAw"></script>
    <script src="js/map.js"></script>

    <!-- All jquery file included here -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/style-customizer.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

<!-- Mirrored from preview.hasthemes.com/haven-preview/haven/article.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Nov 2023 17:46:21 GMT -->
</html>