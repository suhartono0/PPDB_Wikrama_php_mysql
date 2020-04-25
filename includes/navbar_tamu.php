<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
    <img style="width: 50px;, height: 50px;" src="WKgarut1.png">
    </div>
    <div class="sidebar-brand-text mx-3" style="font-size: 12px; padding-top: 15px;">PPDB Online
      <p style="font-size: 12px;">SMK Wikrama 1 Garut</p>
    </div>
  </a>

<!-- Divider -->
  <hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

<!-- Divider -->
  <hr class="sidebar-divider">

<!-- Heading -->
  <div class="sidebar-heading">
    Interface
  </div>

<!-- Nav Item - Pages Collapse Menu -->
  
  <li class="nav-item">
    <a class="nav-link" href="daftar.php">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Daftar PPDB</span>
    </a>
  </li>


<!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
  <div id="content">

        <!-- Topbar -->

          <!-- Topbar Search 
      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form> -->

          <!-- Topbar Navbar 
      <ul class="navbar-nav ml-auto">

            
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
         
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
        </ul>
        -->
      </nav>
      <div class="container-fluid">
        <?php
            switch(@$_GET['menu']){
              case 'daftar';
              include 'daftar.php';
              break;
            }
        ?>
      </div>