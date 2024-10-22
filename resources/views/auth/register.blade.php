@extends('layouts.guest')

@section('title') Signup @endsection


@section('content')
<div class="pos-rel">
    <div class="top_login">
        <div class="custom_container container main_login_bg">
            <div class="log_form">
                <div class="row">
                    <div class="col-lg-6 col-md-12 py-lg-4 py-md-3 py-2 align-self-center main_vector_img">
                        <div class="login_logo">
                            <img src="{{ asset('img/login_logo.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="mt-3 login_vector_img text-center">
                            <img src="{{ asset('img/login/Vector.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 top-bg active align-self-center" id="signup">
                        <h1 class="mb-4">Create Account</h1>
                        <h5 class="mb-4 pb-2">Sign up with your mobile number to get started.</h5>
                        {{-- <form action="https://dostguru.com/HTML/mixideo/otp-page.html" id="login-form"
                            method="post" --}} <form action="{{ route('register') }}" id="login-form" method="post"
                            class="needs-validation" novalidate>
                            @csrf
                            <div class="form-row text-center">
                                <div class="form-group col-md-12 mb-3">
                                    <input type="text" class="form-control" id="vk-log-name" name="name" required>
                                    <label for="name" class="vk-label">Your Name</label>
                                    <div class="invalid-feedback tag_">
                                        Please provide a Your Name.
                                    </div>
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <input type="email" class="form-control" id="vk-log-email" name="email" required>
                                    <label for="email" class="vk-label">Email</label>
                                    <div class="invalid-feedback tag_">
                                        Please provide a Your Email.
                                    </div>
                                </div>
                                <div class="form-group col-md-12 mb-3">
                                    <input type="password" class="form-control" id="vk-log-password" name="password"
                                        required>
                                    <label for="password" class="vk-label">Password</label>
                                    <div class="text-left mt-1">
                                        <i class="fa fa-exclamation"></i>
                                        <span>Passwords must be at least 6 characters.</span>
                                    </div>
                                </div>
                                <div class="col-12 text-left pho_mess_date">
                                    <div>We will send you a text to verify your phone.</div>
                                    <div>Message and Data rates may apply.</div>
                                </div>

                                <div class="col-lg-12 col-md-12 text-center mt-4 log_in">
                                    <button type="submit" class="btn btn-primary nex text-center">Continue</button>
                                </div>
                                <div class="col-lg-12 txt1 text-left my-2 already_account">
                                    <p class="mb-0">
                                        Already have an account? <a href="{{ route('login') }}">Sign in</a>
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
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
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
<!-- Data Table js -->
<script type="text/javascript">
    $(document).ready(function() {      
        $('#executive-table-01').DataTable( {
          order: [[2, 'asc']],  
          "bInfo" : false, 
          "scrollY": 400,
          "scrollX": false,
          "visible": false,
          "targets": 0,
          "oLanguage": {
              "LengthMenu": "[ 10, 25, 50, 75, 100 ]"
          },
           "language": { paginate: { next: '&#8594;',  previous: '&#8592;'}, search: '', searchPlaceholder: "Search here...." },               

          // "searching": false,    
        } );
      } );
</script>
<!-- Data Table js end -->
<script type="text/javascript">
    $(".tab").click(function() {
        $("#" + $(this).attr('id').replace("goto", "")).addClass("active");
        $(this).parent().parent().removeClass("active");
      });
</script>
@endsection
{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
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

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}