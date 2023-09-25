@extends('layouts.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Basic Salary</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li> --}}
              {{-- <li class="breadcrumb-item active">Edit Basic Salary</li> --}}
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Form Basic Salary</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row d-flex">
            <div class="col-md-6">
              <form action="{{ route('masterbasicsalary.update', $basicSalary->id_basic_salary) }}" method="POST">
                @csrf
                @method('PUT') <!-- Menggunakan metode PUT untuk mengirimkan permintaan update -->

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $basicSalary->tb_users->name }}" readonly>
                    </div>  
                    <div class="form-group">
                        <label for="basicsalary">Basic Salary</label>
                        <input type="text" class="form-control" id="basicsalary" name="basicsalary" value="{{ old('basicsalary', $basicSalary->total_basic_salary) }}">
                    </div>
                </div>

                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-end">
                <a href="{{ route('masterbasicsalary.index') }}">
                  <button type="button" class="btn btn-sm btn-danger mr-2">Cancel</button>
                </a>
                <button type="submit" class="btn btn-sm btn-success">Update</button>
              </div>
            </div>
          </div>
        </div>
      </form>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
