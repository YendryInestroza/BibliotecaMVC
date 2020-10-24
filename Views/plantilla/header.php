
  <!-- Custom fonts for this template-->
  <link href="<?= PLANTILLA ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= PLANTILLA ?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= PLANTILLA ?>css/st.css" rel="stylesheet">
  <link href="<?= PLANTILLA ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">



 <!-- Page Wrapper -->
  <div id="wrapper">
    <?php include "sidebar.php";?>
  <!-- Content Wrapper -->

    <div id="content-wrapper" class="d-flex flex-column">
  <!-- Main Content -->
      <div id="content">

  <!-- Botón de p/d. moviles y barra de busqueda -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
 
          <!-- Barra de Busqueda -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-dark" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
    
              <!-- Dropdown - botón buscar -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar.." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-dark" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


            <!-- Nav Item - Notificación -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- No. de notificaciones -->
                <span class="badge badge-danger badge-counter">2</span>
              </a>
              <!-- Dropdown - notificaciones -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 id="colorvi" class="dropdown-header text-dark">
                  Notificación
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-danger">
                      <i class="fas fa-book text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">20 Septiembre 2020</div>
                    <span class="font-weight-bold">Ciencias Naturales 9° Libro no Entregado Responsable: Eimy Inestroza</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-info">
                      <i class="fas fa-truck-loading text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">20 Septiembre 2020</div>
                    1 día Entrega de Libros de Español 10° Grado
                  </div>
                </a>
                
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Mensajes -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">3</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 id="colorvi" class="dropdown-header text-dark">
                  Mensajes
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Nuevos disponibles en nuesra tienda central comunicate....</div>
                    <div class="small text-gray-500">ACOSSA · 10m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">La entrega se realizara el día 04 Octubre de...</div>
                    <div class="small text-gray-500">Utiles de Honduras · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>
            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - Información del Usuario -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Yendry Inestroza</span>
                <img class="img-profile rounded-circle" src="<?= PLANTILLA ?>./img/perfil.jpg">
              </a>
         
              
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configuración
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i>
                  Salir
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->