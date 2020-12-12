<?php

$routesArray = explode("/", $_SERVER['REQUEST_URI']);

$urlParams = explode("?", array_filter($routesArray)[1]);
$urlParams1 = explode("&", $urlParams[1]);

 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Compra nuestros productos
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Unishop - Universal E-Commerce Template">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">

    <link rel="stylesheet" media="screen" href="css/app.css">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="css/vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="css/styles.min.css">
    <!-- Modernizr-->
    <script src="js/modernizr.min.js"></script>
    <script src="https://www.mercadopago.com/v2/security.js" view="home"></script>
  </head>
  <!-- Body-->
  <body>
    <!-- Shop Filters Modal-->
    <div class="modal fade" id="modalShopFilters" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <!-- Widget Categories-->
            <section class="widget widget-categories">
              <h3 class="widget-title">Nuestras Categoria</h3>
              <ul>
                <li class="has-children expanded"><a href="#">Zapatos</a><span>(12)</span>
                  <ul>
                    <li><a href="#">Mujer</a><span>(508)</span> </li>
                    <li><a href="#">Varon</a><span>(423)</span> </li>
                  </ul>
                </li>
                <li class="has-children"><a href="#">Ropa</a><span>(2356)</span>
                  <ul>
                    <li><a href="#">Mujer</a><span>(508)</span> </li>
                    <li><a href="#">Varon</a><span>(423)</span> </li>
                  </ul>
                </li>
              </ul>
            </section>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="navbar navbar-sticky">
      <!-- Search-->
      <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Type to search...">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
      </form>
      <div class="site-branding">
        <div class="inner">
          <!-- Site Logo-->
          <a  class="site-logo" href="index.php">
            <h1>LogoTienda</h1>
          </a>
        </div>
      </div>
      <!-- Main Navigation-->
      <nav class="site-menu">
        <ul >
          <li class="has-megamenu active"><a href="index.php"><span>Inicio</span></a>  </li>
          <li class="has-megamenu "><a href="index.php"><span>Sobre Nosotros</span></a>  </li>
          <li style="padding-right:300px" class="has-megamenu "><a href="index.php"><span>Concatos</span></a>  </li>
        </ul>
      </nav>
      <!-- Toolbar--> 
    </header>
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper" style="margin-top:50px">
      <!-- Page Title-->
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        <div class="row" style="height:500px">
          <!-- Products-->
          <div class="col-xl-9 col-lg-8 order-lg-2">
          <?php
            echo json_encode($urlParams1);
           ?>
          </div>
        </div>
      </div>
      <!-- Site Footer-->
      <footer style="background:#000;">
        <div class="container">
        <div class="row">
            <h1 style="color:#fff"> @ Todos los derechos recervados</h1>

        </div>
        </div>
      </footer>
    </div>

    <!-- Back To Top Button-->
    <a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/scripts.min.js"></script>


  </body>
</html>
