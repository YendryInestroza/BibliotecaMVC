$(document).ready(function(){

    /*-----------------------------------AREA-----------------------------------*/
    // cuando se selecciona un elemento que comparte el misma clase
    //se utiliza document y se le pasa como parametro la clase

    // MOSTRAR INFORMACION EN EL MODAL
	$(document).on('click',".editcatg",function (){
        var datos= JSON.parse($(this).attr('data-p'));
        
		$("#id_area").val(datos['id_area']);
        $("#area").val(datos['area']);
        $("#descripcion_area").val(datos['descripcion_area']);
    })


    // REALIZAR ACTUALIZACION
	$("#formEditcta").submit(function(e){
        e.preventDefault();
        // contiene el http://localhost/bibliotecamvc
        //esta en un campo oculto en el formulario
        let base = $('#base').val();

        // almaceno los datos en un array
        const datos = {
            id : $("#id_area").val(),
            area : $("#area").val(),
            descripcion : $("#descripcion_area").val()
        }
        
        //se envia la informacion con ajax al metodo update que se creo
        //en el controlador
		$.ajax({
			url: base + 'areas/update',
			type:'POST',
			data:datos,
			success: function(response){

                Swal.fire('Categoria Actualizada',"¡Éxito!", 'success');
                
                //se carga la informacion en la tabla
                $(".tablaArea tbody").html(response);
                //se oculta el modal
                $("#editcat").modal('hide');
                //se reseta el formulario del modal
                $("#formEditcta")[0].reset();
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})

    //Eliminar area
    $(document).on("click",".elimcatg",function(){
        const datos = JSON.parse($(this).attr("data-elim"));
        let id = $(this).attr('data-elim');
        let base = $('#base').val();
        
        Swal.fire({
            title: '¿Desea Eliminar la información de la Categoría',
            showDenyButton: true,
            confirmButtonText: `Si`,
            denyButtonText: `No`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
    
                $.ajax({
                    url: base + 'areas/delete',
                    type: 'POST',
                    data: {id},
                    success: function(response){
                        Swal.fire('Saved!', '', 'success')
                        $(".tablaArea tbody").html(response)
                    },
                    error: function(){
                        console.error("Error al eliminar");
                    }
                })

            } else if (result.isDenied) {
              Swal.fire('No se realizo ningun cambio', '', 'warning')
            }
          })
    })


    //VALIDACION FORMULARIO DE INGRESAR CATEGORIA-AREA

    $('.form-catg').validate({
        
        rules:{
            area:{
                required: true,
                minlength: 3
            },
            descripcion_area:{
                required: true,
                minlength: 10
            }
        },
        messages:{
            area:{
                required: "El campo categoría es requerido",
                minlength: "Porfavor ingrese mas de 3 caracteres"
            },
            descripcion_area:{
                required: "El campo categoría es requerido",
                minlength: "Debes ingresar una descripción"
            }
        }

    })

    //AQUI VAS A CREAR MAS CODIGO

      /*-----------------------------------PROVEEDORES-----------------------------------*/

    // MOSTRAR INFORMACION EN EL MODAL
	$(document).on('click',".editprov",function (){
        var datos= JSON.parse($(this).attr('data-editp'));
        
		$("#p_id").val(datos['p_id']);
        $("#nom_prov").val(datos['nom_prov']);
        $("#dir_prov").val(datos['dir_prov']);
        $("#tel_prov").val(datos['tel_prov']);
        $("#rep_prov").val(datos['rep_prov']);
    })


    // REALIZAR ACTUALIZACION
	$("#formEditprov").submit(function(e){
        e.preventDefault();
        
        let base = $('#base').val();

        // almaceno los datos en un array
        const datos = {
            p_id : $("#p_id").val(),
            nom_prov : $("#nom_prov").val(),
            dir_prov : $("#dir_prov").val(),
            tel_prov : $("#tel_prov").val(),
            rep_prov : $("#rep_prov").val()
        }
        
        //se envia la informacion con ajax al metodo update que se creo
        //en el controlador
		$.ajax({
			url: base + 'proveedor/update',
			type:'POST',
			data:datos,
			success: function(response){

                Swal.fire('Información Actualizada',"¡Éxito!", 'success');
                
                //se carga la informacion en la tabla
                $(".tablapro tbody").html(response);
                //se oculta el modal
                $("#Editar_prov").modal('hide');
                //se reseta el formulario del modal
                $("#formEditprov")[0].reset();
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})

    //Eliminar Proveedor
    $(document).on("click",".deltprov",function(){
        const datos = JSON.parse($(this).attr("data-deltp"));
        let p_id = $(this).attr('data-deltp');
        let base = $('#base').val();
        
        Swal.fire({
            title: '¿Desea Eliminar la información del Proveedor?',
            showDenyButton: true,
            confirmButtonText: `Si`,
            denyButtonText: `No`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
    
                $.ajax({
                    url: base + 'proveedor/delete',
                    type: 'POST',
                    data: {p_id},
                    success: function(response){
                        Swal.fire('Saved!', '', 'success')
                        $(".tablapro tbody").html(response)
                    },
                    error: function(){
                        console.error("Error al eliminar");
                    }
                })

            } else if (result.isDenied) {
              Swal.fire('No se realizo ningun cambio', '', 'warning')
            }
          })
    })


    //VALIDACION FORMULARIO DE INGRESAR PROVEEDOR

    $('.form-prov').validate({
        
        rules:{
            nom_prov:{
                required: true,
                minlength: 3
            },
            dir_prov:{
                required: true,
                minlength: 10
            },
            tel_prov:{
                required: true,
            },
            rep_prov:{
                required: true,
                minlength: 3
            }
        },
        messages:{
            nom_prov:{
                required: "El campo categoría es requerido",
                minlength: "Porfavor ingrese mas de 3 caracteres"
            },
            dir_prov:{
                required: "El campo categoría es requerido",
                minlength: "Debes ingresar una dirección"
            },
            rep_prov:{
                required: "El campo categoría es requerido",
                minlength: "Debes ingresar el nombre del representante"
            }
        }

    })


    /*-------------------------EMPLEADOS-----------------------------------*/

    /*--------------VER LA INFORMACIÓN DEL EMPLAEDO--------------*/ 
    $(document).on('click','.verempl',function(){
        let empleado = JSON.parse($(this).attr('data-verem'));
        
        $('#e-nombre').html(empleado.nombre);
        $('#e-apellido').html(empleado.apellido);
        $('#e-f_nacimiento').html(empleado.f_nacimiento);
        $('#e-telefono').html(empleado.telefono);
        $('#e-usuario').html(empleado.usuario);
        $('#e-correo').html(empleado.correo);
        $('#e-rol').html(empleado.rol);

        console.log(empleado)
    })


  /*--------------ACTUALIZAR LA INFORMACIÓN DEL EMPLEADO--------------*/ 

	$(document).on('click',".editempl",function (){
        var datos= JSON.parse($(this).attr('data-editemp'));
        
        $("#id").val(datos['id']);
        $("#nombre").val(datos['nombre']);
        $("#apellido").val(datos['apellido']);
        $("#f_nacimiento").val(datos['f_nacimiento']);
        $("#telefono").val(datos['telefono']);
        $("#usuario").val(datos['usuario']);
        $("#correo").val(datos['correo']);
        $("#pass").val(datos['pass']);
        $("#rol").val(datos['rol']);
        
    })

    // REALIZAR ACTUALIZACION
	$("#formEditempl").submit(function(e){
        e.preventDefault();
        
        let base = $('#base').val();

        const datos = {
            id : $("#id").val(),
            nombre : $("#nombre").val(),
            apellido : $("#apellido").val(),
            f_nacimiento : $("#f_nacimiento").val(),
            telefono : $("#telefono").val(),
            usuario : $("#usuario").val(),
            correo : $("#correo").val(),
            pass : $("#pass").val(),
            rol : $("#rol").val()
           
        }
         
		$.ajax({
			url: base + 'empleado/update',
			type:'POST',
			data:datos,
			success: function(response){

                Swal.fire('Información Actualizada',"¡Éxito!", 'success');
                
                //se carga la informacion en la tabla
                $(".tablaemp tbody").html(response);
                //se oculta el modal
                $("#editEmpl").modal('hide');
                //se reseta el formulario del modal
                $("#formEditempl")[0].reset();
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})

    /*--------------ELIMINAR LA INFORMACIÓN DEL EMPLEADO--------------*/ 

    $(document).on("click",".delempl",function(){
        const datos = JSON.parse($(this).attr("data-delem"));
        let id = $(this).attr('data-delem');
        let base = $('#base').val();
        
        Swal.fire({
            title: '¿Desea Eliminar la información del Empleado?',
            showDenyButton: true,
            confirmButtonText: `Si`,
            denyButtonText: `No`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
    
                $.ajax({
                    url: base + 'empleado/delete',
                    type: 'POST',
                    data: {id},
                    success: function(response){
                        Swal.fire('Eliminado!', '', 'success')
                        $(".tablaemp tbody").html(response)
                    },
                    error: function(){
                        console.error("Error al eliminar");
                    }
                })

            } else if (result.isDenied) {
              Swal.fire('No se realizo ningun cambio', '', 'warning')
            }
          })
    })


    //*--------------VALIDACION DE FORMULARIO EMPLEADO--------------*/ 

    $('.form-empl').validate({
        
        rules:{
            nombre:{
                required: true,
                minlength: 3
            },
            apellido:{
                required: true,
                minlength: 3
            },
            telefono:{
                required: true,
                minlength: 8,
                maxlength:15
            }
        },
        messages:{
            nombre:{
                required: "Este campo es requerido",
                minlength: "Porfavor ingrese mas de 3 caracteres"
            },
            apellido:{
                required: "Este campo es requerido",
                minlength: "Porfavor ingrese mas de 3 caracteres"
            },
            telefono:{
                required: "Este campo es requerido",
                minlength: "formato de ingreso de numero telefonico (504) 0000-0000"
            }
        }

    })


    /*-------------------------LIBROS-----------------------------------*/

    /*--------------VER LA INFORMACIÓN DEL LIBRO--------------*/ 
    $(document).on('click','.verlibro',function(){
        let libros = JSON.parse($(this).attr('data-verli'));
        
        $('#l-codigo').html(libros.codigo);
        $('#l-titulo').html(libros.titulo);
        $('#l-autor').html(libros.autor);
        $('#l-editorial').html(libros.editorial);
        $('#l-edicion').html(libros.edicion);
        $('#l-year').html(libros.year);
        $('#l-categoria').html(libros.categoria);
        $('#l-proveedor').html(libros.proveedor);
        $('#l-fingreso').html(libros.fingreso);
        $('#l-cantidad').html(libros.cantidad);

        console.log(libros)
    })

     /*--------------ACTUALIZAR LA INFORMACIÓN DEL LIBRO--------------*/ 

	$(document).on('click',".editlibro",function (){
        var datos= JSON.parse($(this).attr('data-editli'));
        
        $("#codigo").val(datos['codigo']);
        $("#titulo").val(datos['titulo']);
        $("#autor").val(datos['autor']);
        $("#editorial").val(datos['editorial']);
        $("#edicion").val(datos['edicion']);
        $("#year").val(datos['year']);
        $("#categoria").val(datos['categoria']);
        $("#proveedor").val(datos['proveedor']);
        $("#fingreso").val(datos['fingreso']);
        $("#cantidad").val(datos['cantidad']);
        
    })

    // REALIZAR ACTUALIZACION
	$("#formEditlibro").submit(function(e){
        e.preventDefault();
        
        let base = $('#base').val();

        const datos = {
            codigo : $("#codigo").val(),
            titulo : $("#titulo").val(),
            autor : $("#autor").val(),
            editorial : $("#editorial").val(),
            edicion : $("#edicion").val(),
            year : $("#year").val(),
            categoria : $("#categoria").val(),
            proveedor : $("#proveedor").val(),
            fingreso : $("#fingreso").val(),
            cantidad : $("#cantidad").val()
           
        }
         
		$.ajax({
			url: base + 'libros/update',
			type:'POST',
			data:datos,
			success: function(response){

                Swal.fire('Información Actualizada',"¡Éxito!", 'success');
                
                //se carga la informacion en la tabla
                $(".tablali tbody").html(response);
                //se oculta el modal
                $("#editLibro").modal('hide');
                //se reseta el formulario del modal
                $("#formEditlibro")[0].reset();
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})

   /*--------------ELIMINAR LA INFORMACIÓN DEL LIBRO--------------*/ 

   $(document).on("click",".dellibro",function(){
    const datos = JSON.parse($(this).attr("data-delli"));
    let codigo = $(this).attr('data-delli');
    let base = $('#base').val();
    
    Swal.fire({
        title: '¿Desea Eliminar la información del Empleado?',
        showDenyButton: true,
        confirmButtonText: `Si`,
        denyButtonText: `No`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {

            $.ajax({
                url: base + 'libros/delete',
                type: 'POST',
                data: {codigo},
                success: function(response){
                    Swal.fire('Eliminado!', '', 'success')
                    $(".tablali tbody").html(response)
                },
                error: function(){
                    console.error("Error al eliminar");
                }
            })

        } else if (result.isDenied) {
          Swal.fire('No se realizo ningun cambio', '', 'warning')
        }
      })
})

})//cierre del document ready

