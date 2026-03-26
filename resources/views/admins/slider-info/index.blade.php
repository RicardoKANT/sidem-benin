@extends('admins.layouts.admin')

@section('title', 'Gestion des Slides')

@section('content')
<div class="nxl-content">
    <!-- [ page-header ] start -->
    <div class="page-header">
        <div class="page-header-left d-flex align-items-center">
            <div class="page-header-title">
                <h5 class="m-b-10">Gestion des Slides</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Tableau de bord</a></li>
                <li class="breadcrumb-item">Slides</li>
            </ul>
        </div>
        <div class="page-header-right ms-auto">
            <div class="page-header-right-items">
                <a href="{{ route('slider-info.create') }}" class="btn btn-primary">
                    <i class="feather-plus me-2"></i>
                    <span>Ajouter un slide</span>
                </a>
            </div>
        </div>
    </div>
    <!-- [ page-header ] end -->

    <!-- [ Main Content ] start -->
    <div class="main-content">
        <!-- [ Success Alert ] start -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="feather-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        <!-- [ Success Alert ] end -->

        <!-- [ Empty State ] start -->
        @if ($sliders->count() == 0)
            <div class="row">
                <div class="col-12">
                    <div class="card stretch stretch-full">
                        <div class="card-body py-5">
                            <div class="text-center">
                                <i class="feather-image" style="font-size: 48px; color: #ccc; margin-bottom: 15px;"></i>
                                <p class="text-muted mb-3">Aucun slide trouvé</p>
                                <a href="{{ route('slider-info.create') }}" class="btn btn-primary btn-sm">
                                    <i class="feather-plus me-2"></i> Créer le premier slide
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <!-- [ Slides Grid ] start -->
            <div class="row g-4">
                @foreach ($sliders as $slider)
                    <div class="col-xxl-6 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">{{ Str::limit($slider->title, 40) }}</h5>
                                <div class="card-header-action">
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="{{ route('slider-info.edit', $slider->id) }}" class="dropdown-item">
                                                <i class="feather-edit-2 me-2"></i>Éditer
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <form action="{{ route('slider-info.destroy', $slider->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Êtes-vous sûr?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item text-danger">
                                                    <i class="feather-trash-2 me-2"></i>Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Slide Image -->
                                <div class="mb-3">
                                    @if ($slider->image)
                                        <img src="{{ asset('storage/' . $slider->image) }}" alt="Slide" class="img-fluid rounded" style="height: 150px; object-fit: cover; width: 100%;">
                                    @else
                                        <div class="bg-light rounded p-4 text-center" style="height: 150px; display: flex; align-items: center; justify-content: center;">
                                            <i class="feather-image" style="color: #ccc; font-size: 32px;"></i>
                                        </div>
                                    @endif
                                </div>

                                <!-- Slide Info -->
                                <div class="fs-12">
                                    <div class="mb-2">
                                        <span class="text-muted">Sous-titre:</span>
                                        <h6 class="fw-bold">{{ $slider->subtitle }}</h6>
                                    </div>
                                    <div class="mb-2">
                                        <span class="text-muted">Texte animé:</span>
                                        <h6 class="fw-bold">{{ $slider->animated_text }}</h6>
                                    </div>
                                    <div class="mb-3">
                                        <span class="text-muted d-block mb-1">Boutons:</span>
                                        <span class="badge bg-primary me-1">{{ Str::limit($slider->cta_button_text, 20) }}</span>
                                        <span class="badge bg-info">{{ Str::limit($slider->secondary_button_text, 20) }}</span>
                                    </div>
                                </div>

                                @if ($slider->description)
                                    <div class="border-top pt-3 mt-3">
                                        <span class="text-muted small d-block mb-1">Description:</span>
                                        <p class="text-muted fs-12 mb-0">{{ Str::limit($slider->description, 60) }}</p>
                                    </div>
                                @endif
                            </div>
                            <div class="card-footer">
                                <div class="d-flex gap-2">
                                    <a href="{{ route('slider-info.edit', $slider->id) }}" class="btn btn-primary btn-sm flex-grow-1">
                                        <i class="feather-edit-2 me-1"></i>Éditer
                                    </a>
                                    <form action="{{ route('slider-info.destroy', $slider->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Êtes-vous sûr?')" class="flex-grow-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm w-100">
                                            <i class="feather-trash-2 me-1"></i>Supprimer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- [ Slides Grid ] end -->
        @endif
    </div>
    <!-- [ Main Content ] end -->
</div>
@endsection
