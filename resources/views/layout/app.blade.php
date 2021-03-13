<!DOCTYPE html>
    <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>AdminLTE 3 | Projects</title>
        
          <!-- Google Font: Source Sans Pro -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
          <!-- Font Awesome -->
          <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
          <!-- Theme style -->
          <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
        </head>
        <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
          <!-- Navbar -->
          <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
        
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
              <!-- Navbar Search -->
              <li class="nav-item">
                
                
              </li>
        
              <!-- Messages Dropdown Menu -->
              
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                    <img src="{{asset('adminlte/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                    <div class="media-body">
                      <h3 class="dropdown-item-title">
                        Brad Diesel
                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                      </h3>
                      <p class="text-sm">Call me whenever you can...</p>
                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                  </div>
                  <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  <div class="media">
                    <img src="{{asset('adminlte/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                      <h3 class="dropdown-item-title">
                        John Pierce
                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                      </h3>
                      <p class="text-sm">I got your message bro</p>
                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                  </div>
                  <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!-- Message Start -->
                  
                  <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
              </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            
            
            
                
            </li>
          </ul>
        </nav>
        <!-- /.navbar -->

        
      
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="{{asset('adminlte/index3.html')}}" class="brand-link">
            <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">E-Perpustakaan</span>
          </a>
      
          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="">
                <img src="" class="" alt="">
              </div>
              <div class="info">
                <a href="#" class="d-block">E-Perpustakaan</a>
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

                    
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                        

                       <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                            Home
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                      <ul class="nav-treeview">

                            <li class="nav-item">
                              <a href="./useradmin" class="nav-link">
                                <i class="fas fa-users"></i>
                                <p> User Admin</p>
                            </a>
                          </li>

                          <li class="nav-item">
                            <a href="./members" class="nav-link">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>Members</p>
                            </a>
                          </li>                        
            
                          <li class="nav-item">
                            <a href="./books" class="nav-link">
                              <i class="nav-icon fas fa-table"></i>
                              <p>Books</p>
                            </a>
                          </li>

                          <li class="nav-item">
                            <a href="./books_categories" class="nav-link">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>Books Categories</p>
                            </a>
                          </li>                       
                                    
                          <li href="#" class="nav-item">
                              <a href="./transactions" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>Transaction</p>                                 
                              </a>
                            </li>
            
                          <li class="nav-item">
                            <a href="./transactiondetails" class="nav-link">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>Transaction Details</p>
                            </a>
                          </li>
                      </ul>

                        <li class="nav-item">
                          <a href="{{action("App\Http\Controllers\Backend\AuthController@getLogout")}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                              Log Out 
                              <i class=""></i>
                            </p>
                          </a>
                          
                  </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>

            <!-- Content Wrapper. Contains page content -->
@yield('content')
    <!-- Main content -->
          <div class="content-wrapper">  
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0-rc
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  
  <!-- jQuery -->
  <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
  </body>
  </html>
  