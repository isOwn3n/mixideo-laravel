<!DOCTYPE html>
<html class="" lang="en">
<!-- Mirrored from dostguru.com/HTML/mixideo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Jan 2023 17:01:22 GMT -->

<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Home') | Mixideo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}" />
    <!-- table css start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.jqueryui.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rowGroup.jqueryui.min.css') }}" />
    <!-- table css end -->
    <!--bootstrap required css start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- Font Awesome Free 5.15.1 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}" />
    <!-- Font awesome end  -->
    <!-- Owl Carousel v1.3.3 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css')}}">
    <!-- animate 4.1.1 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css')}}">
    <!-- media -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/media.css')}}">
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" />
    <!-- google fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,900&amp;display=swap"
        rel="stylesheet" />
    <!-- custom css end -->
    @yield('style')
</head>

<body>
    @yield('header')
    @if (session('message'))
    <div class="alert alert-success alert-dismissible" id="success-alert">
        {{ session('message') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible" id="error-alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @yield('content')

    @yield('footer')
    <!-- jQuery library -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Latest compiled JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- jQuery OwlCarousel v1.3.3 -->
    <script src="{{ asset('js/owl.carousel.js')}}"></script>
    <!-- Font Awesome Free 5.15.1 -->
    <script src="{{ asset('js/all.min.js')}}"></script>
    <!-- wow.js - v1.2.1 -->
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <!-- slick -->
    <script src="{{ asset('js/slick.js')}}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js')}}"></script>
    <!-- table Js start -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.jqueryui.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.rowGroup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <!-- table Js End -->
    @auth
    <script>
        let top_products = document.querySelectorAll(".top_cart_product");
        let token = document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content");

        const url = "http://127.0.0.1:8000/cart/";
        async function global_make_request(url, body, token, method) {
            await fetch(url, {
                method: method,
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": token,
                },
                body: body,
            });
        }

        function top_delete_item(product, token) {
            let productId = product.id.split("_")[1];
            product
                .querySelector(".delete_button")
                .addEventListener("click", function () {
                    global_make_request(
                        url,
                        JSON.stringify({ product_id: Number(productId) }),
                        token,
                        "DELETE"
                    ).then(() => {
                        window.location.reload();
                    });
                });
        }

        top_products.forEach((product) => {
            top_delete_item(product, token);
        });
    </script>
    @endauth
    <script>
        $(document).ready(function() {
            // Fade out success alert after 3 seconds
            setTimeout(function() {
                $("#success-alert").fadeOut('slow');
            }, 3000); // 3000 milliseconds = 3 seconds
    
            // Fade out error alert after 3 seconds
            setTimeout(function() {
                $("#error-alert").fadeOut('slow');
            }, 3000);
        });
    </script>
    @yield('scripts')
</body>

</html>