<div id="coloresme">
<!-- Sidebar -->
  <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Imagen + texto Principal Sidebar -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= BASE_URL ?>index">
  <div class="sidebar-brand-icon">
    <img class="w-50" src="<?= PLANTILLA ?>./img/Solo.png">
  </div>
    <div class="sidebar-brand-text mr-5">BYIM</div>
</a>

<!-- Linea Divisori al Menu -->
<hr class="sidebar-divider my-0">

<!-- Item de Inicio-->
<li class="nav-item">
  <a class="nav-link" href="<?= BASE_URL ?>index">
    <i class="fas fa-fw fa-home"></i>
    <span>Inicio</span></a>
</li>

<!-- Linea Divisori al Menu -->
<hr class="sidebar-divider">


<!-- Encabezado Intem menu -->
<div class="sidebar-heading">
   Biblioteca
</div>

<!-- Nav Item - Biblioteca -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapselibro" aria-expanded="true" aria-controls="collapselibro">
    <i class="fas fa-fw fa-book"></i>
    <span>Libros</span>
  </a>
  <div id="collapselibro" class="collapse" aria-labelledby="headinglibro" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="<?= BASE_URL ?>libros/verlibros"><i class="fas fa-fw fa-eye "></i> Ver Libros</a>
      <a class="collapse-item" href="<?= BASE_URL ?>libros/agregar"><i class="fas fa-fw fa-plus-circle"></i> Ingresar Nuevo</a>
    </div>
  </div>
</li>

<!-- Nav Item - Recursos -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapserecurso" aria-expanded="true" aria-controls="collapserecurso">
    <i class="fas fa-fw fa-globe-americas"></i>
    <span>Recursos</span>
  </a>
  <div id="collapserecurso" class="collapse" aria-labelledby="headingrecurso" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="#"><i class="fas fa-fw fa-eye "></i> Ver Recursos</a>
      <a class="collapse-item" href="#"><i class="fas fa-fw fa-plus-circle"></i> Ingresar Nuevo</a>
    </div>
  </div>
</li>


<!-- Nav Item - Préstamos -->
<li class="nav-item">
  <a class="nav-link" href="#">
    <i class="fas fa-fw fa-user-clock"></i>
    <span>Préstamo</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Finanzas
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseprov" aria-expanded="true" aria-controls="collapseprov">
    <i class="fas fa-fw fa-truck"></i>
    <span>Proveedor</span>
  </a>
  <div id="collapseprov" class="collapse" aria-labelledby="headingprov" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="<?= BASE_URL ?>proveedor/verProveedores"><i class="fas fa-fw fa-eye "></i> Ver Proveedores</a>
      <a class="collapse-item" href="#"><i class="fas fa-fw fa-plus-circle"></i> Ingresar Nuevo</a>
    </div>
  </div>
</li>

<!-- Nav Item - Inventario -->
<li class="nav-item">
  <a class="nav-link" href="#">
    <i class="fas fa-fw fa-clipboard"></i>
    <span>Inventario</span></a>
</li>

<!-- Nav Item - Estadística -->
<li class="nav-item">
  <a class="nav-link" href="#">
    <i class="fas fa-fw fa-chart-line"></i>
    <span>Estadísticas</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
</div>