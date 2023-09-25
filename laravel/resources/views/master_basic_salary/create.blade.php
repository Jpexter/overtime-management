@extends('layouts.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Basic Salary</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Form Basic Salary</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row d-flex">
            <div class="col-md-6">
              <form action="{{ route('masterbasicsalary.store') }}" method="POST">
                @csrf
                 <div class="form-group">
                    <label for="id_users">User</label>
                    <select class="form-control select2bs4" name="id_users" id="id_users" style="width: 100%;">
                        @foreach ($users as $user)
                            <option value="{{ $user->id_users }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="basicsalary">Basic Salary</label>
                    <input type="text" name="basicsalary" class="form-control" id="basicsalary" placeholder="Rp." value="{{ number_format(old('basicsalary'), 0, '.', '.') }}">
                </div>
    
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-end">
                <a href="{{ route('masterbasicsalary.index') }}">
                    <button type="button" class="btn btn-sm btn-danger mr-2">Cancel</button>
                </a>
                <button type="submit" class="btn btn-sm btn-success">Submit</button>
              </div>
            </div>
          </div>
        </div>
    </form>
        <!-- /.card-body -->
      </div>
      
      
      <!-- /.card -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
