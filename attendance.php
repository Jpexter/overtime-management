<?php 
require "layout/header.php" ;
require "layout/sidebar.php" ;
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Attendance</h1>
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
      <div class="row  d-flex align-items-center justify-content-center">
        <div class="col-11">
            <div class="d-flex justify-content-end">
                <button class="btn btn-sm bg-success" style="width: 70px;">
                    <a href="addattendance.php">+ Add</a>
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
                    <th>Divisi</th>
                    <th>Reason Attendance</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>IT</td>
                    <td>Sakit</td>
                    <td>10 Sep 2023</td>
                    <td>12 Sep 2023</td>
                    <td>
                        <button class="btn">
                            <a href="editattendance.php">
                                <i class="fas fa-edit text-warning"></i> <!-- Ikon Edit -->
                            </a>
                        </button>
                        <button class="btn"><i class="fas fa-trash text-danger"></i> <!-- Ikon Hapus --></button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Alexander Pierce</td>
                    <td>IT</td>
                    <td>Sakit</td>
                    <td>9 Sep 2023</td>
                    <td>10 Sep 2023</td>
                    <td>
                        <button class="btn">
                            <a href="editattendance.php">
                                <i class="fas fa-edit text-warning"></i> <!-- Ikon Edit -->
                            </a>
                        </button>
                        <button class="btn"><i class="fas fa-trash text-danger"></i> <!-- Ikon Hapus --></button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Bob Doe</td>
                    <td>Web Dev</td>
                    <td>Cuti Bersama</td>
                    <td>28 Sep 2023</td>
                    <td>29 Sep 2023</td>
                    <td>
                        <button class="btn">
                            <a href="editattendance.php">
                                <i class="fas fa-edit text-warning"></i> <!-- Ikon Edit -->
                            </a>
                        </button>
                        <button class="btn"><i class="fas fa-trash text-danger"></i> <!-- Ikon Hapus --></button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Mike Doe</td>
                    <td>IT Support</td>
                    <td>Sakit</td>
                    <td>13 Sep 2023</td>
                    <td>19 Sep 2023</td>
                    <td>
                        <button class="btn">
                            <a href="editattendance.php">
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
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php require"layout/footer.php" ; ?>
