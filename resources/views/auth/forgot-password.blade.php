@extends('layouts.guest')

@section('title') Forgot Password @endsection


@section('content')
<header class="top_login top_login_forgot">
    <div class="custom_container container main_login_bg">
        @error('email')
        <div class="error-message">{{ $message }}</div>
        @enderror
        <div class="log_form">
            <div class="row">
                <div class="col-lg-6 col-md-12 py-lg-4 py-md-3 py-2 align-item-center main_vector_img">
                    <div class="login_logo">
                        <a href="index-2.html">
                            <img src="{{ asset('img/login_logo.png') }}" alt="" class="img-fluid" /></a>
                    </div>
                    <div class="mt-3 login_vector_img text-center">
                        <img src="{{ asset('img/login/forget.png') }}" alt="" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 top-bg forg" id="signin">
                    <h1 class="mb-4">Reset Password</h1>
                    <h5 class="mb-5">
                        Please enter your credentials first. <br />Won’t be shared publicly.
                        Won’t be spammed.
                    </h5>
                    <form action="{{ route('password.email') }}" id="login-form" method="post" class="needs-validation"
                        novalidate>
                        @csrf
                        <div class="form-row text-center">
                            <div class="form-group col-md-12">
                                <input type="email" class="form-control" id="vk-log-email" name="email" required />
                                <label for="email" class="vk-label">Email address</label>
                                <div class="invalid-feedback">
                                    Please provide a Email address.
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary nex text-center">
                                    Reset Password
                                </button>
                            </div>
                            <div class="col-lg-12 txt1 text-left mt-4 log_in">
                                <p class="mb-0 tab" id="gotosignup">
                                    <a href="{{ route('login') }}" title=""><i
                                            class="fa fa-long-arrow-left mr-2"></i>Back to
                                        Log-in
                                        page</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('scripts')
<script>
    // Disable form submissions if there are invalid fields
    (function () {
      "use strict";
      window.addEventListener(
        "load",
        function () {
          // Get the forms we want to add validation styles to
          var forms = document.getElementsByClassName("needs-validation");
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener(
              "submit",
              function (event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add("was-validated");
              },
              false
            );
          });
        },
        false
      );
    })();
</script>
<!-- Data Table js -->
<script type="text/javascript">
    $(document).ready(function () {
      $("#executive-table-01").DataTable({
        order: [[2, "asc"]],
        bInfo: false,
        scrollY: 400,
        scrollX: false,
        visible: false,
        targets: 0,
        oLanguage: {
          LengthMenu: "[ 10, 25, 50, 75, 100 ]",
        },
        language: {
          paginate: { next: "&#8594;", previous: "&#8592;" },
          search: "",
          searchPlaceholder: "Search here....",
        },
  
        // "searching": false,
      });
    });
</script>
<!-- Data Table js end -->
<script type="text/javascript">
    $(".tab").click(function () {
      $("#" + $(this).attr("id").replace("goto", "")).addClass("active");
      $(this).parent().parent().removeClass("active");
    });
</script>

@endsection

{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password
        reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}