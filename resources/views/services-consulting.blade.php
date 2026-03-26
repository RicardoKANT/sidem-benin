@extends('layouts.app')
@section('title', __('messages.service_consulting_title'))
@section('content')
<main>
    <!-- Breadcrumb -->
    <section class="breadcrumb-section py-3" style="background-color: #f8f9fa;">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('messages.home') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('services') }}">{{ __('messages.services_title') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('messages.service_consulting_title') }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Service Hero -->
    <section class="service-hero py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">{{ __('messages.service_consulting_title') }}</h1>
                    <p class="lead">{{ __('messages.service_consulting_desc') }}</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="service-icon" style="font-size: 120px;">🔧</div>
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
                        Transformez votre infrastructure IT avec notre expertise stratégique. Nous aidons les entreprises à optimiser leurs systèmes, améliorer leur sécurité et maximiser leur ROI technologique.
                    </p>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.service_features') }}</h3>
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Audit Technologique</h5>
                                    <p class="text-muted mb-0">Analyse complète de votre infrastructure IT</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Stratégie Digitale</h5>
                                    <p class="text-muted mb-0">Roadmap technologique personnalisée</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Cybersécurité</h5>
                                    <p class="text-muted mb-0">Protection et conformité réglementaire</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Cloud & Infra</h5>
                                    <p class="text-muted mb-0">Migration et optimisation cloud</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Process Optimization</h5>
                                    <p class="text-muted mb-0">Amélioration des workflows IT</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Formation Équipes</h5>
                                    <p class="text-muted mb-0">Upskilling de vos collaborateurs</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.service_process') }}</h3>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">1</div>
                                <h5 class="fw-bold">Diagnostic</h5>
                                <p class="text-muted">Évaluation de votre organisation IT</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">2</div>
                                <h5 class="fw-bold">Recommandations</h5>
                                <p class="text-muted">Propositions d'amélioration stratégiques</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">3</div>
                                <h5 class="fw-bold">Implémentation</h5>
                                <p class="text-muted">Mise en œuvre des solutions recommandées</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">4</div>
                                <h5 class="fw-bold">Support Continu</h5>
                                <p class="text-muted">Suivi et optimisation permanente</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mt-5 mb-4">Domaines d'Expertise</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">Infrastructure</h6>
                                <p class="text-muted mb-0">Serveurs, réseaux, stockage</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">Cloud</h6>
                                <p class="text-muted mb-0">AWS, Azure, Google Cloud</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">Sécurité</h6>
                                <p class="text-muted mb-0">RGPD, ISO 27001, Compliance</p>
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
                                    <p class="card-text text-muted mb-0 small">Solutions web intégrées</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div style="font-size: 40px; margin-bottom: 10px;">🛠️</div>
                                    <h6 class="card-title fw-bold">{{ __('messages.service_support_title') }}</h6>
                                    <p class="card-text text-muted mb-0 small">Maintenance et support</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div style="font-size: 40px; margin-bottom: 10px;">📈</div>
                                    <h6 class="card-title fw-bold">{{ __('messages.service_marketing_title') }}</h6>
                                    <p class="card-text text-muted mb-0 small">Stratégie numérique</p>
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
                                <li class="mb-3"><strong>Durée:</strong><br><span class="text-muted">Flexible selon projet</span></li>
                                <li class="mb-3"><strong>Prix:</strong><br><span class="text-muted">À partir de 1,500€</span></li>
                                <li class="mb-3"><strong>Disponibilité:</strong><br><span class="badge bg-success">{{ __('messages.available') }}</span></li>
                                <li class="mb-3"><strong>Support:</strong><br><span class="text-muted">Variable selon contrat</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                        <div class="card-body text-center">
                            <h5 class="fw-bold mb-3">Prêt à Transformer?</h5>
                            <p class="mb-4">Optimisons votre IT ensemble</p>
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
                                        Combien coûte une consultation?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Premier audit: 1,500€. Tarifs horaires consultants: 150-250€/h selon expertise.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Avez-vous des références?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Oui! Portfolio de 50+ clients: PME, ETI, grandes entreprises dans divers secteurs.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        Confidentialité garantie?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Absolument. NDA systématique et respect strict des données confidentielles clients.
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
            <p class="lead mb-4">Optimisons ensemble votre stratégie informatique</p>
            <div>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg me-2">{{ __('messages.get_started') }}</a>
                <a href="{{ route('services') }}" class="btn btn-outline-light btn-lg">{{ __('messages.explore_services') }}</a>
            </div>
        </div>
    </section>
</main>
@endsection
