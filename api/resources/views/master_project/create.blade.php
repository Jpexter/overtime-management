@extends('layouts.main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Master Project</h1>
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
          <h3 class="card-title">Form Master Project</h3>
        </div>
        <!-- /.card-header -->
      <form action="{{ route('masterproject.store')}}" method="POST">
        @csrf
        <div class="card-body">
          <div class="row d-flex">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="project_name">Project Name</label>
                  <input type="text" name="project_name" class="form-control" id="project_name" placeholder="Project name" required>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" value="normal" checked>
                    <label class="form-check-label">Normal</label>
                  <input class="form-check-input ml-2" type="radio" name="status" value="holiday">
                    <label class="form-check-label ml-4">Holiday</label>
              </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="is_on_duty" value="N" {{ old('is_on_duty') == 'Y' ? 'checked' : '' }}>
                    <label class="form-check-label">Is On Duty</label>
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
                <a href="masterproject.php">
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
