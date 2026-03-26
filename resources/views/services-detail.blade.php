@extends('layouts.app')
@section('title', __('messages.services_detail_title'))
@section('content')
<main>
    <!-- Breadcrumb -->
    <section class="breadcrumb-section py-3" style="background-color: #f8f9fa;">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('messages.home') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('services') }}">{{ __('messages.services_title') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('messages.services_detail_title') }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Service Detail Hero -->
    <section class="service-hero py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">{{ __('messages.service_web_title') }}</h1>
                    <p class="lead">{{ __('messages.service_detail_intro') }}</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="service-icon" style="font-size: 120px;">💻</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="service-overview py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">{{ __('messages.service_overview') }}</h2>

                    <p class="mb-4">
                        {{ __('messages.service_overview_content') }}
                    </p>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.service_features') }}</h3>
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3">
                                    <span style="font-size: 24px;">✓</span>
                                </div>
                                <div>
                                    <h5 class="fw-bold">{{ __('messages.feature_1_title') }}</h5>
                                    <p class="text-muted mb-0">{{ __('messages.feature_1_desc') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3">
                                    <span style="font-size: 24px;">✓</span>
                                </div>
                                <div>
                                    <h5 class="fw-bold">{{ __('messages.feature_2_title') }}</h5>
                                    <p class="text-muted mb-0">{{ __('messages.feature_2_desc') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3">
                                    <span style="font-size: 24px;">✓</span>
                                </div>
                                <div>
                                    <h5 class="fw-bold">{{ __('messages.feature_3_title') }}</h5>
                                    <p class="text-muted mb-0">{{ __('messages.feature_3_desc') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3">
                                    <span style="font-size: 24px;">✓</span>
                                </div>
                                <div>
                                    <h5 class="fw-bold">{{ __('messages.feature_4_title') }}</h5>
                                    <p class="text-muted mb-0">{{ __('messages.feature_4_desc') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.service_process') }}</h3>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">1</div>
                                <h5 class="fw-bold">{{ __('messages.step_1_title') }}</h5>
                                <p class="text-muted">{{ __('messages.step_1_desc') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">2</div>
                                <h5 class="fw-bold">{{ __('messages.step_2_title') }}</h5>
                                <p class="text-muted">{{ __('messages.step_2_desc') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">3</div>
                                <h5 class="fw-bold">{{ __('messages.step_3_title') }}</h5>
                                <p class="text-muted">{{ __('messages.step_3_desc') }}</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">4</div>
                                <h5 class="fw-bold">{{ __('messages.step_4_title') }}</h5>
                                <p class="text-muted">{{ __('messages.step_4_desc') }}</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.related_services') }}</h3>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold">{{ __('messages.service_mobile_title') }}</h6>
                                    <p class="card-text text-muted mb-0">{{ __('messages.service_mobile_desc') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold">{{ __('messages.service_design_title') }}</h6>
                                    <p class="card-text text-muted mb-0">{{ __('messages.service_design_desc') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Service Info Box -->
                    <div class="card border-0 shadow-sm mb-4" style="background: #f8f9fa;">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">{{ __('messages.service_info') }}</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <strong>{{ __('messages.duration') }}:</strong>
                                    <span class="text-muted">3-8 semaines</span>
                                </li>
                                <li class="mb-3">
                                    <strong>{{ __('messages.price') }}:</strong>
                                    <span class="text-muted">À partir de 500€</span>
                                </li>
                                <li class="mb-3">
                                    <strong>{{ __('messages.availability') }}:</strong>
                                    <span class="badge bg-success">{{ __('messages.available') }}</span>
                                </li>
                                <li class="mb-3">
                                    <strong>{{ __('messages.support') }}:</strong>
                                    <span class="text-muted">24/7 inclus</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- CTA Box -->
                    <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                        <div class="card-body text-center">
                            <h5 class="fw-bold mb-3">{{ __('messages.ready_to_start') }}</h5>
                            <p class="mb-4">{{ __('messages.ready_to_start_desc') }}</p>
                            <a href="{{ route('contact') }}" class="btn btn-light btn-sm w-100">
                                {{ __('messages.request_quote') }}
                            </a>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="mt-4">
                        <h5 class="fw-bold mb-3">{{ __('messages.faq') }}</h5>
                        <div class="accordion" id="accordionFAQ">
                            <div class="accordion-item border-0 mb-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        {{ __('messages.faq_question_1') }}
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        {{ __('messages.faq_answer_1') }}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        {{ __('messages.faq_question_2') }}
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        {{ __('messages.faq_answer_2') }}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        {{ __('messages.faq_question_3') }}
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        {{ __('messages.faq_answer_3') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">{{ __('messages.client_testimonials') }}</h2>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3">
                                <span style="color: #ffc107;">★★★★★</span>
                            </div>
                            <p class="card-text mb-3">{{ __('messages.testimonial_1') }}</p>
                            <strong class="d-block">- {{ __('messages.testimonial_author_1') }}</strong>
                            <small class="text-muted">{{ __('messages.testimonial_company_1') }}</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3">
                                <span style="color: #ffc107;">★★★★★</span>
                            </div>
                            <p class="card-text mb-3">{{ __('messages.testimonial_2') }}</p>
                            <strong class="d-block">- {{ __('messages.testimonial_author_2') }}</strong>
                            <small class="text-muted">{{ __('messages.testimonial_company_2') }}</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3">
                                <span style="color: #ffc107;">★★★★★</span>
                            </div>
                            <p class="card-text mb-3">{{ __('messages.testimonial_3') }}</p>
                            <strong class="d-block">- {{ __('messages.testimonial_author_3') }}</strong>
                            <small class="text-muted">{{ __('messages.testimonial_company_3') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-final py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">{{ __('messages.lets_work_together') }}</h2>
            <p class="lead mb-4">{{ __('messages.lets_work_desc') }}</p>
            <div>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg me-2">
                    {{ __('messages.get_started') }}
                </a>
                <a href="{{ route('services') }}" class="btn btn-outline-light btn-lg">
                    {{ __('messages.explore_services') }}
                </a>
            </div>
        </div>
    </section>
</main>
@endsection
