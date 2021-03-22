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


    <!--Gallery Details-->
    <section class="gallery-details">
        <div class="container">
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="image-box">
                    <figure>
                        <img src="images/gallery/17.jpg" alt="">
                    </figure>
                </div>
                <div class="image-box">
                    <figure>
                        <img src="images/gallery/18.jpg" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="image-text">
                    <div class="section-title text-left">
                        <h2>Ligula Viverra</h2>
                    </div>
                    <div class="text">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architebeatae.</p>
                        <p>Vitae dicta sunt explicabo. nemo enim ipsam voluptatem quia voluptassit aspernatur.aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem. sequi nesciunt.</p>
                    </div>                        
                    <ul class="info">
                        <li class="item">
                            <strong>Clients Name</strong>
                            <p>Roxan Gilbert</p>
                        </li>
                        <li class="item">
                            <strong>Date</strong>
                            <p>15 Octber, 2017</p>
                        </li>
                        <li class="item">
                            <strong>Location</strong>
                            <p>28 Hosep tower, Park street, Fifth Avenue, Dhaka.</p>
                        </li>
                        <li class="item">
                            <strong>Skill</strong>
                            <p>UI/UX Design, Web Development</p>
                        </li>
                        <li class="item">
                            <div class="link-btn">
                                <a href="#" class="btn-style-one">Check Live Link</a>
                            </div>
                        </li>                            
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Details-->


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
