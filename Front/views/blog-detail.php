
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  
<!-- Mirrored from warethemes.com/html/bready/order-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:26:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>La Caverne à Goûter</title>
    <script language ="JavaScript" src="js/register.js" > </script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script%7CLora:400,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/bakery-icon/style.css">
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
    <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  </head>
  <body>
    <div class="ps-search">
      <div class="ps-search__content"><a class="ps-search__close" href="#"><span></span></a>
        <form class="ps-form--search-2" action="http://warethemes.com/html/bready/do_action" method="post">
          <h3>Enter your keyword</h3>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="">
            <button class="ps-btn active ps-btn--fullwidth">Search</button>
          </div>
        </form>
      </div>
    </div>
    <!-- header-->
    <header class="header header--3" data-sticky="false">
        <?php
        include("codex/header.php");
        ?>
    </header>
    <div class="ps-hero bg--cover" data-background="images/hero/orde">
      <div class="ps-hero__content">
        <h1>Réserver événement</h1>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index-2.html">Home</a></li>
            <li class="active">reserver évenement</li>
          </ol>
        </div>
      </div>
    </div>
    <main class="ps-main">
      <div class="ps-container">
        <div class="ps-product--detail">
          <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 ">
              <div class="ps-product__thumbnail">


              </div>
            </div>

          </div>
        </div>
         
          <div class="ps-section__header text-center">
            <h3 class="ps-section__title">Votre Reservation</h3>
            <p>Toujours à Votre Service</p><span><img src="images/icons/floral.png" alt=""></span>
          </div>
          <form name="f" action="views/ajoutReservation.php" method="POST">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="form-group">
                <div>
                <label>nom <sup>*</sup></label>
                </div>
                  <div>
                <input  class="form-control" type="text" name="nom">
              </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="form-group">
                <div>
                <label>prenom <sup>*</sup></label>
                </div>
                  <div>
                <input  class="form-control" type="text" name="prenom">
              </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="form-group">
                <div>
                <label>Adresse Mail <sup>*</sup></label>
                </div>

                  <input class="form-control" type="text" name="mail" id="mail">
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="form-group">
                <div>
                <label>Adresse<sup>*</sup></label>
                </div>
                  <input class="form-control" type="text" name="adresse">
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="form-group">
                <div>
                <label> Date <sup>*</sup></label>
                </div>
                  <input class="form-control" class="form-control" type="date" name="date">
              </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="form-group">
                <div>
                <label>Description <sup>*</sup></label>
                </div>
                  <input class="form-control" type="text" name="description">
              </div>
            </div>
              </div>
            </div>
      <button class="ps-btn ps-btn--fullwidth ps-btn--yellow" onclick="verifRdv()">réserver évenement  </button>
            </form>
      
          </div>
      </div>
    </main>
    <div class="ps-site-features">
      <div class="ps-container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-delivery-truck-2"></i>
              <h4>Free Shipping <span> On Order Over$199</h4>
              <p>Want to track a package? Find tracking information and order details from Your Orders.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-biscuit-1"></i>
              <h4>Master Chef<span> WITH PASSION</h4>
              <p>Shop zillions of finds, with new arrivals added daily.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-flour"></i>
              <h4>Natural Materials<span> protect your family</h4>
              <p>We always ensure the safety of all products of store</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
            <div class="ps-block--iconbox"><i class="ba-cake-3"></i>
              <h4>Attractive Flavor <span>ALWAYS LISTEN</span></h4>
              <p>We offer a 24/7 customer hotline so you’re never alone if you have a question.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="ps-footer">
      <?php
  include("codex/footer.php");
  ?>
    </footer>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="ps-loading">
      <div class="rectangle-bounce">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
      </div>
    </div>
    <!-- Plugins-->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="plugins/jquery.waypoints.min.js"></script>
    <script src="plugins/jquery.countTo.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="plugins/gmap3.min.js"></script>
    <script src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/slick/slick/slick.min.js"></script>
    <script src="plugins/slick-animation.min.js"></script>
    <script src="plugins/jquery.slimscroll.min.js"></script>
    <!-- Custom scripts-->
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&amp;region=GB"></script>
  </body>

<!-- Mirrored from warethemes.com/html/bready/order-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:26:53 GMT -->
</html>