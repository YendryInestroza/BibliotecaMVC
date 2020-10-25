$(document).ready(function(){
    $(".editBoton").click(function(){
        var datosl= JSON.parse($(this).attr('data-libros'));
        $("#l_id").val(datosl['idlibro']);
        $("#l_nom").val(datosl['nom_li']);
        $("#l_aut").val(datosl['autor_li']);
        $("#l_ar").val(datosl['area_li']);
        $("#l_edic").val(datosl['edicion_li']);
        $("#l_ed").val(datosl['editor_li']);
        $("#l_prov").val(datosl['proveedor_li']);
        $("#l_np").val(datosl['npagina_li']);
        $("#l_fi").val(datosl['fingreso_li']);
        $("#l_cant").val(datosl['cantidad_li']);
        $("#l_pre").val(datosl['precio_li']);
        $("#l_obs").val(datosl['observaciones_li']);
    })

    $("#formeditarl").submit(function(e){
        e.preventDefault();

        let datos={
            "l_id":$("#l_id").val(),
            "l_nom":$("#l_nom").val(),
            "l_aut":$("#l_aut").val(),
            "l_ar":$("#l_ar").val(),
            "l_edic":$("#l_edic").val(),
            "l_ed":$("#l_ed").val(),
            "l_prov":$("#l_prov").val(),
            "l_np":$("#l_np").val(),
            "l_fi":$("#l_fi").val(),
            "l_cant":$("#l_cant").val(),
            "l_pre":$("#l_pre").val(),
            "l_obs":$("#l_obs").val()
        }
   
        $.ajax({
            url:'libros/edit',
            type:'POST',
           data:datos,
            success:function(respuesta){
                $("#tablalibros tbody").html(respuesta)
                $("#edilibro").modal('hide');
            },
            error: function(){
                console.error("Error al actualizar");
            }
        })
       
    })


































});

