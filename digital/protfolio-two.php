<!DOCTYPE html>
<html>
<?php include'includes/head.php';?>

<body>
<div class="page-wrapper">  
    

    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- Preloader -->


    <div class="header-top"></div>
    
   
    <!--Main Header-->
   <?php include'includes/header.php';?>
    <!--End Main Header -->


    <!--Page Title-->
    <section class="page-title" style="background: url(images/background/2.jpg);">
        <div class="container text-center">
            <div class="title">
                <h4>Our Portfolio</h4>
            </div>
            <ul class="title-manu">
                <li><a href="index.php">home</a></li>
                <li>></li>
                <li>Our Portfolio</li>
            </ul>         
        </div>
    </section>
    <!--End Page Title-->


    <!--Gallery Section-->
    <section class="gallery-section style-two style-three">
        <div class="container">
            <div class="gallery-filter">
                <ul class="post-filter list-inline">
                    <li class="active" data-filter=".filter-item">
                        <span>All Work</span>
                    </li>
                    <li data-filter=".Branding">
                        <span>Branding</span>
                    </li>
                    <li data-filter=".webdesign">
                        <span>Web Design</span>
                    </li>
                    <li data-filter=".Illustration">
                        <span>Illustration</span>
                    </li>
                    <li data-filter=".Creative">
                        <span>Creative</span>
                    </li>
                </ul>
            </div>
            <div class="row filter-layout">
                <article class="col-lg-4 col-md-6 col-sm-6 col-xs-12 filter-item webdesign Creative">
                    <div class="item">
                        <img src="images/gallery/11.jpg" alt="">
                        <div class="overlay">
                            <h5>Web Development</h5>
                            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtempor incid.</p>
                            <a href="#"><i class="flaticon-right-arrow"></i></a>
                        </div>                    
                    </div>
                </article> 
                <article class="col-lg-4 col-md-6 col-sm-6 col-xs-12 filter-item Illustration webdesign">
                    <div class="item">
                        <img src="images/gallery/12.jpg" alt="">
                        <div class="overlay">
                            <h5>Web Development</h5>
                            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtempor incid.</p>
                            <a href="#"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </article> 
                <article class="col-lg-4 col-md-6 col-sm-6 col-xs-12 filter-item Branding Illustration">
                    <div class="item">
                        <img src="images/gallery/13.jpg" alt="">
                        <div class="overlay">
                            <h5>Web Development</h5>
                            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtempor incid.</p>
                            <a href="#"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-sm-6 col-xs-12 filter-item  Illustration Creative">
                    <div class="item">
                        <img src="images/gallery/14.jpg" alt="">
                        <div class="overlay">
                            <h5>Web Development</h5>
                            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtempor incid.</p>
                            <a href="#"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </article>
                <article class="col-lg-4 col-md-6 col-sm-6 col-xs-12 filter-item webdesign Branding">
                    <div class="item">
                        <img src="images/gallery/15.jpg" alt="">
                        <div class="overlay">
                            <h5>Web Development</h5>
                            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtempor incid.</p>
                            <a href="#"><i class="flaticon-right-arrow"></i></a>
                        </div>                    
                    </div>
                </article> 
                <article class="col-lg-4 col-md-6 col-sm-6 col-xs-12 filter-item Creative webdesign Illustration">
                    <div class="item">
                        <img src="images/gallery/16.jpg" alt="">
                        <div class="overlay">
                            <h5>Web Development</h5>
                            <p>Lorem ipsum dolor sit amet constur adipisicing elit sed do eiusmtempor incid.</p>
                            <a href="#"><i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </article> 
            </div>
        </div>
    </section>
    <!--End Gallery Section-->


    <!--Subscribe Section-->
    <section class="subscribe-section style-two">
        <div class="container">
            <div class="text-area">
                <div class="section-title text-center">
                    <h2>Subscribe Newsletter</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm</p>
                </div>
                <form method="post" action="contact.html">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="form-group">                        
                                <input type="email" name="email" value="" placeholder="Enter your Email" required="">
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">                        
                                <button type="submit" class="btn-style-one">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </form>
                <ul class="social-links text-center">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                </ul>
            </div>                
        </div>
    </section>
    <!--End Subscribe Section-->


    <!--main-footer-->
    <?php include'includes/footer.php';?>
    <!--End main-footer-->


</div>
<!--End pagewrapper-->

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fa fa-times" aria-hidden="true"></span></div>
    <div class="popup-inner">
        <div class="search-form">
            <form method="post" action="index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Logistics</a></li>
                <li><a href="#">Freedom</a></li>
            </ul>
        </div>
    </div>
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top"><span class="icon fa fa-angle-up"></span></div>

<?php include'includes/script.php';?>
</body>
</html>
