<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ app()->getLocale() }}" lang="{{ app()->getLocale() }}">

@php
    $contactInfo = \App\Models\ContactInfo::first();
    $logo = $contactInfo && $contactInfo->logo ? asset('storage/' . $contactInfo->logo) : 'images/logo.png';
    $email = $contactInfo->email ?? 'support@sidem-benin.com';
    $phone = $contactInfo->phone ?? '+229 01 XX XX XX XX';
@endphp

<head>
    <meta charset="utf-8">
    <title>SIDEM-BENIN - @yield('page-title', __('messages.member_space'))</title>
    <meta name="author" content="SIDEM-BENIN">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="app/css/app.css">
    <link rel="stylesheet" href="app/css/jquery.fancybox.min.css">

    <link rel="shortcut icon" href="assets/images/favico.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favico.png">
</head>

<body class="body header-fixed">

    {{-- Preloader --}}
    <div class="preload preload-container">
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
        </svg>
    </div>

    <div id="wrapper">
        <div id="pagee" class="clearfix">

            {{-- ===== HEADER ===== --}}
            <header class="main-header flex">
                <div id="header">

                    {{-- Barre supérieure --}}
                    <div class="header-top">
                        <div class="header-top-wrap flex-two">
                            <div class="header-top-right">
                                <ul class="flex-three">
                                    <li class="flex-three">
                                        <i class="icon-day"></i>
                                        <span>{{ \Carbon\Carbon::now()->locale('fr')->isoFormat('dddd D MMMM YYYY') }}</span>
                                    </li>
                                    <li class="flex-three">
                                        <i class="icon-mail"></i>
                                        <span>{{ $email }}</span>
                                    </li>
                                    <li class="flex-three">
                                        <i class="icon-phone"></i>
                                        <span>{{ $phone }}</span>
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
                                    <a href="{{ route('register') }}" class="booking">
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

                    {{-- Barre principale de navigation --}}
                    <div class="header-lower">
                        <div class="tf-container full">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="inner-container flex justify-space align-center">

                                        <div class="mobile-nav-toggler mobie-mt mobile-button">
                                            <i class="icon-Vector3"></i>
                                        </div>

                                        {{-- Logo --}}
                                        <div class="logo-box">
                                            <div class="logo">
                                                <a href="{{ route('welcome') }}">
                                                    <img src="{{ $logo }}" alt="SIDEM-BENIN">
                                                </a>
                                            </div>
                                        </div>

                                        {{-- Navigation principale --}}
                                        <div class="nav-outer flex align-center">
                                            <nav class="main-menu show navbar-expand-md">
                                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                                    <ul class="navigation clearfix">
                                                        <li><a href="{{ route('welcome') }}">{{ __('messages.nav_home') }}</a></li>
                                                        <li class="dropdown2"><a href="#">{{ __('messages.nav_services') }}</a>
                                                            <ul>
                                                                <li><a href="#">{{ __('messages.nav_web_dev') }}</a></li>
                                                                <li><a href="#">{{ __('messages.nav_digital_marketing') }}</a></li>
                                                                <li><a href="#">{{ __('messages.nav_strategy') }}</a></li>
                                                                <li><a href="#">{{ __('messages.nav_ecommerce') }}</a></li>
                                                                <li><a href="#">{{ __('messages.nav_training') }}</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">{{ __('messages.nav_portfolio') }}</a></li>
                                                        <li><a href="#">{{ __('messages.nav_news') }}</a></li>
                                                        <li><a href="#">{{ __('messages.nav_about') }}</a></li>
                                                        <li><a href="#">{{ __('messages.nav_contact') }}</a></li>
                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>

                                        {{-- Compte utilisateur --}}
                                        <div class="header-account flex align-center">
                                            <div class="register">
                                                <ul class="flex align-center">
                                                    @auth
                                                        <li>
                                                            <a href="{{ route('dashboard') }}">
                                                                <i class="icon-user-1-1"></i>
                                                                <span>{{ __('messages.my_account') }}</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                                                                @csrf
                                                                <a href="#" onclick="this.closest('form').submit()">
                                                                    <i class="icon-19"></i>
                                                                    <span>{{ __('messages.logout') }}</span>
                                                                </a>
                                                            </form>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a href="{{ route('login') }}">
                                                                <i class="icon-user-1-1"></i>
                                                                <span>{{ __('messages.login') }}</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('register') }}">
                                                                <i class="icon-19"></i>
                                                                <span>{{ __('messages.register') }}</span>
                                                            </a>
                                                        </li>
                                                    @endauth
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Bouton sidebar mobile --}}
                <a href="#" class="header-sidebar flex-three" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <i class="icon-Bars"></i>
                </a>

                {{-- Menu mobile --}}
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <nav class="menu-box">
                        <div class="nav-logo">
                            <a href="{{ route('welcome') }}">
                                <img src="{{ $logo }}" alt="SIDEM-BENIN">
                            </a>
                        </div>
                        <div class="bottom-canvas">
                            <div class="menu-outer"></div>
                        </div>
                    </nav>
                </div>
            </header>
            {{-- ===== FIN HEADER ===== --}}

            <main id="main">

                {{-- Breadcrumb / Titre de la page --}}
                <section class="breadcumb-section">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-12 center z-index1">
                                <h1 class="title">@yield('breadcrumb-title', __('messages.member_space'))</h1>
                                <ul class="breadcumb-list flex-five">
                                    <li><a href="{{ route('welcome') }}">{{ __('messages.nav_home') }}</a></li>
                                    <li><span>@yield('breadcrumb-item', __('messages.login'))</span></li>
                                </ul>
                                <img src="{{ asset('assets/images/page/mask-bcrumb.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Contenu principal --}}
                @yield('content')

                {{-- Section partenaires --}}
                <section class="brand-logo-widget bg-1">
                    <div class="tf-container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="swiper brand-logo overflow-hidden">
                                    <div class="swiper-wrapper">
                                        @for($i = 0; $i < 6; $i++)
                                        <div class="swiper-slide">
