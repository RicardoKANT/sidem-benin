@extends('layouts.app')

@section('content')
    <div class="nxl-content">
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center gap-2">
                <div class="page-header-title">
                    <h4 class="m-0">Fêtes Internationales</h4>
                </div>
            </div>
            <div class="page-header-right">
                <a href="{{ route('holidays.create') }}" class="btn btn-primary">
                    <i class="feather-plus mr-2"></i> Ajouter une fête
                </a>
            </div>
        </div>

        <div class="main-content">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ $message }}
                </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title m-0">Liste des fêtes internationales</h5>
                            <span class="badge bg-primary">{{ $holidays->total() }} fête(s)</span>
                        </div>
                        <div class="card-body">
                            @forelse ($holidays as $holiday)
                                <div class="row mb-3 p-3 border rounded">
                                    <div class="col-md-3">
                                        <h6 class="mb-1">{{ $holiday->name }}</h6>
                                        <p class="text-muted mb-0">
                                            <i class="feather-calendar"></i>
                                            {{ $holiday->day }} {{ \Carbon\Carbon::createFromDate(2024, $holiday->month, 1)->locale('fr')->monthName }}
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2">
                                            <strong>Slider associé:</strong>
                                            @if ($holiday->slider)
                                                <span class="badge bg-info">{{ $holiday->slider->title }}</span>
                                            @else
                                                <span class="badge bg-danger">Aucun slider</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="col-md-3 text-end">
                                        <a href="{{ route('holidays.edit', $holiday->id) }}"
                                            class="btn btn-sm btn-primary me-2">
                                            <i class="feather-edit"></i> Éditer
                                        </a>
                                        <form action="{{ route('holidays.destroy', $holiday->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Êtes-vous sûr?')">
                                                <i class="feather-trash-2"></i> Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center py-5">
                                    <i class="feather-inbox" style="font-size: 48px; color: #ccc;"></i>
                                    <p class="text-muted mt-3">Aucune fête configurée</p>
                                    <a href="{{ route('holidays.create') }}" class="btn btn-primary mt-3">
                                        Créer la première fête
                                    </a>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            @if ($holidays->hasPages())
                <div class="row">
                    <div class="col-12">
                        {{ $holidays->links() }}
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
