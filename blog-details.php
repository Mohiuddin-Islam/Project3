
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
    <title>News Details Page || Agrikon || HTML Template For Agriculture Farm & Farmers</title>
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
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/banner7.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li>/</li>
                    <li><span>News Details</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2>News Details</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->


        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details__image">
                            <img src="assets/images/blog/blog-d-1-1.jpg" class="img-fluid" alt="">
                        </div><!-- /.blog-details__image -->
                        <div class="blog-card__content">
                            <div class="blog-card__date">21 March</div><!-- /.blog-card__date -->
                            <div class="blog-card__meta">
                            
                            </div><!-- /.blog-card__meta -->
                            <h3><a href="blog-details.php">Best Way to Do Eco and Agriculture</a></h3>
                        </div><!-- /.blog-card__content -->
                        <div class="blog-details__content">
                            <p style="text-align: justify;">A key component of the Seeds Program is teaching rural Bangladesh how to produce thriving gardens using permaculture systems and regenerative farming methods. The resources and needs of every family in the Seed for a Future Program differ, creating unique opportunities for the team to best align needs and resources with each family. During the planning visit to a participating family's home, our team and family members assess available space and decide what to include, such as a nutrition garden and animal protein sources such as poultry. </p>

                        
                            <p style="text-align: justify;">They also review the feasibility of planting longer-term producers such as fruit trees or bamboo, which produces edible shoots and excellent building material.</p>

                            <p style="text-align: justify;">The team spends at least 12 months with the family, coaching and mentoring them during weekly in-home visits. The Program supplies initial seeds or seedlings and starter animals, and training includes the skills to grow their own “replacement” plants and animals. Thus, the family's permaculture activities become self-sustaining.</p>
                        
                        </div><!-- /.blog-details__content -->

                        <div class="blog-details__meta">
                            <div class="blog-details__tags">
                                <span>Tags:</span>
                                <a href="#">Agriculture,</a>
                                <a href="#">Food,</a>
                                <a href="#">Economy</a>
                            </div><!-- /.blog-details__tags -->
                        
                        </div><!-- /.blog-details__meta -->

                        <div class="blog-author">
                            <div class="blog-author__image">
                                <img src="assets/images/mohiuddin.jpg" width="200px" height="200px" alt="">
                            </div><!-- /.blog-author__image -->
                            <div class="blog-author__content">
                                <h3>Mohiuddin Islam</h3>
                                <h3>Founder & CEO</h3>
                                <p style="text-align: justify;">The International Society of Organic Agriculture Research (ISOFAR) supports research for the promotion of organic agriculture by facilitating global cooperation, methodological development, education, and knowledge exchange. ISOFAR supports individual researchers through membership services, publications, and events, and works to integrate stakeholders in the research process.</p>
                            </div><!-- /.blog-author__content -->
                        </div><!-- /.blog-author -->

                        <div class="blog-comment">
                            <h2>2 Comments</h2>
                            <div class="blog-comment__box">
                                <div class="blog-comment__image">
                                    <img src="assets/images/Rakib.jpg" width="150px" height="150px">
                                </div><!-- /.blog-comment__image -->
                                <div class="blog-comment__content">
                                    <h3>Mahamudul Rakib</h3>
                                    <p style="text-align: justify;">Organic livestock production sequesters carbon through grazing practices. Organic standards require ranchers to graze on organic pasture for at least 120 days per year. Studies show that grazing leads to soil carbon sequestration, especially under grazing systems that allow animals to graze specific amounts on small pastures.</p>
                                    <a href="#" class="thm-btn">Reply</a><!-- /.thm-btn -->
                                </div><!-- /.blog-comment__content -->
                            </div><!-- /.blog-comment__box -->
                            <div class="blog-comment__box">
                                <div class="blog-comment__image">
                                    <img src="assets/images/abdullah.jpg" width="150PX" height="150PX">
                                </div><!-- /.blog-comment__image -->
                                <div class="blog-comment__content">
                                    <h3>A.S.M Abdullah</h3>
                                    <p style="text-align: justify;">Food is a universal need for mankind. This makes agriculture an important source of livelihood for most people worldwide, as well as a sector related to the basic right to food and nutrition. While considering intersectional inequalities and the Global North/Global South wealth gap, we support rural men and women, disaster and conflict-affected populations to achieve economic independence.</p>
                                    <a href="#" class="thm-btn">Reply</a><!-- /.thm-btn -->
                                </div><!-- /.blog-comment__content -->
                            </div><!-- /.blog-comment__box -->
                        </div><!-- /.blog-comment -->
                        <div class="comment-form">
                            <h2>Leave a Comments</h2>

                            <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="name" placeholder="Full Name">
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <input type="text" name="email" placeholder="Email Address">
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-12">
                                        <textarea name="message" placeholder="Write Message"></textarea>
                                    </div><!-- /.col-lg-12 -->
                                    <div class="col-lg-12">
                                        <button type="submit" class="thm-btn">Submit Comment</button><!-- /.thm-btn -->
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </form>
                        </div><!-- /.comment-form -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="blog-sidebar">
                            <div class="blog-sidebar__search">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="agrikon-icon-magnifying-glass"></i></button>
                                </form>
                            </div><!-- /.blog-sidebar__search -->
                            <div class="blog-sidebar__posts">
                                <h3>Recent Posts</h3>
                                <ul>
                                    <li>
                                        <img src="assets/images/blog/blog-s-1-1.jpg" alt="">
                                        <span><i class="far fa-comments"></i> 2 Comments
                                        </span>
                                        <h4><a href="blog-details.html">Agriculture Miracle
                                                you Don't Know</a></h4>
                                    </li>
                                    <li>
                                        <img src="assets/images/blog/blog-s-1-2.jpg" alt="">
                                        <span><i class="far fa-comments"></i> 2 Comments
                                        </span>
                                        <h4><a href="blog-details.html">Agriculture Miracle
                                                you Don't Know</a></h4>
                                    </li>
                                    <li>
                                        <img src="assets/images/blog/blog-s-1-3.jpg" alt="">
                                        <span><i class="far fa-comments"></i> 2 Comments
                                        </span>
                                        <h4><a href="blog-details.html">Agriculture Miracle
                                                you Don't Know</a></h4>
                                    </li>
                                </ul>
                            </div><!-- /.blog-sidebar__posts -->
                            <div class="blog-sidebar__categories">
                                <h3>Catgories</h3>
                                <ul>
                                    <li>
                                        <a href="#"><i class="agrikon-icon-right-arrow"></i>Agriculture
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="agrikon-icon-right-arrow"></i>

                                            Organic Food</a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="agrikon-icon-right-arrow"></i>Dairy Farm</a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="agrikon-icon-right-arrow"></i>Economy Solution</a>
                                    </li>

                                    <li>
                                        <a href="#"><i class="agrikon-icon-right-arrow"></i>Harvests Innovations</a>
                                    </li>
                                </ul>
                            </div><!-- /.blog-sidebar__categories -->
                            <div class="blog-sidebar__tags">
                                <h3>Tags</h3>
                                <div class="blog-sidebar__tags-links">
                                    <a href="#">Agriculture,</a>
                                    <a href="#">Food,</a>
                                    <a href="#">Healthy,</a>
                                    <a href="#">Dairy,</a>
                                    <a href="#">Organic,</a>
                                    <a href="#">Farm,</a>
                                    <a href="#">Economy</a>
                                </div><!-- /.blog-sidebar__tags-links -->
                            </div><!-- /.blog-sidebar__tags -->
                        </div><!-- /.blog-sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-details -->

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

