<?php
  include('config/config.php');
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NONCES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <?php include("navbar/navbar.php") ?>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cake1.jpg" class="d-block w-100" alt="Slide 1" width="500" height="300">
    </div>
    <div class="carousel-item">
      <img src="images/cake2.jpg" class="d-block w-100" alt="Slide 2" width="500" height="300">
    </div>
    <div class="carousel-item">
      <img src="images/cookies_1.jpg" class="d-block w-100" alt="Slide 3" width="500" height="300">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <div class="site-section site-blocks-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/cake_2.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Cake</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/cookies_1.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Cookies</h3>
              </div>  
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="#">
              <figure class="image">
                <img src="images/pudding_1.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">Collections</span>
                <h3>Puddings</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Featured Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/cake_2.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Choco Cake</a></h3>
                    <p class="mb-0">Baked Chocolate Cake</p>
                    <p class="text-primary font-weight-bold">Rp.50.000</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/cookies_1.jpg" alt="Image placeholder" class="img-fluid" width="300" height="300">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Cookies</a></h3>
                    <p class="mb-0">Chocolate Cookies</p>
                    <p class="text-primary font-weight-bold">Rp.50.000</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/cake_2.jpg" alt="Image placeholder" class="img-fluid"  width="300" height="300" >
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Choco Cake</a></h3>
                    <p class="mb-0">Baked Chocolate Cake</p>
                    <p class="text-primary font-weight-bold">Rp.50.000</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/cookies_1.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Cookies</a></h3>
                    <p class="mb-0">Chocolate Cookies</p>
                    <p class="text-primary font-weight-bold">Rp.50.000</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="images/cake_2.jpg" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="#">Choco Cake</a></h3>
                    <p class="mb-0">Baked Chocolate Cake</p>
                    <p class="text-primary font-weight-bold">Rp.50.000</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  

    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-6 col-lg-4">
              </div>
            </div>
          </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | Sofiyah <i class="" aria-hidden="true"></i>
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>