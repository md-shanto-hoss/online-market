<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
    <meta name="keywords" content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

    <!-- SITE TITLE -->
    <title>Shopwise | @yield('title')</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/assets/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/linearicons.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/simple-line-icons.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/responsive.css">

</head>

<body>

{{--<!-- LOADER -->--}}
{{--<div class="preloader">--}}
{{--    <div class="lds-ellipsis">--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- END LOADER -->--}}

{{--<!-- Home Popup Section -->--}}
{{--<div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-body">--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>--}}
{{--                </button>--}}
{{--                <div class="row no-gutters">--}}
{{--                    <div class="col-sm-5">--}}
{{--                        <div class="background_bg h-100" data-img-src="{{asset('/')}}website/assets/images/popup_img.jpg"></div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-7">--}}
{{--                        <div class="popup_content">--}}
{{--                            <div class="popup-text">--}}
{{--                                <div class="heading_s1">--}}
{{--                                    <h4>Subscribe and Get 25% Discount!</h4>--}}
{{--                                </div>--}}
{{--                                <p>Subscribe to the newsletter to receive updates about new products.</p>--}}
{{--                            </div>--}}
{{--                            <form method="post">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input name="email" required type="email" class="form-control rounded-0" placeholder="Enter Your Email">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <button class="btn btn-fill-line btn-block text-uppercase rounded-0" title="Subscribe" type="submit">Subscribe</button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                            <div class="chek-form">--}}
{{--                                <div class="custome-checkbox">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">--}}
{{--                                    <label class="form-check-label" for="exampleCheckbox3"><span>Don't show this popup again!</span></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- End Screen Load Popup Section -->--}}



<!-- START HEADER -->
<header class="header_wrap">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="lng_dropdown mr-2">
                            <select name="countries" class="custome_select">
                                <option value='en' data-image="{{asset('/')}}website/assets/images/eng.png" data-title="English">English</option>
                                <option value='fn' data-image="{{asset('/')}}website/assets/images/fn.png" data-title="France">France</option>
                                <option value='us' data-image="{{asset('/')}}website/assets/images/us.png" data-title="United States">United States</option>
                            </select>
                        </div>
                        <div class="mr-3">
                            <select name="countries" class="custome_select">
                                <option value='USD' data-title="USD">USD</option>
                                <option value='EUR' data-title="EUR">EUR</option>
                                <option value='GBR' data-title="GBR">GBR</option>
                            </select>
                        </div>
                        <ul class="contact_detail text-center text-lg-left">
                            <li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-right">
                        @if(Session::get('customer_id'))
                            <ul class="header_list">
                                <li><a href="compare.html"><i class="ti-control-shuffle"></i><span>Compare</span></a></li>
                                <li><a href="{{ route('wishlist.add') }}"><i class="ti-heart"></i><span>Wishlist</span></a></li>
                                <li><a href="{{ route('customer.dashboard') }}" class="nav-link"><i class="linearicons-user"></i>Dashboard</a></li>
                                <li><a href="{{ route('customer.logout') }}"><i class="ti-arrow-right"></i><span>Logout</span></a></li>
                            </ul>
                        @else
                            <ul class="header_list">
                                <li><a href="#register" data-toggle="modal"><i class="ti-user"></i><span>Register</span></a></li>
                                <li><a href="#loginModal" data-toggle="modal"><i class="ti-user"></i><span>Login</span></a></li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="middle-header dark_skin">
        <div class="container">
            <div class="nav_block">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="logo_light" src="{{asset('/')}}website/assets/images/logo_light.png" alt="logo">
                    <img class="logo_dark" src="{{asset('/')}}website/assets/images/logo_dark.png" alt="logo">
                </a>
                <div class="product_search_form radius_input search_form_btn">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="custom_select">
                                    <select class="first_null not_chosen">
                                        <option value="">All Category</option>
                                        <option value="Dresses">Dresses</option>
                                    </select>
                                </div>
                            </div>

                            <form action="{{ route('search') }}" method="POST">
                                @csrf
                            <input class="form-control" placeholder="Search Product..." name="search" id="search" type="search">
                            <button type="submit" class="search_btn3">Search</button>
                            </form>

                        </div>
                    </form>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">

                    <li><a href="#" class="nav-link"><i class="linearicons-heart"></i><span class="wishlist_count">0</span></a></li>
                    <li class="dropdown cart_dropdown">
                        <a class="nav-link cart_trigger" href="#" data-toggle="dropdown">
                            <i class="linearicons-bag2"></i>
                            <span class="cart_count">{{ count(Cart::getContent()) }}</span>
                        </a>
                        <div class="cart_box cart_right dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                @php($sum = 0)
                                @foreach(Cart::getContent() as $cartProduct)
                                    <li>
                                        <a href="{{ route('header.cart.item.remove', ['id' => $cartProduct->id]) }}" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="#"><img src="{{asset($cartProduct->attributes->image)}}" alt="cart_thumb1">{{ $cartProduct->name }}</a>
                                        <span class="cart_quantity"> {{ $cartProduct->quantity }} x <span class="cart_amount"> <span class="price_symbole">TK.</span></span>{{ $cartProduct->price }}</span>
                                    </li>
                                    @php($sum = $sum + ($cartProduct->price * $cartProduct->quantity))
                                @endforeach
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">TK.</span></span>{{ $sum }}</p>
                                <p class="cart_buttons"><a href="{{ route('cart.show') }}" class="btn btn-fill-line view-cart">View Cart</a><a href="{{ route('checkout') }}" class="btn btn-fill-out checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase border-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-3">
                    <div class="categories_wrap">
                        <button type="button" data-toggle="collapse" data-target="#navCatContent" aria-expanded="false" class="categories_btn categories_menu">
                            <span>All Categories </span><i class="linearicons-menu"></i>
                        </button>
                        <div id="navCatContent" class="navbar collapse">
                            <ul>
                                @foreach($categories as $category)
                                    <li class="dropdown dropdown-mega-menu">
                                        <a class="dropdown-item nav-link dropdown-toggler" href="#" data-toggle="dropdown"><i class="flaticon-tv"></i> <span>{{ $category->name }}</span></a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Featured Item</li>
                                                                @foreach($category->subCategories as $subCategory)
                                                                    <li><a class="dropdown-item nav-link nav_item" href="{{ route('category', ['id' => $subCategory->id]) }}">{{ $subCategory->name }}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li class="dropdown-header">Popular Item</li>
                                                                <li><a class="dropdown-item nav-link nav_item" href="#">Curabitur laoreet</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="{{asset('/')}}website/assets/images/menu_banner7.jpg" alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>Computers</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="{{asset('/')}}website/assets/images/menu_banner8.jpg" alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Top Laptops</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="more_categories">More Categories</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-9">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler side_navbar_toggler" type="button" data-toggle="collapse" data-target="#navbarSidetoggle" aria-expanded="false">
                            <span class="ion-android-menu"></span>
                        </button>
                        <div class="pr_search_icon">
                            <a href="javascript:void(0);" class="nav-link pr_search_trigger"><i class="linearicons-magnifier"></i></a>
                        </div>
                        <div class="collapse navbar-collapse mobile_side_menu" id="navbarSidetoggle">
                            <ul class="navbar-nav mx-auto">
                                <li class="dropdown">
                                    <a  class="nav-link active" href="{{ route('home') }}">Home</a>
                                </li>

                                <li class="dropdown dropdown-mega-menu">
                                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Products</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Woman's</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-list-left-sidebar.html">Vestibulum sed</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-left-sidebar.html">Donec porttitor</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-right-sidebar.html">Donec vitae facilisis</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-list.html">Curabitur tempus</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-load-more.html">Vivamus in tortor</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Men's</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-cart.html">Donec vitae ante ante</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="checkout.html">Etiam ac rutrum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="wishlist.html">Quisque condimentum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="compare.html">Curabitur laoreet</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="order-completed.html">Vivamus in tortor</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Kid's</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Quisque condimentum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Etiam ac rutrum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec vitae ante ante</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec porttitor</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-3">
                                                <ul>
                                                    <li class="dropdown-header">Accessories</li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Quisque condimentum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Etiam ac rutrum</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec vitae ante ante</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec porttitor</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="d-lg-flex menu_banners">
                                            <div class="col-lg-6">
                                                <div class="header-banner">
                                                    <div class="sale-banner">
                                                        <a class="hover_effect1" href="#">
                                                            <img src="{{asset('/')}}website/assets/images/shop_banner_img7.jpg" alt="shop_banner_img7">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="header-banner">
                                                    <div class="sale-banner">
                                                        <a class="hover_effect1" href="#">
                                                            <img src="{{asset('/')}}website/assets/images/shop_banner_img8.jpg" alt="shop_banner_img8">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Blog</a>
                                    <div class="dropdown-menu dropdown-reverse">
                                        <ul>
                                            <li>
                                                <a class="dropdown-item menu-link dropdown-toggler" href="#">Recent Blog</a>

                                            </li>
                                            <li>
                                                <a class="dropdown-item menu-link dropdown-toggler" href="#">All Blog</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="nav-link nav_item" href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="contact_phone contact_support">
                            <i class="linearicons-phone-wave"></i>
                            <span>123-456-7689</span>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER -->

@yield('body')

<!-- START FOOTER -->
<footer class="footer_dark">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget">
                        <div class="footer_logo">
                            <a href="#"><img src="{{asset('/')}}website/assets/images/logo_light.png" alt="logo"/></a>
                        </div>
                        <p>If you are going to use of Lorem Ipsum need to be sure there isn't hidden of text</p>
                    </div>
                    <div class="widget">
                        <ul class="social_icons social_white">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Useful Links</h6>
                        <ul class="widget_links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Category</h6>
                        <ul class="widget_links">
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Woman</a></li>
                            <li><a href="#">Kids</a></li>
                            <li><a href="#">Best Saller</a></li>
                            <li><a href="#">New Arrivals</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">My Account</h6>
                        <ul class="widget_links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Orders History</a></li>
                            <li><a href="#">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="widget">
                        <h6 class="widget_title">Contact Info</h6>
                        <ul class="contact_info contact_info_light">
                            <li>
                                <i class="ti-location-pin"></i>
                                <p>123 Street, Old Trafford, New South London , UK</p>
                            </li>
                            <li>
                                <i class="ti-email"></i>
                                <a href="mailto:info@sitename.com">info@sitename.com</a>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>+ 457 789 789 65</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer border-top-tran">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-md-0 text-center text-md-left">© 2020 All Rights Reserved by Bestwebcreator</p>
                </div>
                <div class="col-md-6">
                    <ul class="footer_payment text-center text-lg-right">
                        <li><a href="#"><img src="{{asset('/')}}website/assets/images/visa.png" alt="visa"></a></li>
                        <li><a href="#"><img src="{{asset('/')}}website/assets/images/discover.png" alt="discover"></a></li>
                        <li><a href="#"><img src="{{asset('/')}}website/assets/images/master_card.png" alt="master_card"></a></li>
                        <li><a href="#"><img src="{{asset('/')}}website/assets/images/paypal.png" alt="paypal"></a></li>
                        <li><a href="#"><img src="{{asset('/')}}website/assets/images/amarican_express.png" alt="amarican_express"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<div class="modal" id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header"><h3>Login</h3></div>
            <div class="modal-body">
                <form action="{{ route('customer.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email">
                        <span class="text-danger">{{ session('email') }}</span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                        <span class="text-danger">{{ session('password') }}</span>
                    </div>
                    <div class="login_footer form-group">
                        <div class="chek-form">
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                <label class="form-check-label" for="exampleCheckbox1"><span>Remember me</span></label>
                            </div>
                        </div>
                        <a href="#">Forgot password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-fill-out btn-block">Log in</button>
                    </div>
                </form>
                <div class="different_login">
                    <span> or</span>
                </div>
                <ul class="btn-login list_none text-center">
                    <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                    <li><a href="{{ route('google.redirect') }}" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                </ul>
                <div class="form-note text-center">Don't Have an Account? <a href="#register" data-toggle="modal">Sign up now</a></div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="register">
    <div class="modal-dialog modal-dialog-centered" >
        <div class="modal-content">
            <div class="modal-header"> <h3>Create an Account</h3></div>
            <div class="modal-body">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Full Name *"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your Email *"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password *"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Confirm Password *"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="number" name="mobile" placeholder="Mobile *"/>
                    </div>
                    <div class="login_footer form-group">
                        <div class="chek-form">
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox2" value="">
                                <label class="form-check-label" for="exampleCheckbox2"><span>I agree to terms &amp; Policy.</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-fill-out btn-block" >Register</button>
                    </div>
                </form>
                <div class="different_login">
                    <span> or</span>
                </div>
                <ul class="btn-login list_none text-center">
                    <li><a href="#" class="btn btn-facebook"><i class="ion-social-facebook"></i>Facebook</a></li>
                    <li><a href="#" class="btn btn-google"><i class="ion-social-googleplus"></i>Google</a></li>
                </ul>
                <div class="form-note text-center">Already have an account? <a href="#loginModal" data-toggle="modal">Log in</a></div>
                </h4>
            </div>
        </div>
    </div>
</div>

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
    <!-- Latest jQuery -->
    <script src="{{asset('/')}}website/assets/js/jquery-3.6.0.min.js"></script>
    <!-- popper min js -->
    <script src="{{asset('/')}}website/assets/js/popper.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="{{asset('/')}}website/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="{{asset('/')}}website/assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup min js  -->
    <script src="{{asset('/')}}website/assets/js/magnific-popup.min.js"></script>
    <!-- waypoints min js  -->
    <script src="{{asset('/')}}website/assets/js/waypoints.min.js"></script>
    <!-- parallax js  -->
    <script src="{{asset('/')}}website/assets/js/parallax.js"></script>
    <!-- countdown js  -->
    <script src="{{asset('/')}}website/assets/js/jquery.countdown.min.js"></script>
    <!-- imagesloaded js -->
    <script src="{{asset('/')}}website/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js -->
    <script src="{{asset('/')}}website/assets/js/isotope.min.js"></script>
    <!-- jquery.dd.min js -->
    <script src="{{asset('/')}}website/assets/js/jquery.dd.min.js"></script>
    <!-- slick js -->
    <script src="{{asset('/')}}website/assets/js/slick.min.js"></script>
    <!-- elevatezoom js -->
    <script src="{{asset('/')}}website/assets/js/jquery.elevatezoom.js"></script>
    <!-- scripts js -->
    <script src="{{asset('/')}}website/assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if(Session::has('message'))
        <script>
            $(document).ready(function (){
                toastr.success("{{ Session::get('message') }}");
            });
        </script>
    @endif
@yield('script')
    <script>
        // $(document).ready(function (){
        //     $('#search').on('keyup', function () {
        //         let value = $(this).val();
        //
        //         $.ajax({
        //             method: "GET",
        //             url: "/search",
        //             data: { search: value},
        //             dataType: "JSON",
        //             success: function (res){
        //                 console.log(res);
        //             },
        //             error: function (err){
        //                 alert("Error found");
        //             }
        //         });
        //     });
        // });
    </script>
</body>
</html>
