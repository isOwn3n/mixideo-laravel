@extends('layouts.guest')

@section('title') Login @endsection

@section('content')
<div class="pos-rel">
    <div class="top_login">
        <div class="custom_container container main_login_bg">
            <div class="log_form">
                <div class="row">
                    <div class="col-lg-6 col-md-12 py-lg-4 py-md-3 py-2 align-self-center main_vector_img">
                        <div class="login_logo">
                            {{-- TODO: Change this href. --}}
                            <a href="index-2.html"> <img src="{{ asset('img/login_logo.png') }}" alt=""
                                    class="img-fluid"></a>
                        </div>
                        <div class="mt-3 login_vector_img text-center">
                            <img src="{{ asset('img/login/Vector.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 top-bg active align-self-center" id="signup">
                        <h1 class="mb-4">Welcome to <span>Mixideo</span></h1>
                        <h5 class="mb-4 pb-2">Please Login to your Account.</h5>
                        <form action="{{ route('login') }}" id="login-form" method="POST" class="needs-validation"
                            novalidate>
                            @csrf
                            <div class="form-row text-center">
                                <div class="form-group col-md-12 mb-3">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <label for="email" class="vk-label">Email ID</label>
                                    <div class="invalid-feedback tag_">
                                        Please provide an Email ID.
                                    </div>
                                </div>

                                <div class="form-group col-md-12 mb-3">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                    <label for="password" class="vk-label">Password</label>
                                    <div class="invalid-feedback d-none">
                                        Please provide a Password.
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12 form-group text-left remen">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="mr-1" name="remember">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12 text-right tab" id="gotosignin">
                                    <a class="small" href="{{ route('password.email') }}">Forgot password?</a>
                                </div>
                                <div class="col-lg-6 col-md-6 text-center log_in">
                                    <button type="submit" class="btn btn-primary nex text-center">Login</button>
                                </div>
                                <div class="col-lg-6 col-md-6 text-center sig_up">
                                    <a href="{{ route('register') }}">
                                        <button type="button" class="btn btn-primary rese text-center">Sign up</button>
                                    </a>
                                </div>
                                <div class="col-lg-12 txt1 text-left mt-3 log_in">
                                    <p class="mb-0">
                                        By signing up, you agree to Mixideo
                                    </p>
                                </div>
                                <div class="col-lg-12 txt1 text-left mb-0 pb-0 mt-2 terms_cond">
                                    <p class="mb-0">
                                        <a href="Privacy.html">Terms and Conditions <span class="txt1">&</span> Privacy
                                            Policy</a>
                                    </p>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    // Disable form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
</script>

@endsection