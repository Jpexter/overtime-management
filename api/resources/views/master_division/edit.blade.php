@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <!-- ... (Header) ... -->
    </div>

    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Form Edit Division</h3>
        </div>

        <form action="{{ route('masterdivision.update', $division->id_division) }}" method="POST">
            @method('PUT') <!-- Menggunakan metode PUT -->
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name_division">Name division</label>
                            <input type="text" name="name_division" class="form-control @error('name_division') is-invalid @enderror" id="name_division" placeholder="Name Division" required value="{{ old('name_division', $division->name_division) }}">
                            @error('name_division')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status_division">Status Division</label>
                            <select class="form-control select2bs4" name="status_division" id="status_division" style="width: 100%;">
                                <option value="Y" {{ $division->status_division == 'Y' ? 'selected' : '' }}>Y</option>
                                <option value="N" {{ $division->status_division == 'N' ? 'selected' : '' }}>N</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-success">Update</button>
                <a href="{{ route('masterdivision.index') }}" class="btn btn-sm btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
