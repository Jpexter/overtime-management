@extends('layouts.main')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Master Basic Salary</h1>
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
    <!-- /.row -->
<div class="container" style="width: 1100px;">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-11">
            <div class="d-flex justify-content-end">
                <button class="btn btn-sm bg-success" style="width: 70px;">
                    <a href="/masterbasicsalary/create">+ Add</a>
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
                    <th>Gaji Pokok</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($basicSalaries as $basicSalary)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $basicSalary->tb_users->name }}</td>
                            <td>Rp. {{ number_format((float) $basicSalary->total_basic_salary, 0, '.', '.') }}</td>
                            <td>
                                <button class="btn">
                                    <a href="/masterbasicsalary/{{$basicSalary->id_basic_salary}}/edit">
                                        <i class="fas fa-edit text-warning"></i>
                                    </a>
                                </button>
                                <form action="/masterbasicsalary/{{$basicSalary->id_basic_salary}}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn"><i class="fas fa-trash text-danger"></i></button>
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
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection