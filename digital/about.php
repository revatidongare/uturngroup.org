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
                <h4>About Us</h4>
            </div>
            <ul class="title-manu">
                <li style="font-size: 20px"><a href="index.php">home</a></li>
                
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
                
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="image-text">
                    <div class="section-title text-left">
                        <h2>Uturn Group</h2>
                    </div>
                    <div class="text">
                        <b style="color: #046c79">Uturn Group Organization</b> have started with a thought of taking everyone on <b style="color: #046c79">A digital platform</b> & to ensure every customer is benefited out of the internet revolution in today's era.<b style="color: #046c79">Pune</b> based start up was set in the month of March 2021,where in single handedly <b style="color: #046c79">Mr.Vaibhav Kakirdeh</b> saw a dream & made it possible for everyone who wanted to be on digital platform with a team of barely 02 members to start with.Based on a sustainable growth & response <b style="color: #046c79">Mr.Vaibhav Kakirdeh</b> expanded its wings & currently located in <b style="color: #046c79">Kalyani Nagar,Pune</b>with a set up & <b style="color: #046c79">Energetic team of 10+ members.</b>Planning to open its branches further very soon in<b style="color: #046c79">Tier 03 & tier 04 cities...</b>
                    </div>                        
                   
                </div>
            </div>
        </div>
    </section>
    <!--End Gallery Details-->


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
