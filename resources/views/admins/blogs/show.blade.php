@extends('admins.layouts.admin')

@section('title', $blog->title)

@section('content')
<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">{{ Str::limit($blog->title, 50) }}</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blogs.index') }}">Articles</a></li>
                <li class="breadcrumb-item active">Détails</li>
            </ul>
        </div>
        <div class="page-header-right">
            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">
                <i class="feather-edit me-2"></i> Éditer
            </a>
        </div>
    </div>

    <div class="main-content">
        <div class="row">
            <div class="col-12">
                <div class="card stretch stretch-full">
                    <div class="card-body">
                        <!-- En-tête article -->
                        <div class="mb-4 pb-4 border-bottom">
                            <h3 class="mb-3">{{ $blog->title }}</h3>
                            <div class="row text-muted small">
                                <div class="col-auto">
                                    <i class="feather-user me-1"></i> {{ $blog->author }}
                                </div>
                                <div class="col-auto">
                                    <i class="feather-calendar me-1"></i> {{ $blog->published_at?->format('d/m/Y H:i') ?? 'Non publié' }}
                                </div>
                                <div class="col-auto">
                                    <i class="feather-eye me-1"></i> {{ $blog->views }} vues
                                </div>
                                <div class="col-auto">
                                    @if ($blog->status === 'published')
                                        <span class="badge bg-success">Publié</span>
                                    @elseif ($blog->status === 'draft')
                                        <span class="badge bg-warning">Brouillon</span>
                                    @else
                                        <span class="badge bg-secondary">Archivé</span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Image -->
                        @if ($blog->image)
                            <div class="mb-4">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid rounded" style="max-height: 400px; object-fit: cover; width: 100%;">
                            </div>
                        @endif

                        <!-- Extrait -->
                        @if ($blog->excerpt)
                            <div class="alert alert-info mb-4">
                                <strong>Extrait :</strong>
                                <p class="mb-0 mt-2">{{ $blog->excerpt }}</p>
                            </div>
                        @endif

                        <!-- Contenu -->
                        <div class="article-content mb-4">
                            {!! nl2br(e($blog->content)) !!}
                        </div>

                        <!-- Métadonnées -->
                        <div class="row g-3 pt-4 border-top">
                            <div class="col-md-6">
                                <h6>Informations</h6>
                                <ul class="list-unstyled small">
                                    <li><strong>Slug :</strong> {{ $blog->slug }}</li>
                                    <li><strong>Statut :</strong> {{ ucfirst($blog->status) }}</li>
                                    <li><strong>Vues :</strong> {{ $blog->views }}</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6>Dates</h6>
                                <ul class="list-unstyled small">
                                    <li><strong>Créé :</strong> {{ $blog->created_at->format('d/m/Y H:i') }}</li>
                                    <li><strong>Modifié :</strong> {{ $blog->updated_at->format('d/m/Y H:i') }}</li>
                                    <li><strong>Publié :</strong> {{ $blog->published_at?->format('d/m/Y H:i') ?? 'Non publié' }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions -->
        <div class="row mt-3">
            <div class="col-12">
                <div class="d-flex gap-2">
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">
                        <i class="feather-edit me-2"></i> Éditer
                    </a>
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr?')">
                            <i class="feather-trash-2 me-2"></i> Supprimer
                        </button>
                    </form>
                    <a href="{{ route('blogs.index') }}" class="btn btn-light">
                        <i class="feather-arrow-left me-2"></i> Retour
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
