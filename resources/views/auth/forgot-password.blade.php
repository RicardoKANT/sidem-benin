@extends('layouts.auth')

@section('page-title', __('messages.forgot_title'))
@section('breadcrumb-title', __('messages.forgot_title'))
@section('breadcrumb-item', __('messages.forgot_title'))

@section('content')
<section class="login">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="login-wrap" style="max-width: 100%; flex-direction: column;">
                    <div class="content" style="width: 100%;">
                        <div class="inner-header-login">
                            <h3 class="title">{{ __('messages.forgot_title') }}</h3>
                            <div class="flex-three">
                                <p style="margin: 0;">{{ __('messages.forgot_desc') }}</p>
                            </div>
                        </div>

                        @if (session('status'))
                            <div style="background: #dcfce7; border: 1px solid #22c55e; color: #15803d; padding: 12px 16px; border-radius: 8px; margin-bottom: 20px; font-size: 14px;">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('password.email') }}" method="POST" class="login-user">
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

                                <div class="col-lg-12 mb-30" style="margin-top: 20px;">
                                    <button type="submit" class="btn-submit" style="width: 100%;">{{ __('messages.send_reset_link') }}</button>
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
