<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Home</title>
    <!-- ========== CSS INCLUDES ========== -->
    <link rel="stylesheet" href="{{url('assets/css/master.css')}}">
     
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
                  <a class="navbar-brand "  href="/">
                    <img src="{{url('assets/img/header/logo.png')}}" class="fadeInL-Big" alt="LOGO">
                  </a>
                </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse fade " id="bs-example-navbar-collapse-1">
                    <nav class="mainMenu fadeUp-menu">
                        <ul>
                            <li>
                                <a href="/">
                                    <img src="{{url('assets/img/Icons/home.png')}}" alt="home">
                                    Home <span>Your child</span> 
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{url('assets/img/Icons/classes.png')}}" alt="home">
                                    Classes 
                                    <span>Preschool</span> 
                                </a>
                                <ul>
                                    <li><a href="classe.html">Classes page layout</a></li>
                                    <li><a href="singleClasse.html">Single classe layout</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('teachers')}}">
                                    <img src="{{url('assets/img/Icons/teachers.png')}}" alt="home">
                                    Teachers <span>Best educators</span> 
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{url('assets/img/Icons/pages.png')}}" alt="home">
                                    Pages 
                                    <span>All pages</span> 
                                </a>
                                <ul>
                                    <li><a href="{{url('gallery')}}">Gallery</a></li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{url('assets/img/Icons/blog.png')}}" alt="home">
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


@yield('footer')


    
</body>
</html>
