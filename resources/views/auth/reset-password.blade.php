@extends('layouts.guest')

@section('title') Reset Password @endsection

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
                        <h5 class="mb-4 pb-2">Please Reset your password.</h5>
                        <form action="{{ route('password.store') }}" id="login-form" method="POST"
                            class="needs-validation" novalidate>
                            @csrf
                            <div class="form-row text-center">
                                <div class="form-group col-md-12 mb-3">
                                    <input type="email" class="form-control" id="email" name="email" required autofocus
                                        autocomplete="username" value="{{ old('email', $request->email) }}">
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
                                <div class="form-group col-md-12 mb-3">
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" required>
                                    <label for="password_confirmation" class="vk-label">Confirm Password</label>
                                    <div class="invalid-feedback d-none">
                                        Please Confirm Your Password.
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 text-center log_in">
                                    <button type="submit" class="btn btn-primary nex text-center">Reset
                                        Password</button>
                                </div>
                                <div class="col-lg-6 col-md-6 text-center sig_up">
                                    <a href="{{ route('login') }}">
                                        <button type="button" class="btn btn-primary rese text-center">Login</button>
                                    </a>
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

{{-- @extends('layouts.guest')

<form method="POST" action="{{ route('password.store') }}">
    @csrf

    <!-- Password Reset Token -->
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <!-- Email Address -->
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
            :value="old('email', $request->email)" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
            autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
            required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-primary-button>
            {{ __('Reset Password') }}
        </x-primary-button>
    </div>
</form> --}}