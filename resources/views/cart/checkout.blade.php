@extends('layouts.app') @section('title') Checkout @endsection
@section('content')
<div id="checkout_page" class="checkout-page animate__animated animate__fadeInUp">
    <div class="sp_header py-3">
        <div class="container custom_container">
            <div class="row">
                <div class="col-12">
                    <ul class="p-md-3 p-2 bg-light">
                        <li class="d-inline-block font-weight-bolder">
                            {{-- TODO: Change this to index page when it just created. --}}
                            <a href="index-2.html">home</a>
                        </li>
                        <li class="d-inline-block hr_ font-weight-bolder">
                            <a>checkout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container custom_container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="accordion" id="check_out_toggle">
                    @if ( (auth()->user()->is_male === true ||
                    auth()->user()->is_male === false) &&
                    auth()->user()->firstname && auth()->user()->lastname &&
                    !auth()->user()->birhtday )

                    <div class="card rounded mb-2">
                        <div class="card-header bg-white" id="checkout_info">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left text-body p-0 font-weight-bold"
                                    type="button" data-toggle="collapse" data-target="#check_info" aria-expanded="true"
                                    aria-controls="check_info">
                                    Personal information<span class="float-right"><i
                                            class="fas fa-angle-down"></i></span>
                                </button>
                            </h2>
                        </div>
                        <div id="check_info" class="collapse show" aria-labelledby="checkout_info"
                            data-parent="#check_out_toggle">
                            <div class="card-body">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link p-0 font-weight-bold active" id="order_guest_tab"
                                            data-toggle="tab" href="#order_guest" role="tab" aria-controls="order_guest"
                                            aria-selected="true">order as a guest</a>
                                    </li>
                                    <li class="hr_"></li>
                                    <li class="nav-item">
                                        <a class="nav-link p-0 font-weight-bold" id="sign_in_tab" data-toggle="tab"
                                            href="#sign_in" role="tab" aria-controls="sign_in"
                                            aria-selected="false">sign in</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="order_guest"
                                        aria-labelledby="order_guest">
                                        <div id="Registration" class="page-content mt-4 mb-0">
                                            <form class="needs-validation" method="post" novalidate>
                                                @if (auth()->user()->is_male ===
                                                true || auth()->user()->is_male
                                                === false)
                                                <div class="form-group text-left">
                                                    <label class="font-weight-bold">Social title</label><br />
                                                    <span class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gender_mr" checked />
                                                        <label class="form-check-label" for="gender_mr">
                                                            mr.
                                                        </label>
                                                    </span>
                                                    <span class="form-check">
                                                        <input class="form-check-input" type="radio" name="gridRadios"
                                                            id="gender_mrs" />
                                                        <label class="form-check-label" for="gender_mrs">
                                                            mrs.
                                                        </label>
                                                    </span>
                                                </div>
                                                @endif
                                                @if (!auth()->user()->firstname)
                                                <div class="form-group">
                                                    <label for="f_name" class="font-weight-bold">First name</label>
                                                    <input type="text" class="form-control" id="f_name"
                                                        placeholder="First name" required />
                                                    <div class="invalid-feedback">
                                                        Please enter your name.
                                                    </div>
                                                </div>
                                                @endif
                                                @if (!auth()->user()->lastname)
                                                <div class="form-group">
                                                    <label for="l_name" class="font-weight-bold">Last name</label>
                                                    <input type="text" class="form-control" id="l_name"
                                                        placeholder="Last Name" required />
                                                    <div class="invalid-feedback">
                                                        Please enter your name.
                                                    </div>
                                                </div>
                                                @endif
                                                @if (auth()->user()->birhtday)
                                                <div class="form-group">
                                                    <label class="font-weight-bold">birth date</label>
                                                    <input class="form-control" type="date" required />
                                                    <div class="invalid-feedback">
                                                        Please enter your
                                                        birthdate.
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="form-group form-check d-block">
                                                    <input type="checkbox" class="form-check-input" />
                                                    <label class="form-check-label" for="user_check">Sign up for our
                                                        newsletter</label>
                                                </div>
                                                <div class="form-group form-check d-block">
                                                    <input type="checkbox" class="form-check-input" />
                                                    <label class="form-check-label" for="user_check">I agree to the
                                                        terms
                                                        and conditions and the
                                                        privacy policy</label>
                                                </div>
                                                <div>
                                                    <input type="submit" name="submit" class="btn btn-primary mt-3"
                                                        value="Save" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sign_in" aria-labelledby="sign_in_tab">
                                        <div id="login" class="page-content mt-4">
                                            <form class="needs-validation" method="post" novalidate>
                                                <div class="form-group">
                                                    <label for="user_email" class="font-weight-bold">Email
                                                        address</label>
                                                    <input type="email" class="form-control" id="user_email"
                                                        aria-describedby="emailHelp" required />
                                                    <div class="invalid-feedback">
                                                        Please enter account
                                                        name.
                                                    </div>
                                                    <small id="emailHelp" class="form-text text-muted">We'll never share
                                                        your
                                                        email with anyone
                                                        else.</small>
                                                </div>
                                                <div class="form-group font-weight-bold">
                                                    <label for="user_password" class="font-weight-bold">Password</label>
                                                    <input type="password" class="form-control" id="user_password"
                                                        required />
                                                    <div class="invalid-feedback">
                                                        Please enter your
                                                        Password.
                                                    </div>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="user_check" />
                                                    <label class="form-check-label" for="user_check">Check me
                                                        out</label>
                                                </div>
                                                <input type="submit" name="submit"
                                                    class="btn btn-primary mb-3 d-inline-block" value="submit" />
                                                <div class="pass_acc d-inline-block float-right pt-3">
                                                    <span class="forgot_password font-weight-bolder"><a
                                                            href="forgot.html">Forgot your
                                                            password?
                                                        </a></span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if ($has_address)
                    <!-- card -->
                    <div class="card rounded mb-2">
                        <div class="card-header bg-white" id="chechout_add">
                            <h2 class="mb-0">
                                <button
                                    class="btn btn-link btn-block text-left collapsed text-body p-0 font-weight-bold"
                                    type="button" data-toggle="collapse" data-target="#check_add" aria-expanded="false"
                                    aria-controls="check_add">
                                    Address<span class="float-right"><i class="fas fa-angle-down"></i></span>
                                </button>
                            </h2>
                        </div>
                        <div id="check_add"
                            class="@if (!(auth()->user()->is_male === true || auth()->user()->is_male === false) && auth()->user()->firstname && auth()->user()->lastname && !auth()->user()->birhtday))tab-pane fade show active @else collapse @endif"
                            aria-labelledby="chechout_add" data-parent="#check_out_toggle">
                            <div class="card-body">
                                <div id="c_address" class="page-content">
                                    <form action="{{
                                            route('checkout.add_address')
                                        }}" class="needs-validation" method="post" novalidate>
                                        @csrf
                                        <div class="form-group">
                                            <label for="f_name" class="font-weight-bold">address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Address"
                                                required value="{{ old('address') }}" />
                                            <div class="invalid-feedback">
                                                Please Enter your address.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="r_email" class="font-weight-bold">city</label>
                                            <input type="text" name="city" class="form-control" placeholder="City"
                                                required value="{{ old('city') }}" />
                                            <div class="invalid-feedback">
                                                Please Enter your city.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="r_password" class="font-weight-bold">state</label>
                                            <input type="text" name="state" class="form-control" placeholder="State"
                                                required value="{{ old('state') }}" />
                                            <div class="invalid-feedback">
                                                Please Enter your state.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="r_password" class="font-weight-bold">post code</label>
                                            <input type="text" name="postal_code" class="form-control"
                                                placeholder="Post Code" required value="{{ old('postal_code') }}" />
                                            <div class="invalid-feedback">
                                                Please Enter your post code.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="r_password" class="font-weight-bold">country</label>
                                            <input type="text" name="country" class="form-control" placeholder="Country"
                                                required value="{{ old('country') }}" />
                                            <div class="invalid-feedback">
                                                Please Enter your country.
                                            </div>
                                        </div>
                                        <div>
                                            <input type="submit" name="submit"
                                                class="f_13 btn btn-primary mt-3 float-right" value="Save" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- card -->
                    @if ( !$has_address && !(auth()->user()->is_male === true || auth()->user()->is_male === false) &&
                    auth()->user()->firstname && auth()->user()->lastname && !auth()->user()->birhtday)
                    <div id="pay_check" class="page-content">
                        {{-- TODO: Add controller that created for payment in checkout. --}}
                        <form action="{{}}">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary f_13">
                                    Order with an obligation to pay
                                </button>
                            </div>
                        </form>
                    </div>
                    @else
                    <div class="card rounded mb-2">
                        <div class="card-header bg-white" id="checkout_payment">
                            <h2 class="mb-0">
                                <button
                                    class="btn btn-link btn-block text-left collapsed text-body p-0 font-weight-bold"
                                    type="button" data-toggle="collapse" data-target="#check_payment"
                                    aria-expanded="false" aria-controls="check_payment">
                                    Payment<span class="float-right"><i class="fas fa-angle-down"></i></span>
                                </button>
                            </h2>
                        </div>
                        <div id="check_payment" class="collapse" aria-labelledby="checkout_payment"
                            data-parent="#check_out_toggle">
                            <div class="card-body">
                                <div id="pay_check" class="page-content">
                                    {{-- TODO: Add controller that created for payment in checkout. --}}
                                    <form action="#">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary f_13">
                                                Order with an obligation to pay
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- card -->
                </div>
            </div>
            <div class="col-lg-4 col-12">
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
                        <div>
                            <span class="font-weight-bold">taxes</span>
                            <span class="float-right font-weight-bold">$9.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(".vk-state-select").select2();
    $(".vk-city-select").select2();
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
@endsection