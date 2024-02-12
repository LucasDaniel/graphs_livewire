
    <!-- Preloader
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="http://127.0.0.1:8000/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>
    -->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          @php echo session('email'); @endphp
        </li>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ route('app.home') }}" class="brand-link">
        <img src="http://127.0.0.1:8000/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Bycoders</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="{{ route('app.user') }}" class="d-block">Logged by {{session('name')}} as {{session('level')}}</a>
          </div>
        </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
            @if(session('id_level') == 1)
            <li class="nav-item">
                <a href="{{ route('app.user') }}" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Usuário</p>
                </a>
            </li>
            @endif
            @if(session('id_level') < 3)
            <li class="nav-item">
                <a href="{{ route('app.graphics') }}" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Graficos</p>
                </a>
            </li>
            @endif
            <li class="nav-item">
                <a href="{{ route('app.logout') }}" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Logout</p>
                </a>
            </li>
        
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>