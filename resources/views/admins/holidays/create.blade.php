@extends('layouts.app')

@section('content')
    <div class="nxl-content">
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center gap-2">
                <div class="page-header-title">
                    <h4 class="m-0">Assigner une fête</h4>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('holidays.store') }}" method="POST">
                                @csrf

                                <h5 class="mb-3">Sélectionner une fête prédéfinie</h5>

                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Fête</label>
                                            <select name="holiday_select" id="holiday_select" class="form-control">
                                                <option value="">-- Sélectionner une fête --</option>
                                                @foreach ($predefinedHolidays as $preset)
                                                    @if (!in_array($preset['name'], $assignedHolidays))
                                                        <option value="{{ json_encode($preset) }}">
                                                            {{ $preset['name'] }}
                                                            ({{ $preset['day'] }}/{{ str_pad($preset['month'], 2, '0', STR_PAD_LEFT) }})
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="name" id="name">
                                <input type="hidden" name="month" id="month">
                                <input type="hidden" name="day" id="day">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Sélectionner un slider</label>
                                            <select name="slider_id" class="form-control @error('slider_id') is-invalid @enderror" required>
                                                <option value="">-- Choisir un slider --</option>
                                                @foreach ($sliders as $slider)
                                                    <option value="{{ $slider->id }}" {{ old('slider_id') == $slider->id ? 'selected' : '' }}>
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
                                    <button type="submit" class="btn btn-primary">Assigner la fête</button>
                                    <a href="{{ route('holidays.index') }}" class="btn btn-light">Annuler</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('holiday_select').addEventListener('change', function() {
            if (this.value) {
                const holiday = JSON.parse(this.value);
                document.getElementById('name').value = holiday.name;
                document.getElementById('month').value = holiday.month;
                document.getElementById('day').value = holiday.day;
            }
        });
    </script>
@endsection
