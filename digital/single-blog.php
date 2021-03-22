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
                <h4>Single Post</h4>
            </div>
            <ul class="title-manu">
                <li><a href="index.php">home</a></li>
                <li>></li>
                <li>Single Post</li>
            </ul>         
        </div>
    </section>
    <!--End Page Title-->


    <!--Single Blog-->
    <section class="blog-section style-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 col-xs-12">
                    <div class="left-side">
                        <div class="item-holder">
                            <div class="image-box">
                                <figure>
                                    <a href="single-blog.html"><img src="images/blog/10.jpg" alt=""></a>
                                </figure>
                                <div class="date-box">
                                    <span>25 feb, 2017</span>
                                </div>
                            </div>
                            <div class="text-area">
                                <div class="content-text">
                                    <div class="section-title">
                                        <a href="single-blog.html"><h2>Cras sed elit sit amet.</h2></a>
                                    </div>
                                    <div class="text">
                                        <p>Excepteur sint occaecat cupidatat  proident sunt culpa qui officia deserunt mollit anmlab rum. Sed perspi ciatis unde.omnis is natus error sit voluptatem accusantium dolore mque laudant totam rem aperiam. eaque ipsa quae Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                                        <p>Labore et dolore magna aliqua. Ut enim ad minim veniam.commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. excepteur sint occaecat cupi datat non proident.</p>
                                    </div>                            
                                </div>
                                <div class="blog-info clearfix">
                                    <ul class="left-side pull-left">
                                        <li><i class="fa fa-user" aria-hidden="true"></i>admin</li>
                                        <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                        <li class="info"><i class="fa fa-comments-o" aria-hidden="true"></i>30</li>
                                    </ul>
                                    <ul class="right-side pull-right">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-area">
                            <h3>Leave A Comments</h3>
                            <form id="contact_form" name="contact_form" class="default-form" action="sendmail.php" method="post">
                                <div class="row clearfix">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea name="form_message" class="form-control textarea required" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="text" name="form_name" class="form-control" value="" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input type="email" name="form_email" class="form-control required email" value="" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group form-bottom">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="btn-style-one" type="submit" data-loading-text="Please wait...">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>                        
                </div>
                <div class="col-lg-4 col-sm-12 col-xs-12">
                    <div class="right-side">
                        <div class="search-area">
                            <form action="#" class="search-box">
                                <input type="text" placeholder="Type keyword...">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="services-area">
                            <div class="sec-title">
                                <h4>Categories</h4>
                            </div>                         
                            <ul class="service-menu">
                                <li><a href="#">Architecture  (5)</a></li>
                                <li><a href="#">Dessign  (3)</a></li>
                                <li><a href="#">Art  (7)</a></li>
                                <li><a href="#">Interior  (2)</a></li>
                                <li><a href="#">Exterior  (6)</a></li>
                                <li><a href="#">Research  (4)</a></li>
                            </ul>
                        </div>
                        <div class="blog-sidebar">
                            <div class="sec-title">
                                <h4>Latest Post</h4>
                            </div>
                            <div class="item">
                                <div class="image-box">
                                    <figure>
                                        <a href="blog-details.html"><img src="images/blog/11.jpg" alt=""></a>
                                    </figure>
                                </div>
                                <div class="image-text">
                                    <a href="blog-details.html"><h6>Mauris Molestie Mauris eu Odio Eleifend.</h6></a>
                                    <span>02 Feb, 2017</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="image-box">
                                    <figure>
                                        <a href="blog-details.html"><img src="images/blog/12.jpg" alt=""></a>
                                    </figure>
                                </div>
                                <div class="image-text">
                                    <a href="blog-details.html"><h6>Cras Semper Neque eu Est Facilisis Tincidunt.</h6></a>
                                    <span>02 Feb, 2017</span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="image-box">
                                    <figure>
                                        <a href="blog-details.html"><img src="images/blog/13.jpg" alt=""></a>
                                    </figure>
                                </div>
                                <div class="image-text">
                                    <a href="blog-details.html"><h6>In Nec Magna eu Nisl Porta Pretium et eu Leo.</h6></a>
                                    <span>02 Feb, 2017</span>
                                </div>
                            </div>
                        </div>
                        <div class="archives-area">
                            <div class="sec-title">
                                <h4>Archives</h4>
                            </div>
                            <ul class="archives">
                                <li><a href="#">April 2017</a></li>
                                <li><a href="#">May 2017</a></li>
                                <li><a href="#">June 2017</a></li>
                                <li><a href="#">July 2017</a></li>
                            </ul>
                        </div>                                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Single Blog-->


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
