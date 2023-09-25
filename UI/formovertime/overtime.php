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
            <h1 class="m-0"> Overtime</h1>
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
              <form action="">
              <div class="form-group">
                  <label for="exampleSelectRounded0">Overtime Type</label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0">
                    <option>Normal</option>
                    <option>Urgent</option>
                    <option>Business Trips</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                </div>
                <!-- /.form-group -->
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Start Date</label>
                        <input type="date" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>End Date</label>
                        <input type="date" class="form-control" placeholder="">
                      </div>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Start Time</label>
                        <input type="time" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>End Time</label>
                        <input type="time" class="form-control" placeholder="">
                      </div>
                    </div>
                  </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="projectname">Project Name</label>
                  <input type="text" name="numberprojectname" class="form-control" id="numberprojectname" placeholder="Project Name">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="exampleSelectRounded0">Category Overtime</label>
                  <select class="custom-select rounded-0" id="exampleSelectRounded0">
                    <option>Weekend</option>
                    <option>Weekday</option>
                    <option>Business</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                        <label>Textarea</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
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