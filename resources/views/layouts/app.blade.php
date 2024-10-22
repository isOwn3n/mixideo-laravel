@extends('layouts.root') @section('header')
<!-- cart-model -->
<div class="modal fade" id="cart_model" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title f_13 font-weight-bold">
                    Product successfully added to your shopping cart
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4 col-xs-12 mb-3">
                        <img src="{{ asset('img/product/13.jpg') }}"
                            class="fst-image mx-auto d-block img-fluid border rounded" alt="13" />
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <h6 class="font-weight-bold">
                            Hummingbird printed t-shirt
                        </h6>
                        <div class="font-weight-bold pb-1">$19.12</div>
                        <span class="font-weight-bold f_13 pb-1">Size: S</span><br />
                        <span class="font-weight-bold f_13 pb-1">Color: White</span><br />
                        <span class="font-weight-bold f_13 pb-1">Qty: 2</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="border rounded bg-white final_payment">
                            <div class="card-body border-bottom">
                                <p class="text-muted">5 items</p>
                                <p class="font-weight-bolder">show details</p>
                                <div>
                                    <span class="font-weight-bold">subtotal</span>
                                    <span class="float-right font-weight-bold">$94.00</span>
                                </div>
                                <div>
                                    <span class="font-weight-bold">shipping</span>
                                    <span class="float-right font-weight-bold">$9.00</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <span class="font-weight-bold">total(tax excl.)</span>
                                    <span class="float-right font-weight-bold">$94.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary mt-2 f_13 px-3 py-2 rounded" data-dismiss="modal">close</a>
                <a href="{{ route('checkout.index') }}" class="btn btn-primary mt-2 f_13 px-3 py-2 rounded">continue</a>
                <!-- checkout.html -->
            </div>
        </div>
    </div>
</div>
<!-- cart_model -->
<!-- eye-model -->
<div class="modal fade" id="eye_model" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-5 col-12">
                        <img src="{{ asset('img/product/13.jpg') }}"
                            class="fst-image mx-auto d-block img-fluid border rounded" alt="13" />
                    </div>
                    <div class="col-sm-7 col-12">
                        <h5 class="font-weight-bold border-bottom me_name">
                            Aliquam Top Erat Volutpat
                        </h5>
                        <div class="font-weight-bold border-bottom me_price">
                            $19.12
                        </div>
                        <div class="my-2 border-bottom me_des">
                            Fashion has been creating well-designed collections
                            since 2010.
                        </div>
                        <div class="me_quan">
                            <div class="sp_counter">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                            data-type="minus" data-field="quant[1]">
                                            <span class="minus">-</span>
                                        </button>
                                    </span>
                                    <input type="number" name="quant[1]" class="form-control input-number" value="1"
                                        min="1" max="10" />
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus"
                                            data-field="quant[1]">
                                            <span class="plus">+</span>
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <span>
                                <a href="cart.html" class="btn btn-primary primary mt-3">add to cart</a>
                                <!-- cart.html -->
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- eye_model -->
<!-- compare-model -->
<div class="modal fade" id="compare_model" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="checked"></p>
                <h5>Compare list updated!</h5>
                <p class="text-muted font-weight-bold">
                    Product successfully removed from the product comparison!
                </p>
                <div class="text-danger font-weight-bold">
                    <a href="compare.html">Go to Compare</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- compare_model -->
