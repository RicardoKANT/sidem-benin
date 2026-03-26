@extends('admins.layouts.admin')

@section('title', 'Éditer le slide')

@section('content')
<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Éditer le slide</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                <li class="breadcrumb-item"><a href="{{ route('slider-info.index') }}">Slides</a></li>
                <li class="breadcrumb-item active">Édition</li>
            </ul>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ Main Content ] start -->
    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="card stretch stretch-full">
                    <div class="card-header">
                        <h5 class="card-title">{{ Str::limit($sliderInfo->title, 50) }}</h5>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><i class="feather-alert-circle me-2"></i>Erreurs de validation:</strong>
                                <ul class="mb-0 mt-2 ps-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <form action="{{ route('slider-info.update', $sliderInfo->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="row g-3">
                                <!-- Sous-titre -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Sous-titre <span class="text-danger">*</span></label>
                                    <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror"
                                        value="{{ old('subtitle', $sliderInfo->subtitle) }}" placeholder="Ex: Nos Services" required>
                                    @error('subtitle')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Titre principal -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Titre principal <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title', $sliderInfo->title) }}" placeholder="Ex: Transformez votre entreprise" required>
                                    @error('title')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Texte animé -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Texte animé <span class="text-danger">*</span></label>
                                    <input type="text" name="animated_text" class="form-control @error('animated_text') is-invalid @enderror"
                                        value="{{ old('animated_text', $sliderInfo->animated_text) }}" placeholder="Ex: Camping" required>
                                    @error('animated_text')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Position/Ordre -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Position <span class="text-muted text-opacity-75">(optionnel)</span></label>
                                    <input type="number" name="order" class="form-control @error('order') is-invalid @enderror"
                                        value="{{ old('order', $sliderInfo->order) }}" min="0" placeholder="0">
                                    <small class="text-muted d-block mt-1">Position du slide</small>
                                    @error('order')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Image actuelle -->
                                @if ($sliderInfo->image)
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Image actuelle</label>
                                        <div class="bg-light rounded p-2 text-center" style="height: 100px;">
                                            <img src="{{ asset('storage/' . $sliderInfo->image) }}" alt="Slide" class="img-fluid h-100" style="object-fit: cover;">
                                        </div>
                                    </div>
                                @endif

                                <!-- Nouvelle image -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Changer l'image <span class="text-muted text-opacity-75">(optionnel)</span></label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                        accept="image/jpeg,image/jpg,image/png,image/gif,image/webp,image/bmp">
                                    <small class="text-muted d-block mt-1">JPG, PNG, GIF, WebP, BMP (max 2MB)</small>
                                    @error('image')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Bouton CTA -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Texte Bouton 1 <span class="text-danger">*</span></label>
                                    <input type="text" name="cta_button_text" class="form-control @error('cta_button_text') is-invalid @enderror"
                                        value="{{ old('cta_button_text', $sliderInfo->cta_button_text) }}" placeholder="Ex: En savoir plus" required>
                                    @error('cta_button_text')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Bouton secondaire -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Texte Bouton 2 <span class="text-danger">*</span></label>
                                    <input type="text" name="secondary_button_text" class="form-control @error('secondary_button_text') is-invalid @enderror"
                                        value="{{ old('secondary_button_text', $sliderInfo->secondary_button_text) }}" placeholder="Ex: Voir la démo" required>
                                    @error('secondary_button_text')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Description -->
                                <div class="col-12">
                                    <label class="form-label fw-semibold">Description <span class="text-muted text-opacity-75">(optionnel)</span></label>
                                    <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                        rows="4" placeholder="Description détaillée du slide...">{{ old('description', $sliderInfo->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Boutons d'action -->
                            <div class="row g-2 mt-4">
                                <div class="col-6">
                                    <a href="{{ route('slider-info.index') }}" class="btn btn-light w-100">
                                        <i class="feather-x me-1"></i> Annuler
                                    </a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="feather-save me-1"></i> Mettre à jour
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection
