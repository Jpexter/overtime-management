@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add User List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
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
          <h3 class="card-title">Form Add User</h3>
        </div>
        <!-- /.card-header -->

    
    <form action="{{ route('userlist.store') }}" method="post">
        @csrf
        <div class="card-body">
          <div class="row d-flex">
            <div class="col-md-6">
                @csrf
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control @error('username') is-invalid @enderror" id="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required>
                  </div>
                <!-- /.form-group -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('username') is-invalid @enderror" id="email" placeholder="Email" required>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control @error('username') is-invalid @enderror" id="password" placeholder="Password" required>
                  </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="phone">Number Phone</label>
                  <input type="text" name="phone_number" class="form-control @error('username') is-invalid @enderror" id="numberphone" placeholder="+62" required>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="role">Role</label>
                  <select class="form-control select2bs4" name="id_role" id="role" style="width: 100%;">
                    <option selected="selected">1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                <!-- /.form-group -->
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-end">
                <a href="{{ route('userlist.index') }}" class="btn btn-sm btn-danger">Cancel</a>
                    <button type="submit" class="btn  btn-sm btn-success">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
    </form>
      
      
      <!-- /.card -->
    <!-- /.content -->
  </div>
@endsection