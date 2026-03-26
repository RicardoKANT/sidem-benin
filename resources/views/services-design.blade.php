@extends('layouts.app')
@section('title', __('messages.service_design_title'))
@section('content')
<main>
    <!-- Breadcrumb -->
    <section class="breadcrumb-section py-3" style="background-color: #f8f9fa;">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('welcome') }}">{{ __('messages.home') }}</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('services') }}">{{ __('messages.services_title') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('messages.service_design_title') }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Service Hero -->
    <section class="service-hero py-5" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">{{ __('messages.service_design_title') }}</h1>
                    <p class="lead">{{ __('messages.service_design_desc') }}</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="service-icon" style="font-size: 120px;">🎨</div>
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
                        Créez une identité visuelle remarquable qui distingue votre marque. Du logo au design complet, nous transformons vos idées en visuels captivants qui engagent vos clients.
                    </p>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.service_features') }}</h3>
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Branding Complet</h5>
                                    <p class="text-muted mb-0">Logo, palette couleur, typographie, guidelines</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Design Web & Mobile</h5>
                                    <p class="text-muted mb-0">Mock-ups et designs pour tous les appareils</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Matériel Marketing</h5>
                                    <p class="text-muted mb-0">Flyers, cartes de visite, brochures, affiches</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Illustrations Personnalisées</h5>
                                    <p class="text-muted mb-0">Créations uniques adaptées à votre message</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Animations & Vidéos</h5>
                                    <p class="text-muted mb-0">Motion design et vidéos promotionnelles</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3"><span style="font-size: 24px;">✓</span></div>
                                <div>
                                    <h5 class="fw-bold">Design Thinking</h5>
                                    <p class="text-muted mb-0">Solutions créatives centrées sur l'utilisateur</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mt-5 mb-4">{{ __('messages.service_process') }}</h3>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">1</div>
                                <h5 class="fw-bold">Découverte & Recherche</h5>
                                <p class="text-muted">Comprendre votre marque et cible</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">2</div>
                                <h5 class="fw-bold">Concepts & Esquisses</h5>
                                <p class="text-muted">Exploration créative de plusieurs directions</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">3</div>
                                <h5 class="fw-bold">Conception Détaillée</h5>
                                <p class="text-muted">Raffinement et perfection du design retenu</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="process-step">
                                <div class="step-number" style="background: #667eea; color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 24px; margin-bottom: 10px;">4</div>
                                <h5 class="fw-bold">Livraison & Formation</h5>
                                <p class="text-muted">Fichiers à utiliser et guide d'utilisation</p>
                            </div>
                        </div>
                    </div>

                    <h3 class="fw-bold mt-5 mb-4">Outils & Logiciels</h3>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">Design</h6>
                                <p class="text-muted mb-0">Figma, Adobe XD, Sketch</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">Édition Image</h6>
                                <p class="text-muted mb-0">Photoshop, Illustrator, GIMP</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="tech-card p-3 border rounded">
                                <h6 class="fw-bold">Animation</h6>
                                <p class="text-muted mb-0">After Effects, Lottie</p>
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
                                    <p class="card-text text-muted mb-0 small">Convertir le design en site web</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div style="font-size: 40px; margin-bottom: 10px;">📱</div>
                                    <h6 class="card-title fw-bold">{{ __('messages.service_mobile_title') }}</h6>
                                    <p class="card-text text-muted mb-0 small">Design d'interfaces d'app</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body text-center">
                                    <div style="font-size: 40px; margin-bottom: 10px;">📈</div>
                                    <h6 class="card-title fw-bold">{{ __('messages.service_marketing_title') }}</h6>
                                    <p class="card-text text-muted mb-0 small">Design marketing & print</p>
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
                                <li class="mb-3"><strong>Durée:</strong><br><span class="text-muted">1-4 semaines</span></li>
                                <li class="mb-3"><strong>Prix:</strong><br><span class="text-muted">À partir de 1,000€</span></li>
                                <li class="mb-3"><strong>Disponibilité:</strong><br><span class="badge bg-success">{{ __('messages.available') }}</span></li>
                                <li class="mb-3"><strong>Support:</strong><br><span class="text-muted">Révisions illimitées</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                        <div class="card-body text-center">
                            <h5 class="fw-bold mb-3">Prêt à créer?</h5>
                            <p class="mb-4">Donnez vie à votre vision créative</p>
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
                                        Combien de révisions?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Illimitées! Nous travaillons jusqu'à votre satisfaction complète.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-2">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        Quels formats de fichiers?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        PNG, JPEG, PDF, SVG, PSD, AI, EPS - tous les formats dont vous avez besoin.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        Droits d'auteur?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Tous les droits vous appartiennent. Usage commercial illimité.
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
            <p class="lead mb-4">Créons ensemble votre identité visuelle parfaite</p>
            <div>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg me-2">{{ __('messages.get_started') }}</a>
                <a href="{{ route('services') }}" class="btn btn-outline-light btn-lg">{{ __('messages.explore_services') }}</a>
            </div>
        </div>
    </section>
</main>
@endsection
