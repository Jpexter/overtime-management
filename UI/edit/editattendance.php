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
            <h1 class="m-0">Add Basic Salary</h1>
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
          <h3 class="card-title">Form Attendance</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row d-flex">
            <div class="col-md-6">
              <form>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="divisi">Divisi</label>
                  <input type="text" name="divisi" class="form-control" id="divisi" placeholder="Divisi">
                </div>
                <div class="form-group">
                  <label for="reason">Reason</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <!-- /.form-group -->
              </form>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <form>
              <label>Start Date</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                <!-- /.form-group -->
                <div class="form-group mt-3">
                  <label>End Date</label>
                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <!-- /.form-group -->
               
                <!-- /.form-group -->
              </form>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-end">
                <a href="attendance.php">
                    <button type="submit" class="btn btn-sm btn-danger mr-2">Cancel</button>
                </a>
                <button type="submit" class="btn  btn-sm btn-success">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      
      
      <!-- /.card -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

<?php require "layout/footer.php"; ?>

