$(document).ready(function(){
    $(".editBoton").click(function(){
        var datosl= JSON.parse($(this).attr('data-libros'));
        $("#l_nom").val(datosl['nom_li']);
        $("#l_id").val(datosl['idlibro']);
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
    });
});