<!-- heart-model -->
<div class="modal fade" id="heart_model" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p class="checked"></p>
                <p class="text-muted font-weight-bold">
                    You must be logged in to manage your wishlist.
                </p>
                <div class="text-danger font-weight-bold">
                    <a href="wishlist.html">Go to wishlist</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- heart_model -->
{{--
<div class="preloader"></div>
--}}
<!-- header area -->
<!-- first row -->
<header>
    <div class="header-top sticky-md-top">
        <div class="container header-top-container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 col-6 head-logo">
                    <div class="">
                        <a href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}" class="img-responsive img"
                                alt="logo" /></a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-9 col-md-9 col-sm-9 col-6 head-search align-self-center head-con-top">
                    <div class="row d-flex navbar app_enter_pin">
                        <div class="input-class text-left col-xl-9 col-lg-9 col-md-12 col-12">
                            <div class="between-header rounded mb-0 head-left">
                                <select class="select-menu form-select d-none d-md-block">
                                    <option value="selected">
                                        all categories
                                    </option>
                                    <option value="1">laptop</option>
                                    <option value="2">headphone</option>
                                    <option value="3">audio</option>
                                </select>
                                <div class="input-group">
                                    <input type="text" placeholder="search" class="form-control" aria-label="search"
                                        aria-describedby="button-addon2" />
                                    <div class="input-group-btn header-search">
                                        <div class="header-toggle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6 head-right text-right">
                            <ul class="top_cart">
                                <li class="dropdown d-inline-block md_acco">
                                    <span class="dropdown-toggle" role="menu" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <a href="#">
                                            <span
                                                class="comp_acco align-middle d-xl-inline-block d-lg-none d-md-none d-sm-none d-none font-weight-bolder">Account</span>
                                            <span class="rcom d-lg-inline-block d-md-none d-sm-none d-none"><a
                                                    href="{{ route('index') }}"><img src="{{
                                                            asset(
                                                                'img/icon/user.png'
                                                            )
                                                        }}" class="img-responsive img" alt="vk" /></a></span>
                                        </a>
                                    </span>
                                    <ul class="shopping-cart">
                                        <li class="dropdown-menu r_menu dropdown-menu-right">
                                            <a class="dropdown-item font-weight-bolder" href="{{ route('login') }}">log
                                                in</a>
                                            <a class="dropdown-item font-weight-bolder"
                                                href="{{ route('register') }}">Sign
                                                up</a>
                                        </li>
                                    </ul>
                                </li>
                                @if ($init_data['items_count'] > 0)
                                <li class="dropdown d-inline-block md_cart">
                                    <span class="dropdown-toggle" role="menu" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <a href="{{ route('cart.index') }}">
                                            <span
                                                class="comp_cart align-middle d-xl-inline-block d-lg-none d-md-none d-sm-none d-none font-weight-bolder">Cart</span>
                                            <span><a href="{{ route('cart.index') }}"><img src="{{
                                                            asset(
                                                                'img/icon/cart.png'
                                                            )
                                                        }}" class="img-responsive img" alt="vk" /></a></span>
                                            <span
                                                class="d-lg-inline-block d-md-none d-sm-none d-none align-middle font-weight-bolder"></span><span
                                                class="price_cart d-md-inline-block align-middle">{{
                                                $init_data['items_count']
                                                }}</span>
                                        </a>
                                    </span>
                                    <div class="dropdown-menu s_cart dropdown-menu-right">
                                        <ul class="shopping-cart p-2">
                                            @foreach ($init_data['top_cart'] as $item)
                                            <li class="pb-2 d-block top_cart_product"
                                                id="product_{{ $item->product->id }}">
                                                <div class="media">
                                                    <div>
                                                        <a href="#">
                                                            <img src="@if ($item->product->images->first()){{ asset($item->product->images->first()->image_path) }}@else @endif"
                                                                class="fst-image img-fluid align-self-center"
                                                                alt="13" />
                                                        </a>
                                                    </div>
                                                    <div class="media-body pl-1">
                                                        <h6 class="mt-0 f_15">
                                                            {{ $item->product->title}}
                                                            <span class="float-right cart_cross delete_button">
                                                                <a class="delete_button" style="
                                                                        cursor: pointer;
                                                                    ">
                                                                    X
                                                                </a>
                                                            </span>
                                                        </h6>
                                                        <p>
                                                            <span class="f_13">{{ $item->quantity }}
                                                                x $
                                                                {{
                                                                number_format($item->product->total_price, 2)}}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            @if ($loop->index === 2) @break
                                            @endif @endforeach
                                            <li class="d-block text-muted font-weight-bolder p-2 border-bottom">
                                                <span class="text-left">subtotal:</span>
                                                <span class="float-right">${{ number_format($init_data['totalPrice'], 2)
                                                    }}</span>
                                            </li>
                                            <li class="d-block font-weight-bolder pt-2">
                                                <span class="text-left"><a href="{{
                                                            route('cart.index')
                                                        }}">view cart</a></span>
                                                <!-- cart.html -->
                                                <span class="float-right">
                                                    <a href="{{ route('checkout.index') }}">
                                                        check out
                                                    </a>
                                                </span>
                                                <!-- checkout.html -->
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                @else
                                <li class="dropdown d-inline-block md_cart">
                                    <span class="dropdown-toggle" role="menu" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <a href="{{ route('cart.index') }}">
                                            <span
                                                class="comp_cart align-middle d-xl-inline-block d-lg-none d-md-none d-sm-none d-none font-weight-bolder">Cart</span>
                                            <span><a href="{{ route('cart.index') }}"><img src="{{
                                                            asset(
                                                                'img/icon/cart.png'
                                                            )
                                                        }}" class="img-responsive img" alt="vk" /></a></span>
                                            <span
                                                class="d-lg-inline-block d-md-none d-sm-none d-none align-middle font-weight-bolder"></span><span
                                                class="price_cart d-md-inline-block align-middle">
                                                {{ $init_data['items_count'] }}
                                            </span>
                                        </a>
                                    </span>
                                </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container header-bottom-container">
            <div class="row d-flex navbar">
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 col-6">
                    <div class="v_menu bg-white rounded">
                        <div class="cat_menu rounded-top">
                            <a class="pe-auto text-uppercase d-md-none d-sm-none d-none d-lg-block font-weight-bold"
                                data-toggle="collapse" href="#vartical_collapse" role="button" aria-expanded="false"
                                aria-controls="vartical_collapse">
                                <div class="cat_menu_ic">
                                    <div class="ico-menu">
                                        <div class="bar"></div>
                                        <div class="bar"></div>
                                        <div class="bar"></div>
                                    </div>
                                </div>
                                <span>all categories</span>
                            </a>
                        </div>
                        <div class="navbar-header d-xl-none d-lg-none">
                            <button type="button" class="btn-navbar navbar-toggle" onclick="openNav()"
                                data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="collapse" id="vartical_collapse">
                            <div id="mySidenav" class="sidenav">
                                <div class="close-nav d-xl-none d-lg-none">
                                    <span class="categories">Menu</span>
                                    <a href="javascript:void(0)" class="closebtn pull-right" onclick="closeNav()"><i
                                            class="fas fa-times"></i></a>
                                </div>
                                <ul class="vertical_main_menu h_menu navbar navbar-nav border">
                                    <li class="dropdown mega_menu m1_menu level-1 font-weight-bolder">
                                        <a class="dropdown-toggle" href="product.html" role="button"
                                            data-toggle="dropdown" aria-expanded="false"><i
                                                class="fas fa-mobile-alt"></i>portfolio&nbsp;<span
                                                class="float-right mt-1"><i class="fas fa-angle-down"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <ul class="row mx-0">
                                                    <li class="mg_menu col-lg-6 col-md-12">
                                                        <ul>
                                                            <li
                                                                class="h_title text-uppercase font-weight-bold border-bottom">
                                                                portfolio grid 2
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="portfolio-grid-2.html">portfolio
                                                                    grid 2</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="portfolio-grid-3.html">portfolio
                                                                    grid 3</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="portfolio-grid-4.html">portfolio
                                                                    grid 4</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="mesonary-grid-2.html">mesonary
                                                                    grid 2</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="mesonary-grid-3.html">mesonary
                                                                    grid 3</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="mesonary-grid-4.html">mesonary
                                                                    grid 4</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mg_menu col-lg-6 col-md-12">
                                                        <ul>
                                                            <li
                                                                class="h_title text-uppercase font-weight-bold border-bottom">
                                                                theme elements
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="title.html">title</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="category-style.html">category</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="services.html">services</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="product-tab.html">product
                                                                    tab</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="multi-slider-product.html">multi
                                                                    slider
                                                                    product</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown level-1 font-weight-bolder">
                                        <a class="dropdown-toggle" href="blog.html" role="button" data-toggle="dropdown"
                                            aria-expanded="false"><i class="far fa-hourglass"></i>blog&nbsp;<span
                                                class="float-right mt-1"><i class="fas fa-angle-down"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item font-weight-bolder" href="blog.html">blog</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-weight-bolder"
                                                    href="blog-left-sidebar.html">left sidebar</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-weight-bolder"
                                                    href="blog-right-sidebar.html">right sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown level-1 font-weight-bolder">
                                        <a class="dropdown-toggle" href="shop-left-sidebar.html" role="button"
                                            data-toggle="dropdown" aria-expanded="false"><i
                                                class="fas fa-laptop"></i>shop&nbsp;<span class="float-right mt-1"><i
                                                    class="fas fa-angle-down"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item font-weight-bolder"
                                                    href="shop-left-sidebar.html">left sidebar</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-weight-bolder"
                                                    href="shop-right-sidebar.html">right sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega_menu level-1 font-weight-bolder">
                                        <a class="dropdown-toggle" href="product.html" role="button"
                                            data-toggle="dropdown" aria-expanded="false"><i
                                                class="fas fa-mobile-alt"></i>Smartphone&nbsp;<span
                                                class="float-right mt-1"><i class="fas fa-angle-down"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <ul class="row mx-0">
                                                    <li class="mg_menu col-lg-4 col-md-12">
                                                        <ul>
                                                            <li
                                                                class="h_title text-uppercase font-weight-bold border-bottom">
                                                                accessories
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="shop-left-sidebar.html">Laptop</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="shop-left-sidebar.html">head
                                                                    phone</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="shop-left-sidebar.html">computer</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="shop-left-sidebar.html">chair</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="shop-left-sidebar.html">mobile</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mg_menu col-lg-4 col-md-12">
                                                        <ul>
                                                            <li
                                                                class="h_title text-uppercase font-weight-bold border-bottom">
                                                                fashion
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="shop-left-sidebar.html">Laptop</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="shop-left-sidebar.html">head
                                                                    phone</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="shop-left-sidebar.html">computer</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="shop-left-sidebar.html">chair</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item font-weight-bolder"
                                                                    href="shop-left-sidebar.html">mobile</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mg_menu col-lg-4 col-md-12">
                                                        <ul>
                                                            <li>
                                                                <a href="product.html"><img src="{{
                                                                            asset(
                                                                                'img/product/deal2.jpg'
                                                                            )
                                                                        }}"
                                                                        class="fst-image mx-auto d-block mb-1 img-fluid"
                                                                        alt="deal2" /></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown level-1 font-weight-bolder">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false"><i class="fas fa-laptop"></i>pages&nbsp;<span
                                                class="float-right mt-1"><i class="fas fa-angle-down"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item font-weight-bolder" href="about-us.html">about
                                                    us</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-weight-bolder" href="login.html">login</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-weight-bolder" href="signup-page.html">sign
                                                    up</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-weight-bolder" href="product.html">single
                                                    product</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-weight-bolder"
                                                    href="single-blog.html">single blog</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-weight-bolder" href="{{
                                                        route('cart.index')
                                                    }}">cart</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-weight-bolder"
                                                    href="compare.html">compare</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-weight-bolder"
                                                    href="wishlist.html">wishlist</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-weight-bolder"
                                                    href="{{ route('checkout.index') }}">check
                                                    out</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-weight-bolder" href="forgot.html">forgot
                                                    password</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level-1 font-weight-bolder">
                                        <a href="shop-left-sidebar.html"><i
                                                class="fas fa-headphones-alt"></i>Headphone</a>
                                    </li>
                                    <li class="level-1 font-weight-bolder">
                                        <a href="shop-left-sidebar.html"><i class="far fa-clock"></i>Smart
                                            watch</a>
                                    </li>
                                    <li class="level-1 font-weight-bolder">
                                        <a href="shop-left-sidebar.html"><i class="far fa-keyboard"></i>Accessories</a>
                                    </li>
                                    <li class="level-1 font-weight-bolder">
                                        <a href="shop-left-sidebar.html"><i class="fas fa-tshirt"></i>Clothes</a>
                                    </li>
                                    <li class="level-1 font-weight-bolder">
                                        <a href="shop-left-sidebar.html"><i
                                                class="fas fa-universal-access"></i>Offers</a>
                                    </li>
                                    <li class="level-1 font-weight-bolder">
                                        <a href="shop-left-sidebar.html"><i class="far fa-keyboard"></i>Seal</a>
                                    </li>
                                    <li class="level-1 font-weight-bolder">
                                        <a href="shop-left-sidebar.html"><i class="fas fa-tshirt"></i>Fashion</a>
                                    </li>
                                    <li class="level-1 font-weight-bolder">
                                        <a href="shop-left-sidebar.html"><i
                                                class="fas fa-universal-access"></i>footwear</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- v_menu bg-white rounded -->
                </div>
                <div
                    class="col-xl-10 col-lg-9 col-md-12 text-lg-left text-md-center text-sm-center text-center top_menu head-con-bottom">
                    <div class="row d-flex">
                        <div class="pt-md-0 pt-0 text-left col-xl-10 col-lg-9 col-md-12 col-12">
                            <ul class="main-menu navbar">
                                <li class="main_sum_menu">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="main_sum_menu">
                                    <a href="shop-page.html" class="dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-expanded="false">Shop <i
                                            class="fas fa-angle-down"></i></a>
                                    <ul class="dropdown-menu all-page-drop">
                                        <li>
                                            <a class="dropdown-item font-weight-normal"
                                                href="shop-left-sidebar.html">left sidebar</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item font-weight-normal"
                                                href="shop-right-sidebar.html">right sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="main_sum_menu">
                                    <a class="dropdown-toggle" href="mesonary-grid-3.html" role="button"
                                        data-toggle="dropdown" aria-expanded="false">Gallery
                                        <i class="fas fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal"
                                                href="portfolio-grid-2.html">portfolio-grid-2</a>
                                        </li>
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal"
                                                href="portfolio-grid-3.html">portfolio-grid-3</a>
                                        </li>
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal"
                                                href="mesonary-grid-4.html">mesonary-grid-4</a>
                                        </li>
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal"
                                                href="mesonary-grid-3.html">mesonary-grid-3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="main_sum_menu">
                                    <a href="about-us.html">About Us</a>
                                </li>
                                <li>
                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                        aria-expanded="false">pages <i class="fas fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal" href="about-us.html">about
                                                us</a>
                                        </li>
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal" href="product.html">single
                                                product</a>
                                        </li>
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal" href="single-blog.html">single
                                                blog</a>
                                        </li>
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal" href="login.html">login</a>
                                        </li>
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal" href="signup-page.html">sign
                                                up</a>
                                        </li>
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal"
                                                href="{{ route('cart.index') }}">cart</a>
                                        </li>
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal" href="compare.html">compare</a>
                                        </li>
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal"
                                                href="wishlist.html">wishlist</a>
                                        </li>
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal"
                                                href="{{ route('checkout.index') }}">check
                                                out</a>
                                        </li>
                                        <li class="d-block">
                                            <a class="dropdown-item font-weight-normal" href="forgot.html">forgot
                                                password</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="main_sum_menu">
                                    <a class="dropdown-toggle" href="blog.html" role="button" data-toggle="dropdown"
                                        aria-expanded="false">Blog <i class="fas fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item font-weight-bolder"
                                                href="blog-left-sidebar.html">left sidebar</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item font-weight-bolder"
                                                href="blog-right-sidebar.html">right sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="main_sum_menu">
                                    <a href="contact-us.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-3 col-6 enter_pin text-right">
                            <li class="d-inline-block flesh-seal" data-toggle="modal" data-target="#exampleModal">
                                <a href="shop-left-sidebar.html"><img src="{{ asset('img/icon/flash.png') }}"
                                        class="img-responsive img" alt="vk" /><span
                                        class="d-xl-inline-block d-lg-inline-block d-md-none d-sm-none d-none">flash
                                        deals</span></a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- third row -->
