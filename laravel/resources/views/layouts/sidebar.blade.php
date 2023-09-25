<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{"layouts.main"}}" class="brand-link">
      <img src="{{asset('ui-html')}}/dist/img/ovt-logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Overtime</span>
    </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-3">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="dashboard.html" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-clock"></i>
            <p>
              Overtime
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.html" class="nav-link">
                <p>Data Overtime</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                <p>History Overtime</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Time Off
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.html" class="nav-link">
                <p>Data Time Off</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                <p>History Time Off</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="dashboard.html" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Attendance
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Master Data
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{$baseUrl}}/masterproject" class="nav-link">
                <p>Master Project</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{$baseUrl}}/masterbasicsalary" class="nav-link">
                <p>Master Basic Salary</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{$baseUrl}}/masterdivision" class="nav-link">
                <p>Master Division</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              User Management
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{$baseUrl}}/userlist" class="nav-link">
                <p>User List</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-receipt"></i>
            <p>
              Report
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>