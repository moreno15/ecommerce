<!-- https://ecomercemoreno.herokuapp.com/cart.php -->

<!-- https://hookbin.com/3OJZpEdOwKCEwwjBWMGa   endopint-->
<?php // SDK de Mercado Pago
require 'vendor/autoload.php';

// Crea un ítem en la preferencia

if (isset($_POST["name"])&&isset($_POST["img"])&& isset($_POST["precio"])&& isset($_POST["cantidad"])  ) {
  // code...
$uri=$_SERVER['SERVER_NAME'];

$uri_img="http://".$uri."/".$_POST["img"];


// Agrega credenciales

MercadoPago\SDK::setAccessToken('APP_USR-8208253118659647-112521-dd670f3fd6aa9147df51117701a2082e-677408439');
MercadoPago\SDK::setIntegratorId("dev_2e4ad5dd362f11eb809d0242ac130004");

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

$preference ->external_reference="ronald.27unsch@gmail.com";
$preference ->notification_url="https://hookb.in/3OJZpEdOwKCEwwjBWMGa";
$preference->back_urls = array(
    "success" => "https://ecomercemoreno.herokuapp.com/success.php",
    "failure" => "https://ecomercemoreno.herokuapp.com/failure.php?error=failure",
    "pending" => "https://ecomercemoreno.herokuapp.com/pending.php?error=pending"
);

$preference->auto_return = "approved";


$productos= array();
for ($i=0; $i <1 ; $i++) {
  $item = new MercadoPago\Item();
  $item->id = '1234';
  $item->title = $_POST["name"];
  $item->description = $_POST["name"];
  $item->picture_url = $uri_img;
  $item->quantity = $_POST["cantidad"];
  $item->unit_price = ($_POST["precio"]);

  $productos[]=$item;
}
$preference->items =$productos;

$preference->payment_methods = array(
  "excluded_payment_methods" => array(
    array("id" => "diners")
  ),
  "excluded_payment_types" => array(
    array("id" => "atm")
  ),
  "installments" => 6
);





 $payer = new MercadoPago\Payer();
 $payer->name = "Lalo Landa";
 $payer->surname = "Luevano";
 $payer->email = "test_user_46542185@testuser.com";
 $payer->date_created = "2018-06-02T12:58:41.425-04:00";
 $payer->phone = array(
   "area_code" => "+52",
   "number" => "5549737300"
 );
 $payer->identification = array(
   "type" => "DNI",
   "number" => "22334445"
 );
 $payer->address = array(
   "street_name" => "nsurgentesSur",
   "street_number" => 1602,
   "zip_code" => "03940"
 );
$preference->payer = $payer;



$preference->save();


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
        <div class="row">
          <!-- Products-->
          <div class="col-xl-9 col-lg-8 order-lg-2">
            <!-- Shop Toolbar-->
            <div class="shop-toolbar padding-bottom-1x mb-2">
              <div class="colum">
                <button class="btn btn-primary modal-class" data-toggle="modal" data-target="#modalShopFilters">Categoria</button>

              </div>
            </div>
            <!-- Products Grid-->
            <div class="isotope-grid cols-3 mb-2">
              <div class="gutter-sizer"></div>
              <div class="grid-sizer"></div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">


                  <a class="product-thumb" href="#"><img src="img/shop/products/01.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="#"><?php echo $_POST["name"] ?> </a></h3>
                  <h4 class="product-price">
                     S/.<?php echo ($_POST["precio"]*$_POST["cantidad"]) ?>
                  </h4>
                  <div class="product-buttons">

                    <form action="/gracias.php" method="POST">
                      <script src="https://www.mercadopago.com.pe/integrations/v1/web-payment-checkout.js"
                      data-preference-id="<?php echo $preference->id; ?>" data-button-label="Pagar la compra" > </script>
                    </form>

                  </div>
                </div>
              </div>
            </div>
            <!-- Pagination-->

          </div>
          <!-- Sidebar          -->

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

<?php
}else{?>

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
        <div class="container padding-bottom-3x mb-1" style="height:500px">
          <div class="row">

            <h1>Error</h1>
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
<?php } ?>
