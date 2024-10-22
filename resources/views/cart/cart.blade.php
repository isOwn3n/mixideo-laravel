@extends('layouts.app') @section('title') Cart @endsection @section('content')
<div id="cart_page" class="cart-page animate__animated animate__fadeInUp">
    <div class="sp_header">
        <div class="container custom_container">
            <div class="row">
                <div class="col-12">
                    <ul class="p-md-3 p-2 bg-light">
                        <li class="d-inline-block font-weight-bolder">
                            {{-- TODO: Change it when add home page to project. --}}
                            <a href="index-2.html">home</a>
                        </li>
                        <li class="d-inline-block font-weight-bolder">
                            <a href="#">
                                <h1 class="hr_">cart</h1>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container custom_container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header cart_header bg-white">
                        <div class="card-title mb-0">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-0">
                                        <i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Shopping Cart
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body cart_body">
                        @foreach ($cart->items as $item)
                        <div class="row cart-product" id="product_{{ $item->product->id }}">
                            <div class="col-12 col-md-6 pr-0">
                                <div class="d-flex">
                                    <div class="col-xl-4 col-lg-5 col-md-4 col-4 px-0">
                                        {{-- TODO: Change Alt and get it from database. --}}
                                        <a href="#"><img
                                                src="@if ($item->product->images->first()){{ $item->product->images->first()->image_path }}@else @endif"
                                                class="fst-image mx-auto d-block img-fluid"
                                                alt="Image Of {{ $item->product->title }}" /></a>
                                    </div>
                                    <div class="col-xl-8 col-lg-7 col-md-8 col-8 pr-0">
                                        <h2 class="product-name font-weight-bold mb-2 mb-sm-3 mb-xl-3 mt-sm-2 mt-md-2">
                                            <a href="#">{{ $item->product->title }}</a>
                                        </h2>
                                        <div>
                                            @if ($item->product->discount > 0)
                                            <span class="font-weight-bolder price">${{number_format(
                                                $item->product->total_price, 2) }}
                                            </span>
                                            <del class="text-muted">${{ number_format($item->product->price, 2) }}</del>
                                            @else
                                            <span class="font-weight-bolder price">${{
                                                number_format($item->product->price, 2) }}
                                            </span>
                                            @endif
                                        </div>
                                        {{--
                                        <div class="my-1 f_13">
                                            <span>size:</span>
                                            <span>s</span>
                                        </div>
                                        <div class="f_13">
                                            <span>color:</span>
                                            <span>white</span>
                                        </div>
                                        --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mt-4">
                                <div class="d-flex">
                                    <div class="col-md-3 col-sm-4 col-5 text-left text-md-right my-2">
                                        <span class="font-weight-bold">
                                            ${{ number_format($item->product->total_price * $item->quantity, 2) }}
                                        </span>
                                    </div>
                                    <div class="col-md-7 col-sm-4 col-5 text-left text-md-left my-2">
                                        <a class="decrease_btn">
                                            <i class="fas fa-minus-circle"></i>
                                        </a>
                                        <span class="mx-2">
                                            {{ $item->quantity }}
                                        </span>
                                        <a class="increase_btn">
                                            <i class="fas fa-plus-circle"></i>
                                        </a>
                                        <!-- <i class="fal fa-plus-circle"></i> -->
                                    </div>
                                    <div class="col-md-2 col-sm-4 col-2 my-2 mt-1 text-right text-md-left">
                                        <a class="delete_button">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (!$loop->last)
                        <hr />
                        @endif @endforeach
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6 col-sm-7 text-right">
                                <div class="my-2 font-weight-bold">
                                    <span>total:</span>
                                    <span>$@if ($cart->items->count() < 1)0.00 @else{{ number_format($cart->totalPrice +
                                            9.00, 2)

                                            }}@endif</span>
                                </div>
                            </div>
                            <div class="col-6 col-sm-5">
                                <a href="{{ route('checkout.index') }}"
                                    class="btn btn-success btn-block f_13 font-weight-bold @if ($cart->items->count() < 1) disabled @endif">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="border rounded bg-white final_payment">
                    <div class="card-body border-bottom">
                        <p class="text-muted">{{ $cart->totalQuantity }} items</p>
                        <p class="font-weight-bolder">show details</p>
                        <div>
                            <span class="font-weight-bold">subtotal</span>
                            <span class="float-right font-weight-bold">${{ number_format($cart->totalPrice, 2) }}</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <span class="font-weight-bold">total(tax excl.)</span>
                            <span class="float-right font-weight-bold">${{ number_format($cart->totalPrice, 2) }}</span>
                        </div>
                        <div>
                            <span class="font-weight-bold">taxes</span>
                            <span class="float-right font-weight-bold">
                                $@if($cart->items->count() < 1)0.00 @else 9.00 @endif </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection @section('scripts') @section('style')
<style>
    .delete_button,
    .decrease_btn,
    .increase_btn {
        cursor: pointer;
    }
</style>
@endsection
<!-- Single Select Start -->
<script>
    // $(".vk-state-select").select2();
    // $(".vk-city-select").select2();
</script>
<!-- Single Select End -->
<script>
    $(document).ready(function () {
        $("input.added_add").click(function () {
            $("input:not(:checked)").parent().parent().removeClass("active");
            $("input:checked").parent().parent().addClass("active");
        });
    });
</script>

<script>
    let products = document.querySelectorAll(".cart-product");
    let cart_token = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    async function make_request(url, body, token, method) {
        await fetch(url, {
            method: method,
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": token,
            },
            body: body,
        });
    }

    function delete_item(product, token) {
        let productId = product.id.split("_")[1];
        product
            .querySelector(".delete_button")
            .addEventListener("click", function () {
                make_request(
                    url,
                    JSON.stringify({ product_id: Number(productId) }),
                    token,
                    "DELETE"
                ).then(() => {
                    window.location.reload();
                });
            });
    }

    function decrease_item_quantity(product, token) {
        let productId = product.id.split("_")[1];
        product
            .querySelector(".decrease_btn")
            .addEventListener("click", function () {
                make_request(
                    url,
                    JSON.stringify({
                        product_id: Number(productId),
                        quantity: 1,
                    }),
                    token,
                    "DELETE"
                ).then(() => {
                    window.location.reload();
                });
            });
    }

    function increase_item_quantity(product, token) {
        let productId = product.id.split("_")[1];
        product
            .querySelector(".increase_btn")
            .addEventListener("click", function () {
                make_request(
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

    products.forEach((product) => {
        delete_item(product, cart_token);
        decrease_item_quantity(product, cart_token);
        increase_item_quantity(product, cart_token);
    });
</script>

<script>
    function quantityHandler(id, price, quantity) {
        totalPriceElement = document.getElementById(id);
        totalPrice = price * quantity;
        totalPriceElement.innerHTML = "$" + totalPrice;
    }
</script>
@endsection