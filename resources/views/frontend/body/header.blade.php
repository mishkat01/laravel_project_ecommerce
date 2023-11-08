<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>





    .form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}

    .search-input {
    height: 40px;
    border-radius: 10px;
    background: #fff;
    overflow: hidden;
    
}
.input-group {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    /* align-items: stretch; */
    width: 70%;
    padding:0 120px;
}
.search-btn {
    background-color: #72bf44;
    color: #fff;
    padding-left: 30px;
    padding-right: 30px;
    border-radius: 10px;
}
.btn {
    display: inline-block;
    font-weight: 400;
    line-height: 0;
    color: #212529;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    border-radius: 0.25rem;
    border-top-right-radius: 10px!important;
    border-bottom-right-radius: 10px!important;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>

<header class="header-area header-style-1 header-height-2" style="background-color: black !important;" >
    
                <!-- <div class="mobile-promotion" >
                    <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
                </div> -->
                <!-- top head start -->
                    <div class="header-top header-top-ptb-1 d-none d-lg-block" style="background-color:black">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-xl-3 col-lg-4">
                                    <div class="header-info">
                                        <ul>

                                            <!-- <li><a href="page-account.html">My Cart</a></li>
                                            <li><a href="shop-wishlist.html">Checkout</a></li>
                                            <li><a href="shop-order.html">Order Tracking</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-4">
                                    <div class="text-center">
                                        <div id="news-flash" class="d-inline-block">
                                            <ul>
                                                <li>100% Secure delivery without contacting the courier</li>
                                                <li>Supper Value Deals - Save more with coupons</li>
                                                <li>Trendy 25silver jewelry, save up 35% off today</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4">
                                    <div class="header-info header-info-right">
                                        <!-- <ul>

                            <li>
                                <a class="language-dropdown-active" href="#">English <i class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li>
                                        <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/flag-fr.png') }}" alt="" />Français</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/flag-dt.png') }}" alt="" />Deutsch</a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/flag-ru.png') }}" alt="" />Pусский</a>
                                    </li>
                                </ul>
                            </li>

                            <li>Need help? Call Us: <strong class="text-brand"> + 1800 900</strong></li>

                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- top add end -->


                <!-- header - middle - start -->
                     <div class="header-middle header-middle-ptb-1 d-none d-lg-block sticky-bar" style="background-color:black;">
                            <div class="" style="margin:0; padding:0; ">
                                <div class="header-wrap" >
                                    <div class="logo logo-width-1">
                                        <a href="index.html"><img src="{{ asset('frontend/assets/imgs/theme/logo-1.svg') }}" alt="logo" /></a>
                                    </div>
                                            <div class="header-right">
                               
                              <div class="input-group"> <input type="search" name="q" id="search" class="form-control search-input" autocomplete="off" placeholder="Enter Your Keyword..."> 
                                 <button class="btn search-btn" type="submit" aria-label="Search">Search!
                                 </button>
                             </div>
                              <div class="header-action-right">
                            <div class="header-action-2">
                            

                            
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="shop-cart.html">
                                        <img alt="Nest" src="{{ asset('frontend/assets/imgs/theme/icons/images.png') }}" />
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <a href="shop-cart.html"><span class="lable">Cart</span></a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Nest" src="{{ asset('frontend/assets/imgs/shop/thumbnail-3.jpg') }}" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>$800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Nest" src="{{ asset('frontend/assets/imgs/shop/thumbnail-2.jpg') }}" /></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>$3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="shop-cart.html" class="outline">View cart</a>
                                                <a href="shop-checkout.html">Checkout</a>
                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="header-action-icon-2">
                                                    <a href="page-account.html" style="padding-right:5px">
                                                        <img class="svgInject" alt="Nest" src="{{ asset('frontend/assets/imgs/theme/icons/download.png') }}" />
                                                    </a>
                                    @auth
                                                    <a href="{{ route('login')}}"><span class="lable ml-0">Account</span></a>


                                                    <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('dashboard')}}"><i class="fi fi-rs-user mr-10"></i>My Account</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('dashboard')}}"><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('dashboard')}}"><i class="fi fi-rs-label mr-10"></i>My Voucher</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('dashboard')}}"><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('dashboard')}}"><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('user.logout')}}"><i class="fi fi-rs-sign-out mr-10"></i>Sign out</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                    @else

                                    <a href="{{ route('login')}}"><span class="lable ml-0">Login</span></a>
                                    <span class="lable" style="margin-left: 2px; margin-right: 2px;">|</span>
                                    <a href="{{ route('register')}}"><span class="lable ml-0">Register</span></a>

                                    @endauth

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            <!-- header-middle-end -->


            <!-- header bottom start -->
         
            
                                <div class="header-bottom header-bottom-bg-color " style="background-color: black !important;">
                                    <div class="container">
                                       
                                            <div class="header-nav d-none d-lg-flex" style="justify-content: center;">
                                               
                                                <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                                                <nav >

                                                        <ul>

                                                            <li>
                                                                <a class="active" href="{{ url('/')}}">Home  </a>

                                                            </li>
                                                            @php
                                                            $categories = App\Models\Category::orderBy('category_name', 'ASC')->get();
                                                            @endphp
                                                            @foreach ($categories as $cat)
                                                            <li class="position-static">
                                                              <a class="active" href="{{ url('/') }}">{{ $cat->category_name }}</a>
                                                              @php
                                                              $subcategories = App\Models\SubCategory::where('category_id', $cat->id)->orderBy('subcategory_name', 'ASC')->get();
                                                              @endphp
                                                              <ul class="mega-menu">
                                                                <li class="sub-mega-menu sub-mega-menu-width-22">
                                                                  <ul>
                                                                    @foreach ($subcategories as $sub)
                                                                    <li><a href="shop-product-right.html">{{ $sub->subcategory_name }}</a></li>
                                                                    @endforeach
                                                                  </ul>
                                                                </li>
                                                              </ul>
                                                            </li>
                                                            @endforeach
                                                          

                                                            <li class="position-static">
                                                                <a href="#">Laptops </i></a>

                                                                <ul class="mega-menu">
                                                                   
                                                                    <li class="sub-mega-menu sub-mega-menu-width-22">
                                                                        
                                                                        <ul>
                                                                            <li><a href="shop-product-right.html">Breakfast Sausage</a></li>
                                                                           
                                                                        </ul>
                                                                    </li>
                              
                                            </ul>
                                        </li>
                                                      
                                                    
                                                           
                                        <li>
                                            <a href="page-contact.html">Store</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                                        </div>


                                        <div class="header-action-icon-2 d-block d-lg-none">
                                            <div class="burger-icon burger-icon-white">
                                                <span class="burger-icon-top"></span>
                                                <span class="burger-icon-mid"></span>
                                                <span class="burger-icon-bottom"></span>
                                            </div>
                                        </div>
                                        <div class="header-action-right d-block d-lg-none">
                                            <div class="header-action-2">
                                                <div class="header-action-icon-2">
                                                    <a href="shop-wishlist.html">
                                                        <img alt="Nest" src="{{ asset('frontend/assets/imgs/theme/icons/icon-heart.svg') }}" />
                                                        <span class="pro-count white">4</span>
                                                    </a>
                                                </div>
                                                <div class="header-action-icon-2">
                                                    <a class="mini-cart-icon" href="#">
                                                        <img alt="Nest" src="{{ asset('frontend/assets/imgs/theme/icons/icon-cart.svg') }}" />
                                                        <span class="pro-count white">2</span>
                                                    </a>
                                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                                        <ul>
                                                            <li>
                                                                <div class="shopping-cart-img">
                                                                    <a href="shop-product-right.html"><img alt="Nest" src="{{ asset('frontend/assets/imgs/shop/thumbnail-3.jpg') }}" /></a>
                                                                </div>
                                                                <div class="shopping-cart-title">
                                                                    <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                                                    <h3><span>1 × </span>$800.00</h3>
                                                                </div>
                                                                <div class="shopping-cart-delete">
                                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="shopping-cart-img">
                                                                    <a href="shop-product-right.html"><img alt="Nest" src="{{ asset('frontend/assets/imgs/shop/thumbnail-4.jpg') }}" /></a>
                                                                </div>
                                                                <div class="shopping-cart-title">
                                                                    <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                                                    <h3><span>1 × </span>$3500.00</h3>
                                                                </div>
                                                                <div class="shopping-cart-delete">
                                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="shopping-cart-footer">
                                                            <div class="shopping-cart-total">
                                                                <h4>Total <span>$383.00</span></h4>
                                                            </div>
                                                            <div class="shopping-cart-button">
                                                                <a href="shop-cart.html">View cart</a>
                                                                <a href="shop-checkout.html">Checkout</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            <!-- header-bottom-end -->

      

    </header>

    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.html"><img src="{{ asset('frontend/assets/imgs/theme/logo.svg') }}" alt="logo" /></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…" />
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li class="menu-item-has-children">
                                <a href="index.html">Home</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="shop-grid-right.html">shop</a>
                                <ul class="dropdown">
                                    <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                    <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                    <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                    <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                    <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Single Product</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Product – Right Sidebar</a></li>
                                            <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                            <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                            <li><a href="shop-product-vendor.html">Product – Vendor Infor</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-filter.html">Shop – Filter</a></li>
                                    <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                    <li><a href="shop-cart.html">Shop – Cart</a></li>
                                    <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                    <li><a href="shop-compare.html">Shop – Compare</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Shop Invoice</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-invoice-1.html">Shop Invoice 1</a></li>
                                            <li><a href="shop-invoice-2.html">Shop Invoice 2</a></li>
                                            <li><a href="shop-invoice-3.html">Shop Invoice 3</a></li>
                                            <li><a href="shop-invoice-4.html">Shop Invoice 4</a></li>
                                            <li><a href="shop-invoice-5.html">Shop Invoice 5</a></li>
                                            <li><a href="shop-invoice-6.html">Shop Invoice 6</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">Mega menu</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children">
                                        <a href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Dresses</a></li>
                                            <li><a href="shop-product-right.html">Blouses & Shirts</a></li>
                                            <li><a href="shop-product-right.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="shop-product-right.html">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Jackets</a></li>
                                            <li><a href="shop-product-right.html">Casual Faux Leather</a></li>
                                            <li><a href="shop-product-right.html">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Gaming Laptops</a></li>
                                            <li><a href="shop-product-right.html">Ultraslim Laptops</a></li>
                                            <li><a href="shop-product-right.html">Tablets</a></li>
                                            <li><a href="shop-product-right.html">Laptop Accessories</a></li>
                                            <li><a href="shop-product-right.html">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="blog-category-fullwidth.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                    <li><a href="blog-category-list.html">Blog Category List</a></li>
                                    <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                    <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Single Product Layout</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                            <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="page-about.html">About Us</a></li>
                                    <li><a href="page-contact.html">Contact</a></li>
                                    <li><a href="page-account.html">My Account</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-forgot-password.html">Forgot password</a></li>
                                    <li><a href="page-reset-password.html">Reset password</a></li>
                                    <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                    <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="page-terms.html">Terms of Service</a></li>
                                    <li><a href="page-404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <!-- <li class="menu-item-has-children">
                                <a href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap">
                    <div class="single-mobile-header-info">
                        <a href="page-contact.html"><i class="fi-rs-marker"></i> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="page-login.html"><i class="fi-rs-user"></i>Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-15">Follow Us</h6>
                    <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-facebook-white.svg') }}" alt="" /></a>
                    <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-twitter-white.svg') }}" alt="" /></a>
                    <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-instagram-white.svg') }}" alt="" /></a>
                    <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-pinterest-white.svg') }}" alt="" /></a>
                    <a href="#"><img src="{{ asset('frontend/assets/imgs/theme/icons/icon-youtube-white.svg') }}" alt="" /></a>
                </div>
                <div class="site-copyright">Copyright 2022 © Nest. All rights reserved. Powered by AliThemes.</div>
            </div>
        </div>
    </div>