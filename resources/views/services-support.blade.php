@extends('layouts.app')
@section('title', __('messages.service_support_title'))
@section('content')
<main>
    <!-- Breadcrumb -->
    <section class="breadcrumb-section py-3" style="background-color: #f8f9fa;">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('messages.home') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('services') }}">{{ __('messages.services_title') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('messages.service_support_title') }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Service Hero -->
    <section class="service-hero py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">{{ __('messages.service_support_title') }}</h1>
                    <p class="lead">{{ __('messages.service_support_desc') }}</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="service-icon" style="font-size: 120px;">🛠️</div>
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
                        Assurez la continuité de vos systèmes avec notre support technique 24/7. Maintenance proactive, résolutions rapides et assistance d'experts pour minimiser les interruptions d'activité.
                    </p>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.service_features') }}</h3>
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Support 24/7</h5>
                                    <p class="text-muted mb-0">Assistance disponible jour et nuit, 365 jours/an</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Temps de Réponse Garanti</h5>
                                    <p class="text-muted mb-0">Critiques: 2h, Normaux: 24h, Non-urgents: 48h</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Maintenance Préventive</h5>
                                    <p class="text-muted mb-0">Mises à jour régulières et optimisations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Monitoring Continu</h5>
                                    <p class="text-muted mb-0">Surveillance 24/7 de vos systèmes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Backup & Disaster Recovery</h5>
                                    <p class="text-muted mb-0">Sauvegardes régulières et plan de secours</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Rapports Mensuels</h5>
                                    <p class="text-muted mb-0">Bilan de performances et recommandations</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.service_process') }}</h3>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">1</div>
                                <h5 class="fw-bold">Incidence</h5>
                                <p class="text-muted">Signalement rapide d'un problème</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">2</div>
                                <h5 class="fw-bold">Diagnostic</h5>
                                <p class="text-muted">Identification rapide de la cause</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">3</div>
                                <h5 class="fw-bold">Résolution</h5>
                                <p class="text-muted">Correction du problème</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">4</div>
                                <h5 class="fw-bold">Suivi</h5>
                                <p class="text-muted">Vérification solution et feedback</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mt-5 mb-4">Niveaux de Support</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">Bronze</h6>
                                <p class="text-muted mb-0">Support 24/5, Email uniquement</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">Silver</h6>
                                <p class="text-muted mb-0">Support 24/7, Email + Téléphone</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">Gold</h6>
                                <p class="text-muted mb-0">Support 24/7+ Expert dédié</p>
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
                                    <p class="card-text text-muted mb-0 small">Maintenance applications web</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div style="font-size: 40px; margin-bottom: 10px;">🔧</div>
                                    <h6 class="card-title fw-bold">{{ __('messages.service_consulting_title') }}</h6>
                                    <p class="card-text text-muted mb-0 small">Optimisation infrastructure</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div style="font-size: 40px; margin-bottom: 10px;">📱</div>
                                    <h6 class="card-title fw-bold">{{ __('messages.service_mobile_title') }}</h6>
                                    <p class="card-text text-muted mb-0 small">Updates et maintenance apps</p>
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
                                <li class="mb-3"><strong>Durée:</strong><br><span class="text-muted">Contrats mensuels/annuels</span></li>
                                <li class="mb-3"><strong>Prix:</strong><br><span class="text-muted">À partir de 500€/mois</span></li>
                                <li class="mb-3"><strong>Disponibilité:</strong><br><span class="badge bg-success">{{ __('messages.available') }}</span></li>
                                <li class="mb-3"><strong>Garanti:</strong><br><span class="text-muted">99.5% uptime</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                        <div class="card-body text-center">
                            <h5 class="fw-bold mb-3">Soulagez-vous</h5>
                            <p class="mb-4">Laissez-nous gérer votre infrastructure</p>
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
                                        C'est quoi l'uptime garanti?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        99.5% d'uptime signifie 3h36min maximum de temps d'arrêt par an.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Pouvez-vous gérer nos backups?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Oui! Backups quotidiens avec vérifications de restaurabilité incluses.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        Comment rapporter une incidence?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Via email, téléphone, ou portail support. Création auto ticket avec suivi temps réel.
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
            <p class="lead mb-4">Laissez SIDEM-BENIN s'occuper de votre infrastructure</p>
            <div>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg me-2">{{ __('messages.get_started') }}</a>
                <a href="{{ route('services') }}" class="btn btn-outline-light btn-lg">{{ __('messages.explore_services') }}</a>
            </div>
        </div>
    </section>
</main>
@endsection
