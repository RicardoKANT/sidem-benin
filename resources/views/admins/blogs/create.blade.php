@extends('admins.layouts.admin')

@section('title', 'Créer un article')

@section('content')
<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Créer un article</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Articles</a></li>
                <li class="breadcrumb-item active">Nouveau</li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="card stretch stretch-full">
                    <div class="card-header">
                        <h5 class="card-title">Informations de l'article</h5>
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

                        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row g-3">
                                <!-- Titre -->
                                <div class="col-12">
                                    <label class="form-label fw-semibold">Titre <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title') }}" placeholder="Titre de l'article" required>
                                    @error('title')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Extrait -->
                                <div class="col-12">
                                    <label class="form-label fw-semibold">Extrait <span class="text-muted text-opacity-75">(optionnel)</span></label>
                                    <textarea name="excerpt" class="form-control @error('excerpt') is-invalid @enderror"
                                        rows="3" placeholder="Résumé court de l'article..." maxlength="500">{{ old('excerpt') }}</textarea>
                                    <small class="text-muted d-block mt-1">Max 500 caractères</small>
                                    @error('excerpt')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Contenu -->
                                <div class="col-12">
                                    <label class="form-label fw-semibold">Contenu <span class="text-danger">*</span></label>
                                    <textarea name="content" class="form-control @error('content') is-invalid @enderror"
                                        id="content" rows="8" placeholder="Contenu complet de l'article...">{{ old('content') }}</textarea>
                                    @error('content')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Image -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Image <span class="text-muted text-opacity-75">(optionnel)</span></label>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                        accept="image/jpeg,image/jpg,image/png,image/gif,image/webp,image/bmp">
                                    <small class="text-muted d-block mt-1">JPG, PNG, GIF, WebP, BMP (max 2MB)</small>
                                    @error('image')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Auteur -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Auteur <span class="text-muted text-opacity-75">(optionnel)</span></label>
                                    <input type="text" name="author" class="form-control @error('author') is-invalid @enderror"
                                        value="{{ old('author', auth()->user()?->name ?? 'Admin') }}" placeholder="Nom de l'auteur">
                                    @error('author')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Statut -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Statut <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror" required>
                                        <option value="draft" {{ old('status') === 'draft' ? 'selected' : '' }}>Brouillon</option>
                                        <option value="published" {{ old('status') === 'published' ? 'selected' : '' }}>Publié</option>
                                        <option value="archived" {{ old('status') === 'archived' ? 'selected' : '' }}>Archivé</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Date de publication -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Date de publication <span class="text-muted text-opacity-75">(optionnel)</span></label>
                                    <input type="datetime-local" name="published_at" class="form-control @error('published_at') is-invalid @enderror"
                                        value="{{ old('published_at') }}">
                                    <small class="text-muted d-block mt-1">Si vide, utilisera la date actuelle</small>
                                    @error('published_at')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Boutons d'action -->
                            <div class="row g-2 mt-4">
                                <div class="col-6">
                                    <a href="{{ route('blogs.index') }}" class="btn btn-light w-100">
                                        <i class="feather-x me-1"></i> Annuler
                                    </a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="feather-save me-1"></i> Créer l'article
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: '#content',
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
    });
</script>
@endsection
