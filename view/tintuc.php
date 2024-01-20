
        <!--Breadcrumbs start-->
        <!--Breadcrumbs end-->

            <!--Latest blog start-->
            <div class="blog-pages pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="blog-sidebar-page">
                            <div class="row">
                                    <?php  
                                        foreach ($ttnew1 as $tt) {
                                            extract($tt);
                                            $linktt="index.php?act=tt_ct&id=".$id;
                                            $hinh = $anhurl . $img;
                                            echo'
                                                <div class="col-md-6 col-12">
                                                    <div class="single-blog mb-60">
                                                        <div class="blog-thubmnail">
                                                            <a href="'.$linktt.'">
                                                                <img src="'.$hinh.'" alt="" style="width:100%;height:280px;">
                                                            </a>
                                                        </div>
                                                        <div class="blog-desc">
                                                            <h4><a href="article.html">'.$tieude.'</a></h4>
                                                            <p class="post-content">'.$demo.'</p>
                                                            <div class="bolg-continue">
                                                                <a href="article.html">'.$ngaydang.'></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                                                                                                                                                        
                                            ';
                                    } 
                                    ?>

                            </div>
                        </div>
                        <!--pagination start -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pagination">
                                    <div class="pagination-inner text-center">
                                        <ul>
                                            <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                            <li class="current">1</li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>. . . . . .</li>
                                            <li><a href="#">15</a></li>
                                            <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                         </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--pagination end-->
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
                                    <h5>Danh mục tin tức</h5>
                                </div>
                                <div class="categories-list">
                                    <ul>
                                    <?php 
                                            // extract($dmnew);
                                            // var_dump($dmnew);die();
                                                foreach ($dmnewtt as $dm){
                                                    extract($dm);
                                                    $linkdm = "index.php?act=tt_dm&iddmtt=".$id;
                                                    echo'
                                                    <li><a href="'.$linkdm.'">'.$tendanhmuc_tt.'<span>1420</span></a></li>
                                    
                                                        ';
                                                }
                                                   

                                            ?>
                                        <!-- <li><a href="#">Apartment <span>1420</span></a></li>
                                        <li><a href="#">Apartment Building <span>780</span></a></li>
                                        <li><a href="#">Bungalow<span>670</span></a></li>
                                        <li><a href="#">Corporate House<span>530</span></a></li>
                                        <li><a href="#">Duplex Villa<span>350</span></a></li>
                                        <li><a href="#">Garend House<span>210</span></a></li> -->
                                    </ul>
                                </div>
                            </aside>
                            <aside class="single-side-box recent-post">
                                <div class="aside_title">
                                    <h5>các tin tức mới</h5>
                                </div>
                                <div class="recent-post-inner">
                                <?php  
                                    foreach ($ttnew as $tt) {
                                        extract($tt);
                                        $hinh = $anhurl . $img;
                                    echo'
                                        <div class="single-recent-post fix">
                                            <div class="recent-post-thumbnail">
                                                <a href="article.html"><img src="'.$hinh.'" width:100%;height:100px;></a>
                                            </div>
                                            <div class="recent-post-desc">
                                                <div class="post-title">
                                                    <h4><a href="article.html">'.$tieude.'</a></h4>
                                                </div>
                                                <div class="post-publish">
                                                    <p>'.$ngaydang.'</p>
                                                </div>
                                                <div class="post-content">
                                                    <p>'.$demo.'</p>
                                                </div>
                                            </div>
                                        </div>
                                                                                                                                                                                
                
                                        ';
                                    } 

                    
                    
                    ?>
                                    <!-- <div class="single-recent-post fix">
                                        <div class="recent-post-thumbnail">
                                            <a href="article.html"><img src="view/img/blog/r-1.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-post-desc">
                                            <div class="post-title">
                                                <h6><a href="article.html">Latest Design Home</a></h6>
                                            </div>
                                            <div class="post-publish">
                                                <p>Ronchi / 10 March, 2017</p>
                                            </div>
                                            <div class="post-content">
                                                <p>Lorem must explain to ten how all this mistakenea </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-recent-post fix">
                                        <div class="recent-post-thumbnail">
                                            <a href="article.html"><img src="view/img/blog/r-2.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-post-desc">
                                            <div class="post-title">
                                                <h6><a href="article.html">Real Estate Expo</a></h6>
                                            </div>
                                            <div class="post-publish">
                                                <p>Ronchi / 15 March, 2017</p>
                                            </div>
                                            <div class="post-content">
                                                <p>Lorem must explain to ten how all this mistakenea </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-recent-post fix">
                                        <div class="recent-post-thumbnail">
                                            <a href="article.html"><img src="view/img/blog/r-3.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-post-desc">
                                            <div class="post-title">
                                                <h6><a href="article.html">Corporate House</a></h6>
                                            </div>
                                            <div class="post-publish">
                                                <p>Ronchi / 18 March, 2017</p>
                                            </div>
                                            <div class="post-content">
                                                <p>Lorem must explain to ten how all this mistakenea </p>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </aside>
                            <aside class="single-side-box archive">
                                <div class="aside_title">
                                    <h5>Archive</h5>
                                </div>
                                <div class="archive-list">
                                    <ul>
                                        <li><a href="#">April 2017</a></li>
                                        <li><a href="#">March 2017</a></li>
                                        <li><a href="#">february 2017</a></li>
                                        <li><a href="#">January 2017</a></li>
                                        <li><a href="#">December 2017</a></li>
                                        <li><a href="#">November 2017</a></li>
                                    </ul>
                                </div>
                            </aside>
                            <aside class="single-side-box tweets">
                                <div class="aside_title">
                                    <h5>Latest Tweets</h5>
                                </div>
                                <div class="tweet-list">
                                    <div class="latest-tweet">
                                        <p> <a href="#">@Lorem ipsum</a> dolor sit amet, costetur adipiscing elit, sed do eiusmod tempor </p>
                                        <div class="tweet-post">
                                            <p>Ronchi / 3 hour ago</p>
                                        </div>
                                    </div>
                                    <div class="latest-tweet">
                                        <p> <a href="#">@Lorem ipsum</a> dolor sit amet, costetur adipiscing elit, sed do eiusmod tempor </p>
                                        <div class="tweet-post">
                                            <p>Ronchi / 3 hour ago</p>
                                        </div>
                                    </div>
                                    <div class="latest-tweet">
                                        <p> <a href="#">@Lorem ipsum</a> dolor sit amet, costetur adipiscing elit, sed do eiusmod tempor </p>
                                        <div class="tweet-post">
                                            <p>Ronchi / 3 hour ago</p>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="single-side-box guide">
                                <div class="property-buying-guide">
                                    <div class="single-guide">
                                        <div class="guide-icon">
                                            <img src="view/img/blog/g-1.png" alt="">
                                        </div>
                                        <div class="guide-title">
                                            <h6><a href="#">Property Buying Guide</a></h6>
                                        </div>
                                    </div>
                                    <div class="single-guide">
                                        <div class="guide-icon">
                                            <img src="view/img/blog/g-1.png" alt="">
                                        </div>
                                        <div class="guide-title">
                                            <h6><a href="#">Property Buying Guide</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="single-side-box discount">
                                <div class="discount-inner">
                                    <div class="discount-img">
                                        <img src="view/img/blog/discount.jpg" alt="">
                                    </div>
                                    <div class="discount-text">
                                        <p>
                                            25% off <br>
                                            Build Your  <br>
                                            Dream with Us
                                        </p>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Latest blog end-->

        <!--Brand section start-->
        <div class="brand-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="brand-list owl-carousel">
                                <div class="single-brand">
                                    <a href="#"><img src="view/img/brand/1.png" alt=""></a>
                                </div>
                                <div class="single-brand">
                                    <a href="#"><img src="view/img/brand/2.png" alt=""></a>
                                </div>
                                <div class="single-brand">
                                    <a href="#"><img src="view/img/brand/3.png" alt=""></a>
                                </div>
                                <div class="single-brand">
                                    <a href="#"><img src="view/img/brand/4.png" alt=""></a>
                                </div>
                                <div class="single-brand">
                                    <a href="#"><img src="view/img/brand/5.png" alt=""></a>
                                </div>
                                <div class="single-brand">
                                    <a href="#"><img src="view/img/brand/1.png" alt=""></a>
                                </div>
                                <div class="single-brand">
                                    <a href="#"><img src="view/img/brand/2.png" alt=""></a>
                                </div>
                                <div class="single-brand">
                                    <a href="#"><img src="view/img/brand/3.png" alt=""></a>
                                </div>
                                <div class="single-brand">
                                    <a href="#"><img src="view/img/brand/4.png" alt=""></a>
                                </div>
                                <div class="single-brand">
                                    <a href="#"><img src="view/img/brand/5.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Brand section end-->