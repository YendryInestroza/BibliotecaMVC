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