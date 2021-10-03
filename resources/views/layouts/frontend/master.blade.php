<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="author" content="{{ config('app.name') }}">


    @component('layouts.frontend.seo.tag')
    @endcomponent
    <title>@yield('title')</title>

	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link href="{{asset('/css/vendor/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('/css/vendor/vendor.min.css')}}" rel="stylesheet">
	<link href="{{asset('/css/style-electronics.css')}}" rel="stylesheet">
	<link href="{{asset('/fonts/icomoon/icons.css')}}" rel="stylesheet">
	<link href="/css2.css?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
@livewireStyles
</head>
<body>
  <div class="header-side-panel">
         <div class="mobilemenu js-push-mbmenu">
            <div class="mobilemenu-content">
               <div class="mobilemenu-close mobilemenu-toggle">Close</div>
               <div class="mobilemenu-scroll">
                  <div class="mobilemenu-search"></div>
                  <div class="nav-wrapper show-menu">
                     <div class="nav-toggle">
                        <span class="nav-back"><i class="icon-angle-left"></i></span>
                        <span class="nav-title"></span>
                        <a href="#" class="nav-viewall">view all</a>
                     </div>
                     <ul class="nav nav-level-1">
                        <li>
                           <a href="index.html">Layouts<span class="menu-label menu-label--color1">New</span><span class="arrow"><i class="icon-angle-right"></i></span></a>
                           <ul class="nav-level-2">
                              <li><a href="index.html">Fashion (Default) Skin</a></li>
                              <li><a href="index-sport.html">Sport Skin</a></li>
                              <li><a href="index-helloween.html">Halloween Skin</a></li>
                              <li><a href="index-medical.html">Medical Skin</a></li>
                              <li><a href="index-food.html">Food Market Skin</a></li>
                              <li><a href="index-cosmetics.html">Cosmetics Skin</a></li>
                              <li><a href="index-fishing.html">Fishing Skin</a></li>
                              <li><a href="#">Books Skin<span class="menu-label menu-label--color1">Coming Soon</span></a></li>
                              <li><a href="#">Electronics Skin<span class="menu-label menu-label--color2">Coming Soon</span></a></li>
                              <li><a href="#">Games Skin<span class="menu-label menu-label--color3">Coming Soon</span></a></li>
                              <li><a href="#">Vaping Skin<span class="menu-label">Coming Soon</span></a></li>
                              <li><a href="index-02.html">Home page 2</a></li>
                              <li><a href="index-03.html">Home page 3</a></li>
                              <li><a href="index-04.html">Home page 4</a></li>
                              <li><a href="index-05.html">Home page 5</a></li>
                              <li><a href="index-06.html">Home page 6</a></li>
                              <li><a href="index-07.html">Home page 7</a></li>
                              <li><a href="index-08.html">Home page 8</a></li>
                              <li><a href="index-09.html">Home page 9</a></li>
                              <li><a href="index-10.html">Home page 10</a></li>
                              <li><a href="index-rtl.html">Home page RTL</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#">Pages<span class="arrow"><i class="icon-angle-right"></i></span></a>
                           <ul class="nav-level-2">
                              <li>
                                 <a href="product.html">Product page<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                 <ul class="nav-level-3">
                                    <li><a href="product.html">Product page variant 1<span class="menu-label menu-label--color3">Popular</span></a></li>
                                    <li><a href="product-2.html">Product page variant 2</a></li>
                                    <li><a href="product-3.html">Product page variant 3</a></li>
                                    <li><a href="product-4.html">Product page variant 4</a></li>
                                    <li><a href="product-5.html">Product page variant 5</a></li>
                                    <li><a href="product-6.html">Product page variant 6</a></li>
                                    <li><a href="product-7.html">Product page variant 7</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="category.html">Category page<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                 <ul class="nav-level-3">
                                    <li><a href="category.html">Left sidebar filters</a></li>
                                    <li><a href="category-closed-filter.html">Closed filters</a></li>
                                    <li><a href="category-horizontal-filter.html">Horizontal filters</a></li>
                                    <li><a href="category-listview.html">Listing View</a></li>
                                    <li><a href="category-empty.html">Empty category</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="cart.html">Cart & Checkout<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                 <ul class="nav-level-3">
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="cart-empty.html">Empty cart</a></li>
                                    <li><a href="checkout.html">Checkout variant 1</a></li>
                                    <li><a href="checkout-2.html">Checkout variant 2</a></li>
                                    <li><a href="checkout-3.html">Checkout variant 3</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="account-create.html">Account<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                 <ul class="nav-level-3">
                                    <li><a href="account-create.html">Login</a></li>
                                    <li><a href="account-create.html">Create account</a></li>
                                    <li><a href="account-details.html">Account details</a></li>
                                    <li><a href="account-addresses.html">Account addresses</a></li>
                                    <li><a href="account-history.html">Order History</a></li>
                                    <li><a href="account-wishlist.html">Wishlist</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="blog.html">Blog<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                 <ul class="nav-level-3">
                                    <li><a href="blog.html">Right sidebar</a></li>
                                    <li><a href="blog-left-sidebar.html">Left sidebar</a></li>
                                    <li><a href="blog-without-sidebar.html">No sidebar</a></li>
                                    <li><a href="blog-sticky-sidebar.html">Sticky sidebar</a></li>
                                    <li><a href="blog-grid.html">Grid</a></li>
                                    <li><a href="blog-post.html">Blog post</a></li>
                                 </ul>
                              </li>
                              <li><a href="gallery.html">Gallery</a></li>
                              <li><a href="faq.html">Faq</a></li>
                              <li><a href="about.html">About Us</a></li>
                              <li><a href="contact.html">Contact Us</a></li>
                              <li><a href="404.html">404 Page</a></li>
                              <li><a href="typography.html">Typography</a></li>
                              <li><a href="coming-soon.html" target="_blank">Coming soon</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="category.html">New Arrivals<span class="arrow"><i class="icon-angle-right"></i></span></a>
                           <ul class="nav-level-2">
                              <li>
                                 <a href="category.html">Shoes<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                 <ul class="nav-level-3">
                                    <li><a href="category.html">Heels</a></li>
                                    <li><a href="category.html">Boots</a></li>
                                    <li><a href="category.html">Flats</a></li>
                                    <li><a href="category.html">Sneakers &amp; Athletic</a></li>
                                    <li><a href="category.html">Clogs &amp; Mules</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="category.html">Tops<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                 <ul class="nav-level-3">
                                    <li><a href="category.html">Dresses</a></li>
                                    <li><a href="category.html">Shirts &amp; Tops</a></li>
                                    <li><a href="category.html">Coats &amp; Outerwear</a></li>
                                    <li><a href="category.html">Sweaters</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="category.html">Shoes<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                 <ul class="nav-level-3">
                                    <li><a href="category.html">Heels</a></li>
                                    <li><a href="category.html">Boots</a></li>
                                    <li><a href="category.html">Flats</a></li>
                                    <li><a href="category.html">Sneakers &amp; Athletic</a></li>
                                    <li><a href="category.html">Clogs &amp; Mules</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="category.html">Bottoms<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                 <ul class="nav-level-3">
                                    <li><a href="category.html">Jeans</a></li>
                                    <li><a href="category.html">Pants</a></li>
                                    <li><a href="category.html">slippers</a></li>
                                    <li><a href="category.html">suits</a></li>
                                    <li><a href="category.html">socks</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="category.html">Accessories<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                 <ul class="nav-level-3">
                                    <li><a href="category.html">Sunglasses</a></li>
                                    <li><a href="category.html">Hats</a></li>
                                    <li><a href="category.html">Watches</a></li>
                                    <li><a href="category.html">Jewelry</a></li>
                                    <li><a href="category.html">Belts</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="category.html">Bags<span class="arrow"><i class="icon-angle-right"></i></span></a>
                                 <ul class="nav-level-3">
                                    <li><a href="category.html">Handbags</a></li>
                                    <li><a href="category.html">Backpacks</a></li>
                                    <li><a href="category.html">Luggage</a></li>
                                    <li><a href="category.html">wallets</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li><a href="../../item/foxic-ecommerce-html-template/29078450.html" target="_blank">Buy Theme<span class="menu-label menu-label--color3">Hurry Up!</span><span class="arrow"><i class="icon-angle-right"></i></span></a></li>
                     </ul>
                  </div>
                  <div class="mobilemenu-bottom">
                     <div class="mobilemenu-currency">
                        <div class="dropdn_currency">
                           <div class="dropdn dropdn_caret">
                              <a href="#" class="dropdn-link js-dropdn-link">US dollars<i class="icon-angle-down"></i></a>
                              <div class="dropdn-content">
                                 <ul>
                                    <li class="active"><a href="#"><span>US dollars</span></a></li>
                                    <li><a href="#"><span>Euro</span></a></li>
                                    <li><a href="#"><span>UK pounds</span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="mobilemenu-language">
                        <div class="dropdn_language">
                           <div class="dropdn dropdn_language dropdn_language--noimg dropdn_caret">
                              <a href="#" class="dropdn-link js-dropdn-link"><span class="js-dropdn-select-current">English</span><i class="icon-angle-down"></i></a>
                              <div class="dropdn-content">
                                 <ul>
                                    <li class="active"><a href="#"><img src="frontend/images/flags/en.webp" alt="">English</a></li>
                                    <li><a href="#"><img src="frontend/images/flags/sp.webp" alt="">Spanish</a></li>
                                    <li><a href="#"><img src="frontend/images/flags/de.webp" alt="">German</a></li>
                                    <li><a href="#"><img src="frontend/images/flags/fr.webp" alt="">French</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="dropdn-content account-drop" id="dropdnAccount">
            <div class="dropdn-content-block">
               <div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
               <ul>
                  <li><a href="account-create.html"><span>Log In</span><i class="icon-login"></i></a></li>
                  <li><a href="account-create.html"><span>Register</span><i class="icon-user2"></i></a></li>
                  <li><a href="checkout.html"><span>Checkout</span><i class="icon-card"></i></a></li>
               </ul>
               <div class="dropdn-form-wrapper">
                  <h5>Quick Login</h5>
                  <form action="#">
                     <div class="form-group">
                        <input type="text" class="form-control form-control--sm is-invalid" placeholder="Enter your e-mail">
                        <div class="invalid-feedback">Can't be blank</div>
                     </div>
                     <div class="form-group">
                        <input type="password" class="form-control form-control--sm" placeholder="Enter your password">
                     </div>
                     <button type="submit" class="btn">Enter</button>
                  </form>
               </div>
            </div>
            <div class="drop-overlay js-dropdn-close"></div>
         </div>
         <div class="dropdn-content minicart-drop" id="dropdnMinicart">
            <div class="dropdn-content-block">
               <div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
               <div class="minicart-drop-content js-dropdn-content-scroll">
                  <div class="minicart-prd row">
                     <div class="minicart-prd-image image-hover-scale-circle col">
                        <a href="product.html"><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="frontend/images/skins/fashion/products/product-01-1.webp" alt=""></a>
                     </div>
                     <div class="minicart-prd-info col">
                        <div class="minicart-prd-tag">FOXic</div>
                        <h2 class="minicart-prd-name"><a href="#">Leather Pegged Pants</a></h2>
                        <div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span></div>
                        <div class="minicart-prd-price prd-price">
                           <div class="price-old">$200.00</div>
                           <div class="price-new">$180.00</div>
                        </div>
                     </div>
                     <div class="minicart-prd-action">
                        <a href="#" class="js-product-remove" data-line-number="1"><i class="icon-recycle"></i></a>
                     </div>
                  </div>
                  <div class="minicart-prd row">
                     <div class="minicart-prd-image image-hover-scale-circle col">
                        <a href="product.html"><img class="lazyload fade-up" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="frontend/images/skins/fashion/products/product-16-1.webp" alt=""></a>
                     </div>
                     <div class="minicart-prd-info col">
                        <div class="minicart-prd-tag">FOXic</div>
                        <h2 class="minicart-prd-name"><a href="#">Cascade Casual Shirt</a></h2>
                        <div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span></div>
                        <div class="minicart-prd-price prd-price">
                           <div class="price-old">$200.00</div>
                           <div class="price-new">$180.00</div>
                        </div>
                     </div>
                     <div class="minicart-prd-action">
                        <a href="#" class="js-product-remove" data-line-number="2"><i class="icon-recycle"></i></a>
                     </div>
                  </div>
                  <div class="minicart-empty js-minicart-empty d-none">
                     <div class="minicart-empty-text">Your cart is empty</div>
                     <div class="minicart-empty-icon">
                        <i class="icon-shopping-bag"></i>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewbox="0 0 306 262" style="enable-background:new 0 0 306 262;" xml:space="preserve">
                           <path class="st0" d="M78.1,59.5c0,0-37.3,22-26.7,85s59.7,237,142.7,283s193,56,313-84s21-206-69-240s-249.4-67-309-60C94.6,47.6,78.1,59.5,78.1,59.5z"></path>
                        </svg>
                     </div>
                  </div>
                  <a href="#" class="minicart-drop-countdown mt-3">
                     <div class="countdown-box-full">
                        <div class="row no-gutters align-items-center">
                           <div class="col-auto"><i class="icon-gift icon--giftAnimate"></i></div>
                           <div class="col">
                              <div class="countdown-txt">WHEN BUYING TWO
                                 THINGS A THIRD AS A GIFT
                              </div>
                              <div class="countdown js-countdown" data-countdown="2021/07/01"></div>
                           </div>
                        </div>
                     </div>
                  </a>
                  <div class="minicart-drop-info d-none d-md-block">
                     <div class="shop-feature-single row no-gutters align-items-center">
                        <div class="shop-feature-icon col-auto"><i class="icon-truck"></i></div>
                        <div class="shop-feature-text col"><b>SHIPPING!</b> Continue shopping to add more products and receive free shipping</div>
                     </div>
                  </div>
               </div>
               <div class="minicart-drop-fixed js-hide-empty">
                  <div class="loader-horizontal-sm js-loader-horizontal-sm" data-loader-horizontal=""><span></span></div>
                  <div class="minicart-drop-total js-minicart-drop-total row no-gutters align-items-center">
                     <div class="minicart-drop-total-txt col-auto heading-font">Subtotal</div>
                     <div class="minicart-drop-total-price col" data-header-cart-total="">$340</div>
                  </div>
                  <div class="minicart-drop-actions">
                     <a href="cart.html" class="btn btn--md btn--grey"><i class="icon-basket"></i><span>Cart Page</span></a>
                     <a href="checkout.html" class="btn btn--md"><i class="icon-checkout"></i><span>Check out</span></a>
                  </div>
                  <ul class="payment-link mb-2">
                     <li><i class="icon-amazon-logo"></i></li>
                     <li><i class="icon-visa-pay-logo"></i></li>
                     <li><i class="icon-skrill-logo"></i></li>
                     <li><i class="icon-klarna-logo"></i></li>
                     <li><i class="icon-paypal-logo"></i></li>
                     <li><i class="icon-apple-pay-logo"></i></li>
                  </ul>
               </div>
            </div>
            <div class="drop-overlay js-dropdn-close"></div>
         </div>
  </div>
      @include('layouts.frontend.components.header')
      <div class="page-content">
         @yield('content')
      </div>
      <footer class="page-footer footer-style-3 mt-0">
         <div class="footer-top footer-top--bg footer--dark">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="footer-block">
                        <div class="footer-logo">
                           <a href="index.html" class="logo"><img srcset="frontend/images/skins/electronics/logo-electronics-footer.webp 1x, frontend/images/skins/electronics/logo-electronics-footer2x.webp 2x" alt="Logo"></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-10">
                     <div class="footer-block">
                        <ul class="footer-list-inline">
                           <li><a href="account-details.html">My Account</a></li>
                           <li><a href="cart.html">View Cart</a></li>
                           <li><a href="account-wishlist.html">My Wishlist</a></li>
                           <li><a href="account-history.html">Order Status</a></li>
                           <li><a href="account-history.html">Track My Order</a></li>
                           <li><a href="account-history.html">Order History</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="footer-block">
                        <ul class="social-list">
                           <li>
                              <a href="#" class="icon icon-facebook"></a>
                           </li>
                           <li>
                              <a href="#" class="icon icon-twitter"></a>
                           </li>
                           <li>
                              <a href="#" class="icon icon-google"></a>
                           </li>
                           <li>
                              <a href="#" class="icon icon-vimeo"></a>
                           </li>
                           <li>
                              <a href="#" class="icon icon-youtube"></a>
                           </li>
                           <li>
                              <a href="#" class="icon icon-pinterest"></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom footer-bottom--bg">
            <div class="container text-center">
               <ul class="payment-link payment-link--sm">
                  <li><i class="icon-amazon-logo"></i></li>
                  <li><i class="icon-visa-pay-logo"></i></li>
                  <li><i class="icon-skrill-logo"></i></li>
                  <li><i class="icon-master-card-logo"></i></li>
                  <li><i class="icon-paypal-logo"></i></li>
                  <li><i class="icon-apple-pay-logo"></i></li>
               </ul>
               <div class="footer-copyright">
                  <a href="#">FOXshop</a> ©2020 copyright
               </div>
            </div>
         </div>
      </footer>
      <div class="footer-sticky">
         <div class="sticky-addcart js-stickyAddToCart closed">
            <div class="container">
               <div class="row">
                  <div class="col-auto sticky-addcart_image">
                     <a href="product.html">
                     <img src="frontend/images/skins/fashion/products/product-01-1.webp" alt="">
                     </a>
                  </div>
                  <div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
                     <h1 class="sticky-addcart_title">Leather Pegged Pants</h1>
                     <div class="sticky-addcart_price">
                        <span class="sticky-addcart_price--actual">$180.00</span>
                        <span class="sticky-addcart_price--old">$210.00</span>
                     </div>
                  </div>
                  <div class="col-auto sticky-addcart_options  prd-block prd-block_info--style1">
                     <div class="select-wrapper">
                        <select class="form-control form-control--sm">
                           <option value="">--Please choose an option--</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-auto sticky-addcart_actions">
                     <div class="prd-block_qty">
                        <span class="option-label">Quantity:</span>
                        <div class="qty qty-changer">
                           <button class="decrease"></button>
                           <input type="number" class="qty-input" value="1" data-min="1" data-max="1000">
                           <button class="increase"></button>
                        </div>
                     </div>
                     <div class="btn-wrap">
                        <button class="btn js-prd-addtocart" data-fancybox="" data-src="#modalCheckOut">Add to cart
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="popup-addedtocart js-popupAddToCart closed" data-close="50000">
            <div class="container">
               <div class="row">
                  <div class="popup-addedtocart-close js-popupAddToCart-close"><i class="icon-close"></i></div>
                  <div class="popup-addedtocart-cart js-open-drop" data-panel="#dropdnMinicart"><i class="icon-basket"></i></div>
                  <div class="col-auto popup-addedtocart_logo">
                     <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="frontend/images/logo-white-sm.webp" class="lazyload fade-up" alt="">
                  </div>
                  <div class="col popup-addedtocart_info">
                     <div class="row">
                        <a href="product.html" class="col-auto popup-addedtocart_image">
                        <span class="image-container w-100">
                        <img src="frontend/images/skins/fashion/products/product-01-1.webp" alt="">
                        </span>
                        </a>
                        <div class="col popup-addedtocart_text">
                           <a href="product.html" class="popup-addedtocart_title"></a>
                           <span class="popup-addedtocart_message">Added to <a href="cart.html" class="underline">Cart</a></span>
                           <span class="popup-addedtocart_error_message"></span>
                        </div>
                     </div>
                  </div>
                  <div class="col-auto popup-addedtocart_actions">
                     <span>You can continue</span> <a href="#" class="btn btn--grey btn--sm js-open-drop" data-panel="#dropdnMinicart"><i class="icon-basket"></i><span>Check Cart</span></a> <span>or</span> <a href="checkout.html" class="btn btn--invert btn--sm"><i class="icon-envelope-1"></i><span>Check out</span></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="sticky-addcart popup-selectoptions js-popupSelectOptions closed" data-close="500000">
            <div class="container">
               <div class="row">
                  <div class="popup-selectoptions-close js-popupSelectOptions-close"><i class="icon-close"></i></div>
                  <div class="col-auto sticky-addcart_image sticky-addcart_image--zoom">
                     <a href="#" data-caption="">
                     <span class="image-container"><img src="#" alt=""></span>
                     </a>
                  </div>
                  <div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
                     <h1 class="sticky-addcart_title"><a href="#">&nbsp;</a></h1>
                     <div class="sticky-addcart_price">
                        <span class="sticky-addcart_price--actual"></span>
                        <span class="sticky-addcart_price--old"></span>
                     </div>
                     <div class="sticky-addcart_error_message">Error Message</div>
                  </div>
                  <div class="col-auto sticky-addcart_options prd-block prd-block_info--style1">
                     <div class="select-wrapper">
                        <select class="form-control form-control--sm sticky-addcart_options_select">
                           <option value="none">Select Option please..</option>
                        </select>
                        <div class="invalid-feedback">Can't be blank</div>
                     </div>
                  </div>
                  <div class="col-auto sticky-addcart_actions">
                     <div class="prd-block_qty">
                        <span class="option-label">Quantity:</span>
                        <div class="qty qty-changer">
                           <button class="decrease"></button>
                           <input type="number" class="qty-input" value="2" data-min="1" data-max="10000">
                           <button class="increase"></button>
                        </div>
                     </div>
                     <div class="btn-wrap">
                        <button class="btn js-prd-addtocart">Add to cart</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="back-to-top js-back-to-top compensate-for-scrollbar" href="#" title="Scroll To Top">
         <i class="icon icon-angle-up"></i>
         </a>
         <div class="loader-horizontal js-loader-horizontal">
            <div class="progress">
               <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
            </div>
         </div>
      </div>
      <div class="footer-sticky">
         <div class="payment-notification-wrap js-pn" data-visible-time="3000" data-hidden-time="3000" data-delay="500" data-from="Aberdeen,Bakersfield,Birmingham,Cambridge,Youngstown" data-products='[{"productname":"Leather Pegged Pants", "productlink":"product.html","productimage":"frontend/images/skins/fashion/products/product-01-1.webp"},{"productname":"Black Fabric Backpack", "productlink":"product.html","productimage":"frontend/images/skins/fashion/products/product-28-1.webp"},{"productname":"Combined Chunky Sneakers", "productlink":"product.html","productimage":"frontend/images/skins/fashion/products/product-23-1.webp"}]'>
            <div class="payment-notification payment-notification--squared">
               <div class="payment-notification-inside">
                  <div class="payment-notification-container">
                     <a href="#" class="payment-notification-image js-pn-link">
                     <img src="frontend/images/products/product-01.webp" class="js-pn-image" alt="">
                     </a>
                     <div class="payment-notification-content-wrapper">
                        <div class="payment-notification-content">
                           <div class="payment-notification-text">Someone purchased</div>
                           <a href="product.html" class="payment-notification-name js-pn-name js-pn-link">Applewatch</a>
                           <div class="payment-notification-bottom">
                              <div class="payment-notification-when"><span class="js-pn-time">32</span> min ago</div>
                              <div class="payment-notification-from">from <span class="js-pn-from">Riverside</span></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="payment-notification-close"><i class="icon-close-bold"></i></div>
                  <div class="payment-notification-qw prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i></div>
               </div>
            </div>
         </div>
      </div>
       @livewireScripts
