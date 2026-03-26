@extends('layouts.app')

@section('content')
    <div class="nxl-content">
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center gap-2">
                <div class="page-header-title">
                    <h4 class="m-0">Détails - {{ $holiday->name }}</h4>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <h6>Nom de la fête</h6>
                                    <p>{{ $holiday->name }}</p>
                                </div>
                                <div class="col-md-6">
                                    <h6>Date</h6>
                                    <p>{{ $holiday->day }} {{ \Carbon\Carbon::createFromDate(2024, $holiday->month, 1)->locale('fr')->monthName }}</p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <h6>Slider associé</h6>
                                    @if ($holiday->slider)
                                        <div class="card">
                                            <div class="card-body">
                                                <h5>{{ $holiday->slider->title }}</h5>
                                                <p class="text-muted">{{ $holiday->slider->description }}</p>
                                                @if ($holiday->slider->image)
                                                    <img src="{{ asset('storage/' . $holiday->slider->image) }}" alt="{{ $holiday->slider->title }}" class="img-fluid" style="max-width: 300px;">
                                                @endif
                                            </div>
                                        </div>
                                    @else
                                        <p class="text-danger">Aucun slider associé</p>
                                    @endif
                                </div>
                            </div>

                            <div class="mt-4">
                                <a href="{{ route('holidays.edit', $holiday->id) }}" class="btn btn-primary">Modifier</a>
                                <a href="{{ route('holidays.index') }}" class="btn btn-light">Retour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
