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
                    <a href="addbasicsalary.php">+ Add</a>
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
                  <tr>
                    <td>1</td>
                    <td>Fazri Alfauzi</td>
                    <td>
                    10.000
                    </td>
                    <td>
                        <button class="btn">
                            <a href="editbasicsalary.php">
                                <i class="fas fa-edit text-warning"></i> <!-- Ikon Edit -->
                            </a>
                        </button>
                        <button class="btn"><i class="fas fa-trash text-danger"></i> <!-- Ikon Hapus --></button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Jaro Ismaya Najari</td>
                    <td>
                    10.000
                    </td>
                    <td>
                        <button class="btn">
                            <a href="editbasicsalary.php">
                                <i class="fas fa-edit text-warning"></i> <!-- Ikon Edit -->
                            </a>
                        </button>
                        <button class="btn"><i class="fas fa-trash text-danger"></i> <!-- Ikon Hapus --></button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Maulana Ergi Alif Falah</td>
                    <td>
                    10.000
                    </td>
                    <td>
                        <button class="btn">
                            <a href="editbasicsalary.php">
                                <i class="fas fa-edit text-warning"></i> <!-- Ikon Edit -->
                            </a>
                        </button>
                        <button class="btn"><i class="fas fa-trash text-danger"></i> <!-- Ikon Hapus --></button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Muhammad Cahyadi</td>
                    <td>
                      10.000
                    </td>
                    <td>
                        <button class="btn">
                            <a href="editbasicsalary.php">
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


<?php require "layout/footer.php"; ?>