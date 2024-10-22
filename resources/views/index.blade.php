@extends('layouts.app')

@section('title')Home @endsection

@section('content')
<div id="home_vertical_menu" class="menu_slider">
    <div class="main_slider">
        <div id="silder_carousel" class="silder_carousel owl-carousel owl-theme pro_thumb">
            {{-- TODO: loop on each item for slider. --}}
            <div class="item">
                <div class="col-12 p-0">
                    <img src="img/slider/s1.jpg" class="d-block w-100 img-fluid" alt="s1" />
                    <div class="silder_text">
                        <p>Upto 30% Off</p>
                        <h5>New Smartphone</h5>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-12 p-0">
                    <img src="img/slider/s2.jpg" class="d-block w-100 img-fluid" alt="s2" />
                    <div class="silder_text">
                        <p>Upto 30% Off</p>
                        <h5>New Smartphone</h5>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-12 p-0">
                    <img src="img/slider/s3.jpg" class="d-block w-100 img-fluid" alt="s3" />
                    <div class="silder_text">
                        <p>Upto 30% Off</p>
                        <h5>New Smartphone</h5>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- vertical menu and slider end -->
<!-- top categories -->
{{-- TODO: Handle top categories. --}}
<div class="t_cat_container">
    <div class="container animate__animated animate__fadeInUp">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="bg_categ rounded mb-xl-0 mb-lg-3 mb-md-3 mb-sm-3 mb-2">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="font-weight-bold mb-3">Cooking appliances</h5>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c1.jpg" alt="c1" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Geysers</a>
                            </h6>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c2.jpg" alt="c2" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Geysers</a>
                            </h6>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c3.jpg" alt="c3" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Mixer grinders</a>
                            </h6>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c4.jpg" alt="c4" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Airpurifirs</a>
                            </h6>
                        </div>
                        <div class="col-12">
                            <h6 class="mt-lg-2 mt-0 mb-0">
                                <a href="category-style.html">See more >></a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="bg_categ rounded mb-xl-0 mb-lg-3 mb-md-3 mb-sm-3 mb-2">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="font-weight-bold mb-3">Household Devices</h5>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c5.jpg" alt="c1" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Geysers</a>
                            </h6>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c6.jpg" alt="c2" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Geysers</a>
                            </h6>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c7.jpg" alt="c3" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Mixer grinders</a>
                            </h6>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c8.jpg" alt="c4" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Airpurifirs</a>
                            </h6>
                        </div>
                        <div class="col-12">
                            <h6 class="mt-lg-2 mt-0 mb-0">
                                <a href="category-style.html">See more >></a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="bg_categ rounded mb-sm-0 mb-2">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="font-weight-bold mb-3">Sale and Offers</h5>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c9.jpg" alt="c1" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Geysers</a>
                            </h6>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c10.jpg" alt="c2" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Geysers</a>
                            </h6>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c11.jpg" alt="c3" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Mixer grinders</a>
                            </h6>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c12.jpg" alt="c4" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Airpurifirs</a>
                            </h6>
                        </div>
                        <div class="col-12">
                            <h6 class="mt-lg-2 mt-0 mb-0">
                                <a href="category-style.html">See more >></a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="bg_categ rounded">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="font-weight-bold mb-3">Modern Home Appliances</h5>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c13.jpg" alt="c1" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Geysers</a>
                            </h6>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c14.jpg" alt="c2" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Geysers</a>
                            </h6>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c15.jpg" alt="c3" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Mixer grinders</a>
                            </h6>
                        </div>
                        <div class="col-6">
                            <img class="rounded img-fluid" src="img/category/c16.jpg" alt="c4" />
                            <h6 class="mt-2 mb-md-3 mb-2 text-truncate">
                                <a href="category-style.html">Airpurifirs</a>
                            </h6>
                        </div>
                        <div class="col-12">
                            <h6 class="mt-lg-2 mt-0 mb-0">
                                <a href="category-style.html">See more >></a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- top categories end -->
