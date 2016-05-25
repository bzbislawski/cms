<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Home</title>
    <!-- ========== CSS INCLUDES ========== -->
    <link rel="stylesheet" href="assets/css/master.css">
     
</head>
<body>

    <!-- ================================ -->
    <!-- ========== HEADER ========== -->
    <!-- ================================ -->
    <header id="header" class="header1" >
        
        <!-- Begin Top-Header -->
        <div id="topContainer">
            <div class="container">
                    <div class="topContent">
                        <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul><!--end social-icons -->
                                            
                            <div class="contact-details">
                                <ul>
                                    <li>
                                        <span class="fa fa-clock-o" ></span>
                                        Mon - Fri : 8:00 - 12:00    
                                    </li>
                                                    
                                    <li>
                                        <span class="fa fa-phone"></span>
                                        + 138 04 111 7562
                                    
                                                    
                                    <li>
                                        <span class="fa fa-envelope"></span>
                                        <a href="#">contact@mywebsite.com</a>
                                    </li>
                                </ul>
                            </div><!--end contact-details --></div>
                    <a href="#" class="headerButton"><i class="fa fa-angle-down"></i></a>
                </div><!--end container -->
            </div><!--end topContainer -->
        <!--end Top-Header -->

            <!-- Begin Nav -->
            <nav class="navbar clearfix">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand "  href="index-2.html">
                    <img src="assets/img/header/logo.png" class="fadeInL-Big" alt="LOGO">
                  </a>
                </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse fade " id="bs-example-navbar-collapse-1">
                    <nav class="mainMenu fadeUp-menu">
                        <ul>
                            <li>
                                <a href="index-2.html">
                                    <img src="assets/img/Icons/home.png" alt="home">
                                    Home <span>Your child</span> 
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/Icons/classes.png" alt="home">
                                    Classes 
                                    <span>Preschool</span> 
                                </a>
                                <ul>
                                    <li><a href="classe.html">Classes page layout</a></li>
                                    <li><a href="singleClasse.html">Single classe layout</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/Icons/teachers.png" alt="home">
                                    Teachers <span>Best educators</span> 
                                </a>
                                <ul>
                                    <li><a href="teachers.html">Teachers page layout</a></li>
                                    <li><a href="singleTeacher.html">Single teacher page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/Icons/pages.png" alt="home">
                                    Pages 
                                    <span>All pages</span> 
                                </a>
                                <ul>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="services.html">Our services</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="pricingPlans.html">Pricing plans</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shopSingle.html">Shop single</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/Icons/blog.png" alt="home">
                                    Blog 
                                    <span>Write news</span>
                                </a>
                                <ul>
                                    <li><a href="blog1.html">Blog page layout</a></li>
                                    <li><a href="blogSingle.html">Single post page</a></li>
                                    <li><a href="blogPageLayout.html">Blog page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!--end nav -->
                </div><!-- /navbar-collapse -->
              </div><!-- /container-->
            </nav><!--end navbar -->
    </header>
    <!-- ================================ -->
    <!-- ========== END OF HEADER  ========== -->
    <!-- ================================ -->










