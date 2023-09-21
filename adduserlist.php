<?php 
require"layout/header.php" ;
require"layout/sidebar.php" ;
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add User List</h1>
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
          <h3 class="card-title">Form Add User List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row d-flex">
            <div class="col-md-6">
              <form>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <!-- /.form-group -->
              </form>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <form>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="phonenumber">Phone Number</label>
                  <input type="text" name="phonenumber" class="form-control" id="phonenumber" placeholder="+62">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="role">Role</label>
                  <select class="form-control select2bs4" name="role" id="role" style="width: 100%;">
                    <option selected="selected">User</option>
                    <option>Leader</option>
                    <option>Admin</option>
                    <option>Supervisor</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </form>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-end">
                <a href="userlist.php">
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

  <?php require"layout/footer.php" ; ?>