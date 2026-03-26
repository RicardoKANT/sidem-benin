@extends('layouts.auth')

@section('page-title', __('messages.confirm_title'))
@section('breadcrumb-title', __('messages.confirm_title'))
@section('breadcrumb-item', __('messages.confirm_btn'))

@section('content')
<section class="login">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="login-wrap" style="max-width: 100%; flex-direction: column;">
                    <div class="content" style="width: 100%;">
                        <div class="inner-header-login">
                            <h3 class="title">{{ __('messages.confirm_title') }}</h3>
                            <div class="flex-three">
                                <p style="margin: 0;">{{ __('messages.confirm_desc') }}</p>
                            </div>
                        </div>

                        <form action="{{ route('password.confirm') }}" method="POST" class="login-user">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-wrap">
                                        <label for="password">{{ __('messages.password') }}</label>
                                        <input
                                            type="password"
                                            id="password"
                                            name="password"
                                            placeholder="{{ __('messages.enter_password') }}"
                                            required
                                            autofocus>
                                        @error('password')
                                            <span class="text-red-600 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-30" style="margin-top: 20px;">
                                    <button type="submit" class="btn-submit" style="width: 100%;">{{ __('messages.confirm_btn') }}</button>
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
