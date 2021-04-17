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
    <section class="page-title" style="background: url(images/index/37275.jpg);">
        <div class="container text-center">
            <div class="title">
                <h4 >Our Portfolio</h4>
            </div>
            <ul class="title-manu">
                <li style="font-size: 25px"><a href="index.php">Home</a></li>
                
            </ul>         
        </div>
    </section>
    <!--End Page Title-->


    <!--Gallery Section-->
    <section class="gallery-section style-two">
        <div class="container-fluid">
            <div class="gallery-filter">
                <ul class="post-filter list-inline">
                    <li class="active" data-filter=".filter-item">
                        <span>All Services</span>
                    </li>
                    <li data-filter=".Branding">
                        <span>DESIGN & DEVELOPMENT</span>
                    </li>
                    <li data-filter=".webdesign">
                        <span>ONLINE MARKETING</span>
                    </li>
                    <!-- <li data-filter=".Illustration">
                        <span>HGHJG</span>
                    </li>
                    <li data-filter=".Creative">
                        <span>Creative</span>
                    </li> -->
                </ul>
            </div>
            <div class="row filter-layout">
               <article class="col-lg-3 col-md-6 col-sm-6 col-xs-12 filter-item Branding">
                    <div class="item">
                        <img src="images/portfolio/content-market.jpg" alt="">
                        <div class="overlay">
                            <h5 style="color: #09C187">Content Marketing Strategy</h5>
                            
                            <!-- <a href="#"><i class="flaticon-right-arrow"></i></a> -->
                        </div>
                    </div>
                </article>
                  <article class="col-lg-3 col-md-6 col-sm-6 col-xs-12 filter-item webdesign">
                    <div class="item">
                        <img src="images/portfolio/social-media-marketing.jpg" alt="">
                        <div class="overlay">
                            <h5 style="color: #09C187">Social Media Marketing</h5>
                            
                            <!-- a href="#"><i class="flaticon-right-arrow"></i></a> -->
                        </div>                    
                    </div>
                </article> 
              
                  <article class="col-lg-3 col-md-6 col-sm-6 col-xs-12 filter-item webdesign">
                    <div class="item">
                        <img src="images/portfolio/email-market.jpg" alt="">
                        <div class="overlay">
                            <h5 style="color: #09C187">Email Marketing</h5>
                            
                            <!-- <a href="#"><i class="flaticon-right-arrow"></i></a> -->
                        </div>                    
                    </div>
                </article>
                   <article class="col-lg-3 col-md-6 col-sm-6 col-xs-12 filter-item Branding">
                    <div class="item">
                        <img src="images/portfolio/web-design.jpg" alt="">
                        <div class="overlay">
                            <h5 style="color: #09C187">Web Design Services</h5>
                            
                            <!-- <a href="#"><i class="flaticon-right-arrow"></i></a> -->
                        </div>
                    </div>
                </article>
                 <article class="col-lg-3 col-md-6 col-sm-6 col-xs-12 filter-item webdesign">
                    <div class="item">
                        <img src="images/portfolio/1.jpeg" alt="">
                        <div class="overlay">
                            <h5 style="color: #09C187">Search Engine Optimization</h5>
                            
                            <!-- <a href="#"><i class="flaticon-right-arrow"></i></a> -->
                        </div>                    
                    </div>
                </article> 
                  <article class="col-lg-3 col-md-6 col-sm-6 col-xs-12 filter-item webdesign">
                    <div class="item">
                        <img src="images/portfolio/pay-per-click.jpg" alt="">
                        <div class="overlay">
                            <h5 style="color: #09C187">Pay Per Click (PPC) Management</h5>
                            
                            <!-- <a href="#"><i class="flaticon-right-arrow"></i></a> -->
                        </div>                    
                    </div>
                </article>
              
                
               
                 <article class="col-lg-3 col-md-6 col-sm-6 col-xs-12 filter-item Branding">
                    <div class="item">
                        <img src="images/portfolio/web-developement.jpg" alt="">
                        <div class="overlay">
                            <h5 style="color: #09C187">Web Development Services</h5>
                            
                            <!-- <a href="#"><i class="flaticon-right-arrow"></i></a> -->
                        </div>
                    </div>
                </article>
                
                 <article class="col-lg-3 col-md-6 col-sm-6 col-xs-12 filter-item Branding">
                    <div class="item">
                        <img src="images/portfolio/mobile-markert.jpg" alt="">
                        <div class="overlay">
                            <h5 style="color: #09C187">Mobile Marketing Services</h5>
                            
                            <!-- <a href="#"><i class="flaticon-right-arrow"></i></a> -->
                        </div>
                    </div>
                </article>
             
           
            </div>
        </div>
    </section>
    <!--End Gallery Section-->


    <!--Subscribe Section-->
   
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
