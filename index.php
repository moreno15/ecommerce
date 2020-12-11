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
          <a  class="site-logo" href="index.html">
            <h1>LogoTienda</h1>
          </a>
        </div>
      </div>
      <!-- Main Navigation-->
      <nav class="site-menu">
        <ul >
          <li class="has-megamenu active"><a href="index.html"><span>Inicio</span></a>  </li>
          <li class="has-megamenu "><a href="index.html"><span>Sobre Nosotros</span></a>  </li>
          <li style="padding-right:300px" class="has-megamenu "><a href="index.html"><span>Concatos</span></a>  </li>
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


                  <a class="product-thumb" href="shop-single.html"><img src="img/shop/products/01.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Zapatilla</a></h3>
                  <h4 class="product-price">
                     S/.49.99
                  </h4>
                  <div class="product-buttons">

                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/02.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Cartera</a></h3>
                  <h4 class="product-price">S/. 200.00</h4>
                  <div class="product-buttons">

                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="shop-single.html"><img src="img/shop/products/03.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Lentes</a></h3>
                  <h4 class="product-price">S/.155.00</h4>
                  <div class="product-buttons">

                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">
                  <div class="product-badge text-muted">Out of stock</div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/08.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Polo Top</a></h3>
                  <h4 class="product-price">S/.128.00</h4>
                  <div class="product-buttons">
                    <a class="btn btn-outline-secondary btn-sm" href="shop-single.html">Agregar Cesta</a>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">
                    <a class="product-thumb" href="shop-single.html"><img src="img/shop/products/05.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Polera</a></h3>
                  <h4 class="product-price">S/.65.00</h4>
                  <div class="product-buttons">

                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">

                  <a class="product-thumb" href="shop-single.html"><img src="img/shop/products/06.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Casaca</a></h3>
                  <h4 class="product-price">
                    S/.36.00
                  </h4>
                  <div class="product-buttons">

                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/04.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Correa</a></h3>
                  <h4 class="product-price">S/.47.00</h4>
                  <div class="product-buttons">

                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/10.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Gorra</a></h3>
                  <h4 class="product-price">S/.31.99</h4>
                  <div class="product-buttons">

                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card">

                    <a class="product-thumb" href="shop-single.html"><img src="img/shop/products/11.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Zapatilla deportivo</a></h3>
                  <h4 class="product-price">S/.90.00</h4>
                  <div class="product-buttons">

                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/16.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Bolso tote grande Wordmark</a></h3>
                  <h4 class="product-price">S/.29.99</h4>
                  <div class="product-buttons">

                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/14.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Reloj</a></h3>
                  <h4 class="product-price">$145.00</h4>
                  <div class="product-buttons">

                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
                  </div>
                </div>
              </div>
              <!-- Product-->
              <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/15.jpg" alt="Product"></a>
                  <h3 class="product-title"><a href="shop-single.html">Aretes</a></h3>
                  <h4 class="product-price">S/.90.00</h4>
                  <div class="product-buttons">

                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Agregar Cesta</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pagination-->

          </div>
          <!-- Sidebar          -->
          <div class="col-xl-3 col-lg-4 order-lg-1">

            <aside class="sidebar sidebar-offcanvas">
              <!-- Widget Categories-->
              <section class="widget widget-categories">
                <h3 class="widget-title">Nuestras Categorias</h3>
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


            </aside>
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
