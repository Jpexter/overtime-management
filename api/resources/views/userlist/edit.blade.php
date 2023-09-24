@extends('layouts.main')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit User List</h1>
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
  <form action="{{ route('userlist.update', $data->id_users) }}" method="post">
    @method('put')
    @csrf
    <div class="card-body">
      <div class="row d-flex">
        <div class="col-md-6">
            @csrf
            <!-- /.form-group -->
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control @error('username') is-invalid @enderror" id="name" placeholder="Name" required value="{{$data->name}}">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{$data->username}}">
              </div>
            <!-- /.form-group -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control @error('username') is-invalid @enderror" id="email" placeholder="Email" required value="{{$data->email}}">
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
              <input type="text" name="phone_number" class="form-control @error('username') is-invalid @enderror" id="numberphone" placeholder="+62" required value="{{$data->phone_number}}">
            </div>
            <!-- /.form-group -->
            <div class="form-group">
              <label for="role">Role</label>
              <select class="form-control select2bs4" name="id_role" id="role" style="width: 100%;" value="{{$data->id_role}}">
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
                <button type="submit" class="btn btn-sm btn-danger mr-2">Cancel</button>
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