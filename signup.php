<?php 
session_start();
require_once "dbconfig.php"; 

if(isset($_POST['submit'])){
  extract($_POST);
  $md5 = md5($pass);

  $sql = "INSERT  INTO user(name,email,password)VALUES('$fname','$email','$md5')";

  $insert = mysqli_query($conn,$sql);

  if($insert){
    header("location: login.php");
  }
}


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

    <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- Bracket CSS -->
    <link rel="stylesheet" href="css/bracket.css">
</head>

<body>
<?php include "include/navbar1.php"; ?>
        
    
<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

<div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
  <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal"></span>Agriculture<span class="tx-info"> & Eco Farming</span> <span class="tx-normal"></span></div>
  <div class="tx-center mg-b-40"><b>Welcome to Agriculture Farm</b></div>

  <form action="" method="post">
  <div class="form-group">
    <input type="text" class="form-control" name="fname" placeholder="Enter your Fullname">
  </div><!-- form-group -->
  <div class="form-group">
    <input type="text" class="form-control" name="email" placeholder="Enter your Email">
  </div><!-- form-group -->
  <div class="form-group">
    <input type="text" class="form-control" name="pass" placeholder="Enter your Password">
  </div><!-- form-group -->
  <div class="form-group">
    <label class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Birthday</label>
    <div class="row row-xs">
      <div class="col-sm-4">
        <select class="form-control select2" data-placeholder="Month">
          <option label="Month"></option>
          <option value="1">January</option>
          <option value="2">February</option>
          <option value="3">March</option>
          <option value="4">April</option>
          <option value="5">May</option>
        </select>
      </div><!-- col-4 -->
      <div class="col-sm-4 mg-t-20 mg-sm-t-0">
        <select class="form-control select2" data-placeholder="Day">
          <option label="Day"></option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div><!-- col-4 -->
      <div class="col-sm-4 mg-t-20 mg-sm-t-0">
        <select class="form-control select2" data-placeholder="Year">
          <option label="Year"></option>
          <option value="1">2010</option>
          <option value="2">2011</option>
          <option value="3">2012</option>
          <option value="4">2013</option>
          <option value="5">2014</option>
        </select>
      </div><!-- col-4 -->
    </div><!-- row -->
  </div><!-- form-group -->
  <div class="form-group tx-12">By clicking the Sign Up button below, you agreed to our privacy policy and terms of use of our website.</div>
  <button type="submit" name="submit" class="btn btn-info btn-block">Sign Up</button>

  </form>

  <div class="mg-t-40 tx-center">Not yet a member? <a href="login.php" class="tx-info">Sign In</a></div>
</div><!-- login-wrapper -->
</div>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
      $(function(){
        'use strict';

        // Check if video can play, and play it
        var video = document.getElementById('headVideo');
        video.addEventListener('canplay', function() {
          video.play();
        });

      });
    </script>
    
    <div class="bottom-footer">
            <div class="container">
                <p>© Copyright all Reserved 2024</p>
                <div class="bottom-footer__links">
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                </div><!-- /.bottom-footer__links -->
            </div><!-- /.container -->
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