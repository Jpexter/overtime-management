@extends('layouts.main');

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">User List</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="layouts.main">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <!-- /.row -->
  <div class="row  d-flex align-items-center justify-content-center">
      <div class="col-11">
          <div class="d-flex justify-content-end">
              <button class="btn btn-sm bg-success" style="width: 70px;">
                  <a href="adduserlist.html">+ Add</a>
              </button>
          </div>
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead class="bg-white">
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>John Doe</td>
                  <td>User</td>
                  <td>
                      <button class="btn">
                          <a href="edituser.html">
                              <i class="fas fa-edit text-warning"></i> <!-- Ikon Edit -->
                          </a>
                      </button>
                      <button class="btn"><i class="fas fa-trash text-danger"></i> <!-- Ikon Hapus --></button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Alexander Pierce</td>
                  <td>Leader</td>
                  <td>
                      <button class="btn">
                          <a href="edituser.html">
                              <i class="fas fa-edit text-warning"></i> <!-- Ikon Edit -->
                          </a>
                      </button>
                      <button class="btn"><i class="fas fa-trash text-danger"></i> <!-- Ikon Hapus --></button>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Bob Doe</td>
                  <td>Admin</td>
                  <td>
                      <button class="btn">
                          <a href="edituser.html">
                              <i class="fas fa-edit text-warning"></i> <!-- Ikon Edit -->
                          </a>
                      </button>
                      <button class="btn"><i class="fas fa-trash text-danger"></i> <!-- Ikon Hapus --></button>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Mike Doe</td>
                  <td>Supervisor</td>
                  <td>
                      <button class="btn">
                          <a href="edituser.html">
                              <i class="fas fa-edit text-warning"></i> <!-- Ikon Edit -->
                          </a>
                      </button>
                      <button class="btn"><i class="fas fa-trash text-danger"></i> <!-- Ikon Hapus --></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  <!-- /.content -->
</div>

@endsection