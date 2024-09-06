
<?php

session_start();

$user_first_name = $_SESSION['name'];
if(!empty($user_first_name)){


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Page || Agrikon || HTML Template For Agriculture Farm & Farmers</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <meta name="description" content="Agrikon HTML Template For Agriculture Farm & Farmers">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/jarallax.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/agrikon-icons.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/nouislider.pips.css">

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
<?php include "include/navbar.php"; ?><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/banner9.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li>/</li>
                    <li><span>About</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>About Us</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="service-one service-one__about">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-1.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.php">Agriculture Leader</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-2.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.php">Quality Standards</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-3.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.php">Organic Services</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->

        <div class="client-carousel client-carousel__has-border-top client-carousel__about-page">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "375": {
                    "spaceBetween": 30,
                    "slidesPerView": 2
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 3
                },
                "767": {
                    "spaceBetween": 50,
                    "slidesPerView": 4
                },
                "991": {
                    "spaceBetween": 50,
                    "slidesPerView": 5
                },
                "1199": {
                    "spaceBetween": 100,
                    "slidesPerView": 5
                }
            }}'>
                    
                </div><!-- /.thm-swiper__slider -->
            </div><!-- /.container -->
        </div><!-- /.client-carousel -->

        <section class="team-one">
            <img src="assets/images/icons/team-bg-1-1.png" alt="" class="team-one__bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-5">
                        <div class="team-one__content">
                            <div class="block-title">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>meet the team</p>
                                <h3>Expert Farmers</h3>
                            </div><!-- /.block-title -->
                            <div class="team-one__summery">
                                <p style="text-align: justify;">A key component of the Seeds Program is teaching rural bangladsesh how to produce thriving gardens using permaculture systems and regenerative farming methods. The resources and needs of every family in the Seed for a Future Program differ, creating unique opportunities for the team to best align needs and resources with each family.</p>
                            </div><!-- /.team-one__summery -->

                            <!-- If we need navigation buttons -->
                        

                        </div><!-- /.team-one__content -->
                    </div><!-- /.col-md-12 col-lg-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="team-one__carousel-wrap">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "slidesPerGroup": 1, "autoplay": { "delay": 5000 }, "navigation": {
            "nextEl": "#team-one__swiper-button-next",
            "prevEl": "#team-one__swiper-button-prev"
        },"breakpoints": {
            "0": {
                "spaceBetween": 0,
                "slidesPerView": 1,
                "slidesPerGroup": 1
            },
            "640": {
                "spaceBetween": 30,
                "slidesPerView": 2,
                "slidesPerGroup": 2
            },
            "992": {
                "spaceBetween": 30,
                "slidesPerView": 3,
                "slidesPerGroup": 3
            },
            "1200": {
                "spaceBetween": 30,
                "slidesPerView": 3,
                "slidesPerGroup": 3
            }
        }}'>

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="assets/images/team/farmar3.webp" alt="Rahim Mia" style="height: 265px; width: 385px;">
                                    
                                </div><!-- /.team-card__image -->
                                <h3>Rahim Mia</h3>
                                <p>Farmer</p>
                            </div><!-- /.team-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="assets/images/team/expart farmer 4.jpg" alt="Jamal Hasan" width="385px" height="265px">
                                
                                </div><!-- /.team-card__image -->
                                <h3>Jamal Hasan</h3>
                                <p>Farmer</p>
                            </div><!-- /.team-card -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="team-card">
                                <div class="team-card__image">
                                    <img src="assets/images/team/farmar 7.jpg" alt="Nargis Akter" width="385px" height="265px">
                                    
                                </div><!-- /.team-card__image -->
                                <h3>Nargis Akter</h3>
                                <p>Farmer</p>
                            </div><!-- /.team-card -->
                        </div><!-- /.swiper-slide -->
                        
                    
                    </div><!-- /.team-card__image -->
                            
                </div><!-- /.team-card__image -->
            
            </div><!-- /.swiper-wrapper -->

        </div><!-- /.thm-swiper__slider -->
    </div><!-- /.team-one__carousel-wrap -->
</section><!-- /.team-one -->

<section class="testimonials-one">
    <img src="assets/images/icons/testimonials-bg-1-1.png" class="testimonials-one__bg" alt="">
    <div class="container">
        
        <div id="testimonials-one__carousel" class="testimonials-one__carousel swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonials-one__icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div><!-- /.testimonials-one__icons -->
                    <p style="text-align: justify;">Food is a universal need for mankind. This makes agriculture an important source of livelihood for most people worldwide, as well as a sector related to the basic right to food and nutrition. While considering intersectional inequalities and the Global North/Global South wealth gap, we support rural men and women, disaster and conflict-affected populations to achieve economic independence.</p>
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div><!-- /.testimonials-one__icons -->
                    <p style="text-align: justify;">Organic provides family stability for farmers by providing year-round employment and higher wages. It protects agricultural workers and their families from regular exposure to synthetic pesticides.</p>
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__icons">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div><!-- /.testimonials-one__icons -->
                    <p style="text-align: justify;">Organic livestock production sequesters carbon through grazing practices. Organic standards require ranchers to graze on organic pasture for at least 120 days per year. Studies show that grazing leads to soil carbon sequestration, especially under grazing systems that allow animals to graze specific amounts on small pastures.</p>
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /#testimonials-one__carousel -->

        <div id="testimonials-one__thumb" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonials-one__image">
                        <img src="assets/images/abdullah.jpg" width="410px" height="110px" alt="">
                    </div><!-- /.testimonials-one__image -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__image">
                        <img src="assets/images/saif.jpg" width="410px" height="110px" alt="">
                    </div><!-- /.testimonials-one__image -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__image">
                        <img src="assets/images/Rakib.jpg" width="410px" height="110px" alt="">
                    </div><!-- /.testimonials-one__image -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /#testimonials-one__thumb.swiper-container -->

        <div id="testimonials-one__meta" class="testimonials-one__carousel swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonials-one__meta">
                        <h4>A.S.M Abdullah</h4>
                        <span>Customer</span>
                    </div><!-- /.testimonials-one__meta -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__meta">
                        <h4>Saif Jahan</h4>
                        <span>Customer</span>
                    </div><!-- /.testimonials-one__meta -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="testimonials-one__meta">
                        <h4>Mahamudul Haque</h4>
                        <span>Customer</span>
                    </div><!-- /.testimonials-one__meta -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
        </div><!-- /#testimonials-one__meta.swiper-container -->
        <div class="swiper-pagination" id="testimonials-one__swiper-pagination"></div>
    </div><!-- /.container -->
</section><!-- /.testimonials-one -->

        <section class="about-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-three__image">
                            <img src="assets/images/resources/about-3-2.jpg" alt="">
                        </div><!-- /.about-three__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-three__content">
                            <div class="block-title">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>Get to know us</p>
                                <h3>30 Years Agriculture
                                    Experience</h3>
                            </div><!-- /.block-title -->
                            <ul class="about-three__list list-unstyled">
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Management of Agriculture
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Food Grains Production
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Internal Procurement of Food Grains
                                </li>
                                <li>
                                    <i class="fa fa-check-circle"></i>
                                    Public Food Distribution
                                </li>
                            </ul><!-- /.about-three__list list-unstyled -->
                            <div class="about-three__summery">
                                <p style="text-align: justify;">Organic livestock production sequesters carbon through grazing practices. Organic standards require ranchers to graze on organic pasture for at least 120 days per year. Studies show that grazing leads to soil carbon sequestration, especially under grazing systems that allow animals to graze specific amounts on small pastures. </p>
                            </div><!-- /.about-three__summery -->
                            <div class="about-three__signs">
                                <img src="#" alt="">
                            
                            </div><!-- /.about-three__signs -->
                        </div><!-- /.about-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-three -->


        <section class="call-to-action jarallax" data-jarallax data-speed="0.3" data-imgPosition="-80% 50%">
            <img class="call-to-action__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
            <!-- /.call-to-action__bg -->
            <div class="container">
                <div class="call-to-action__content">
                    <i class="call-to-action__icon agrikon-icon-agriculture-2"></i>
                    <h3>We’re popular leader in agriculture
                        market globally</h3>
                </div><!-- /.call-to-action__content -->
                <div class="call-to-action__button">
                    <a href="services.html" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                </div><!-- /.call-to-action__button -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action -->

        <?php include "include/footer.php"; ?>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/circle-progress.min.js"></script>
    <script src="assets/js/wNumb.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>

    <!-- template js -->
    <script src="assets/js/theme.js"></script>
</body>
</html>
<?php
}else{
    header('location:login.php');
}

?>
