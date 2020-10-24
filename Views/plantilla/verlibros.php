<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="image/x-icon" href="img/login.png" rel="shortcut icon" />

  <title>Libros</title>

</head>

<body id="page-top">
<?php include "Modulos/header.php";?>
<?php include "Modulos/modales.php";?>


<!--Contenido-->
<div class="container-fluid">
  <!-- Inicio Contenido -->
  <h1 class="h3 text-gray-800 text-center">Control de Libros</h1>

  <nav class="navbar">
    <div class="row">
      <button type="button" class="btn btn-light"><i class="fas fa-th-large fa-sm fa-fw mr-2"></i>Ver Tarjetas</button>
      <button type="button" class="btn btn-light ml-2"><i class="fas fa-list-ul fa-sm fa-fw mr-2"></i>Ver Lista</button>
    </div>
  
    <div class="d-none d-sm-none d-md-block">
      <div class="form-inline ">
        <label for="area">Área: </label>
          <select class="form-control ml-3" id="area">
            <option>Ciencias Naturales</option>
            <option>Estudios Sociales</option>
            <option>Literatura-Cuentos</option>
            <option>Geografía</option>
            <option></option>
          </select>
      </div>
    </div>
  </nav>


      <div class="row mt-3">
        <div class="col-lg-4">
        <!-- tarjetas Libro -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-dark">El Color del Mar</h6>
                <div class="dropdown no-arrow">
                  <!--Boton Dropdown para acciones-->
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                          <div class="dropdown-header text-primary">Realizar:</div>
                            <a class="dropdown-item" data-toggle="modal" data-target="#ver-info" href="#">
                              <i class="fas fa-eye fa-sm fa-fw mr-2" id="coloricon"></i>Ver
                            </a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#mod-info" href="#">
                              <i class="fas fa-edit fa-sm fa-fw mr-2" id="coloricon"></i>Editar
                            </a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#elm-info" href="#">
                              <i class="fas fa-trash fa-sm fa-fw mr-2" id="coloricon"></i>Eliminar
                            </a>
                        </div>
                  </div>
              </div>
                   <!-- Contenido de la tarjeta -->
                    <div class="card-body">
                      <div class="d-none d-sm-none d-md-block">
                        <img id="img-card" src="img/images.jpg" alt="">
                      </div>
                        <p class=""><b>-Código: </b>BIC-LB-001<br>
                                    <b>-Autor: </b>Sylvia de Holanda<br>
                                    <b>-Área: </b>Literatura-Cuentos<br>
                                    <b>-Edición: </b>Primera Edicación<br> 
                                    <b>-Editor: </b>Seller Río de Aguas    
                        </p>
                    </div>
              </div>
            </div>
            <div class="col-lg-4">
        <!-- tarjetas Libro -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-dark">El Color del Mar</h6>
                <div class="dropdown no-arrow">
                  <!--Boton Dropdown para acciones-->
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                          <div class="dropdown-header text-primary">Realizar:</div>
                            <a class="dropdown-item" data-toggle="modal" data-target="#ver-info" href="#">
                              <i class="fas fa-eye fa-sm fa-fw mr-2" id="coloricon"></i>Ver
                            </a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#mod-info" href="#">
                              <i class="fas fa-edit fa-sm fa-fw mr-2" id="coloricon"></i>Editar
                            </a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#elm-info" href="#">
                              <i class="fas fa-trash fa-sm fa-fw mr-2" id="coloricon"></i>Eliminar
                            </a>
                        </div>
                  </div>
              </div>
                   <!-- Contenido de la tarjeta -->
                    <div class="card-body">
                      <div class="d-none d-sm-none d-md-block">
                        <img id="img-card" src="img/images.jpg" alt="">
                      </div>
                        <p class=""><b>-Código: </b>BIC-LB-001<br>
                                    <b>-Autor: </b>Sylvia de Holanda<br>
                                    <b>-Área: </b>Literatura-Cuentos<br>
                                    <b>-Edición: </b>Primera Edicación<br> 
                                    <b>-Editor: </b>Seller Río de Aguas    
                        </p>
                    </div>
              </div>
            </div>
            <div class="col-lg-4">
        <!-- tarjetas Libro -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-dark">El Color del Mar</h6>
                <div class="dropdown no-arrow">
                  <!--Boton Dropdown para acciones-->
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                          <div class="dropdown-header text-primary">Realizar:</div>
                            <a class="dropdown-item" data-toggle="modal" data-target="#ver-info" href="#">
                              <i class="fas fa-eye fa-sm fa-fw mr-2" id="coloricon"></i>Ver
                            </a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#mod-info" href="#">
                              <i class="fas fa-edit fa-sm fa-fw mr-2" id="coloricon"></i>Editar
                            </a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#elm-info" href="#">
                              <i class="fas fa-trash fa-sm fa-fw mr-2" id="coloricon"></i>Eliminar
                            </a>
                        </div>
                  </div>
              </div>
                   <!-- Contenido de la tarjeta -->
                    <div class="card-body">
                      <div class="d-none d-sm-none d-md-block">
                        <img id="img-card" src="img/images.jpg" alt="">
                      </div>
                        <p class=""><b>-Código: </b>BIC-LB-001<br>
                                    <b>-Autor: </b>Sylvia de Holanda<br>
                                    <b>-Área: </b>Literatura-Cuentos<br>
                                    <b>-Edición: </b>Primera Edicación<br> 
                                    <b>-Editor: </b>Seller Río de Aguas   
                        </p>
                    </div>
              </div>
            </div>
    

            












            
  </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- fin del contenido -->



<?php include "Modulos/footer.php";?>

</body>
</html>