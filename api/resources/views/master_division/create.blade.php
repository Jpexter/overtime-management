<!-- resources/views/masterdivision/create.blade.php -->

@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <!-- ... (Header) ... -->
    </div>

    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Form Add Division</h3>
        </div>

        <form action="{{ route('masterdivision.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name_division">Name division</label>
                            <input type="text" name="name_division" class="form-control @error('name_division') is-invalid @enderror" id="name_division" placeholder="Name Division" required>
                            @error('name_division')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status_division">Status Division</label>
                            <select class="form-control select2bs4" name="status_division" id="status_division" style="width: 100%;">
                                <option value="Y">Y</option>
                                <option value="N">N</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-success">Submit</button>
                <a href="{{ route('masterdivision.index') }}" class="btn btn-sm btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
