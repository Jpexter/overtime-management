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
            <h1 class="m-0">Add Master Project</h1>
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
          <h3 class="card-title">Form Master Project</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row d-flex">
            <div class="col-md-6">
              <form>
                <div class="form-group">
                  <label for="project_name">Project Name</label>
                  <input type="text" name="project_name" class="form-control" id="project_name" placeholder="Project name">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio1" checked>
                    <label class="form-check-label">Normal</label>
                    <input class="form-check-input ml-2" type="radio" name="radio1">
                    <label class="form-check-label ml-4">Holiday</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Is On Duty</label>
                </div>
                <!-- /.form-group -->
              </form>
            </div>
            <!-- /.col -->
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-end">
                <a href="masterproject.php">
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