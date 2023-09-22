<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('ui-html')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-success">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.html" class="nav-link text-white">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <form action="/logout" method="post" class="navbar-nav ml-auto">
      @csrf
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle text-white" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{asset('ui-html')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2 mr-2" alt="User Image" width="25px">
            Alexander Pierce
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <!-- Isi dropdown menu di sini -->
            <a class="dropdown-item" href="#"> <i class="nav-icon fas fa-user mr-2"></i> Profil</a>
            <div class="dropdown-divider"></div>
            <button type="submit" class="dropdown-item"><i class="nav-icon fas fa-power-off mr-2"></i>Keluar</button>
          </div>
        </li>
      </ul>
  </form>
    
  </nav>
  <!-- /.navbar -->