</header>
<!-- header -->
<!-- header area end -->
@endsection



@section('footer')
<!-- footer -->
<div class="footer animate__animated animate__fadeInUp">
    <!-- services -->
    <div class="container">
        <div class="main_services">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6 m_service py-md-4 py-sm-2 my-md-0 my-sm-2">
                    <ul class="service rounded text-center  animate__animated animate__fadeInUp"
                        data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <li class="ser-svg service-1 d-lg-inline-block d-md-block align-middle mb-2">
                            <a class="icon-image"></a>
                        </li>
                        <li class="ser-t align-middle">
                            <h6 class="text-white mb-1">24 x 7 Free Support</h6>
                            <p class="mb-0">Online Support 24/7</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-6 m_service py-md-4 py-sm-2 my-md-0 my-sm-2">
                    <ul class="service rounded text-center  animate__animated animate__fadeInUp"
                        data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <li class="ser-svg service-2 d-lg-inline-block d-md-block align-middle mb-2">
                            <a class="icon-image"></a>
                        </li>
                        <li class="ser-t align-middle">
                            <h6 class="text-white mb-1">Money Back Guarantee</h6>
                            <p class="mb-0">100% Secure Payment</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-6 m_service py-md-4 py-sm-2 my-md-0 my-sm-2">
                    <ul class="service rounded text-center  animate__animated animate__fadeInUp"
                        data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <li class="ser-svg service-3 d-lg-inline-block d-md-block align-middle mb-2">
                            <a class="icon-image"></a>
                        </li>
                        <li class="ser-t align-middle">
                            <h6 class="text-white mb-1">Special Gift Cards</h6>
                            <p class="mb-0">Give The Perfect Gift</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-6 m_service py-md-4 py-sm-2 my-md-0 my-sm-2">
                    <ul class="service rounded text-center  animate__animated animate__fadeInUp"
                        data-wow-duration="0.8s" data-wow-delay="0.4s">
                        <li class="ser-svg service-4 d-lg-inline-block d-md-block align-middle mb-2">
                            <a class="icon-image"></a>
                        </li>
                        <li class="ser-t align-middle">
                            <h6 class="text-white mb-1">Worldwide Shipping</h6>
                            <p class="mb-0">On Order Over $99</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- services end -->
    <!-- extra offer tab -->
    <div class="extra_offer_tab py-xl-3 py-lg-2 py-md-2 py-sm-1 d-md-block d-none text-white text-center">
        <h5 class="m-0 font-weight-bold">Hurry Up !! Get Extra 10% OFF, on your first order Coupon Code: FIRST10</h5>
    </div>
    <!-- extra offer tab -->
    <div class="third_footer">
        <div class="container">
            <div class="th_foo">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-3 col-12 thi_padd">
                        <div class="sec_col">
                            <div class="footer_title">
                                <h5 class="text-uppercase text-white">My Account<button class="toggle collapsed"
                                        data-toggle="collapse" data-target="#f_account"></button></h5>
                            </div>
                            <div class="categorie collapse" id="f_account">
                                <ul>
                                    <li><a href="checkout.html">Payments</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="delivery.html">Shipping</a></li>
                                    <li><a href="login-page.html">login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-12 thi_padd">
                        <div class="th_col">
                            <div class="footer_title">
                                <h5 class="text-uppercase text-white">categories<button class="toggle collapsed"
                                        data-toggle="collapse" data-target="#f_categories"></button></h5>
                            </div>
                            <div class="categorie collapse" id="f_categories">
                                <ul>
                                    <li><a href="shop-page.html">fashion</a></li>
                                    <li><a href="shop-page.html">Watches</a></li>
                                    <li><a href="shop-page.html">farnichar</a></li>
                                    <li><a href="shop-page.html">Appliances</a></li>
                                    <li><a href="shop-page.html">accessories</a></li>
                                    <li><a href="shop-page.html">electronics</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-12 thi_padd">
                        <div class="fth_col">
                            <div class="footer_title">
                                <h5 class="text-uppercase text-white">information<button class="toggle collapsed"
                                        data-toggle="collapse" data-target="#fh_information"></button></h5>
                            </div>
                            <div class="categorie collapse" id="fh_information">
                                <ul>
                                    <li><a href="about-us.html">About</a></li>
                                    <li><a href="shopping-cart.html">Information</a></li>
                                    <li><a href="shop-page.html">New products</a></li>
                                    <li><a href="product.html">Best sales</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-12 left-bor thi_padd">
                        <div class="fth_col">
                            <div class="footer_title">
                                <h5 class="text-uppercase text-white">Policy info<button class="toggle collapsed"
                                        data-toggle="collapse" data-target="#fh_policy"></button></h5>
                            </div>
                            <div class="categorie collapse" id="fh_policy">
                                <ul>
                                    <li><a href="Privacy.html">Privacy Policy</a></li>
                                    <li><a href="Terms-Sale.html">Terms of Sale</a></li>
                                    <li><a href="Privacy.html">Report Abuse & Takedown Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-12 thi_padd f_col footer_5">
                        <div class="fst_col">
                            <div class="footer_title">
                                <h5 class="text-uppercase text-white">contact us<button class="toggle collapsed"
                                        data-toggle="collapse" data-target="#f_contact"></button></h5>
                            </div>
                            <div class="categorie collapse " id="f_contact">
                                <ul class="add_row">
                                    <li>
                                        <div class="data1 add contact-ic">
                                            <a href="#">Demo A - 2 Puffin Street,<br> Puffinville India, Surat</a>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="contact-ic call_ic">+911234567890</a>
                                    </li>
                                    <li>
                                        <a href="#" class="mail_f contact-ic mail_ic">company@example.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-12 thi_padd footer_5">
                        <div class="sec_col f-5">
                            <div class="footer_title">
                                <h5 class="text-uppercase text-white">Join Our Newsletter<button
                                        class="toggle collapsed" data-toggle="collapse" data-target="#f_about"></button>
                                </h5>
                            </div>
                            <div class="categorie collapse" id="f_about">
                                <div class="news_dec">
                                    <h4>
                                        Subscribe for latest stories and promotions
                                    </h4>
                                </div>
                                <p class="subscribe">
                                    <input type="email" name="EMAIL" placeholder="Your Email Address..." required="">
                                    <input type="submit" value="">
                                </p>
                            </div>
                        </div>
                        <div class="sec_col">
                            <div class="footer_title">
                                <h5 class="text-uppercase text-white">Downlod App<button class="toggle collapsed"
                                        data-toggle="collapse" data-target="#f_downlod"></button></h5>
                            </div>
                            <div class="categorie collapse" id="f_downlod">
                                <div class="pay-connect links">
                                    <div id="pay-connect">
                                        <ul class="list-inline list-unstyled">
                                            <li>
                                                <div class="fb1"></div>
                                            </li>
                                            <li>
                                                <div class="fb2"></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fifth_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="text-xl-left text-lg-left text-md-center text-sm-center text-center demo_link d-block">
                        2021 @ All rights reserved Powered by <a href="#">demo.com</a></div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="text-center my-lg-0 mt-md-1 mb-md-2 mt-1 mb-2 demo_link d-block">
                        <ul class="list-unstyled fsocial list-inline">
                            <li class="facebook link d-inline-block"><a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="instagram link d-inline-block"><a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="skype link d-inline-block"><a href="#"><i class="fab fa-skype"></i></a></li>
                            <li class="twitter link d-inline-block"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="snapchat link d-inline-block"><a href="#"><i
                                        class="fab fa-snapchat-ghost"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div
                        class="text-xl-right text-lg-right text-md-center text-sm-center text-center demo_link d-block">
                        <img src="{{ asset('img/Payment.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->
@endsection