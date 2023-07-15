<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Nonces &mdash; Dashboard</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"
    />
    <link rel="stylesheet" href="fonts/icomoon/style.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/style.css" />

    <style>
      .img_product{
        width: 100px;
        object-fit: contain;
      }
    </style>
  </head>
  <body>
    <div class="site-wrap">
      <header class="site-navbar" role="banner">
        <div class="site-navbar-top">
          <div class="container">
            <div class="row align-items-center">
              <div
                class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left"
              ></div>

              <div
                class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center"
              >
                <div class="site-logo">
                  <a href="index.php" class="js-logo-clone">Nonces</a>
                </div>
              </div>

              <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                <div class="site-top-icons">
                  <ul>
                    <li class="has-children">
                      <a href="#">
                        <span class="icon icon-person"></span>
                      </a>
                      <ul class="dropdown">
                        <li><a href="?page=my_profile">My Profile</a></li>
                        <li><a href="?page=my_orders">My Orders</a></li>
                        <li><a href="./user-area/logout.php">Logout</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="?page=cart" class="site-cart">
                        <span class="icon icon-shopping_cart"></span>
                        <span class="count">2</span>
                      </a>
                    </li>
                    <li class="d-inline-block d-md-none ml-md-0">
                      <a href="#" class="site-menu-toggle js-menu-toggle"
                        ><span class="icon-menu"></span
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <nav class="site-navigation text-right text-md-center" role="navigation">
          <div class="container">
            <ul class="site-menu js-clone-nav d-none d-md-block">
              <li><a href="?page=dashboard">Home</a></li>
              <li class="has-children">
                <a href="#">Category</a>
                <ul class="dropdown">
                  <li><a href="#">Cat One</a></li>
                  <li><a href="#">Cat Two</a></li>
                  <li><a href="#">Cat Three</a></li>
                </ul>
              </li>
              <li><a href="?page=menu">Our Menu</a></li>
              <li><a href="?page=contact">Contact</a></li>
              <li><a href="?page=about">About</a></li>
            </ul>
          </div>
        </nav>
      </header>

      <?php
        if(@$_GET['page'] == 'dashboard' || @$_GET['page'] == ''){
          include"dashboard.php";
        }else if(@$_GET['page'] == 'menu'){
          include"./user-area/menu.php";
        }else if(@$_GET['page'] == 'contact'){
          include"contact.php";
        }else if(@$_GET['page'] == 'about'){
          include"about.php";
        }else if(@$_GET['page'] == 'my_profile'){
          include"./user-area/profile.php";
        }else if(@$_GET['page'] == 'my_orders'){
          include"./user-area/all_orders.php";
        }else if(@$_GET['page'] == 'cart'){
          include"cart.php";
        }
        // else if(@$_GET['page'] == 'checkout'){
        //   include"checkout.php";
        // }
      ?>

      <footer class="site-footer border-top">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-12">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script
                  data-cfasync="false"
                  src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
                ></script>
                <script>
                  document.write(new Date().getFullYear());
                </script>
                All rights reserved | This template is made with
                <i class="icon-heart" aria-hidden="true"></i> by
                <a
                  href="https://github.com/sofiyahmchsn"
                  target="_blank"
                  class="text-primary"
                  >sofiyahmchsn</a
                >
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
