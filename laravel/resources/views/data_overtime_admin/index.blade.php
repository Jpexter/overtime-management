@extends('layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Overtime</h1>
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
          <div class="card mt-3">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead class="bg-white">
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Divisi</th>
                    <th>Date</th>
                    <th>Name Project</th>
                    <th>Reason</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($overtimeRecords as $record)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ optional($record->tb_users)->name }}</td>
                        <td>{{ optional($record->tb_master_division)->name_division }}</td>
                        <td>{{ $record->overtime_date_start }}</td>
                        <td>{{ optional($record->tb_master_project)->project_name }}</td>
                        <td>{{ $record->overtime_reason }}</td>
                        <td>
                            <a href="{{ route('data_overtime_admin.show', ['id_record' => $record->id_record]) }}" class="btn btn-xs btn-primary">Detail</a>
                            <form action="{{ route('data_overtime_admin.update', ['id_record' => $record->id_record]) }}" method="POST" class="d-inline">
                              @csrf
                              @method('PUT') <!-- Gunakan metode PUT -->
                              <input type="hidden" name="action" value="submit"> <!-- Tambahkan tindakan "submit" -->
                              <button type="submit" class="btn btn-xs btn-success">Submit</button>
                          </form>
                          
                          <form action="{{ route('data_overtime_admin.update', ['id_record' => $record->id_record]) }}" method="POST" class="d-inline">
                              @csrf
                              @method('PUT') <!-- Gunakan metode PUT -->
                              <input type="hidden" name="action" value="reject"> <!-- Tambahkan tindakan "reject" -->
                              <button type="submit" class="btn btn-xs btn-danger">Reject</button>
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
