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
            <h1 class="m-0"> Overtime CS</h1>
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
    <div class="card card-default ml-5" style="width: 1030px;">
        <div class="card-header">
          <h3 class="card-title">Form Example</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row d-flex">
            <div class="col-md-6">
              <form action>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="devision">Division</label>
                  <input type="text" name="devision" class="form-control" id="devision" placeholder="Division">
                </div>
                <!-- /.form-group -->
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Normal</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Closing</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group ml-3">
                      <input class="form-check-input" type="radio" name="radio1">
                      <label class="form-check-label">Normal</label>
                      <input class="form-check-input ml-2" type="radio" name="radio1">
                      <label class="form-check-label ml-4">Closing</label>
                      </div>
                    </div>
                  </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group">
                  <label for="projectname">Project Name</label>
                  <input type="text" name="projectname" class="form-control" id="projectname" placeholder="Project Name">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="Date">Date</label>
                  <input type="date" name="date" class="form-control" id="date" placeholder="Date...">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Overtime Reason</label>
                  <textarea class="form-control" rows="3" placeholder="Reason ..."></textarea>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>
</form>
        <!-- /.card-body -->
      </div>
      
      
      <!-- /.card -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php require "layout/footer.php" ; ?>