@extends('layouts.main')

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
                  <a href="/userlist/create">+ Add</a>
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
                @foreach ($data as $row)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->id_role}}</td>
                  <td>
                      <button class="btn">
                          <a href="/userlist/{{$row->id_users}}/edit">
                              <i class="fas fa-edit text-warning"></i> <!-- Ikon Edit -->
                          </a>
                      </button>
                      <form action="{{ route('userlist.destroy', $row->id_users) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link">
                            <i class="fas fa-trash text-danger"></i>
                        </button>
                    </form>
                  </td>
                </tr>
                @endforeach
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