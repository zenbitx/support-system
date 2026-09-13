@extends('auth.master')

@push('css')
    <style>
        .login-box{
            width: 360px;
        }

        .login-logo{
            max-height: 90px; 
            max-width: 100%;
            min-width: 90px;
        }

        /* .form-group .form-control {
            border: 0;
            border-bottom: 1px solid #d2d2d2;
            background-image: linear-gradient(#009688, #009688);
            background-size: 0% 2px;
            background-position: center bottom;
            background-repeat: no-repeat;
            box-shadow: none;
            outline: none;
            transition: background-size 0.3s ease;
        }

        .form-group .form-control:focus {
            background-size: 100% 2px;
            box-shadow: none;
            outline: none;
        } */

        .form-group .form-label {
            color: #555;
            transition: color .2s ease;
        }

        .input-wrapper {
            position: relative;
        }

        .validation-icon {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 18px;
            font-weight: bold;
            display: none;
        }

        /* Valid */
        .form-group.is-valid .form-label {
            color: #009688;
        }

        .form-group.is-valid .validation-icon {
            display: block;
            color: #009688;
        }

        .form-group.is-valid .validation-icon::before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
        }

        /* Invalid */
        .form-group.is-invalid .form-label {
            color: #dc3545;
        }

        .form-group.is-invalid .validation-icon {
            display: block;
            color: #dc3545;
        }

        .form-group.is-invalid .validation-icon::before {
            content: "\f00d";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
        }

        /* Bottom border */
        .form-group .form-control {
            border: 0;
            border-bottom: 1px solid #d2d2d2;
            background-image: linear-gradient(#009688, #009688);
            background-size: 0% 2px;
            background-position: center bottom;
            background-repeat: no-repeat;
            box-shadow: none;
            outline: none;
            transition: background-size 0.3s ease;
        }

        .form-group .form-control:focus {
            background-size: 100% 2px;
            box-shadow: none;
            outline: none;
        }

        /* Invalid border */
        .form-group.is-invalid .form-control {
            background-image: linear-gradient(#dc3545, #dc3545);
        }

        /* Valid border */
        .form-group.is-valid .form-control {
            background-image: linear-gradient(#009688, #009688);
        }

        .error_msg{
            color: #dc3545;
            width: 100%;
            margin-top: .25rem;
            font-size: .750em;
        }

    </style>
@endpush

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center">
    <div class="d-flex flex-column justify-content-center align-items-center mb-3">

        <img
            class="login-logo"
            src="{{ asset('assets/images/logo-admin.png') }}"
            alt="{{ config('app.name', 'Laravel') }}"
        />

        <h3 class="mt-2">{{ __('Admin Panel') }}</h3>

    </div>

    <div class="shadow-lg p-4 bg-body-tertiary rounded login-box">

        <p class="text-center">
            {{ __('Sign in to start your session') }}
        </p>

        {{-- Success message --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error message --}}
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- Validation errors --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}"
              method="POST"
              class="w-100">

            @csrf

            {{-- Username --}}
            <div class="mb-3 form-group">

                <label for="name" class="form-label">
                    <i class="fa fa-user"></i>
                    <span class="lable-value">{{ __('Username') }}</span>
                </label>

                <div class="input-wrapper">
                    <input
                        @if(!$errors->has('name')) autofocus @endif
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        required
                        autocomplete="name"
                    >
                    <span class="validation-icon"></span>
                </div>
                @error('name')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @else
                    <div class="error_msg"></div>
                @enderror

            </div>

            {{-- Password --}}
            <div class="mb-3 form-group">

                <label for="password" class="form-label ">
                    <i class="fa fa-lock"></i>
                    <span class="lable-value">{{ __('Password') }}</span>
                </label>

                <div class="input-wrapper">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control"
                        required
                        autocomplete="current-password"
                    >
                    <span class="validation-icon"></span>
                </div>

                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @else
                    <div class="error_msg"></div>
                @enderror

            </div>

            {{-- Captcha --}}
            @if(config('app.is_captcha_admin_login', false))

                <div class="mb-3 form-group">

                    <label for="captcha">
                        {{ __('Captcha') }}
                    </label>

                    {{-- Add your Laravel captcha component/package here --}}
                    <input
                        type="text"
                        name="captcha"
                        id="captcha"
                        class="form-control"
                        required
                    >

                </div>

            @endif

            {{-- Buttons --}}
            <div class="d-flex justify-content-between align-items-center">

                <button
                    type="submit"
                    class="btn btn-success btn-raised fa-btn-icon">

                    <i class="fa fa-sign-in-alt"></i>
                    {{ __('Sign In') }}

                </button>

                <a
                    tabindex="-1"
                    href="{{ route('password.request') }}"
                    class="pull-right">

                    {{ __('Forgot password?') }}

                </a>

            </div>

        </form>

    </div>
</div>
@endsection

@push('scripts')
    <script>

        $(document).ready(function () {

            $('.form-group .form-control').on('input blur', function () {

                const $input = $(this);
                const $group = $input.closest('.form-group');
                const value = $.trim($input.val());

                const $errorMsg = $group.find('.error_msg');
                const fieldName = $group.find('.lable-value').text();

                let valid = value.length > 0;

                if ($input.attr('name') === 'password') {
                    valid = value.length >= 6;
                }

                // Empty
                if (!valid) {
                    
                    $group.removeClass('is-valid').addClass('is-invalid');
                    $errorMsg.text('').text(fieldName + ' is required.');
                    return;
                }

                $errorMsg.text('');

                // Valid
                $group
                    .removeClass('is-invalid')
                    .addClass('is-valid');
            });
        });



    </script>
@endpush
