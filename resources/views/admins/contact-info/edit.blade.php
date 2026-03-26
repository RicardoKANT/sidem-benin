@extends('admins.layouts.admin')

@section('title', 'Gestion des Infos de Contact')

@section('content')

<!-- Toasts Container -->
<div aria-live="polite" aria-atomic="true" class="position-fixed p-3" style="z-index: 9999; top: 25px; right: 25px; width: 350px;">
    @if(session('success'))
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-success text-white">
                <i class="feather-check-circle me-2"></i>
                <strong class="me-auto">Succès</strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if($errors->any())
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-danger text-white">
                <i class="feather-alert-circle me-2"></i>
                <strong class="me-auto">Erreur</strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <div class="text-danger">
                    @foreach($errors->all() as $error)
                        <div>• {{ $error }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>

@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toast = document.querySelector('.toast');
            if (toast) {
                setTimeout(() => {
                    toast.classList.remove('show');
                    toast.style.opacity = '0';
                    toast.style.transition = 'opacity 0.5s ease-out';
                }, 5000);
            }
        });
    </script>
@endif
<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Informations de Contact</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">dashboard</a></li>
                <li class="breadcrumb-item">Contact</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <div class="d-flex d-md-none">
                    <a href="{{ route('dashboard') }}" class="page-header-right-close-toggle">
                        <i class="feather-arrow-left me-2"></i>
                        <span>Back</span>
                    </a>
                </div>
            </div>
            <div class="d-md-none d-flex align-items-center">
                <a href="javascript:void(0)" class="page-header-right-open-toggle">
                    <i class="feather-align-right fs-20"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-top-0">
                    <div class="card-header p-0">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs flex-wrap w-100 text-center" id="contactTabs" role="tablist">
                            <li class="nav-item flex-fill border-top" role="presentation">
                                <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#informationsTab" role="tab">Informations Générales</a>
                            </li>
                            <li class="nav-item flex-fill border-top" role="presentation">
                                <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#reseauxTab" role="tab">Réseaux Sociaux</a>
                            </li>
                        </ul>
                    </div>

                    <form id="contactForm" action="{{ route('contact-info.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="tab-content">
                            <!-- Informations Générales Tab -->
                            <div class="tab-pane fade show active" id="informationsTab" role="tabpanel">
                                <div class="card-body personal-info">
                                    <!-- Logo Section -->
                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <h5 class="fw-bold mb-0">
                                            <span class="d-block mb-2">Logo de l'Organisation</span>
                                        </h5>
                                    </div>
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="logoInput" class="fw-semibold">Logo:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="mb-3">
                                                @if($contact && $contact->logo)
                                                    <div class="mb-3">
                                                        <img src="{{ asset('storage/' . $contact->logo) }}" alt="Logo" class="img-fluid rounded" style="max-width: 200px;">
                                                    </div>
                                                @endif
                                                <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logoInput" name="logo" accept="image/*">
                                                @error('logo')
                                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                                @enderror
                                                <small class="text-muted d-block mt-2">Formats: PNG, JPG, JPEG | Taille max: 2MB</small>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-4">

                                    <!-- Contact Information Section -->
                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <h5 class="fw-bold mb-0">
                                            <span class="d-block mb-2">Informations de Contact</span>
                                            <span class="fs-12 fw-normal text-muted">Les champs marqués d'un * sont obligatoires</span>
                                        </h5>
                                    </div>

                                    <!-- Email -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="mailInput" class="fw-semibold">Email: <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="feather-mail"></i></div>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                       id="mailInput" name="email"
                                                       placeholder="exemple@email.com"
                                                       value="{{ old('email', $contact->email ?? '') }}" required>
                                            </div>
                                            @error('email')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="phoneInput" class="fw-semibold">Téléphone: <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="feather-phone"></i></div>
                                                <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                                       id="phoneInput" name="phone"
                                                       placeholder="+229 XX XX XX XX"
                                                       value="{{ old('phone', $contact->phone ?? '') }}" required>
                                            </div>
                                            @error('phone')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Address -->
                                    <div class="row mb-4 align-items-start">
                                        <div class="col-lg-4">
                                            <label for="addressInput" class="fw-semibold">Adresse: <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-lg-8">
                                            <textarea class="form-control @error('address') is-invalid @enderror"
                                                      id="addressInput" name="address"
                                                      placeholder="Entrez l'adresse complète"
                                                      rows="4" required>{{ old('address', $contact->address ?? '') }}</textarea>
                                            @error('address')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Réseaux Sociaux Tab -->
                            <div class="tab-pane fade" id="reseauxTab" role="tabpanel">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <h5 class="fw-bold mb-2">Réseaux Sociaux</h5>
                                        <span class="fs-12 fw-normal text-muted">Laisser vide pour ne pas afficher</span>
                                    </div>

                                    <!-- Facebook -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="facebookInput" class="fw-semibold">
                                                <i class="feather-facebook me-2"></i>Facebook:
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <div class="input-group-text">facebook.com/</div>
                                                <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                                                       id="facebookInput" name="facebook"
                                                       placeholder="votre-page"
                                                       value="{{ old('facebook', $contact->facebook ?? '') }}">
                                            </div>
                                            @error('facebook')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Twitter -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="twitterInput" class="fw-semibold">
                                                <i class="feather-twitter me-2"></i>Twitter:
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control @error('twitter') is-invalid @enderror"
                                                       id="twitterInput" name="twitter"
                                                       placeholder="votre-compte"
                                                       value="{{ old('twitter', $contact->twitter ?? '') }}">
                                            </div>
                                            @error('twitter')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Instagram -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="instagramInput" class="fw-semibold">
                                                <i class="feather-instagram me-2"></i>Instagram:
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control @error('instagram') is-invalid @enderror"
                                                       id="instagramInput" name="instagram"
                                                       placeholder="votre-compte"
                                                       value="{{ old('instagram', $contact->instagram ?? '') }}">
                                            </div>
                                            @error('instagram')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- LinkedIn -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="linkedinInput" class="fw-semibold">
                                                <i class="feather-linkedin me-2"></i>LinkedIn:
                                            </label>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <div class="input-group-text">linkedin.com/in/</div>
                                                <input type="text" class="form-control @error('linkedin') is-invalid @enderror"
                                                       id="linkedinInput" name="linkedin"
                                                       placeholder="votre-profil"
                                                       value="{{ old('linkedin', $contact->linkedin ?? '') }}">
                                            </div>
                                            @error('linkedin')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Form Footer -->
                        <div class="card-footer bg-light">
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="feather-save me-2"></i>Enregistrer les modifications
                                </button>
                                <a href="{{ route('dashboard') }}" class="btn btn-light">
                                    <i class="feather-x me-2"></i>Annuler
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>

<style>
    .toast {
        border: none;
        border-radius: 0.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        animation: slideIn 0.3s ease-out;
    }

    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .toast-header {
        border-bottom: none;
        font-weight: 600;
        padding: 1rem;
    }

    .toast-body {
        padding: 1rem;
        font-size: 0.95rem;
    }

    .toast.bg-success {
        border-left: 4px solid #22c55e;
    }

    .toast.bg-danger {
        border-left: 4px solid #ef4444;
    }
</style>
@endsection