<img src="{{ asset('assets/images/page/brand-logo.png') }}" alt="Partenaire">
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                {{-- Call to action --}}
                <section class="mb--93 bg-1">
                    <div class="tf-container">
                        <div class="callt-to-action flex-two z-index3 relative">
                            <div class="callt-to-action-content flex-three">
                                <div class="image">
                                    <img src="{{ asset('assets/images/page/ready.png') }}" alt="Aventure">
                                </div>
                                <div class="content">
                                    <h2 class="title-call">{{ __('messages.cta_title') }}</h2>
                                    <p class="des">{{ __('messages.cta_desc') }}</p>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/page/vector4.png') }}" alt="" class="shape-ab">
                            <div class="callt-to-action-button">
                                <a href="{{ route('register') }}" class="get-call">{{ __('messages.cta_btn') }}</a>
                            </div>
                        </div>
                    </div>
                </section>

            </main>

            {{-- ===== FOOTER ===== --}}
            <footer class="footer footer-style1">
                <div class="tf-container">
                    <div class="footer-main">

                        {{-- Logo & infos --}}
                        <div class="footer-logo">
                            <div class="logo-footer">
                                <img src="{{ $logo }}" alt="SIDEM-BENIN">
                            </div>
                            <p class="des-footer">
                                {{ __('messages.footer_about') }}
                            </p>
                            <ul class="footer-info">
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
                                    <p>Cotonou, République du Bénin</p>
                                </li>
                            </ul>
                        </div>

                        {{-- Services --}}
                        <div class="footer-service">
                            <h5 class="title">{{ __('messages.useful_links') }}</h5>
                            <ul class="footer-menu">
                                <li><a href="{{ route('welcome') }}">{{ __('messages.nav_home') }}</a></li>
                                <li><a href="#">{{ __('messages.about_us') }}</a></li>
                                <li><a href="#">{{ __('messages.nav_services') }}</a></li>
                                <li><a href="#">{{ __('messages.gallery') }}</a></li>
                                <li><a href="#">{{ __('messages.nav_contact') }}</a></li>
                            </ul>
                        </div>

                        {{-- Galerie --}}
                        <div class="footer-gallery">
                            <h5 class="title">{{ __('messages.gallery') }}</h5>
                            <div class="gallery-img">
                                @foreach(['gl1','gl2','gl3','gl4','gl5','gl6'] as $img)
                                <a href="{{ asset('assets/images/gallery/' . $img . '.jpg') }}" data-fancybox="gallery">
                                    <img src="{{ asset('assets/images/gallery/' . $img . '.jpg') }}" alt="Galerie">
                                </a>
                                @endforeach
                            </div>
                        </div>

                        {{-- Newsletter --}}
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

                    {{-- Bas de footer --}}
                    <div class="row footer-bottom">
                        <div class="col-md-6">
                            <p class="copy-right">Copyright &copy; {{ date('Y') }} SIDEM-BENIN. {{ __('messages.copyright') }}</p>
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
            {{-- ===== FIN FOOTER ===== --}}

        </div>
    </div>

    {{-- Bouton retour en haut --}}
    <a id="scroll-top" class="button-go"></a>

    {{-- Sidebar Offcanvas --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fermer"></button>
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
                    <p>Cotonou, République du Bénin</p>
                </li>
            </ul>
            <ul class="social flex-three">
                <li><a href="#"><i class="icon-icon-2"></i></a></li>
                <li><a href="#"><i class="icon-x"></i></a></li>
                <li><a href="#"><i class="icon-8"></i></a></li>
                <li><a href="#"><i class="icon-6"></i></a></li>
            </ul>
        </div>
    </div>

    {{-- Scripts --}}
    <script src="app/js/jquery.min.js"></script>
    <script src="app/js/jquery.nice-select.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>
    <script src="app/js/swiper-bundle.min.js"></script>
    <script src="app/js/swiper.js"></script>
    <script src="app/js/plugin.js"></script>
    <script src="app/js/jquery.fancybox.js"></script>
    <script src="app/js/shortcodes.js"></script>
    <script src="app/js/main.js"></script>

    @include('components.toast')

</body>
</html>
