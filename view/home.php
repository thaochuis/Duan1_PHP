
    





<div class="property-area fadeInUp wow ptb-130" data-wow-delay="0.2s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="feature-property-title">
                            <h3>MỚI ĐƯỢC ĐĂNG</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="property-tab-menu">
                            <ul class="nav justify-content-md-end" id="property-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="property-sale-tab" data-toggle="tab" href="#sale"
                                        role="tab" aria-controls="sale" aria-selected="true">PROPERTY FOR SALE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="property-rent-tab" data-toggle="tab" href="#rent" role="tab"
                                        aria-controls="rent" aria-selected="false">PROPERTY TO RENT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="property-tab-content">
                            <div role="tabpanel" class="tab-pane active" id="sale" aria-labelledby="property-sale-tab">
                                <div class="property-list owl-carousel">
                                    <?php   
                                        foreach ($spnew as $sp) {
                                            extract($sp);
                                            $hinh = $anhurl . $img;
                                            $linksp="index.php?act=ct_sp&id=".$id;
                                            echo '
                                                <div class="item">
                                                    <div class="single-property">
                                                        <div class="property-img">
                                                            <a href="'.$linksp.'">
                                                                <img src="'.$hinh.'" alt="" style="width:100%;height:270px;">
                                                            </a>
                                                        </div>
                                                        <div class="property-desc">
                                                            <div class="property-desc-top">
                                                                <h6><a href="single-properties.html">'.$tensp.'</a></h6>
                                                                <h4 class="price">'.$gia.' $</h4>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            ';  
                                        }

                                    
                                    
                                    
                                    ?>
                                    <!-- <div class="item">
                                        <div class="single-property">
                                            <div class="property-img">
                                                <a href="single-properties.html">
                                                    <img src="view/img/property/7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <div class="property-desc-top">
                                                    <h6><a href="single-properties.html">Biệt thự Quảng Ninh</a></h6>
                                                    <h4 class="price">1,400,000,000 VNĐ</h4>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="single-property">
                                            <div class="property-img">
                                                <a href="single-properties.html">
                                                    <img src="view/img/property/7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <div class="property-desc-top">
                                                    <h6><a href="single-properties.html">Biệt thự Quảng Ninh</a></h6>
                                                    <h4 class="price">1,400,000,000 VNĐ</h4>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="single-property">
                                            <div class="property-img">
                                                <a href="single-properties.html">
                                                    <img src="view/img/property/7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <div class="property-desc-top">
                                                    <h6><a href="single-properties.html">Biệt thự Quảng Ninh</a></h6>
                                                    <h4 class="price">1,400,000,000 VNĐ</h4>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="single-property">
                                            <div class="property-img">
                                                <a href="single-properties.html">
                                                    <img src="view/img/property/7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <div class="property-desc-top">
                                                    <h6><a href="single-properties.html">Biệt thự Quảng Ninh</a></h6>
                                                    <h4 class="price">1,400,000,000 VNĐ</h4>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="single-property">
                                            <div class="property-img">
                                                <a href="single-properties.html">
                                                    <img src="view/img/property/7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="property-desc">
                                                <div class="property-desc-top">
                                                    <h6><a href="single-properties.html">Biệt thự Quảng Ninh</a></h6>
                                                    <h4 class="price">1,400,000,000 VNĐ</h4>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature property section end-->

        

        <!--Download apps section start-->
        <div class="download-apps overlay-blue">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="download-apps-desc wow fadeInDown" data-wow-delay="0.1s">
                            <div class="download-apps-title">
                                <h3 class="title-1">GHÉ QUA PAGES CỦA CHÚNG TÔI</h3>
                                <h3 class="title-2">VÀ BIẾT THÊM NHIỀU THÔNG TIN HỮU ÍCH HƠN</h3>
                            </div>
                            <div class="download-apps-bottom">
                                
                                <a href="#">Nhấn vào đây</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="download-apps-caption-img f-right wow fadeUp" data-wow-duration="1.2s"
                            data-wow-delay="0.2s">
                            <img src="view/img/common/download-caption.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Download apps section end-->

        
        <!--Feature property section-->
        <div class="feature-property ptb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <h3>BÀI ĐĂNG ĐÁNG CHÚ Ý</h3>
                        </div>
                    </div>
                </div>
            <div class="row">
                <?php   
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $linksp="index.php?act=ct_sp&id=".$id;
                            $hinh = $anhurl . $img;
                            echo '
                            <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-property wow fadeInUp mb-40" data-wow-delay="0s" data-wow-duration="0s">
                                <div class="property-img">
                                    <a href="'.$linksp.'"  style="width:100%;height:270px;">
                                        <img src="'.$hinh.'" alt="">
                                    </a>
                                </div>
                                <div class="property-desc">
                                    <div class="property-desc-top">
                                        <h6><a href="'.$linksp.'">'.$tensp.'</a></h6>
                                        <h4 class="price">'.$gia.'$</h4>
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
            </div>
        </div>
        <!--Feature property section end-->

        <!--Latest blog start-->
        <div class="latest-blog ptb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <h3>TIN TỨC MỚI NHẤT</h3>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php  
                        foreach ($ttnew as $tt) {
                            extract($tt);
                            $hinh = $anhurl . $img;
                            $linktt="index.php?act=tt_ct&id=".$id;
                            echo'
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="single-blog wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                                            <div class="blog-thubmnail">
                                                <a href="'.$linktt.'">
                                                    <img src="'.$hinh.'" style="width:100%;height:270px;">
                                                </a>
                                                <div class="blog-post">
                                                </div>
                                            </div>
                                        <div class="blog-desc">
                                            <h6><a href="article.html">'.$tieude.'</a></h6>
                                            <p class="post-content">'.$demo.'</p>
                                            <div class="bolg-continue">
                                                <a href="article.html">'.$ngaydang.' ></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                                                                                           
    
                            ';
                        } 

                    
                    
                    ?>
                    <!-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-blog wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">
                            <div class="blog-thubmnail">
                                <a href="article.html">
                                    <img src="view/img/blog/1.jpg" alt="">
                                </a>
                                <div class="blog-post">
                                    
                                </div>
                            </div>
                            <div class="blog-desc">
                                <h6><a href="article.html">New Duplex Villa design with Latest Altra Concept</a></h6>
                                <p class="post-content">Haven the best theme for elit, sed do eiusmod tempor dolor sit
                                    amet, conse ctetur adipiscing elit, sed do eismod tempor incididunt </p>
                                <div class="bolg-continue">
                                    <a href="article.html">Continure Reading ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-blog wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.2s">
                            <div class="blog-thubmnail">
                                <a href="article.html">
                                    <img src="view/img/blog/2.jpg" alt="">
                                </a>
                                <div class="blog-post">
                                   
                                </div>
                            </div>
                            <div class="blog-desc">
                                <h6><a href="article.html">New Duplex Villa design with Latest Altra Concept</a></h6>
                                <p class="post-content">Haven the best theme for elit, sed do eiusmod tempor dolor sit
                                    amet, conse ctetur adipiscing elit, sed do eismod tempor incididunt </p>
                                <div class="bolg-continue">
                                    <a href="article.html">Continure Reading ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-blog wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.3s">
                            <div class="blog-thubmnail">
                                <a href="article.html">
                                    <img src="view/img/blog/3.jpg" alt="">
                                </a>
                                <div class="blog-post">
                                    
                                </div>
                            </div>
                            <div class="blog-desc">
                                <h6><a href="article.html">New Duplex Villa design with Latest Altra Concept</a></h6>
                                <p class="post-content">Haven the best theme for elit, sed do eiusmod tempor dolor sit
                                    amet, conse ctetur adipiscing elit, sed do eismod tempor incididunt </p>
                                <div class="bolg-continue">
                                    <a href="article.html">Continure Reading ></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>