@extends('layouts.app')
@section('title', __('messages.services_title'))
@section('content')
<main>
    <!-- Services Hero Section -->
    <section class="services-hero py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-3">{{ __('messages.services_title') }}</h1>
                    <p class="lead">{{ __('messages.services_subtitle') }}</p>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="service-icon" style="font-size: 100px;">🚀</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services List -->
    <section class="services-list py-5">
        <div class="container">
            <div class="row">
                <!-- Service Card 1: Développement Web -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3" style="font-size: 60px;">💻</div>
                            <h5 class="card-title fw-bold">{{ __('messages.service_web_title') }}</h5>
                            <p class="card-text text-muted">{{ __('messages.service_web_desc') }}</p>
                            <a href="{{ route('services.show', 'web') }}" class="btn btn-primary btn-sm">
                                {{ __('messages.services_learn_more') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service Card 2: Développement Mobile -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3" style="font-size: 60px;">📱</div>
                            <h5 class="card-title fw-bold">{{ __('messages.service_mobile_title') }}</h5>
                            <p class="card-text text-muted">{{ __('messages.service_mobile_desc') }}</p>
                            <a href="{{ route('services.show', 'mobile') }}" class="btn btn-primary btn-sm">
                                {{ __('messages.services_learn_more') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service Card 3: Design Graphique -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3" style="font-size: 60px;">🎨</div>
                            <h5 class="card-title fw-bold">{{ __('messages.service_design_title') }}</h5>
                            <p class="card-text text-muted">{{ __('messages.service_design_desc') }}</p>
                            <a href="{{ route('services.show', 'design') }}" class="btn btn-primary btn-sm">
                                {{ __('messages.services_learn_more') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service Card 4: Consulting IT -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3" style="font-size: 60px;">🔧</div>
                            <h5 class="card-title fw-bold">{{ __('messages.service_consulting_title') }}</h5>
                            <p class="card-text text-muted">{{ __('messages.service_consulting_desc') }}</p>
                            <a href="{{ route('services.show', 'consulting') }}" class="btn btn-primary btn-sm">
                                {{ __('messages.services_learn_more') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service Card 5: Support & Maintenance -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3" style="font-size: 60px;">🛠️</div>
                            <h5 class="card-title fw-bold">{{ __('messages.service_support_title') }}</h5>
                            <p class="card-text text-muted">{{ __('messages.service_support_desc') }}</p>
                            <a href="{{ route('services.show', 'support') }}" class="btn btn-primary btn-sm">
                                {{ __('messages.services_learn_more') }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service Card 6: SEO & Marketing Digital -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body text-center">
                            <div class="service-icon mb-3" style="font-size: 60px;">📈</div>
                            <h5 class="card-title fw-bold">{{ __('messages.service_marketing_title') }}</h5>
                            <p class="card-text text-muted">{{ __('messages.service_marketing_desc') }}</p>
                            <a href="{{ route('services.show', 'marketing') }}" class="btn btn-primary btn-sm">
                                {{ __('messages.services_learn_more') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold mb-3">{{ __('messages.why_choose_us') }}</h2>
                    <p class="lead text-muted">{{ __('messages.why_choose_desc') }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 text-center mb-4">
                    <div class="mb-3" style="font-size: 40px;">⭐</div>
                    <h5 class="fw-bold">{{ __('messages.benefit_expertise') }}</h5>
                    <p class="text-muted">{{ __('messages.benefit_expertise_desc') }}</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-4">
                    <div class="mb-3" style="font-size: 40px;">⚡</div>
                    <h5 class="fw-bold">{{ __('messages.benefit_fast') }}</h5>
                    <p class="text-muted">{{ __('messages.benefit_fast_desc') }}</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-4">
                    <div class="mb-3" style="font-size: 40px;">💼</div>
                    <h5 class="fw-bold">{{ __('messages.benefit_professional') }}</h5>
                    <p class="text-muted">{{ __('messages.benefit_professional_desc') }}</p>
                </div>
                <div class="col-lg-3 col-md-6 text-center mb-4">
                    <div class="mb-3" style="font-size: 40px;">🎯</div>
                    <h5 class="fw-bold">{{ __('messages.benefit_results') }}</h5>
                    <p class="text-muted">{{ __('messages.benefit_results_desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">{{ __('messages.services_cta_title') }}</h2>
            <p class="lead mb-4">{{ __('messages.services_cta_desc') }}</p>
            <a href="{{ route('contact') }}" class="btn btn-light btn-lg">
                {{ __('messages.services_contact_now') }}
            </a>
        </div>
    </section>
</main>
@endsection
