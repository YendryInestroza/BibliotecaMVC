$(document).ready(function(){
    $(document).on("click",".elim",function(){
        let id = $(this).attr("data-elim");

        $.ajax({
            url: "eliminar",
            type:"POST",
            data:{id},
            success:function(resp){
                $(".tablalibros tbody").html(resp);
                
            }
        })
    })
    $(document).on("click",".edit",function(){
        let datos = JSON.parse($(this).attr('data-ed'));
        $('#l_id').val(datos['idlibro']);
        $('#l_nom').val(datos['nom_li']);
        $('#l_aut').val(datos['autor_li']);
        $('#l_ar').val(datos['area_li']);
        $('#l_edic').val(datos['edicion_li']);
        $('#l_ed').val(datos['editor_li']);
        $('#l_prov').val(datos['nom_prov']);
        $('#l_np').val(datos['npagina_li']);
        $('#l_fi').val(datos['fingreso_li']);
        $('#l_cant').val(datos['cantidad_li']);
        $('#l_pre').val(datos['precio_li']);
        $('#l_obs').val(datos['observaciones_li']);
    })

    $(".cambio").on("submit",function(e){
        e.preventDefault();
        let info = $(this).serialize();
        

        $.ajax({
            url: "editar",
            type: "POST",
            data: info,
            success: function(response){
                $(".tablalibros tbody").html(response);
                $("#EditarModal").modal("hidden");
           
            }
        })

    })
})




/*-----------------------------------AREA-----------------------------------*/
$(document).ready(function(){
	$(".botonEditar1").click(function (){

		var datos= JSON.parse($(this).attr('data-p'));
		$("#id_area").val(datos['id_area']);
        $("#area").val(datos['area']);
        $("#descripcion_area").val(datos['descripcion_area']);
    })


	$("#formEditcta").submit(function(e){
		e.preventDefault();

		var id_area = $("#id_area").val();
        var area = $("#area").val();
        var descripcion_area = $("#descripcion_area").val();

		$.ajax({
			url:'areas/actualizararea',
			type:'post',

			data:{'id_area':id_area,'area':area,'descripcion_area':descripcion_area},

			success: function(respuesta){

				Swal.fire({
					type: "success",
					title: "Categoria Actualizada",
					text: "¡Éxito!"
				})

				$("#e tbody").html(respuesta);
				$("#modalEditarcat").modal('hide');
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})
});