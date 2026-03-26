<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ app()->getLocale() }}" lang="{{ app()->getLocale() }}">

@php
    $contactInfo = \App\Models\ContactInfo::first();
    $logo = $contactInfo && $contactInfo->logo ? asset('storage/' . $contactInfo->logo) : asset('images/logo.png');
@endphp

<head>
    <meta charset="utf-8">
    <title>SIDEM-BENIN - @yield('title', __('messages.welcome'))</title>

    <meta name="author" content="SIDEM-BENIN">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="mapbox-access-token" content="{{ config('services.mapbox.access_token') }}">

    <link rel="stylesheet" href="{{ asset('app/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.fancybox.min.css') }}">

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('assets/images/favico.png') }}">

    {{-- Styles spécifiques à la page --}}
    @stack('styles')
</head>

<body class="body header-fixed @yield('body-class', 'counter-scroll')">

    {{-- Preloader --}}
    <div class="preload preload-container">
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20"
                stroke-dasharray="0 440" stroke-linecap="round"></circle>
        </svg>
    </div>

    <div id="wrapper">
        <div id="pagee" class="clearfix">

            {{-- ===== HEADER ===== --}}
            <!-- Main Header -->
            <header class="main-header flex">
                <div id="header">

                    {{-- Barre supérieure --}}
                    <div class="header-top">
                        <div class="header-top-wrap flex-two">
                            <div class="header-top-right">
                                <ul class="flex-three">
                                    <li class="flex-three">
                                        <i class="icon-day"></i>
                                        <span>{{ \Carbon\Carbon::now()->locale(app()->getLocale())->isoFormat('dddd D MMMM YYYY') }}</span>
                                    </li>
                                    <li class="flex-three">
                                        <i class="icon-mail"></i>
                                        <span>{{ \App\Models\ContactInfo::first()->email ?? 'support@sidem-benin.com' }}</span>
                                    </li>
                                    <li class="flex-three">
                                        <i class="icon-phone"></i>
                                        <span>{{ \App\Models\ContactInfo::first()->phone ?? '+229 01 XX XX XX XX' }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-top-left flex-two">
                                @auth
                                    <a href="{{ route('dashboard') }}" class="booking">
                                        <i class="icon-19"></i>
                                        <span>{{ __('messages.my_space') }}</span>
                                    </a>
                                @else
                                    <a href="{{ route('login') }}" class="booking">
                                        <i class="icon-19"></i>
                                        <span>{{ __('messages.login') }}</span>
                                    </a>
                                    <a href="{{ route('register') }}" class="booking" style="margin-left: 10px;">
                                        <i class="icon-19"></i>
                                        <span>{{ __('messages.book_now') }}</span>
                                    </a>
                                @endauth
                                <div class="follow-social flex-two">
                                    <span>{{ __('messages.follow_us') }} :</span>
                                    <ul class="flex-two">
                                        <li><a href="#"><i class="icon-icon-2"></i></a></li>
                                        <li><a href="#"><i class="icon-icon_03"></i></a></li>
                                        <li><a href="#"><i class="icon-x"></i></a></li>
                                        <li><a href="#"><i class="icon-icon"></i></a></li>
                                    </ul>
                                </div>
                                {{-- Sélecteur de langue --}}
                                @include('components.language-selector')
                            </div>
                        </div>
                    </div>

                    {{-- Navigation principale --}}
                    <div class="header-lower">
                        <div class="tf-container full">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="inner-container flex justify-space align-center">
                                        <div class="mobile-nav-toggler mobie-mt mobile-button">
                                            <i class="icon-Vector3"></i>
                                        </div>
                                        <div class="logo-box">
                                            <div class="logo">
                                                <a href="{{ route('welcome') }}">
                                                    <img src="{{ $logo }}" alt="SIDEM-BENIN">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nav-outer flex align-center">
                                            <nav class="main-menu show navbar-expand-md">
                                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                                    <ul class="navigation clearfix">
                                                        <li class="{{ Request::routeIs('welcome') ? 'current' : '' }}">
                                                            <a href="{{ route('welcome') }}">{{ __('messages.nav_home') }}</a>
                                                        </li>
                                                        <li class="{{ Request::routeIs('services*') ? 'current' : '' }}">
                                                            <a href="{{ route('services') }}">{{ __('messages.nav_services') }}</a>
                                                        </li>
                                                        <li class="{{ Request::routeIs('realisation*') ? 'current' : '' }}">
                                                            <a href="{{ route('realisation') }}">{{ __('messages.nav_portfolio') }}</a>
                                                        </li>
                                                        <li class="{{ Request::routeIs('blog*') ? 'current' : '' }}">
                                                            <a href="{{ route('blog') }}">{{ __('messages.nav_news') }}</a>
                                                        </li>
                                                        <li class="{{ Request::routeIs('about') ? 'current' : '' }}">
                                                            <a href="{{ route('about') }}">{{ __('messages.nav_about') }}</a>
                                                        </li>
                                                        <li class="{{ Request::routeIs('contact*') ? 'current' : '' }}">
                                                            <a href="{{ route('contact') }}">{{ __('messages.nav_contact') }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>
                                        <div class="header-account flex align-center">
                                            <div class="search-mobie relative">
                                                <div class="dropdown">
                                                    <a type="button" class="show-search" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="icon-Vector5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu top-search">
                                                        <form action="#" id="search-bar-widget">
                                                            <input type="text" placeholder="{{ __('messages.search') }}">
                                                            <button type="button"><i class="icon-search-2"></i></button>
                                                        </form>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img <img src="{{ asset('assets/images/page/fl1.png') }}" alt="" class="fly-ab">
                    </div>
                </div>
                <!-- End Header Lower -->

                <a href="#" class="header-sidebar flex-three" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="icon-Bars"></i>
                </a>

                <!-- Mobile Menu -->
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <nav class="menu-box">
                        <div class="nav-logo">
                            <a href="{{ route('welcome') }}">
                                <img src="{{ asset('images/logo.png') }}" alt="SIDEM-BENIN">
                            </a>
                        </div>
                        <div class="bottom-canvas">
                            <div class="menu-outer"></div>
                        </div>
                    </nav>
                </div>
                <!-- End Mobile Menu -->
            </header>
            <!-- End Main Header -->

            {{-- ===== CONTENU DE LA PAGE ===== --}}
            @yield('content')

            {{-- ===== FOOTER ===== --}}
            <footer class="footer footer-style1">
                <div class="tf-container">
                    <div class="footer-main">
                        <div class="footer-logo">
                            <div class="logo-footer">
                                <img src="{{ $logo }}" alt="SIDEM-BENIN">
                            </div>
                            <p class="des-footer">{{ __('messages.footer_about') }}</p>
                            <ul class="footer-info">
                                <li class="flex-three">
                                    <i class="icon-noun-mail-5780740-1"></i>
                                    <p>support@sidem-benin.com</p>
                                </li>
                                <li class="flex-three">
                                    <i class="icon-Group-9"></i>
                                    <p><a href="tel:+22901XXXXXXXX">+229 01 XX XX XX XX</a></p>
                                </li>
                                <li class="flex-three">
                                    <i class="icon-Layer-19"></i>
                                    <p>Cotonou, Bénin</p>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-service">
                            <h5 class="title">{{ __('messages.useful_links') }}</h5>
                            <ul class="footer-menu">
                                <li><a href="{{ route('welcome') }}">{{ __('messages.nav_home') }}</a></li>
                                <li><a href="{{ route('about') }}">{{ __('messages.about_us') }}</a></li>
                                <li><a href="{{ route('services') }}">{{ __('messages.nav_services') }}</a></li>
                                <li><a href="#">{{ __('messages.gallery') }}</a></li>
                                <li><a href="{{ route('contact') }}">{{ __('messages.nav_contact') }}</a></li>
                            </ul>
                        </div>
                        <div class="footer-gallery">
                            <h5 class="title">{{ __('messages.gallery') }}</h5>
                            <div class="gallery-img">
                                <a href="{{ asset('assets/images/gallery/gl1.jpg') }}" data-fancybox="gallery">
                                    <img <img src="{{ asset('assets/images/gallery/gl1.jpg') }}" alt="image gallery">
                                </a>
                                <a href="{{ asset('assets/images/gallery/gl2.jpg') }}" data-fancybox="gallery">
                                    <img <img src="{{ asset('assets/images/gallery/gl2.jpg') }}" alt="image gallery">
                                </a>
                                <a href="{{ asset('assets/images/gallery/gl3.jpg') }}" data-fancybox="gallery">
                                    <img <img src="{{ asset('assets/images/gallery/gl3.jpg') }}" alt="image gallery">
                                </a>
                                <a href="{{ asset('assets/images/gallery/gl4.jpg') }}" data-fancybox="gallery">
                                    <img <img src="{{ asset('assets/images/gallery/gl4.jpg') }}" alt="image gallery">
                                </a>
                                <a href="{{ asset('assets/images/gallery/gl5.jpg') }}" data-fancybox="gallery">
                                    <img <img src="{{ asset('assets/images/gallery/gl5.jpg') }}" alt="image gallery">
                                </a>
                                <a href="{{ asset('assets/images/gallery/gl6.jpg') }}" data-fancybox="gallery">
                                    <img <img src="{{ asset('assets/images/gallery/gl6.jpg') }}" alt="image gallery">
                                </a>
                            </div>
                        </div>
                        <div class="footer-newsletter">
                            <h5 class="title">{{ __('messages.newsletter') }}</h5>
                            <form action="#" id="footer-form">
                                <div class="input-wrap flex-three">
                                    <input type="email" placeholder="{{ __('messages.newsletter_placeholder') }}">
                                    <button type="submit"><i class="icon-paper-plane"></i></button>
                                </div>
                                <div class="check-form flex-three">
                                    <i class="icon-Vector-121"></i>
                                    <p>{{ __('messages.newsletter_accept') }}</p>
                                </div>
                            </form>
                            <ul class="social-ft flex-three">
                                <li><a href="#"><i class="icon-icon-2"></i></a></li>
                                <li><a href="#"><i class="icon-x"></i></a></li>
                                <li><a href="#"><i class="icon-8"></i></a></li>
                                <li><a href="#"><i class="icon-2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row footer-bottom">
                        <div class="col-md-6">
                            <p class="copy-right">Copyright &copy; {{ date('Y') }} <a href="#" class="text-main">SIDEM-BENIN.</a> {{ __('messages.copyright') }}</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="social flex-six">
                                <li><a href="#"><i class="icon-icon-2"></i></a></li>
                                <li><a href="#"><i class="icon-x"></i></a></li>
                                <li><a href="#"><i class="icon-icon_03"></i></a></li>
                                <li><a href="#"><i class="icon-2"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /#page -->
    </div>

    <a id="scroll-top" class="button-go"></a>

    {{-- ===== OFFCANVAS SIDEBAR ===== --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="logo-canvas">
                <img src="{{ $logo }}" alt="SIDEM-BENIN">
            </div>
            <p class="des">{{ __('messages.canvas_desc') }}</p>
            <ul class="canvas-info">
                <li class="flex-three">
                    <i class="icon-noun-mail-5780740-1"></i>
                    <p>support@sidem-benin.com</p>
                </li>
                <li class="flex-three">
                    <i class="icon-Group-9"></i>
                    <p>+229 01 XX XX XX XX</p>
                </li>
                <li class="flex-three">
                    <i class="icon-Layer-19"></i>
                    <p>Cotonou, Bénin</p>
                </li>
            </ul>
            <ul class="social flex-three">
                <li><a href="#"><i class="icon-icon-2"></i></a></li>
                <li><a href="#"><i class="icon-icon-1"></i></a></li>
                <li><a href="#"><i class="icon-8"></i></a></li>
                <li><a href="#"><i class="icon-6"></i></a></li>
            </ul>
        </div>
    </div>

    {{-- ===== SCRIPTS COMMUNS ===== --}}
    <script src="{{ asset('app/js/jquery.min.js') }}"></script>
    <script src="{{ asset('app/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('app/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('app/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('app/js/swiper.js') }}"></script>
    <script src="{{ asset('app/js/plugin.js') }}"></script>
    <script src="{{ asset('app/js/countto.js') }}"></script>
    <script src="{{ asset('app/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('app/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('app/js/wow.min.js') }}"></script>
    <script src="{{ asset('app/js/shortcodes.js') }}"></script>
    <script src="{{ asset('app/js/main.js') }}"></script>

    {{-- Scripts spécifiques à la page --}}
    @stack('scripts')

</body>
</html>