@yield('content')














    <!-- ================================ -->
    <!-- ========== START FOOTER  ========== -->
    <!-- ================================ -->
    <section class="sectionPadding footer" style="background:#f9f9f9;" >
        <footer  >
            <div class="footerContent">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="widget aboutUs">
                                <h3>About Us</h3>
                                <div class="textWidget">        
                                    <p>Fusce sed nibh porttitor, scelerisque elit id, pret
                                    justo. Integer venenatis tempus nisi non varius. </p>
                                    <p>Sed dui enim, lobortis et tempor sed, varius quis.
                                    pellentesque ligula tellus, elementum sit amet 
                                    purus at, pharetra faucibus erat. Sed fermentum 
                                    accumsan ipsum, non vestibulum nulla iaculis in.</p>
                                    <div class="childTxt col-sm-8">
                                        <p><span>Your child happy:</span> enroll your
                                        child right now to my kindergarten</p>
                                        <p><span>Ideal for Pre-School</span> this theme it’s
                                        ideal and perfect for pre-schools</p>
                                    </div><!--end childTxt -->
                                    <img src="assets/img/content/footericon.png" alt="">
                                </div><!--end textWidget -->
                            </div><!--end widget -->
                        </div><!--end col-sm-4 -->
                        
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="widget galleryWidget galleryPopup">
                                <h3>Gallery Photos</h3> 
                                <ul>    
                                    <li><a href="assets/img/Images/photodune-4736579-boy-drawing-xs.jpg"><img src="assets/img/content/ims1.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-4736468-little-learner-xs.jpg"><img src="assets/img/content/ims2.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-4372078-cute-friends-xs.jpg"><img src="assets/img/content/ims3.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-272404-two-little-girls-and-female-teacher-in-kindergarten-xs.jpg"><img src="assets/img/content/ims4.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-4908998-smiling-educator-with-boy-xs.jpg"><img src="assets/img/content/ims5.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-5013472-pupils-at-lesson-l.jpg"><img src="assets/img/content/ims6.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-313960-kindergarten-teacher-helping-students-learn-writing-skills-xs.jpg"><img src="assets/img/content/ims7.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-4604059-young-family-paint-easter-eggs-xs.jpg"><img src="assets/img/content/ims8.jpg" alt=""></a></li>
                                    
                                    <li><a href="assets/img/Images/photodune-4736579-boy-drawing-xs.jpg"><img src="assets/img/content/ims1.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-4736468-little-learner-xs.jpg"><img src="assets/img/content/ims2.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-4372078-cute-friends-xs.jpg"><img src="assets/img/content/ims3.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-272404-two-little-girls-and-female-teacher-in-kindergarten-xs.jpg"><img src="assets/img/content/ims4.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-4908998-smiling-educator-with-boy-xs.jpg"><img src="assets/img/content/ims5.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-5013472-pupils-at-lesson-l.jpg"><img src="assets/img/content/ims6.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-313960-kindergarten-teacher-helping-students-learn-writing-skills-xs.jpg"><img src="assets/img/content/ims7.jpg" alt=""></a></li>
                                    <li><a href="assets/img/Images/photodune-4604059-young-family-paint-easter-eggs-xs.jpg"><img src="assets/img/content/ims8.jpg" alt=""></a></li>
                                </ul>
                            </div><!--end widget -->
                        </div><!--end col-sm-4 -->
                        
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="widget">        
                                    <h3>Tag CLoud</h3>
                                    <div class="tagcloud">
                                        <a href="#">web-design</a>
                                        <a href="#">music</a>
                                        <a href="#">photography</a>
                                        <a href="#">blog</a>
                                        <a href="#">photography</a>
                                        <a href="#">web-design</a>
                                        <a href="#">blog</a>
                                        <a href="#">web-design</a>
                                        <a href="#">music</a>
                                        <a href="#">photography</a>
                                        <a href="#">blog</a>
                                        <a href="#">themes wordpress</a>
                                        <a href="#">audio</a>
                                        <a href="#">audio player</a>
                                        <a href="#">photography</a>
                                        <a href="#">web-design</a>
                                        <a href="#">blog</a>
                                        <a href="#">music</a>
                                        <a href="#">photography</a>
                                        <a href="#">blog</a>
                                        <a href="#">web-design</a>
                                        <a href="#">music</a>
                                        <a href="#">photography</a>
                                    </div><!--tagCloud -->
                            </div><!--end widget -->
                        </div><!--end col-sm-4 -->
                    </div><!--end row -->
                </div><!--end container -->
            </div><!--end footerContent -->
        </footer>
    </section>
    
<div id="" style="background-color: #fa6f57;padding: 20px 0;color: #fff;">
    <div class="container" >
        <div class="col-md-6">
            <span class="pull-left">Copyright © 2016 Name of Company. All rights reserved.
            <br>Design and implementation: <a href="mailto:bzbislawski@gmail.com" style="color:#FFFFFF">Bartosz Zbislawski</a></span>
        </div>
        <div class="col-md-6">
            <span class="pull-right">CMS - content management system</span><br/>
            <span class="pull-right"><a href="#header" style="color:#FFFFFF">GO TOP</a></span>
        </div>
    </div>
</div>










    <!-- ================================================== -->
    <!-- =============== START JQUERY SCRIPTS ================ -->
    <!-- ================================================== -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <!--[if lte IE 9 ]>
        <script src="assets/js/placeholder.js"></script>
        <script>
            jQuery(function() {
                jQuery('input, textarea').placeholder();
            });
        </script>
    <![endif]-->
    
    <!-- ================================================== -->
    <!-- =============== END JQUERY SCRIPTS ================ -->
    <!-- ================================================== -->
    
</body>
</html>