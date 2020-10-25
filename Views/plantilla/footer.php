  <!-- Footer -->
  
  <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Yendry Michelly Inestroza 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Modal del boton de cerrar sessión-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">¿Estas seguro de cerrar sesión?</div>
        <div class="modal-footer">
          <button class="btn btn-dark" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-danger" href="login.php">Salir</a>
        </div>
      </div>
    </div>
  </div>

       
  <!-- Bootstrap core JavaScript-->
  <script src="<?= PLANTILLA ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= PLANTILLA ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= PLANTILLA ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= PLANTILLA ?>js/sb-admin-2.min.js"></script>

  <script src="<?= PLANTILLA ?>js/funciones.js"></script>



  <!-- Page level plugins -->
  <script src="<?= PLANTILLA ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= PLANTILLA ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= PLANTILLA ?>js/demo/datatables-demo.js"></script>

</body>

</html>
