
 <!--Modal para las opciones-->

    <!--Modal Ver información completa del libro-->
    <div class="modal fade" id="ver-info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Información Sobre el Libro</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-dark">
            <p><b>Código:</b> LBRT - 000002<br>
               <b>Titulo:</b> Gestión de Proyectos<br>
               <b>Editor:</b> MM<br>
               <b>Autor:</b> Juan Jose Miranda Miranda<br>
               <b>Proveedor:</b> Útiles de Honduras<br>
               <b>No. Páginas:</b> 236<br>
               <b>Cantidad Ejemplares:</b> 5<br>
               <b>Valor:</b> 156<br>
               <b>Estado:</b> Nuevo<br>
               <b>fecha:</b> 2019-08-06<br>
               <b>Observaciones:</b> Identificación, formulación, evaluación financiera
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


<!--Modal modificar información completa del libro-->

  <div id="mod-info" class="modal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Información</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Código:</label>
                            <input type="text" class="form-control" id="codigo" placeholder="LBRT - 000002">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Titulo:</label>
                            <input type="text" class="form-control" id="codigo" placeholder="Gestión de Proyectos">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Editor:</label>
                            <input type="text" class="form-control" id="codigo" placeholder="MM">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Autor:</label>
                            <input type="text" class="form-control" id="codigo" placeholder="Juan José Miranda Miranda">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Proveedor:</label>
                            <input type="text" class="form-control" id="codigo" placeholder="Útiles de Honduras">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Pág.:</label>
                            <input type="number" class="form-control" id="codigo" placeholder="2">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Ejemplares</label>
                            <input type="number" class="form-control" id="codigo" placeholder="5">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Valor:</label>
                            <input type="number" class="form-control" id="codigo" placeholder="156">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Estado:</label>
                            <input type="text" class="form-control" id="codigo" placeholder="Nuevo">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Fecha Ingr.:</label>
                            <input type="date" class="form-control" id="codigo" placeholder="15/06/2020">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Observaciones:</label>
                            <input type="text" class="form-control" id="codigo" placeholder="Identificación, formulación, evaluación financiera">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal del boton de cerrar sessión-->
<div class="modal fade" id="elm-info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Elemento</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">¿Estas seguro de Eliminarlo??</div>
        <div class="modal-footer">
          <button class="btn btn-dark" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger" href="#">Eliminar</a>
        </div>
      </div>
    </div>
  </div>