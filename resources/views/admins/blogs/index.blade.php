@extends('admins.layouts.admin')

@section('title', 'Articles du Blog')

@section('content')
<div class="nxl-content">
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Articles du Blog</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                <li class="breadcrumb-item active">Articles</li>
            </ul>
        </div>
        <div class="page-header-right">
            <a href="{{ route('blogs.create') }}" class="btn btn-primary">
                <i class="feather-plus me-2"></i> Ajouter un article
            </a>
        </div>
    </div>

    <div class="main-content">
        <div class="row">
            <div class="col-12">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="feather-check-circle me-2"></i>{{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="card stretch stretch-full">
                    <div class="card-header">
                        <h5 class="card-title">Liste des articles</h5>
                    </div>
                    <div class="card-body">
                        @if ($blogs->count())
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Auteur</th>
                                            <th>Statut</th>
                                            <th>Vues</th>
                                            <th>Publié le</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <td>
                                                    <strong>{{ $blog->title }}</strong>
                                                    <br>
                                                    <small class="text-muted">{{ Str::limit($blog->excerpt, 50) }}</small>
                                                </td>
                                                <td>{{ $blog->author }}</td>
                                                <td>
                                                    @if ($blog->status === 'published')
                                                        <span class="badge bg-success">Publié</span>
                                                    @elseif ($blog->status === 'draft')
                                                        <span class="badge bg-warning">Brouillon</span>
                                                    @else
                                                        <span class="badge bg-secondary">Archivé</span>
                                                    @endif
                                                </td>
                                                <td>{{ $blog->views }}</td>
                                                <td>{{ $blog->published_at?->format('d/m/Y') ?? '-' }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                                                            <i class="feather-more-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a href="{{ route('blogs.show', $blog->id) }}" class="dropdown-item">
                                                                <i class="feather-eye me-2"></i> Voir
                                                            </a>
                                                            <a href="{{ route('blogs.edit', $blog->id) }}" class="dropdown-item">
                                                                <i class="feather-edit me-2"></i> Éditer
                                                            </a>
                                                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Êtes-vous sûr?')">
                                                                    <i class="feather-trash-2 me-2"></i> Supprimer
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <nav>
                                {{ $blogs->links() }}
                            </nav>
                        @else
                            <div class="text-center py-5">
                                <p class="text-muted mb-3">Aucun article trouvé</p>
                                <a href="{{ route('blogs.create') }}" class="btn btn-primary">
                                    <i class="feather-plus me-2"></i> Créer le premier article
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
