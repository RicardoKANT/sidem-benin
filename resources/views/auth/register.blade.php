@extends('layouts.auth')

@section('page-title', __('messages.register'))
@section('breadcrumb-title', __('messages.register_title'))
@section('breadcrumb-item', __('messages.register'))

@section('content')
<section class="login">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-wrap flex">
                                    <div class="image">
                                        <img src="assets/images/page/sign-up.jpg" alt="image">
                                    </div>
                                    <div class="content">
                                        <div class="inner-header-login">
                                            <h3 class="title">{{ __('messages.register_title') }}</h3>
                                            <div class="flex-three">
                                                <span class="sale">{{ __('messages.discount_title') }}</span>
                                                <p>{{ __('messages.discount_text') }}</p>
                                            </div>
                                        </div>
                                        <form action="{{ route('register') }}" method="POST" id="sign-up" class="login-user">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="input-wrap">
                                                        <label for="name">{{ __('messages.your_name') }}</label>
                                                        <input
                                                            type="text"
                                                            id="name"
                                                            name="name"
                                                            placeholder="{{ __('messages.enter_name') }}"
                                                            value="{{ old('name') }}"
                                                            required>
                                                        @error('name')
                                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-wrap">
                                                        <label for="email">{{ __('messages.email') }}</label>
                                                        <input
                                                            type="email"
                                                            id="email"
                                                            name="email"
                                                            placeholder="{{ __('messages.enter_email') }}"
                                                            value="{{ old('email') }}"
                                                            required>
                                                        @error('email')
                                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-wrap">
                                                        <label for="password">{{ __('messages.password') }}</label>
                                                        <input
                                                            type="password"
                                                            id="password"
                                                            name="password"
                                                            placeholder="{{ __('messages.enter_password') }}"
                                                            required>
                                                        @error('password')
                                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-wrap">
                                                        <label for="password_confirmation">{{ __('messages.confirm_password') }}</label>
                                                        <input
                                                            type="password"
                                                            id="password_confirmation"
                                                            name="password_confirmation"
                                                            placeholder="{{ __('messages.confirm_password_placeholder') }}"
                                                            required>
                                                        @error('password_confirmation')
                                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-40">
                                                    <div class="input-wrap-social ">
                                                        <span class="or">{{ __('messages.or') }}</span>
                                                        <div class="flex-three">
                                                            <a href="#" class="login-social flex-three">
                                                                <img src="assets/images/page/gg.png" alt="Google">
                                                                <span>{{ __('messages.continue_google') }}</span>
                                                            </a>
                                                            <a href="#" class="login-social flex-three">
                                                                <img src="assets/images/page/fb.png" alt="Facebook">
                                                                <span>{{ __('messages.continue_facebook') }}</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-30">
                                                    <button type="submit" class="btn-submit">{{ __('messages.sign_up') }}</button>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="flex-three">
                                                        <span class="account">{{ __('messages.already_account') }}</span>
                                                        <a href="{{ route('login') }}" class="link-login">{{ __('messages.sign_in') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection
