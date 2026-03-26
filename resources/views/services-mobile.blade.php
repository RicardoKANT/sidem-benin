@extends('layouts.app')
@section('title', __('messages.service_mobile_title'))
@section('content')
<main>
    <!-- Breadcrumb -->
    <section class="breadcrumb-section py-3" style="background-color: #f8f9fa;">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('messages.home') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('services') }}">{{ __('messages.services_title') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('messages.service_mobile_title') }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Service Hero -->
    <section class="service-hero py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">{{ __('messages.service_mobile_title') }}</h1>
                    <p class="lead">{{ __('messages.service_mobile_desc') }}</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="service-icon" style="font-size: 120px;">📱</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Content -->
    <section class="service-overview py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">{{ __('messages.service_overview') }}</h2>
                    <p class="mb-4">
                        Nous développons des applications mobiles natives et cross-platform performantes pour iOS et Android. Vos clients peuvent accéder à vos services depuis leurs smartphones avec une expérience utilisateur optimisée.
                    </p>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.service_features') }}</h3>
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Applications Natives</h5>
                                    <p class="text-muted mb-0">iOS (Swift) et Android (Kotlin) performantes et fluides</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Cross-Platform</h5>
                                    <p class="text-muted mb-0">React Native ou Flutter pour réduire les coûts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Interface Intuitive</h5>
                                    <p class="text-muted mb-0">Design centré utilisateur et facilité d'utilisation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Intégrations</h5>
                                    <p class="text-muted mb-0">APIs, paiements, notifications push, géolocalisation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Sécurité Renforcée</h5>
                                    <p class="text-muted mb-0">Authentification sécurisée et chiffrement de données</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">App Store Optimisé</h5>
                                    <p class="text-muted mb-0">Publication et optimisation sur App Store et Google Play</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.service_process') }}</h3>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">1</div>
                                <h5 class="fw-bold">Conception & Wireframes</h5>
                                <p class="text-muted">Prototypes interactifs et user flows</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">2</div>
                                <h5 class="fw-bold">Design Mobile</h5>
                                <p class="text-muted">Interfaces magnifiques pour chaque platform</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">3</div>
                                <h5 class="fw-bold">Développement</h5>
                                <p class="text-muted">Codage natif ou cross-platform selon vos besoins</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">4</div>
                                <h5 class="fw-bold">Tests & Publication</h5>
                                <p class="text-muted">QA complet et lancement sur les stores</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mt-5 mb-4">Technologies Mobiless</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">Native</h6>
                                <p class="text-muted mb-0">Swift (iOS), Kotlin (Android)</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">Cross-Platform</h6>
                                <p class="text-muted mb-0">React Native, Flutter, Xamarin</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">Backends</h6>
                                <p class="text-muted mb-0">Firebase, Node.js, Django</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.related_services') }}</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div style="font-size: 40px; margin-bottom: 10px;">💻</div>
                                    <h6 class="card-title fw-bold">{{ __('messages.service_web_title') }}</h6>
                                    <p class="card-text text-muted mb-0 small">Applications web puissantes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div style="font-size: 40px; margin-bottom: 10px;">🎨</div>
                                    <h6 class="card-title fw-bold">{{ __('messages.service_design_title') }}</h6>
                                    <p class="card-text text-muted mb-0 small">Design d'interfaces mobiles</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div style="font-size: 40px; margin-bottom: 10px;">🛠️</div>
                                    <h6 class="card-title fw-bold">{{ __('messages.service_support_title') }}</h6>
                                    <p class="card-text text-muted mb-0 small">Support et maintenance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm mb-4" style="background: #f8f9fa;">
                        <div class="card-body">
                            <h5 class="fw-bold mb-3">{{ __('messages.service_info') }}</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3"><strong>Durée:</strong><br><span class="text-muted">8-16 semaines</span></li>
                                <li class="mb-3"><strong>Prix:</strong><br><span class="text-muted">À partir de 5,000€</span></li>
                                <li class="mb-3"><strong>Disponibilité:</strong><br><span class="badge bg-success">{{ __('messages.available') }}</span></li>
                                <li class="mb-3"><strong>Support:</strong><br><span class="text-muted">24/7 inclus 1 an</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                        <div class="card-body text-center">
                            <h5 class="fw-bold mb-3">{{ __('messages.ready_to_start') }}</h5>
                            <p class="mb-4">Créons votre application mobile</p>
                            <a href="{{ route('contact') }}" class="btn btn-light btn-sm w-100">
                                {{ __('messages.request_quote') }}
                            </a>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h5 class="fw-bold mb-3">{{ __('messages.faq') }}</h5>
                        <div class="accordion" id="accordionFAQ">
                            <div class="accordion-item border-0 mb-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        Native ou Cross-Platform?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Cela dépend de vos besoins. Native = plus performant. Cross-platform = moins cher. Nous vous conseillons selon votre contexte.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Combien de temps pour publier?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        3-5 jours après développement. Appare Store: 1-3 jours. Google Play: quelques heures généralement.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        Maintenez-vous l'app après?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Oui! 1 an de support 24/7 inclus. Maintenance, bug fixes, updates iOS/Android selon besoins.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="cta-final py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">{{ __('messages.lets_work_together') }}</h2>
            <p class="lead mb-4">Créons votre application mobile avec SIDEM-BENIN</p>
            <div>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg me-2">{{ __('messages.get_started') }}</a>
                <a href="{{ route('services') }}" class="btn btn-outline-light btn-lg">{{ __('messages.explore_services') }}</a>
            </div>
        </div>
    </section>
</main>
@endsection