<!-- special products -->
<div class="special_products">
    <div class="container animate__animated animate__fadeInLeft">
        <div class="row smart_mob">
            <div class="col-lg-12 col-12">
                <div>
                    <div class="title_outer">
                        <h4 class="d-inline-block text-uppercase">special products</h4>
                    </div>
                    <div id="special_products" class="owl-carousel owl-theme">
                        @foreach ($products['featured'] as $product)
                        <div class="item product_item" id="product_{{ $product->id }}">
                            <div class="col-12 p-0">
                                <div class="product_thumb">
                                    <div class="pro_image">
                                        @foreach ($product->images->take(2) as $image)
                                        {{-- TODO: Change href of each product. --}}
                                        <a href="product.html">
                                            <img src="{{ $image->image_path }}"
                                                class="{{ $loop->first ? 'fst-image' : 'second-img' }} mx-auto d-block img-fluid rounded"
                                                alt="1" />
                                        </a>
                                        @endforeach
                                    </div>
                                    <div class="text-center">
                                        <a style="cursor: pointer" class="symbol add_to_cart">
                                            ADD TO CART
                                        </a>
                                        <div class="main_text">
                                            <h2 class="text-center pro-heading mt-2 mb-0">
                                                <a href="product.html" class="font-weight-bolder">
                                                    {{ $product->title }}
                                                </a>
                                            </h2>

                                            @php
                                            $rating = $product->rating;
                                            $fullStars = floor($rating);
                                            $halfStar = ($rating - $fullStars) >= 0.5 ? true : false;
                                            $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                            @endphp

                                            <div class="star text-warning">
                                                @for ($i = 0; $i < $fullStars; $i++) <i class="fa fa-star"
                                                    aria-hidden="true"></i>
                                                    @endfor

                                                    @if ($halfStar)
                                                    <i class="fa fa-star-half-alt" aria-hidden="true"></i>
                                                    @endif

                                                    @for ($i = 0; $i < $emptyStars; $i++) <i class="far fa-star"
                                                        aria-hidden="true"></i>
                                                        @endfor
                                            </div>
                                            @if ($product->discount > 0)
                                            <span class="text-center">
                                                <span class="price">
                                                    ${{ number_format($product->total_price, 2) }}
                                                </span>
                                                <del class="text-muted">
                                                    ${{ number_format($product->price, 2) }}
                                                </del>
                                            </span>
                                            @else
                                            <span class="price">
                                                ${{ number_format($product->price, 2) }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</div>
<!-- special products end -->
<!-- deals of the day -->
{{-- <div class="deal_container">
    <div class="container deal_of_container animate__animated animate__fadeInUp">
        <div class="row deal_day">
            <div class="col-12">
                <div class="title_outer">
                    <h4 class="d-inline-block text-uppercase">Deal of the day</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 deal">
                <div id="fullcarousel" class="owl-carousel owl-theme bg-white rounded">
                    <div class="item">
                        <div class="deal_thumb bg-white rounded d-flex align-self-center">
                            <div class="col-sm-5 col-12 pro_image px-0">
                                <a href="product.html"><img src="img/product/9.jpg"
                                        class="fst-image mx-auto d-block img-fluid" alt="9" /></a>
                                <a href="product.html"><img src="img/product/10.jpg"
                                        class="second-img mx-auto d-block img-fluid" alt="10" /></a>
                            </div>
                            <div class="col-sm-7 col-12">
                                <div class="detail">
                                    <h6 class="font-weight-bolder mb-0">
                                        <a href="product.html">Analog Kichenware Plastic Hand Juicer
                                        </a>
                                    </h6>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="mb-0 border-bottom">
                                        <span class="font-weight-bolder price">$69.00 </span>
                                        <del class="text-muted">$100.00</del>
                                    </p>
                                    <p class="deals_caption f_14">
                                        It is a long established fact that a reader will be
                                        distracted by the readable content of a page when
                                        looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more...
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="sold-pro">
                                        Sold By: <span class="">70/100</span>
                                    </div>
                                    <div class="offers-tym font-weight-bold">
                                        Hurry Up! Offer Ends in:
                                    </div>
                                    <div class="d-inline-block">
                                        <p id="demo5" class="counter m-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="deal_thumb bg-white rounded d-flex">
                            <div class="col-sm-5 col-12 pro_image px-0">
                                <a href="product.html"><img src="img/product/7.jpg"
                                        class="fst-image mx-auto d-block img-fluid" alt="7" /></a>
                                <a href="product.html"><img src="img/product/8.jpg"
                                        class="second-img mx-auto d-block img-fluid" alt="8" /></a>
                            </div>
                            <div class="col-sm-7 col-12">
                                <div class="detail">
                                    <h6 class="font-weight-bolder mb-0">
                                        <a href="product.html">Best Quality Bluetooth M3 Smart Watch With Calling</a>
                                    </h6>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="mb-0 border-bottom">
                                        <span class="font-weight-bolder price">$69.00 </span>
                                        <del class="text-muted">$100.00</del>
                                    </p>
                                    <p class="deals_caption f_14">
                                        It is a long established fact that a reader will be
                                        distracted by the readable content of a page when
                                        looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more...
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="sold-pro">
                                        Sold By: <span class="">70/100</span>
                                    </div>
                                    <div class="offers-tym font-weight-bold">
                                        Hurry Up! Offer Ends in:
                                    </div>
                                    <div class="d-inline-block">
                                        <p id="demo1" class="counter m-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="deal_thumb bg-white rounded d-flex">
                            <div class="col-sm-5 col-12 pro_image px-0">
                                <a href="product.html"><img src="img/product/13.jpg"
                                        class="fst-image mx-auto d-block img-fluid" alt="13" /></a>
                                <a href="product.html"><img src="img/product/14.jpg"
                                        class="second-img mx-auto d-block img-fluid" alt="14" /></a>
                            </div>
                            <div class="col-sm-7 col-12">
                                <div class="detail">
                                    <h6 class="font-weight-bolder mb-0">
                                        <a href="product.html">Portable Bluetooth Speaker</a>
                                    </h6>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="mb-0 border-bottom">
                                        <span class="font-weight-bolder price">$69.00 </span>
                                        <del class="text-muted">$100.00</del>
                                    </p>
                                    <p class="deals_caption f_14">
                                        It is a long established fact that a reader will be
                                        distracted by the readable content of a page when
                                        looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more...
                                    </p>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="sold-pro">
                                        Sold By: <span class="">70/100</span>
                                    </div>
                                    <div class="offers-tym font-weight-bold">
                                        Hurry Up! Offer Ends in:
                                    </div>
                                    <div class="d-inline-block counter_sec">
                                        <p id="demo2" class="counter m-0"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <!-- col-md-6 col-12 -->
        </div>
        <!-- row -->
    </div>
    <!-- container custom_container -->
</div> --}}
<!-- deals of the day -->
<!-- top rate product -->
<div class="top_pro_tab">
    <div class="container animate__animated animate__fadeInUp">
        <div class="row smart_mob">
            <div class="col-12">
                <div class="title_outer">
                    <h4 class="d-inline-block text-uppercase">Top Rate products</h4>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-12 d-md-block d-sm-none d-none left_banner banner">
                <a href="#"><img src="img/s%26m2.jpg" class="rounded fst-image float-left img-fluid" alt="s&m2" />
                    <span class="bnr_txt_">
                        <span class="bnr_fst">camera collection</span>
                        <span class="bnr_btm">realme smart camera</span>
                    </span>
                </a>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12 right-pro">
                <div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="top_reviewed" role="tabpanel">
                            <div class="row">
                                <div class="owl-carousel-1 owl-carousel owl-theme pro_thumb">
                                    @foreach($products['top_rate'] as $product)
                                    <div class="item product_item" id="product_{{ $product->id }}">
                                        <div class="col-12 p-0">
                                            <div class="product_thumb">
                                                <div class="pro_image">
                                                    @foreach ($product->images->take(2) as $image)
                                                    {{-- TODO: Change href of each product. --}}
                                                    <a href="product.html">
                                                        <img src="{{ $image->image_path }}"
                                                            class="{{ $loop->first ? 'fst-image' : 'second-img' }} mx-auto d-block img-fluid rounded"
                                                            alt="1" />
                                                    </a>
                                                    @endforeach
                                                </div>
                                                <div class="text-center">
                                                    <a href="#" class="symbol add_to_cart" data-toggle="modal"
                                                        data-target="#cart_model">
                                                        ADD TO CART
                                                    </a>
                                                    <div class="main_text">
                                                        <h2 class="text-center pro-heading mt-2 mb-0">
                                                            <a href="product.html" class="font-weight-bolder">{{
                                                                $product->title }}</a>
                                                        </h2>
                                                        @php
                                                        $rating = $product->rating;
                                                        $fullStars = floor($rating);
                                                        $halfStar = ($rating - $fullStars) >= 0.5 ? true : false;
                                                        $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                                        @endphp

                                                        <div class="star text-warning">
                                                            @for ($i = 0; $i < $fullStars; $i++) <i class="fa fa-star"
                                                                aria-hidden="true"></i>
                                                                @endfor

                                                                @if ($halfStar)
                                                                <i class="fa fa-star-half-alt" aria-hidden="true"></i>
                                                                @endif

                                                                @for ($i = 0; $i < $emptyStars; $i++) <i
                                                                    class="far fa-star" aria-hidden="true"></i>
                                                                    @endfor
                                                        </div>
                                                        @if ($product->discount > 0)
                                                        <span class="text-center">
                                                            <span class="price">
                                                                ${{ number_format($product->total_price, 2) }}
                                                            </span>
                                                            <del class="text-muted">
                                                                ${{ number_format($product->price, 2) }}
                                                            </del>
                                                        </span>
                                                        @else
                                                        <span class="price">
                                                            ${{ number_format($product->price, 2) }}
                                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab-content -->
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
</div>
<!-- top rate product end -->
<!-- single banner -->
<div class="single_banner">
    <div class="container animate__backInLeft">
        <div class="row bnr_row">
            <div class="col-md-12 col-12 bnr_col">
                <div class="banner">
                    <a href="#">
                        <img src="img/Banner.jpg"
                            class="rounded float-left img-fluid animate__animated animate__fadeInUp"
                            data-wow-duration="0.8s" data-wow-delay="0.2s" alt="Banner" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- single banner end -->

{{-- TODO: After Handle Every thing Do things for blog. --}}

<!-- brand logo -->
<div class="container b_logo_container">
    <div class="row">
        <div id="logo_carousel" class="owl-carousel owl-theme">
            <div class="item">
                <div class="col-12">
                    <a href="#">
                        <img src="{{ asset('img/logo1.png') }}" class="second-img mx-auto d-block img-fluid"
                            alt="logo1" />
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-12">
                    <a href="#">
                        <img src="{{ asset('img/logo2.png') }}" class="second-img mx-auto d-block img-fluid"
                            alt="logo2" />
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-12">
                    <a href="#">
                        <img src="{{ asset('img/logo3.png') }}" class="second-img mx-auto d-block img-fluid"
                            alt="logo3" />
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-12">
                    <a href="#">
                        <img src="{{ asset('img/logo4.png') }}" class="second-img mx-auto d-block img-fluid"
                            alt="logo4" />
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-12">
                    <a href="#">
                        <img src="{{ asset('img/logo5.png') }}" class="second-img mx-auto d-block img-fluid"
                            alt="logo5" />
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-12">
                    <a href="#">
                        <img src="{{ asset('img/logo6.png') }}" class="second-img mx-auto d-block img-fluid"
                            alt="logo6" />
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-12">
                    <a href="#">
                        <img src="{{ asset('img/logo7.png') }}" class="second-img mx-auto d-block img-fluid"
                            alt="logo7" />
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-12">
                    <a href="#">
                        <img src="{{ asset('img/logo8.png') }}" class="second-img mx-auto d-block img-fluid"
                            alt="logo8" />
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-12">
                    <a href="#">
                        <img src="{{ asset('img/logo9.png') }}" class="second-img mx-auto d-block img-fluid"
                            alt="logo9" />
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-12">
                    <a href="#">
                        <img src="{{ asset('img/logo10.png') }}" class="second-img mx-auto d-block img-fluid"
                            alt="logo10" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand logo -->
@endsection


@section('scripts')
<script>
    //sm-slider
    $(document).ready(function() {
     $('#sub_silder_carousel').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         autoplay: true,
         arrows: true,
         dots: false,
         appendArrows: '.slider-nav',
         autoplaySpeed: 3000,
     })
});
    //desl of the day
    timedown("Dec 08, 2021 17:00:59", 'demo5');
    timedown("May 20, 2022 12:00:23", 'demo1');
    timedown("June 20, 2022 13:00:15", 'demo2');
    function timedown(ti, id) {
       // Set the date we're counting down to
       var countDownDate = new Date(ti).getTime();
    
       // Update the count down every 1 second
       var x = setInterval(function () {
    
           // Get todays date and time
           var now = new Date().getTime();
    
           // Find the distance between now an the count down date
           var distance = countDownDate - now;
    
           // Time calculations for days, hours, minutes and seconds
           var days = Math.floor(distance / (1000 * 60 * 60 * 24));
           var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
           var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
           var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
           // Output the result in an element with id="demo"
    document.getElementById(id).innerHTML = '<div>' + '<span>' + days + '</span>' + '<strong>' + 'days' + '</strong>' + '</div>' +
    '<div>' + '<span>' + hours +  '</span>' + '<strong>' + 'hours' + '</strong>' + '</div>' +
    '<div>' + '<span>' + minutes + '</span>' + '<strong>' + 'min' + '</strong>' + '</div>' +
    '<div>' + '<span>' + seconds + " " + '</span>'  + '<strong>' + 'sec' + '</strong>' + '</div>' ;
           // If the count down is over, write some text 
           if (distance < 0) {
               clearInterval(x);
               document.getElementById("demo").innerHTML = "EXPIRED";
           }
       }, 1000);
    }
</script>
<script>
    let index_products = document.querySelectorAll(".product_item");
    function add_to_cart(product, token) {
        let productId = product.id.split("_")[1];
        product
            .querySelector(".add_to_cart")
            .addEventListener("click", function () {
                global_make_request(
                    url,
                    JSON.stringify({
                        product_id: Number(productId),
                        quantity: 1,
                    }),
                    token,
                    "post"
                ).then(() => {
                    window.location.reload();
                });
            });
    }
    index_products.forEach((product) => {
        add_to_cart(product, token);
    });
</script>
@endsection