<script src="js/vendor-special/lazysizes.min.js"></script>
<script src="js/vendor-special/ls.bgset.min.js"></script>
<script src="js/vendor-special/ls.aspectratio.min.js"></script>
<script src="js/vendor-special/jquery.min.js"></script>
<script src="js/vendor-special/jquery.ez-plus.js"></script>
<script src="js/vendor/vendor.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>

@if(session('cartEmpty'))

Swal.fire({
  icon: 'warning',
  title: 'Oops...',
  text: "{{session('cartEmpty')}}",
  footer: '<a href="{{route('products')}}">Go to Shopping</a>'
})
@endif
function outStock(product_name){
          Swal.fire({
            icon: 'info',
            title: 'Oops...',
            text: `Sorry this product ${product_name} out of stock!`,
            footer: '<a href="{{route('contactus')}}" class="text-primary">For any further query feel free to contact us</a>'
            });
      }
function addtocart(item){
        let frmdata =new FormData();
        frmdata.append("product_id",item);
        axios.post("{{route('add.cart')}}",frmdata).then((res)=>{
        const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1200,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })
                Toast.fire({
                icon: 'success',
                title: 'Add to cart '+res.data.name+' successfuly'
                })
            $(".cart-value").text(res.data.totalcart);
       });
}

</script>

    @stack('scripts')


</body>

</html>
