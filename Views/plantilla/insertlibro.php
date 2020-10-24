<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="image/x-icon" href="img/login.png" rel="shortcut icon" />

  <title>Libros</title>

</head>

<body id="page-top">
<?php include "Modulos/header.php";?>

<!--Contenido-->
<div class="container-fluid">
  <!-- Inicio Contenido -->
  <h1 class="h3 text-gray-800 text-center mb-3">Ingresar Nuevo Libro</h1>
<div class="container" id="color-for">
  <form class="">
            <div class="container-fluid " >
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Código:</label>
                            <input type="text" class="form-control" id="codigo" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Titulo:</label>
                            <input type="text" class="form-control" id="codigo">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Editor:</label>
                            <input type="text" class="form-control" id="codigo" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Autor:</label>
                            <input type="text" class="form-control" id="codigo">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Proveedor:</label>
                            <input type="text" class="form-control" id="codigo" >
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">No. Páginas:</label>
                            <input type="number" class="form-control" id="codigo">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Ejemplares</label>
                            <input type="number" class="form-control" id="codigo">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Valor:</label>
                            <input type="number" class="form-control" id="codigo" >
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Estado:</label>
                            <input type="text" class="form-control" id="codigo" >
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Fecha Ingreso:</label>
                            <input type="date" class="form-control" id="codigo" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="codigo" class="col-form-label">Observaciones:</label>
                            <input type="text" class="form-control" id="codigo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="login.html" class="btn btn-primary bg-btn-block mt-3 mb-5 w-25 ">
                      Ingresar Libro
                </a>
            </div>
        </form>
    </div>

  


</div>
<!-- /.container-fluid -->

</div>
<!-- fin del contenido -->

<?php include "Modulos/footer.php";?>

</body>
</html>