@extends('layouts.auth')

@section('page-title', __('messages.verify_title'))
@section('breadcrumb-title', __('messages.verify_title'))
@section('breadcrumb-item', __('messages.verify_title'))

@section('content')
<section class="login">
    <div class="tf-container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="login-wrap" style="max-width: 100%; flex-direction: column;">
                    <div class="content" style="width: 100%;">
                        <div class="inner-header-login">
                            <h3 class="title">{{ __('messages.verify_title') }}</h3>
                            <div class="flex-three">
                                <p style="margin: 0;">{{ __('messages.verify_desc') }}</p>
                            </div>
                        </div>

                        @if (session('status') == 'verification-link-sent')
                            <div style="background: #dcfce7; border: 1px solid #22c55e; color: #15803d; padding: 12px 16px; border-radius: 8px; margin-bottom: 20px; font-size: 14px;">
                                {{ __('messages.verification_sent') }}
                            </div>
                        @endif

                        <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 24px; gap: 16px; flex-wrap: wrap;">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <button type="submit" class="btn-submit" style="padding: 12px 24px;">
                                    {{ __('messages.resend_verification') }}
                                </button>
                            </form>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" style="background: none; border: none; color: #6b7280; font-size: 14px; cursor: pointer; text-decoration: underline;">
                                    {{ __('messages.logout') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
