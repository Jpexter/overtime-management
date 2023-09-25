<?php 
require "layout/header.php";
require "layout/sidebar.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">History Time Off</h1>
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
          <div class="card mt-3">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead class="bg-white">
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Division</th>
                    <th>Criteria</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>IT</td>
                    <td>Cuti Tahunan</td>
                    <td>17 Sep 2023</td>
                    <td>19 Sep 2023</td>
                    <td>
                        <button class="btn btn-xs btn-success">Submited</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Alexander Pierce</td>
                    <td>IT</td>
                    <td>Cuti Tahunan</td>
                    <td>9 Sep 2023</td>
                    <td>12 Sep 2023</td>
                    <td>
                        <button class="btn btn-xs btn-success">Submited</button>
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
                        <button class="btn btn-xs btn-danger" style="width: 60px;">Reject</button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Mike Doe</td>
                    <td>IT Support</td>
                    <td>Melahirkan</td>
                    <td>30 Sep 2023</td>
                    <td>1 Nov 2023  </td>
                    <td>
                        <button class="btn btn-xs btn-success">Submited</button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Syah Doe</td>
                    <td>IT Support</td>
                    <td>TJSL</td>
                    <td>13 Sep 2023</td>
                    <td>13 Sep 2023</td>
                    <td>
                        <button class="btn btn-xs btn-danger" style="width: 60px;">Reject</button>
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

<?php require "layout/footer.php" ?>