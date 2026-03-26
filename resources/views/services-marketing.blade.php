@extends('layouts.app')
@section('title', __('messages.service_marketing_title'))
@section('content')
<main>
    <!-- Breadcrumb -->
    <section class="breadcrumb-section py-3" style="background-color: #f8f9fa;">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('messages.home') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('services') }}">{{ __('messages.services_title') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('messages.service_marketing_title') }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Service Hero -->
    <section class="service-hero py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">{{ __('messages.service_marketing_title') }}</h1>
                    <p class="lead">{{ __('messages.service_marketing_desc') }}</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="service-icon" style="font-size: 120px;">📈</div>
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
                        Amplifiez votre présence en ligne et atteignez vos clients IdéAux. De la stratégie SEO aux campagnes publicitaires ciblées, nous vous aider à générer plus de trafic, de leads et de ventes.
                    </p>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.service_features') }}</h3>
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">SEO Organique</h5>
                                    <p class="text-muted mb-0">Optimisation pour Google & moteurs recherche</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Réseaux Sociaux</h5>
                                    <p class="text-muted mb-0">Facebook, Instagram, LinkedIn, TikTok</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">PPC Publicité</h5>
                                    <p class="text-muted mb-0">Google Ads, Facebook Ads, Display</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Content Marketing</h5>
                                    <p class="text-muted mb-0">Blog, articles, infographies, vidéos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Email Marketing</h5>
                                    <p class="text-muted mb-0">Newsletters & campagnes automatisées</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Analytics & Reporting</h5>
                                    <p class="text-muted mb-0">Suivi ROI et métriques de performance</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.service_process') }}</h3>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">1</div>
                                <h5 class="fw-bold">Audit & Analyse</h5>
                                <p class="text-muted">Evaluations de vos présences actuelles</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">2</div>
                                <h5 class="fw-bold">Stratégie</h5>
                                <p class="text-muted">Plan marketing personnalisé & objectifs</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">3</div>
                                <h5 class="fw-bold">Exécution</h5>
                                <p class="text-muted">Mise en place des campagnes & contenu</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">4</div>
                                <h5 class="fw-bold">Optimisation</h5>
                                <p class="text-muted">Ajustements basés sur données & résultats</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mt-5 mb-4">Spécialités & Secteurs</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">E-Commerce</h6>
                                <p class="text-muted mb-0">Stratégies ventes en ligne</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">B2B</h6>
                                <p class="text-muted mb-0">Lead generation et nurturing</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">Startup</h6>
                                <p class="text-muted mb-0">Growth hacking et scaling</p>
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
                                    <p class="card-text text-muted mb-0 small">Sites optimisés pour conversion</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div style="font-size: 40px; margin-bottom: 10px;">🎨</div>
                                    <h6 class="card-title fw-bold">{{ __('messages.service_design_title') }}</h6>
                                    <p class="card-text text-muted mb-0 small">Créations marketing impactantes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div style="font-size: 40px; margin-bottom: 10px;">📱</div>
                                    <h6 class="card-title fw-bold">{{ __('messages.service_mobile_title') }}</h6>
                                    <p class="card-text text-muted mb-0 small">Apps pour engagement client</p>
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
                                <li class="mb-3"><strong>Durée:</strong><br><span class="text-muted">Contrats 3-12 mois</span></li>
                                <li class="mb-3"><strong>Prix:</strong><br><span class="text-muted">À partir de 1,000€/mois</span></li>
                                <li class="mb-3"><strong>Disponibilité:</strong><br><span class="badge bg-success">{{ __('messages.available') }}</span></li>
                                <li class="mb-3"><strong>Résultats:</strong><br><span class="text-muted">ROI garanti après 3 mois</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                        <div class="card-body text-center">
                            <h5 class="fw-bold mb-3">Prêt à Croître?</h5>
                            <p class="mb-4">Accéléronsvotre croissance ensemble</p>
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
                                        Quand voit-on les résultats?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        PPC: immédiat. SEO: 2-3 mois. Réseaux: 1-2 mois. Dépend aussi votre budget & compétition.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Quels budgets minimum?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        À partir de 1,000€/mois pour une stratégie complète. Flexible selon vos priorités.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        À quel point détaillé le reporting?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Rapports mensuels détaillés: trafic, conversions, ROI, recommandations d'optimisation.
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
            <p class="lead mb-4">Boostez votre visibilité en ligne avec SIDEM-BENIN</p>
            <div>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg me-2">{{ __('messages.get_started') }}</a>
                <a href="{{ route('services') }}" class="btn btn-outline-light btn-lg">{{ __('messages.explore_services') }}</a>
            </div>
        </div>
    </section>
</main>
@endsection
