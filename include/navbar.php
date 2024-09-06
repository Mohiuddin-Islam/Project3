<div class="preloader">
        <img class="preloader__image" width="55" src="assets/images/loader.png" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar__left" style="padding: 20px;">
                    
                    
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <a href="#"><i class="agrikon-icon-email"></i>mohiuddincr7@gmail.com</a>
                        <a href="#"><i class="agrikon-icon-clock"></i>Friday - Sat 8:00 - 6:30, Wednesday - CLOSED</a>
                    </div><!-- /.topbar__right -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        <a href="index.php" aria-label="logo image"><img src="assets/images/logo.agri.png" width="190px" height="130px" alt=""></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="index.php">Home</a>
                            <ul>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li class="dropdown"><a href="service-details.php">Services</a>
                            
                        </li>
                        <li class="dropdown">
                            <a href="projects.php">Projects</a>
                            
                        </li>
                        <li class="dropdown"><a href="blog-details.php">News</a>
                            
                        </li>
                        <li class="dropdown"><a href="contact.php">Contact</a></li>
                        <li class="dropdown"><div class="main-header__info">
                        <a href="#" class="search-toggler main-header__search-btn"><i class="agrikon-icon-magnifying-glass"></i></a>
                        <a class="main-header__cart-btn" href="#"><i class="agrikon-icon-shopping-cart"></i></a>
                        
                        </a><!-- /.main-header__info-phone -->
                    </div></li>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style="color: green;"><?php echo $_SESSION['name'];?></a>&nbsp;&nbsp;
                        
                        <!-- <li class="dropdown"><a href="signup.php">Sign Up</a></li>
                        <li class="dropdown"><a href="login.php">Login</a></li> -->
                        <li class="dropdown"><a style="background-color: brown;" class="text-white text-decoration-none btn btn-primary py-1 m-0" href="logout.php">LogOut</a></li>
                    </ul>
                    <!-- /.main-menu__list -->

                    <!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header>