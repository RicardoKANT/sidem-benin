@extends('layouts.auth')

@section('page-title', __('messages.login'))
@section('breadcrumb-title', __('messages.login_title'))
@section('breadcrumb-item', __('messages.login'))

@section('content')
<section class="login">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-wrap flex">
                                    <div class="image">
                                        <img src="{{ asset('assets/images/page/sign-up.jpg') }}" alt="image">
                                    </div>
                                    <div class="content">
                                        <div class="inner-header-login">
                                            <h3 class="title">{{ __('messages.login_title') }}</h3>
                                            <div class="flex-three">
                                                <span class="sale">{{ __('messages.discount_title') }}</span>
                                                <p>{{ __('messages.discount_text') }}</p>
                                            </div>
                                        </div>
                                        <form action="{{ route('login') }}" method="POST" id="login" class="login-user">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="input-wrap">
                                                        <label for="email">{{ __('messages.email') }}</label>
                                                        <input
                                                            type="email"
                                                            id="email"
                                                            name="email"
                                                            placeholder="{{ __('messages.enter_email') }}"
                                                            value="{{ old('email') }}"
                                                            required
                                                            autofocus>
                                                        @error('email')
                                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-wrap">
                                                        <div class="flex-two">
                                                            <label for="password">{{ __('messages.password') }}</label>
                                                            <a href="{{ route('password.request') }}" class="mb-15">{{ __('messages.forgot_password') }}</a>
                                                        </div>
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
                                                <div class="col-lg-12 mb-40">
                                                    <div class="input-wrap-social ">
                                                        <span class="or">{{ __('messages.or') }}</span>
                                                        <div class="flex-three">
                                                            <a href="#" class="login-social flex-three">
                                                                <img src="{{ asset('assets/images/page/gg.png') }}" alt="Google">
                                                                <span>{{ __('messages.continue_google') }}</span>
                                                            </a>
                                                            <a href="#" class="login-social flex-three">
                                                                <img src="{{ asset('assets/images/page/fb.png') }}" alt="Facebook">
                                                                <span>{{ __('messages.continue_facebook') }}</span>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-30">
                                                    <button type="submit" class="btn-submit">{{ __('messages.sign_in') }}</button>
                                                </div>
                                                <div class="col-lg-12 mb-30">
                                                    <div class="checkbox">
                                                        <input
                                                            id="remember"
                                                            type="checkbox"
                                                            name="remember"
                                                            {{ old('remember') ? 'checked' : '' }}>
                                                        <label for="remember">{{ __('messages.remember_me') }}</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="flex-three">
                                                        <span class="account">{{ __('messages.no_account') }}</span>
                                                        <a href="{{ route('register') }}" class="link-login">{{ __('messages.sign_up') }}</a>
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
