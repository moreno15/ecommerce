<?php // SDK de Mercado Pago
require 'apimercado/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-8208253118659647-112521-dd670f3fd6aa9147df51117701a2082e-677408439');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;

$preference->items = array($item);

$payer = new MercadoPago\Payer();
 $payer->name = "Charles";
 $payer->surname = "Luevano";
 $payer->email = "test_user_46542185@testuser.com";
 $payer->date_created = "2018-06-02T12:58:41.425-04:00";
 $payer->phone = array(
   "area_code" => "+51",
   "number" => "949 128 866"
 );

 $payer->identification = array(
   "type" => "DNI",
   "number" => "12345678"
 );

 $payer->address = array(
   "street_name" => "Cuesta Miguel Armendáriz",
   "street_number" => 1004,
   "zip_code" => "11020"
 );

$preference->$payer = array($payer);

$preference->back_urls = array(
    "success" => "https://www.tu-sitio/success",
    "failure" => "http://www.tu-sitio/failure",
    "pending" => "http://www.tu-sitio/pending"
);

$preference->auto_return = "approved";



$preference->save();

?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Cart
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
    <!-- Off-Canvas Category Menu-->
    <div class="offcanvas-container" id="shop-categories">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title">Shop Categories</h3>
      </div>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="has-children"><span><a href="#">Men's Shoes</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Sneakers</a></li>
              <li><a href="#">Loafers</a></li>
              <li><a href="#">Boat Shoes</a></li>
              <li><a href="#">Sandals</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Women's Shoes</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Sandals</a></li>
              <li><a href="#">Flats</a></li>
              <li><a href="#">Sneakers</a></li>
              <li><a href="#">Heels</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Men's Clothing</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Shirts &amp; Tops</a></li>
              <li><a href="#">Pants</a></li>
              <li><a href="#">Jackets</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Women's Clothing</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Dresses</a></li>
              <li><a href="#">Shirts &amp; Tops</a></li>
              <li><a href="#">Shorts</a></li>
              <li><a href="#">Swimwear</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Kid's Shoes</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Boots</a></li>
              <li><a href="#">Sandals</a></li>
              <li><a href="#">Crib Shoes</a></li>
              <li><a href="#">Loafers</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Bags</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Handbags</a></li>
              <li><a href="#">Backpacks</a></li>
              <li><a href="#">Luggage</a></li>
              <li><a href="#">Wallets</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Accessories</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li><a href="#">Sunglasses</a></li>
              <li><a href="#">Hats</a></li>
              <li><a href="#">Watches</a></li>
              <li><a href="#">Jewelry</a></li>
              <li><a href="#">Belts</a></li>
              <li><a href="#">View All</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Off-Canvas Mobile Menu-->
    <div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="account-orders.html">
        <div class="user-ava"><img src="img/account/user-ava-md.jpg" alt="Daniel Adams">
        </div>
        <div class="user-info">
          <h6 class="user-name">Daniel Adams</h6><span class="text-sm text-white opacity-60">290 Reward points</span>
        </div></a>
      <nav class="offcanvas-menu">
        <ul class="menu">
          <li class="has-children"><span><a href="index.html"><span>Home</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="index.html">Featured Products Slider</a></li>
                <li><a href="home-featured-categories.html">Featured Categories</a></li>
                <li><a href="home-collection-showcase.html">Products Collection Showcase</a></li>
                <li><a href="home-dark-header.html">Dark Header</a></li>
            </ul>
          </li>
          <li class="has-children active"><span><a href="shop-grid-ls.html"><span>Shop</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="shop-categories.html">Shop Categories</a></li>
              <li class="has-children"><span><a href="shop-grid-ls.html"><span>Shop Grid</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                    <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                    <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="shop-list-ls.html"><span>Shop List</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                    <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                    <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                </ul>
              </li>
                <li><a href="shop-single.html">Single Product</a></li>
                <li class="active"><a href="cart.html">Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#">Categories</a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li class="has-children"><span><a href="#">Men's Shoes</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Sneakers</a></li>
                  <li><a href="#">Loafers</a></li>
                  <li><a href="#">Boat Shoes</a></li>
                  <li><a href="#">Sandals</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Women's Shoes</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Sandals</a></li>
                  <li><a href="#">Flats</a></li>
                  <li><a href="#">Sneakers</a></li>
                  <li><a href="#">Heels</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Men's Clothing</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Shirts &amp; Tops</a></li>
                  <li><a href="#">Pants</a></li>
                  <li><a href="#">Jackets</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Women's Clothing</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Dresses</a></li>
                  <li><a href="#">Shirts &amp; Tops</a></li>
                  <li><a href="#">Shorts</a></li>
                  <li><a href="#">Swimwear</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Bags</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Handbags</a></li>
                  <li><a href="#">Backpacks</a></li>
                  <li><a href="#">Luggage</a></li>
                  <li><a href="#">Wallets</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Accessories</a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                  <li><a href="#">Sunglasses</a></li>
                  <li><a href="#">Hats</a></li>
                  <li><a href="#">Watches</a></li>
                  <li><a href="#">Jewelry</a></li>
                  <li><a href="#">Belts</a></li>
                  <li><a href="#">View All</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="has-children"><span><a href="account-orders.html"><span>Account</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="account-login.html">Login / Register</a></li>
                <li><a href="account-password-recovery.html">Password Recovery</a></li>
                <li><a href="account-orders.html">Orders List</a></li>
                <li><a href="account-wishlist.html">Wishlist</a></li>
                <li><a href="account-profile.html">Profile Page</a></li>
                <li><a href="account-address.html">Contact / Shipping Address</a></li>
                <li><a href="account-open-ticket.html">Open Ticket</a></li>
                <li><a href="account-tickets.html">My Tickets</a></li>
                <li><a href="account-single-ticket.html">Single Ticket</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="blog-rs.html"><span>Blog</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
              <li class="has-children"><span><a href="blog-rs.html"><span>Blog Layout</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="blog-rs.html">Blog Right Sidebar</a></li>
                    <li><a href="blog-ls.html">Blog Left Sidebar</a></li>
                    <li><a href="blog-ns.html">Blog No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="blog-single-rs.html"><span>Single Post Layout</span></a><span class="sub-menu-toggle"></span></span>
                <ul class="offcanvas-submenu">
                    <li><a href="blog-single-rs.html">Post Right Sidebar</a></li>
                    <li><a href="blog-single-ls.html">Post Left Sidebar</a></li>
                    <li><a href="blog-single-ns.html">Post No Sidebar</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="has-children"><span><a href="#"><span>Pages</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="about.html">About Us</a></li>
                <li><a href="mobile-app.html">Unishop Mobile App</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="faq.html">Help / FAQ</a></li>
                <li><a href="order-tracking.html">Order Tracking</a></li>
                <li><a href="search-results.html">Search Results</a></li>
                <li><a href="404.html">404</a></li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
              <li><a class="text-danger" href="docs/dev-setup.html">Documentation</a></li>
            </ul>
          </li>
          <li class="has-children"><span><a href="components/accordion.html"><span>Components</span></a><span class="sub-menu-toggle"></span></span>
            <ul class="offcanvas-submenu">
                <li><a href="components/accordion.html">Accordion</a></li>
                <li><a href="components/alerts.html">Alerts</a></li>
                <li><a href="components/buttons.html">Buttons</a></li>
                <li><a href="components/cards.html">Cards</a></li>
                <li><a href="components/carousel.html">Carousel</a></li>
                <li><a href="components/countdown.html">Countdown</a></li>
                <li><a href="components/forms.html">Forms</a></li>
                <li><a href="components/gallery.html">Gallery</a></li>
                <li><a href="components/google-maps.html">Google Maps</a></li>
                <li><a href="components/images.html">Images &amp; Figures</a></li>
                <li><a href="components/list-group.html">List Group</a></li>
                <li><a href="components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                <li><a href="components/media.html">Media Object</a></li>
                <li><a href="components/modal.html">Modal</a></li>
                <li><a href="components/pagination.html">Pagination</a></li>
                <li><a href="components/pills.html">Pills</a></li>
                <li><a href="components/progress-bars.html">Progress Bars</a></li>
                <li><a href="components/shop-items.html">Shop Items</a></li>
                <li><a href="components/steps.html">Steps</a></li>
                <li><a href="components/tables.html">Tables</a></li>
                <li><a href="components/tabs.html">Tabs</a></li>
                <li><a href="components/team.html">Team</a></li>
                <li><a href="components/toasts.html">Toast Notifications</a></li>
                <li><a href="components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                <li><a href="components/typography.html">Typography</a></li>
                <li><a href="components/video-player.html">Video Player</a></li>
                <li><a href="components/widgets.html">Widgets</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    <!-- Topbar-->
    <div class="topbar">
      <div class="topbar-column"><a class="hidden-md-down" href="mailto:support@unishop.com"><i class="icon-mail"></i>&nbsp; support@unishop.com</a><a class="hidden-md-down" href="tel:00331697720"><i class="icon-bell"></i>&nbsp; 00 33 169 7720</a><a class="social-button sb-facebook shape-none sb-dark" href="#" target="_blank"><i class="socicon-facebook"></i></a><a class="social-button sb-twitter shape-none sb-dark" href="#" target="_blank"><i class="socicon-twitter"></i></a><a class="social-button sb-instagram shape-none sb-dark" href="#" target="_blank"><i class="socicon-instagram"></i></a><a class="social-button sb-pinterest shape-none sb-dark" href="#" target="_blank"><i class="socicon-pinterest"></i></a>
      </div>
      <div class="topbar-column"><a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Get mobile app</a>
        <div class="lang-currency-switcher-wrap">
          <div class="lang-currency-switcher dropdown-toggle"><span class="language"><img alt="English" src="img/flags/GB.png"></span><span class="currency">$ USD</span></div>
          <div class="dropdown-menu">
            <div class="currency-select">
              <select class="form-control form-control-rounded form-control-sm">
                <option value="usd">$ USD</option>
                <option value="usd">€ EUR</option>
                <option value="usd">£ UKP</option>
                <option value="usd">¥ JPY</option>
              </select>
            </div><a class="dropdown-item" href="#"><img src="img/flags/FR.png" alt="Français">Français</a><a class="dropdown-item" href="#"><img src="img/flags/DE.png" alt="Deutsch">Deutsch</a><a class="dropdown-item" href="#"><img src="img/flags/IT.png" alt="Italiano">Italiano</a>
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
          <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
          <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
          <!-- Site Logo--><a class="site-logo" href="index.html"><img src="img/logo/logo.png" alt="Unishop"></a>
        </div>
      </div>
      <!-- Main Navigation-->
      <nav class="site-menu">
        <ul>
          <li class="has-megamenu"><a href="index.html"><span>Home</span></a>
            <ul class="mega-menu">
              <li><a class="d-block img-thumbnail text-center navi-link" href="index.html"><img alt="Featured Products Slider" src="img/mega-menu-home/01.jpg">
                  <h6 class="mt-3">Featured Products Slider</h6></a></li>
              <li><a class="d-block img-thumbnail text-center navi-link" href="home-featured-categories.html"><img alt="Featured Categories" src="img/mega-menu-home/02.jpg">
                  <h6 class="mt-3">Featured Categories</h6></a></li>
              <li><a class="d-block img-thumbnail text-center navi-link" href="home-collection-showcase.html"><img alt="Products Collection Showcase" src="img/mega-menu-home/03.jpg">
                  <h6 class="mt-3">Products Collection Showcase</h6></a></li>
              <li><a class="d-block img-thumbnail text-center navi-link" href="home-dark-header.html"><img alt="Dark Header" src="img/mega-menu-home/04.jpg">
                  <h6 class="mt-3">Dark Header</h6></a></li>
            </ul>
          </li>
          <li class="active"><a href="shop-grid-ls.html"><span>Shop</span></a>
            <ul class="sub-menu">
                <li><a href="shop-categories.html">Shop Categories</a></li>
              <li class="has-children"><a href="shop-grid-ls.html"><span>Shop Grid</span></a>
                <ul class="sub-menu">
                    <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                    <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                    <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="shop-list-ls.html"><span>Shop List</span></a>
                <ul class="sub-menu">
                    <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                    <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                    <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                </ul>
              </li>
                <li><a href="shop-single.html">Single Product</a></li>
                <li class="active"><a href="cart.html">Cart</a></li>
              <li class="has-children"><a href="checkout-address.html"><span>Checkout</span></a>
                <ul class="sub-menu">
                    <li><a href="checkout-address.html">Address</a></li>
                    <li><a href="checkout-shipping.html">Shipping</a></li>
                    <li><a href="checkout-payment.html">Payment</a></li>
                    <li><a href="checkout-review.html">Review</a></li>
                    <li><a href="checkout-complete.html">Complete</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="has-megamenu"><a href="#"><span>Mega Menu</span></a>
            <ul class="mega-menu">
              <li><span class="mega-menu-title">Top Categories</span>
                <ul class="sub-menu">
                  <li><a href="#">Men's Shoes</a></li>
                  <li><a href="#">Women's Shoes</a></li>
                  <li><a href="#">Shirts and Tops</a></li>
                  <li><a href="#">Swimwear</a></li>
                  <li><a href="#">Shorts and Pants</a></li>
                  <li><a href="#">Accessories</a></li>
                </ul>
              </li>
              <li><span class="mega-menu-title">Specialty Shops</span>
                <ul class="sub-menu">
                  <li><a href="#">Junior's Shop</a></li>
                  <li><a href="#">Swim Shop</a></li>
                  <li><a href="#">Athletic Shop</a></li>
                  <li><a href="#">Outdoor Shop</a></li>
                  <li><a href="#">Luxury Shop</a></li>
                  <li><a href="#">Accessories Shop</a></li>
                </ul>
              </li>
              <li>
                <section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
                  <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                    <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                    <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
                  </div>
                </section>
              </li>
              <li>
                <section class="promo-box" style="background-image: url(img/banners/03.jpg);">
                  <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
                  <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                    <h3 class="text-bold text-light text-shadow">Limited Offer</h3>
                    <h4 class="text-light text-thin text-shadow">save up to 50%!</h4><a class="btn btn-sm btn-primary" href="#">Learn More</a>
                  </div>
                </section>
              </li>
            </ul>
          </li>
          <li><a href="account-orders.html"><span>Account</span></a>
            <ul class="sub-menu">
                <li><a href="account-login.html">Login / Register</a></li>
                <li><a href="account-password-recovery.html">Password Recovery</a></li>
                <li><a href="account-orders.html">Orders List</a></li>
                <li><a href="account-wishlist.html">Wishlist</a></li>
                <li><a href="account-profile.html">Profile Page</a></li>
                <li><a href="account-address.html">Contact / Shipping Address</a></li>
                <li><a href="account-tickets.html">My Tickets</a></li>
                <li><a href="account-single-ticket.html">Single Ticket</a></li>
            </ul>
          </li>
          <li><a href="blog-rs.html"><span>Blog</span></a>
            <ul class="sub-menu">
              <li class="has-children"><a href="blog-rs.html"><span>Blog Layout</span></a>
                <ul class="sub-menu">
                    <li><a href="blog-rs.html">Blog Right Sidebar</a></li>
                    <li><a href="blog-ls.html">Blog Left Sidebar</a></li>
                    <li><a href="blog-ns.html">Blog No Sidebar</a></li>
                </ul>
              </li>
              <li class="has-children"><a href="blog-single-rs.html"><span>Single Post Layout</span></a>
                <ul class="sub-menu">
                    <li><a href="blog-single-rs.html">Post Right Sidebar</a></li>
                    <li><a href="blog-single-ls.html">Post Left Sidebar</a></li>
                    <li><a href="blog-single-ns.html">Post No Sidebar</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#"><span>Pages</span></a>
            <ul class="sub-menu">
                <li><a href="about.html">About Us</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="faq.html">Help / FAQ</a></li>
                <li><a href="order-tracking.html">Order Tracking</a></li>
                <li><a href="search-results.html">Search Results</a></li>
                <li><a href="404.html">404 Not Found</a></li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
              <li><a class="text-danger" href="docs/dev-setup.html">Documentation</a></li>
            </ul>
          </li>
          <li class="has-megamenu"><a href="components/accordion.html"><span>Components</span></a>
            <ul class="mega-menu">
              <li><span class="mega-menu-title">A - F</span>
                  <ul class="sub-menu">
                    <li><a href="components/accordion.html">Accordion</a></li>
                    <li><a href="components/alerts.html">Alerts</a></li>
                    <li><a href="components/buttons.html">Buttons</a></li>
                    <li><a href="components/cards.html">Cards</a></li>
                    <li><a href="components/carousel.html">Carousel</a></li>
                    <li><a href="components/countdown.html">Countdown</a></li>
                    <li><a href="components/forms.html">Forms</a></li>
                  </ul>
              </li>
              <li><span class="mega-menu-title">G - M</span>
                  <ul class="sub-menu">
                    <li><a href="components/gallery.html">Gallery</a></li>
                    <li><a href="components/google-maps.html">Google Maps</a></li>
                    <li><a href="components/images.html">Images &amp; Figures</a></li>
                    <li><a href="components/list-group.html">List Group</a></li>
                    <li><a href="components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                    <li><a href="components/media.html">Media Object</a></li>
                    <li><a href="components/modal.html">Modal</a></li>
                  </ul>
              </li>
              <li><span class="mega-menu-title">P - T</span>
                  <ul class="sub-menu">
                    <li><a href="components/pagination.html">Pagination</a></li>
                    <li><a href="components/pills.html">Pills</a></li>
                    <li><a href="components/progress-bars.html">Progress Bars</a></li>
                    <li><a href="components/shop-items.html">Shop Items</a></li>
                    <li><a href="components/spinners.html">Spinners</a></li>
                    <li><a href="components/steps.html">Steps</a></li>
                    <li><a href="components/tables.html">Tables</a></li>
                  </ul>
              </li>
              <li><span class="mega-menu-title">T - W</span>
                  <ul class="sub-menu">
                    <li><a href="components/tabs.html">Tabs</a></li>
                    <li><a href="components/team.html">Team</a></li>
                    <li><a href="components/toasts.html">Toast Notifications</a></li>
                    <li><a href="components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                    <li><a href="components/typography.html">Typography</a></li>
                    <li><a href="components/video-player.html">Video Player</a></li>
                    <li><a href="components/widgets.html">Widgets</a></li>
                  </ul>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- Toolbar-->
      <div class="toolbar">
        <div class="inner">
          <div class="tools">
            <div class="search"><i class="icon-search"></i></div>
            <div class="account"><a href="account-orders.html"></a><i class="icon-head"></i>
              <ul class="toolbar-dropdown">
                <li class="sub-menu-user">
                  <div class="user-ava"><img src="img/account/user-ava-sm.jpg" alt="Daniel Adams">
                  </div>
                  <div class="user-info">
                    <h6 class="user-name">Daniel Adams</h6><span class="text-xs text-muted">290 Reward points</span>
                  </div>
                </li>
                  <li><a href="account-profile.html">My Profile</a></li>
                  <li><a href="account-orders.html">Orders List</a></li>
                  <li><a href="account-wishlist.html">Wishlist</a></li>
                <li class="sub-menu-separator"></li>
                <li><a href="#"> <i class="icon-unlock"></i>Logout</a></li>
              </ul>
            </div>
            <div class="cart"><a href="cart.html"></a><i class="icon-bag"></i><span class="count">3</span><span class="subtotal">$289.68</span>
              <div class="toolbar-dropdown">
                <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/01.jpg" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Unionbay Park</a><span class="dropdown-product-details">1 x $43.90</span></div>
                </div>
                <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/02.jpg" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Daily Fabric Cap</a><span class="dropdown-product-details">2 x $24.89</span></div>
                </div>
                <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/03.jpg" alt="Product"></a>
                  <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Haan Crossbody</a><span class="dropdown-product-details">1 x $200.00</span></div>
                </div>
                <div class="toolbar-dropdown-group">
                  <div class="column"><span class="text-lg">Total:</span></div>
                  <div class="column text-right"><span class="text-lg text-medium">$289.68&nbsp;</span></div>
                </div>
                <div class="toolbar-dropdown-group">
                  <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="cart.html">View Cart</a></div>
                  <div class="column"><a class="btn btn-sm btn-block btn-success" href="checkout-address.html">Checkout</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Off-Canvas Wrapper-->
    <div class="offcanvas-wrapper">
      <!-- Page Title-->
      <div class="page-title">
        <div class="container">
          <div class="column">
            <h1>Cart</h1>
          </div>
          <div class="column">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a>
              </li>
              <li class="separator">&nbsp;</li>
              <li>Cart</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Content-->
      <div class="container padding-bottom-3x mb-1">
        <!-- Alert-->
        <div class="alert alert-info alert-dismissible fade show text-center" style="margin-bottom: 30px;"><span class="alert-close" data-dismiss="alert"></span><img class="d-inline align-center" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAzIDUxMi4wMDMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDMgNTEyLjAwMzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjE2cHgiPgo8Zz4KCTxnPgoJCTxnPgoJCQk8cGF0aCBkPSJNMjU2LjAwMSw2NGMtNzAuNTkyLDAtMTI4LDU3LjQwOC0xMjgsMTI4czU3LjQwOCwxMjgsMTI4LDEyOHMxMjgtNTcuNDA4LDEyOC0xMjhTMzI2LjU5Myw2NCwyNTYuMDAxLDY0eiAgICAgIE0yNTYuMDAxLDI5OC42NjdjLTU4LjgxNiwwLTEwNi42NjctNDcuODUxLTEwNi42NjctMTA2LjY2N1MxOTcuMTg1LDg1LjMzMywyNTYuMDAxLDg1LjMzM1MzNjIuNjY4LDEzMy4xODQsMzYyLjY2OCwxOTIgICAgIFMzMTQuODE3LDI5OC42NjcsMjU2LjAwMSwyOTguNjY3eiIgZmlsbD0iIzUwYzZlOSIvPgoJCQk8cGF0aCBkPSJNMzg1LjY0NCwzMzMuMjA1YzM4LjIyOS0zNS4xMzYsNjIuMzU3LTg1LjMzMyw2Mi4zNTctMTQxLjIwNWMwLTEwNS44NTYtODYuMTIzLTE5Mi0xOTItMTkycy0xOTIsODYuMTQ0LTE5MiwxOTIgICAgIGMwLDU1Ljg1MSwyNC4xMjgsMTA2LjA2OSw2Mi4zMzYsMTQxLjE4NEw2NC42ODQsNDk3LjZjLTEuNTM2LDQuMTE3LTAuNDA1LDguNzI1LDIuODM3LDExLjY2OSAgICAgYzIuMDI3LDEuNzkyLDQuNTY1LDIuNzMxLDcuMTQ3LDIuNzMxYzEuNjIxLDAsMy4yNDMtMC4zNjMsNC43NzktMS4xMDlsNzkuNzg3LTM5Ljg5M2w1OC44NTksMzkuMjMyICAgICBjMi42ODgsMS43OTIsNi4xMDEsMi4yNCw5LjE5NSwxLjI4YzMuMDkzLTEuMDAzLDUuNTY4LTMuMzQ5LDYuNjk5LTYuNGwyMy4yOTYtNjIuMTQ0bDIwLjU4Nyw2MS43MzkgICAgIGMxLjA2NywzLjE1NywzLjU0MSw1LjYzMiw2LjY3Nyw2LjcyYzMuMTM2LDEuMDY3LDYuNTkyLDAuNjQsOS4zNjUtMS4yMTZsNTguODU5LTM5LjIzMmw3OS43ODcsMzkuODkzICAgICBjMS41MzYsMC43NjgsMy4xNTcsMS4xMzEsNC43NzksMS4xMzFjMi41ODEsMCw1LjEyLTAuOTM5LDcuMTI1LTIuNzUyYzMuMjY0LTIuOTIzLDQuMzczLTcuNTUyLDIuODM3LTExLjY2OUwzODUuNjQ0LDMzMy4yMDV6ICAgICAgTTI0Ni4wMTcsNDEyLjI2N2wtMjcuMjg1LDcyLjc0N2wtNTIuODIxLTM1LjJjLTMuMi0yLjExMi03LjMxNy0yLjM4OS0xMC42ODgtMC42NjFMOTQuMTg4LDQ3OS42OGw0OS41NzktMTMyLjIyNCAgICAgYzI2Ljg1OSwxOS40MzUsNTguNzk1LDMyLjIxMyw5My41NDcsMzUuNjA1TDI0Ni43LDQxMS4yQzI0Ni40ODcsNDExLjU2MywyNDYuMTY3LDQxMS44NCwyNDYuMDE3LDQxMi4yNjd6IE0yNTYuMDAxLDM2Mi42NjcgICAgIEMxNjEuOSwzNjIuNjY3LDg1LjMzNSwyODYuMTAxLDg1LjMzNSwxOTJTMTYxLjksMjEuMzMzLDI1Ni4wMDEsMjEuMzMzUzQyNi42NjgsOTcuODk5LDQyNi42NjgsMTkyICAgICBTMzUwLjEwMywzNjIuNjY3LDI1Ni4wMDEsMzYyLjY2N3ogTTM1Ni43NTksNDQ5LjEzMWMtMy40MTMtMS43MjgtNy41MDktMS40NzItMTAuNjg4LDAuNjYxbC01Mi4zNzMsMzQuOTIzbC0zMy42NDMtMTAwLjkyOCAgICAgYzQwLjM0MS0wLjg1Myw3Ny41ODktMTQuMTg3LDEwOC4xNi0zNi4zMzFsNDkuNTc5LDEzMi4yMDNMMzU2Ljc1OSw0NDkuMTMxeiIgZmlsbD0iIzUwYzZlOSIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" width="18" height="18" alt="Medal icon">&nbsp;&nbsp;With this purchase you will earn <strong>290</strong> Reward Points.</div>
        <!-- Shopping Cart-->
        <div class="table-responsive shopping-cart">
          <table class="table">
            <thead>
              <tr>
                <th>Product Name</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Subtotal</th>
                <th class="text-center">Discount</th>
                <th class="text-center"><a class="btn btn-sm btn-outline-danger" href="#">Clear Cart</a></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="img/shop/cart/01.jpg" alt="Product"></a>
                    <div class="product-info">
                      <h4 class="product-title"><a href="shop-single.html">Unionbay Park</a></h4><span><em>Size:</em> 10.5</span><span><em>Color:</em> Dark Blue</span>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="count-input">
                    <select class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </td>
                <td class="text-center text-lg text-medium">$43.90</td>
                <td class="text-center text-lg text-medium">$18.00</td>
                <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>
              </tr>
              <tr>
                <td>
                  <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="img/shop/cart/02.jpg" alt="Product"></a>
                    <div class="product-info">
                      <h4 class="product-title"><a href="shop-single.html">Daily Fabric Cap</a></h4><span><em>Size:</em> XL</span><span><em>Color:</em> Black</span>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="count-input">
                    <select class="form-control">
                      <option>1</option>
                      <option selected>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </td>
                <td class="text-center text-lg text-medium">$24.89</td>
                <td class="text-center">&mdash;</td>
                <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>
              </tr>
              <tr>
                <td>
                  <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="img/shop/cart/03.jpg" alt="Product"></a>
                    <div class="product-info">
                      <h4 class="product-title"><a href="shop-single.html">Cole Haan Crossbody</a></h4><span><em>Size:</em> -</span><span><em>Color:</em> Turquoise</span>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="count-input">
                    <select class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </td>
                <td class="text-center text-lg text-medium">$200.00</td>
                <td class="text-center">&mdash;</td>
                <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="shopping-cart-footer">
          <div class="column">
            <form class="coupon-form" method="post">
              <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required>
              <button class="btn btn-outline-primary btn-sm" type="submit">Apply Coupon</button>
            </form>
          </div>
          <div class="column text-lg">Subtotal: <span class="text-medium">$289.68</span></div>
        </div>
        <div class="shopping-cart-footer">
          <div class="column"><a class="btn btn-outline-secondary" href="shop-grid-ls.html"><i class="icon-arrow-left"></i>&nbsp;Back to Shopping</a></div>
          <div class="column"><a class="btn btn-primary" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Your cart" data-toast-message="is updated successfully!">Update Cart</a><a class="btn btn-success" href="checkout-address.html">Checkout</a></div>
          <script
src="https://www.mercadopago.com.pe/integrations/v1/web-payment-checkout.js"
data-preference-id="<?php echo $preference->id; ?>">
</script>
        </div>
        <!-- Related Products Carousel-->
        <h3 class="text-center padding-top-2x mt-2 padding-bottom-1x">You May Also Like</h3>
        <!-- Carousel-->
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-danger">22% Off</div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/09.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Rocket Dog</a></h3>
              <h4 class="product-price">
                <del>$44.95</del>$34.99
              </h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                </div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/03.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Oakley Kickback</a></h3>
              <h4 class="product-price">$155.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/12.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Vented Straw Fedora</a></h3>
              <h4 class="product-price">$49.50</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
                <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                </div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/11.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Top-Sider Fathom</a></h3>
              <h4 class="product-price">$90.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/04.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Waist Leather Belt</a></h3>
              <h4 class="product-price">$47.00</h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="grid-item">
            <div class="product-card">
              <div class="product-badge text-danger">50% Off</div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/01.jpg" alt="Product"></a>
              <h3 class="product-title"><a href="shop-single.html">Unionbay Park</a></h3>
              <h4 class="product-price">
                <del>$99.99</del>$49.99
              </h4>
              <div class="product-buttons">
                <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Site Footer-->
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <!-- Contact Info-->
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Get In Touch With Us</h3>
                <p class="text-white">Phone: 00 33 169 7720</p>
                <ul class="list-unstyled text-sm text-white">
                  <li><span class="opacity-50">Monday-Friday:</span>9.00 am - 8.00 pm</li>
                  <li><span class="opacity-50">Saturday:</span>10.00 am - 6.00 pm</li>
                </ul>
                <p><a class="navi-link-light" href="#">support@unishop.com</a></p><a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a><a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a><a class="social-button shape-circle sb-google-plus sb-light-skin" href="#"><i class="socicon-googleplus"></i></a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Mobile App Buttons-->
              <section class="widget widget-light-skin">
                <h3 class="widget-title">Our Mobile App</h3><a class="market-button apple-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button mb-light-skin" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- About Us-->
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">About Us</h3>
                <ul>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">About Unishop</a></li>
                  <li><a href="#">Our Story</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Our Blog</a></li>
                </ul>
              </section>
            </div>
            <div class="col-lg-3 col-md-6">
              <!-- Account / Shipping Info-->
              <section class="widget widget-links widget-light-skin">
                <h3 class="widget-title">Account &amp; Shipping Info</h3>
                <ul>
                  <li><a href="#">Your Account</a></li>
                  <li><a href="#">Shipping Rates & Policies</a></li>
                  <li><a href="#">Refunds & Replacements</a></li>
                  <li><a href="#">Taxes</a></li>
                  <li><a href="#">Delivery Info</a></li>
                  <li><a href="#">Affiliate Program</a></li>
                </ul>
              </section>
            </div>
          </div>
          <hr class="hr-light mt-2 margin-bottom-2x">
          <div class="row">
            <div class="col-md-7 padding-bottom-1x">
              <!-- Payment Methods-->
              <div class="margin-bottom-1x" style="max-width: 615px;"><img src="img/payment_methods.png" alt="Payment Methods">
              </div>
            </div>
            <div class="col-md-5 padding-bottom-1x">
              <div class="margin-top-1x hidden-md-up"></div>
              <!--Subscription-->
              <form class="subscribe-form" action="//rokaux.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=1194bb7544" method="post" target="_blank" novalidate>
                <div class="clearfix">
                  <div class="input-group input-light">
                    <input class="form-control" type="email" name="EMAIL" placeholder="Your e-mail"><span class="input-group-addon"><i class="icon-mail"></i></span>
                  </div>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                  </div>
                  <button class="btn btn-primary" type="submit"><i class="icon-check"></i></button>
                </div><span class="form-text text-sm text-white opacity-50">Subscribe to our Newsletter to receive early discount offers, latest news, sales and promo information.</span>
              </form>
            </div>
          </div>
          <!-- Copyright-->
          <p class="footer-copyright">© All rights reserved. Made with &nbsp;<i class="icon-heart text-danger"></i><a href="http://rokaux.com/" target="_blank"> &nbsp;by rokaux</a></p>
        </div>
      </footer>
    </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/scripts.min.js"></script>
  </body>
</html>
