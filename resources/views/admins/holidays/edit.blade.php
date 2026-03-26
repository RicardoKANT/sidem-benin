@extends('layouts.app')

@section('content')
    <div class="nxl-content">
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center gap-2">
                <div class="page-header-title">
                    <h4 class="m-0">Modifier la fête</h4>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('holidays.update', $holiday->id) }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Fête</label>
                                            <input type="text" class="form-control" value="{{ $holiday->name }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Date</label>
                                            <input type="text" class="form-control"
                                                value="{{ $holiday->day }}/{{ str_pad($holiday->month, 2, '0', STR_PAD_LEFT) }}"
                                                disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Slider associé</label>
                                            <select name="slider_id" class="form-control @error('slider_id') is-invalid @enderror" required>
                                                @foreach ($sliders as $slider)
                                                    <option value="{{ $slider->id }}"
                                                        {{ $holiday->slider_id == $slider->id ? 'selected' : '' }}>
                                                        {{ $slider->title ?? 'Slide ' . $slider->id }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('slider_id')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                    <a href="{{ route('holidays.index') }}" class="btn btn-light">Annuler</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
