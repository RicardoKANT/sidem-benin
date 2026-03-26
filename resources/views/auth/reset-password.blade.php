@extends('layouts.auth')

@section('page-title', __('messages.reset_title'))
@section('breadcrumb-title', __('messages.reset_title'))
@section('breadcrumb-item', __('messages.reset_password'))

@section('content')
<section class="login">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="login-wrap" style="max-width: 100%; flex-direction: column;">
                    <div class="content" style="width: 100%;">
                        <div class="inner-header-login">
                            <h3 class="title">{{ __('messages.reset_title') }}</h3>
                            <div class="flex-three">
                                <p style="margin: 0;">{{ __('messages.reset_desc') }}</p>
                            </div>
                        </div>

                        <form action="{{ route('password.store') }}" method="POST" class="login-user">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-wrap">
                                        <label for="email">{{ __('messages.email') }}</label>
                                        <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            placeholder="{{ __('messages.enter_email') }}"
                                            value="{{ old('email', $request->email) }}"
                                            required
                                            autofocus>
                                        @error('email')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="input-wrap">
                                        <label for="password">{{ __('messages.new_password') }}</label>
                                        <input
                                            type="password"
                                            id="password"
                                            name="password"
                                            placeholder="{{ __('messages.enter_new_password') }}"
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

                                <div class="col-lg-12 mb-30" style="margin-top: 20px;">
                                    <button type="submit" class="btn-submit" style="width: 100%;">{{ __('messages.reset_password') }}</button>
                                </div>

                                <div class="col-md-12">
                                    <div class="flex-three">
                                        <span class="account">{{ __('messages.remember_password') }}</span>
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
