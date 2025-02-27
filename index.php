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
    <title>Home One || Agrikon || HTML Template For Agriculture Farm & Farmers</title>
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

        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-1-1.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">Welcome to Agriculture Farm</span>
                                    <h2><span>Agriculture</span> <br>
                                        & Eco Farming</h2>
                                    <p style="text-align: justify;">Bangladesh, a country nestled in the fertile plains of the Ganges-Brahmaputra Delta, has a rich agricultural tradition that plays a pivotal role in its economy. The diverse topography and favorable climatic conditions make Bangladesh an ideal hub for cultivating a variety of crops and fostering agro-based industries. In this article, we delve into the cultivation of staple crops like rice, an array of vegetables and fruits, as well as the thriving livestock and aquaculture sectors.</p>
                                    <a href="#" class=" thm-btn">Discover More</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                <!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->

                <!-- If we need navigation buttons -->
                

            </div><!-- /.swiper-container thm-swiper__slider -->
        </section><!-- /.main-slider -->

        <section class="service-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-1.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Agriculture Leader</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-2.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Quality Standards</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-one__box">
                            <img src="assets/images/services/service-1-3.jpg" alt="">
                            <div class="service-one__box-content">
                                <h3><a href="service-details.html">Organic Services</a></h3>
                            </div><!-- /.service-one__box-content -->
                        </div><!-- /.service-one__box -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->

        <section class="about-one">
            <img src="assets/images/icons/about-bg-icon-1-1.png" class="about-one__bg-shape-1" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-one__images">
                            <img src="assets/images/resources/about-1-1.jpg" alt="">
                            <img src="assets/images/resources/about-1-2.jpg" alt="">
                            
                        </div><!-- /.about-one__images -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-7">
                        <div class="about-one__content">
                            <div class="block-title text-left">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>Welcome to agricon</p>
                                <h3>Better Agriculture for
                                    Better Future</h3>
                            </div><!-- /.block-title -->
                            <div class="about-one__tagline">
                                <p>We have 30 years of agriculture & eco farming experience globaly</p>
                            </div><!-- /.about-one__tagline -->
                            <div class="about-one__summery">
                                <p style="text-align: justify;">For many years, we have relied on income from the sale of fish and vegetables. It was difficult to feed a family of four. We earned additional income from planting rice and potatoes. But this was also risky, because downpours, thick fog, drought, and storms destroyed the harvest. In 2021, I found out about crop insurance and soon took one out. I received weekly weather forecasts and agricultural advisory services free-of-charge. This helped me to better manage my crop. In April 2022, I suffered great losses when my potato fields were damaged by a storm. Because I was insured, I was reimbursed for most of my losses. This gave me a feeling of security. By and by, I have started to invest in planting other crops.</p>
                            </div><!-- /.about-one__summery -->
                            <div class="about-one__icon-row">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="about-one__box">
                                            <i class="agrikon-icon-farmer"></i>
                                            <h4><a href="about.html">Professional
                                                    Farmers</a></h4>
                                        </div><!-- /.about-one__box -->
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <div class="about-one__box">
                                            <i class="agrikon-icon-agriculture"></i>
                                            <h4><a href="services.html">Organic & Eco
                                                    Solutions</a></h4>
                                        </div><!-- /.about-one__box -->
                                    </div><!-- /.col-lg-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.about-one__icon-row -->
                            <a href="about.html" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->

        <section class="service-two">
            <div class="service-two__bottom-curv"></div><!-- /.service-two__bottom-curv -->
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__image"></div><!-- /.block-title__image -->
                    <p>Our Services list</p>
                    <h3>What We’re Offering</h3>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/services/service-2-1.jpg" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-tractor"></i>
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details.html">Agriculture Products</a></h3>
                                <p style="text-align: justify;">Livestock farming, particularly cattle and chicken farming, plays a crucial role in meeting the protein demands of the population. Cattle farming in Bangladesh ranges from small-scale traditional systems to modern, organized dairy farms. The dairy industry not only fulfills local milk demand but also provides a source of income for rural communities.</p>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/services/service-2-2.jpg" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-organic-food"></i>
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details.html">Oragnic
                                        Products</a></h3>
                                <p style="text-align: justify;">Bangladesh boasts a diverse range of vegetables and fruits, thanks to its favorable climate and varied agro-ecological zones. From potatoes in the highlands to tropical fruits like mangoes and jackfruits in the plains, the country's agriculture is marked by a rich tapestry of produce. Increasing focus on organic farming practices aligns.</p>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/services/service-2-3.jpg" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-vegetable"></i>
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details.html">Fresh
                                        Vegetables</a></h3>
                                <p style="text-align: justify;">The demand for fruit & vegetable seeds is projected to rise in the Asia-Pacific region, particularly from China and Japan. The increase in agricultural activities, coupled with the rise in demand for crop produce, are driving the growth of the fruit & vegetable seeds market. The growing agricultural activities due to the increase in demand for high-quality.</p>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="assets/images/services/service-2-4.jpg" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="agrikon-icon-dairy"></i>
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details.html">Dairy
                                        Products</a></h3>
                                <p style="text-align: justify;">Bangladesh boasts a diverse range of vegetables and fruits, thanks to its favorable climate and varied agro-ecological zones. From potatoes in the highlands to tropical fruits like mangoes and jackfruits in the plains, the country's agriculture is marked by a rich tapestry of produce. Increasing focus on organic farming practices aligns.</p>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-two -->

        <div class="projects-one project-one__home-one">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__image"></div><!-- /.block-title__image -->
                    <p>Closed projects</p>
                    <h3>Latest Projects List</h3>
                </div><!-- /.block-title -->
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "loop": true, "slidesPerGroup": 1, "pagination": {
            "el": "#projects-one__swiper-pagination",
            "type": "bullets",
            "clickable": true
        },
        "breakpoints": {
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
                "slidesPerView": 2,
                "slidesPerGroup": 2
            }
        }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-1.jpg" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-2.jpg" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-3.jpg" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-4.jpg" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-2.jpg" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <div class="projects-one__single">
                                <img src="assets/images/projects/project-2-4.jpg" alt="">
                                <div class="projects-one__content">
                                    <h3>Harvest Innovation</h3>
                                    <a href="project-details.html" class="projects-one__button"><i class="agrikon-icon-right-arrow"></i></a><!-- /.projects-one__button -->
                                </div><!-- /.projects-one__content -->
                            </div><!-- /.projects-one__single -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                    <div class="swiper-pagination" id="projects-one__swiper-pagination"></div>
                </div><!-- /.swiper-container -->
            </div><!-- /.container -->
        </div><!-- /.projects-one -->

        <section class="call-to-action__three jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
            <img class="call-to-action__three__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="call-to-action__three-image">
                            <img src="assets/images/resources/cta-3-1.jpg" alt="">
                            <img src="assets/images/resources/cta-3-2.jpg" alt="">
                        </div><!-- /.call-to-action__three-image -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="call-to-action__three-content">
                            <h3>Providing High Quality
                                Products</h3>
                            <a href="about.html" class="thm-btn">Discover More</a><!-- /.thm-btn -->
                        </div><!-- /.call-to-action__three-content -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.call-to-action__three -->

        <section class="testimonials-one">
            <img src="assets/images/icons/testimonials-bg-1-1.png" class="testimonials-one__bg" alt="">
            <div class="container">
                <h2 class="testimonials-one__title">Testimonials</h2>
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

        <section class="gray-boxed-wrapper home-one__boxed">
            <img src="assets/images/icons/home-1-blog-bg.png" alt="" class="home-one__boxed-bg">
            <div class="blog-home-two blog-home-one">
                <div class="container">
                    <div class="row top-row">
                        <div class="col-lg-6">
                            <div class="block-title">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>From the blog post</p>
                                <h3>Latest News & Articles
                                    Directly from Blog</h3>
                            </div><!-- /.block-title -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <p class="block-text" style="text-align: justify;">In the past 50 years since CCOF’s founding in 1973, research about organic has come a long way. We now know that the benefits of organic our founding members believed in so fiercely are backed by scientific data to have a measurable effect on the wellbeing of our planet, communities, and economy.</p>
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="blog-card">
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-grid-1.jpg" alt="Best Way to Do Eco and Agriculture">
                                    <a href="blog-details.html"></a>
                                </div><!-- /.blog-card__image -->
                                <div class="blog-card__content">
                                    <div class="blog-card__date">15 May</div><!-- /.blog-card__date -->
                                    <div class="blog-card__meta">
                                
                                    </div><!-- /.blog-card__meta -->
                                    <h3><a href="blog-details.html">Best Way to Do Eco and Agriculture</a></h3>
                                    <a href="blog-details.html" class="thm-btn">Read More</a><!-- /.thm-btn -->
                                </div><!-- /.blog-card__content -->
                            </div><!-- /.blog-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="blog-card">
                                <div class="blog-card__image">
                                    <img src="assets/images/resources/culture view.avif" height="245px" alt="Leverage agile frameworks to provide">
                                    <a href="blog-details.html"></a>
                                </div><!-- /.blog-card__image -->
                                <div class="blog-card__content">
                                    <div class="blog-card__date">15 May</div><!-- /.blog-card__date -->
                                    <div class="blog-card__meta">
                                    
                                    </div><!-- /.blog-card__meta -->
                                    <h3><a href="blog-details.html">Leverage agile frameworks to provide</a></h3>
                                    <a href="blog-details.html" class="thm-btn">Read More</a><!-- /.thm-btn -->
                                </div><!-- /.blog-card__content -->
                            </div><!-- /.blog-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                        <div class="col-md-12 col-lg-4">
                            <div class="blog-card">
                                <div class="blog-card__image">
                                    <img src="assets/images/blog/blog-grid-3.jpg" alt="Organically grow the holistic world view">
                                    <a href="blog-details.html"></a>
                                </div><!-- /.blog-card__image -->
                                <div class="blog-card__content">
                                    <div class="blog-card__date">15 May</div><!-- /.blog-card__date -->
                                    <div class="blog-card__meta">
                                    
                                    </div><!-- /.blog-card__meta -->
                                    <h3><a href="blog-details.html">Organically grow the holistic world view</a></h3>
                                    <a href="blog-details.html" class="thm-btn">Read More</a><!-- /.thm-btn -->
                                </div><!-- /.blog-card__content -->
                            </div><!-- /.blog-card -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                    </div><!-- /.row -->
                    <hr />
                </div><!-- /.container -->
            </div><!-- /.blog-home-two -->
            <div class="blog-home__slogan">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="blog-home__slogan-main">
                                <i class="agrikon-icon-farm"></i>
                                <div class="blog-home__slogan-content">
                                    <h3>We Care About Our Agriculture Growth</h3>
                                    <p style="text-align: justify;">Studies on farms have found that organic crops like fruits, vegetables, grains, and forage can provide similar or even better yields compared to non-organic crops. Numerous studies conclude that with increased organic research and grower education, organic agriculture can produce highly competitive yields.</p>
                                </div><!-- /.blog-home__slogan-content -->
                            </div><!-- /.blog-home__slogan-main -->
                        </div><!-- /.col-lg-9 -->
                        <div class="col-lg-3">
                            <div class="blog-home__slogan-image">
                                <img src="assets/images/resources/blog-cta-1.png" alt="">
                            </div><!-- /.blog-home__slogan-image -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.blog-home__slogan -->
        </section><!-- /.gray-boxed-wrapper -->

        <section class="contact-two">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <div class="contact-two__image">
                        
                            <img src="assets/images/resources/farmar.jpeg" class="img-fluid" alt="">
                        </div><!-- /.contact-two__image -->
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-5 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                        <div class="contact-two__content">
                            <div class="block-title">
                                <div class="block-title__image"></div><!-- /.block-title__image -->
                                <p>Contact now</p>
                                <h3>Leave Us A
                                    Message</h3>
                            </div><!-- /.block-title -->
                            <div class="contact-two__summery">
                                <p style="text-align: justify;">Organic mitigates climate change through practices that sequester carbon, lower energy usage, and reduce emissions. Increasing to 10% organic acreage would reduce emissions equivalent to 601,500 cars per year. Going fully organic would be the equivalent of removing 7.8 million cars from the road!</p>
                            </div><!-- /.contact-two__summery -->
                        </div><!-- /.contact-two__content -->
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                        <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated">
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="text" name="email" placeholder="Email Address">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                </div><!-- /.col-lg-6 -->
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Write Message"></textarea>
                                </div><!-- /.col-lg-12 -->
                                <div class="col-lg-12">
                                    <button type="submit" class="thm-btn">Send Message</button><!-- /.thm-btn -->
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                    </div><!-- /.col-sm-12 col-md-12 col-lg-12 col-xl-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-two -->

    
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
        <?php include "include/footer.php"; ?><!-- /.bottom-footer -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-light.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="agrikon-icon-email"></i>
                    <a href="mailto:mohiuddincr7@gmail.com">mohiuddincr7@gmail.com</a>
                </li>
                <li>
                    <i class="agrikon-icon-telephone"></i>
                    <a href="tel:+8801567980553">01567980553</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="assets/images/resources/flag-1-1.jpg" alt="">
                    <label class="sr-only" for="language-select">select language</label>
                    <!-- /#language-select.sr-only -->
                    <select class="selectpicker" id="language-select">
                        <option value="english">English</option>
                
                    </select>
                </div><!-- /.mobile-nav__language -->
                <div class="mobile-nav__social">
                    
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
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