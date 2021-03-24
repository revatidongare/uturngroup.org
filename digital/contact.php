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
    <section class="page-title" style="background: url(images/index/ContactUs.jpg);">
        <div class="container text-center">
            <div class="title">
                <h4>Contact Us</h4>
            </div>
            <ul class="title-manu">
               <li style="font-size: 20px"><a href="index.php">home</a></li>
                
            </ul>         
        </div>
    </section>
    <!--End Page Title-->


    <!-- Contact Section -->
    <!-- <section class="contact-section style-two">
        <div class="container">
            <div class="section-title text-left">
                <h2>Get in Touch</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">                    
                    <div class="left-side">
                       <form action="back.php" method="post">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="" placeholder="Your Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" value="" placeholder="Phone" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" value="" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control textarea required" placeholder="Your Text"></textarea>
                            </div>
                            <div class="form-group form-bottom">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="btn-style-one" name="submit" type="submit" data-loading-text="Please wait...">send message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="right-side">
                        
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>Hermes Paras CHS 39/1 Ground floor opposite Kalyani Veg,<br>Kalyani Nagar Pune 411014</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>+918766974657</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>+919579442271</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i>contact@uturngroup.org</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Contact Section -->


    <!-- Map Section -->
   <!--    -->
    <!-- End Map Section -->


    <!--Subscribe Section-->
   <!--  <section class="subscribe-section style-two">
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
    </section> -->
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
