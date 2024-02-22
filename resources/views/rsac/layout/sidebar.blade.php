    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('AdminLTE-3.1.0/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE-3.1.0/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierces</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link {{Route::currentRouteName() == 'dashboard' ? 'active' : null}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-volleyball-ball nav-icon"></i>
              <p>Athlete</p>
            </a>
          </li>
          {{-- For RSAC (Condition) --}}
          <li class="nav-item text-white text-sm text-center">--- For RSAC (Condition) ---</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-gavel nav-icon"></i>
              <p>Validation</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fab fa-windows nav-icon"></i>
              <p>Athlete Gallery</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-portrait nav-icon"></i>
              <p>Athlete Screening</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-portrait nav-icon"></i>
              <p>Passport Generation</p>
            </a>
          </li>
          {{-- END RSAC --}}

          {{-- Administrator --}}
          <li class="nav-item text-white text-sm text-center">--- For Administrator (Condition) ---</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-cogs nav-icon"></i>
              <p>User Management</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="fas fa-fingerprint nav-icon"></i>
              <p>Profiling Management</p>
            </a>
          </li>
          {{-- End of Administrator --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>