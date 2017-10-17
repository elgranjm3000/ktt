<?php

header('Content-Type: text/html; charset=UTF-8');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <META HTTP-EQUIV="Cache-Control" CONTENT="no-cache"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <META content="MSHTML 6.00.2900.2180" name=GENERATOR/>
        <link rel="stylesheet" type="text/css" href="css/cpanel.css"/>
        <link rel="stylesheet" type="text/css" href="css/cpanel_complementos.css" />
        <link rel="stylesheet" type="text/css" href="flexcroll/flexcrollstyles.css" />

        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" />
        <!--<link rel="stylesheet" type="text/css" href="css/cssJqueryUi/base/jquery.ui.all.css" />--

        <script src="scripts/validaciones.js"></script>

        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> -->

        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>-->
        <script src="scripts/jquery-1.4.2_min.js" type="text/javascript"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
        <!-- <script src="scripts/jquery-ui-1.8.17.custom.min.js" type="text/javascript"></script> -->

        <script src="flexcroll/flexcroll.js" type="text/javascript"></script>
        <script src="scripts/cpanel_scripts.js" type="text/javascript"></script>

        <script src="scripts/jQueryTinyscrollbar/jquery.tinyscrollbar.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="scripts/jQueryTinyscrollbar/jquery.tinyscrollbar.css" />


        <script type="text/javascript" src="scripts/colorpicker/js/colorpicker.js"></script>
        <script type="text/javascript" src="scripts/colorpicker/js/eye.js"></script>
        <script type="text/javascript" src="scripts/colorpicker/js/layout.js"></script>
        <script type="text/javascript" src="scripts/colorpicker/js/utils.js"></script>

        <link rel="stylesheet" href="scripts/colorpicker/css/colorpicker.css" type="text/css" />
        <!--<link rel="stylesheet" media="screen" type="text/css" href="scripts/colorpicker/css/layout.css" /> -->

        <!--
        <script src="scripts/JQueryTimepickr/dist/jquery.timepickr.js" type="text/javascript"></script>
        <script src="scripts/JQueryTimepickr/dist/ui.timepickr.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="scripts/JQueryTimepickr/dist/jquery.timepickr.css" />
        <link rel="stylesheet" type="text/css" href="scripts/JQueryTimepickr/dist/themes/default/ui.timepickr.css" /> -->

        <script type="text/javascript">
        $(document).ready(function()
        {

            if(/productos.php/.test(document.URL))
            {
                $("#fila_nombre").show();
				$("#fila_nombre_eng").show();
                $("#fila_descripcion_eng").hide();
                $("#btn_esp").css("color", "black");

                $("#btn_esp").click(function()
                {
                    $("#fila_nombre").fadeIn(1000);
                    $("#fila_nombre_eng").hide();
                    $("#fila_descripcion").fadeIn(1000);
                    $("#fila_descripcion_eng").hide();
                    $("#btn_esp").css("color", "black")
                    $("#btn_ing").css("color", "#fff")
                })

                $("#btn_ing").click(function()
                {

                    $("#fila_nombre_eng").fadeIn(1000);
                    $("#fila_nombre").hide();
                    $("#fila_descripcion_eng").fadeIn(1000);
                    $("#fila_descripcion").hide();
                    $("#btn_ing").css("color", "black")
                    $("#btn_esp").css("color", "#fff")
                })
            }

            if(/inicio.php/.test(document.URL))
            {
                $("#fila_contenido_en").hide();
                $("#btn_esp").css("color", "black")
                $("#btn_esp").click(function()
                {
                    $("#fila_contenido").fadeIn(1000);
                    $("#fila_contenido_en").hide();
                    $("#btn_esp").css("color", "black")
                    $("#btn_ing").css("color", "#fff")
                })

                $("#btn_ing").click(function()
                {

                    $("#fila_contenido_en").fadeIn(1000);
                    $("#fila_contenido").hide();
                    $("#btn_ing").css("color", "black")
                    $("#btn_esp").css("color", "#fff")
                })
            }

            if(/conocenos.php/.test(document.URL))
            {
                $("#fila_contenido_en").hide();
                $("#btn_esp").css("color", "black")
                $("#btn_esp").click(function()
                {
                    $("#fila_contenido").fadeIn(1000);
                    $("#fila_contenido_en").hide();
                    $("#btn_esp").css("color", "black")
                    $("#btn_ing").css("color", "#fff")
                })

                $("#btn_ing").click(function()
                {

                    $("#fila_contenido_en").fadeIn(1000);
                    $("#fila_contenido").hide();
                    $("#btn_ing").css("color", "black")
                    $("#btn_esp").css("color", "#fff")
                })
            }

            if(/preguntas_frecuentes.php/.test(document.URL))
            {
                $("#fila_pregunta_en").hide();
                $("#fila_respuesta_en").hide();
                $("#btn_esp").css("color", "black")
                $("#btn_esp").click(function()
                {
                    $("#fila_pregunta").fadeIn(1000);
                    $("#fila_respuesta").fadeIn(1000);
                    $("#fila_pregunta_en").hide();
                    $("#fila_respuesta_en").hide();
                    $("#btn_esp").css("color", "black")
                    $("#btn_ing").css("color", "#fff")
                })

                $("#btn_ing").click(function()
                {

                    $("#fila_pregunta_en").fadeIn(1000);
                    $("#fila_respuesta_en").fadeIn(1000);
                    $("#fila_pregunta").hide();
                    $("#fila_respuesta").hide();
                    $("#btn_ing").css("color", "black")
                    $("#btn_esp").css("color", "#fff")
                })
            }

            /* slider de imagenes */
            if(/imagenes_slider.php/.test(document.URL))
            {
                $("#fila_imagen_1_en").hide();
                $("#fila_imagen_2_en").hide();
                $("#fila_imagen_3_en").hide();
                $("#fila_imagen_4_en").hide();
                $("#fila_imagen_5_en").hide();
                $("#fila_imagen_6_en").hide();
                $("#fila_metas_1_en").hide();
                $("#fila_metas_2_en").hide();
                $("#fila_metas_3_en").hide();
                $("#fila_metas_4_en").hide();
                $("#fila_metas_5_en").hide();
                $("#fila_metas_6_en").hide();

                $("#br_imagen_1").hide();
                $("#br_imagen_2").hide();
                $("#br_imagen_3").hide();
                $("#br_imagen_4").hide();
                $("#br_imagen_5").hide();
                $("#br_imagen_6").hide();

                $("#br_metas_1").hide();
                $("#br_metas_2").hide();
                $("#br_metas_3").hide();
                $("#br_metas_4").hide();
                $("#br_metas_5").hide();
                $("#br_metas_6").hide();

                $("#br_imagen_1_en").hide();
                $("#br_imagen_2_en").hide();
                $("#br_imagen_3_en").hide();
                $("#br_imagen_4_en").hide();
                $("#br_imagen_5_en").hide();
                $("#br_imagen_6_en").hide();

                $("#br_metas_1_en").hide();
                $("#br_metas_2_en").hide();
                $("#br_metas_3_en").hide();
                $("#br_metas_4_en").hide();
                $("#br_metas_5_en").hide();
                $("#br_metas_6_en").hide();


                $("#btn_esp").css("color", "black")
                $("#btn_esp").click(function()
                {
                    $("#fila_imagen_1").fadeIn(1000);
                    $("#fila_imagen_2").fadeIn(1000);
                    $("#fila_imagen_3").fadeIn(1000);
                    $("#fila_imagen_4").fadeIn(1000);
                    $("#fila_imagen_5").fadeIn(1000);
                    $("#fila_imagen_6").fadeIn(1000);
                    $("#fila_metas_1").fadeIn(1000);
                    $("#fila_metas_2").fadeIn(1000);
                    $("#fila_metas_3").fadeIn(1000);
                    $("#fila_metas_4").fadeIn(1000);
                    $("#fila_metas_5").fadeIn(1000);
                    $("#fila_metas_6").fadeIn(1000);

                    $("#fila_imagen_1_en").hide();
                    $("#fila_imagen_2_en").hide();
                    $("#fila_imagen_3_en").hide();
                    $("#fila_imagen_4_en").hide();
                    $("#fila_imagen_5_en").hide();
                    $("#fila_imagen_6_en").hide();
                    $("#fila_metas_1_en").hide();
                    $("#fila_metas_2_en").hide();
                    $("#fila_metas_3_en").hide();
                    $("#fila_metas_4_en").hide();
                    $("#fila_metas_5_en").hide();
                    $("#fila_metas_6_en").hide();

                    $("#btn_esp").css("color", "black")
                    $("#btn_ing").css("color", "#fff")
                })

                $("#btn_ing").click(function()
                {

                    $("#fila_imagen_1").hide();
                    $("#fila_imagen_2").hide();
                    $("#fila_imagen_3").hide();
                    $("#fila_imagen_4").hide();
                    $("#fila_imagen_5").hide();
                    $("#fila_imagen_6").hide();
                    $("#fila_metas_1").hide();
                    $("#fila_metas_2").hide();
                    $("#fila_metas_3").hide();
                    $("#fila_metas_4").hide();
                    $("#fila_metas_5").hide();
                    $("#fila_metas_6").hide();

                    $("#fila_imagen_1_en").fadeIn(1000);
                    $("#fila_imagen_2_en").fadeIn(1000);
                    $("#fila_imagen_3_en").fadeIn(1000);
                    $("#fila_imagen_4_en").fadeIn(1000);
                    $("#fila_imagen_5_en").fadeIn(1000);
                    $("#fila_imagen_6_en").fadeIn(1000);
                    $("#fila_metas_1_en").fadeIn(1000);
                    $("#fila_metas_2_en").fadeIn(1000);
                    $("#fila_metas_3_en").fadeIn(1000);
                    $("#fila_metas_4_en").fadeIn(1000);
                    $("#fila_metas_5_en").fadeIn(1000);
                    $("#fila_metas_6_en").fadeIn(1000);

                    $("#btn_ing").css("color", "black")
                    $("#btn_esp").css("color", "#fff")
                })
            }

            if(/imagenes_slider_/.test(document.URL))
            {
                $("#fila_imagen_1_en").hide();
                $("#fila_imagen_2_en").hide();
                $("#fila_imagen_3_en").hide();
                $("#fila_imagen_4_en").hide();
                $("#fila_imagen_5_en").hide();
                $("#fila_imagen_6_en").hide();
                $("#fila_metas_1_en").hide();
                $("#fila_metas_2_en").hide();
                $("#fila_metas_3_en").hide();
                $("#fila_metas_4_en").hide();
                $("#fila_metas_5_en").hide();
                $("#fila_metas_6_en").hide();

                $("#br_imagen_1").hide();
                $("#br_imagen_2").hide();
                $("#br_imagen_3").hide();
                $("#br_imagen_4").hide();
                $("#br_imagen_5").hide();
                $("#br_imagen_6").hide();

                $("#br_metas_1").hide();
                $("#br_metas_2").hide();
                $("#br_metas_3").hide();
                $("#br_metas_4").hide();
                $("#br_metas_5").hide();
                $("#br_metas_6").hide();

                $("#br_imagen_1_en").hide();
                $("#br_imagen_2_en").hide();
                $("#br_imagen_3_en").hide();
                $("#br_imagen_4_en").hide();
                $("#br_imagen_5_en").hide();
                $("#br_imagen_6_en").hide();

                $("#br_metas_1_en").hide();
                $("#br_metas_2_en").hide();
                $("#br_metas_3_en").hide();
                $("#br_metas_4_en").hide();
                $("#br_metas_5_en").hide();
                $("#br_metas_6_en").hide();


                $("#btn_esp").css("color", "black")
                $("#btn_esp").click(function()
                {
                    $("#fila_imagen_1").fadeIn(1000);
                    $("#fila_imagen_2").fadeIn(1000);
                    $("#fila_imagen_3").fadeIn(1000);
                    $("#fila_imagen_4").fadeIn(1000);
                    $("#fila_imagen_5").fadeIn(1000);
                    $("#fila_imagen_6").fadeIn(1000);
                    $("#fila_metas_1").fadeIn(1000);
                    $("#fila_metas_2").fadeIn(1000);
                    $("#fila_metas_3").fadeIn(1000);
                    $("#fila_metas_4").fadeIn(1000);
                    $("#fila_metas_5").fadeIn(1000);
                    $("#fila_metas_6").fadeIn(1000);

                    $("#fila_imagen_1_en").hide();
                    $("#fila_imagen_2_en").hide();
                    $("#fila_imagen_3_en").hide();
                    $("#fila_imagen_4_en").hide();
                    $("#fila_imagen_5_en").hide();
                    $("#fila_imagen_6_en").hide();
                    $("#fila_metas_1_en").hide();
                    $("#fila_metas_2_en").hide();
                    $("#fila_metas_3_en").hide();
                    $("#fila_metas_4_en").hide();
                    $("#fila_metas_5_en").hide();
                    $("#fila_metas_6_en").hide();

                    $("#btn_esp").css("color", "black")
                    $("#btn_ing").css("color", "#fff")
                })

                $("#btn_ing").click(function()
                {

                    $("#fila_imagen_1").hide();
                    $("#fila_imagen_2").hide();
                    $("#fila_imagen_3").hide();
                    $("#fila_imagen_4").hide();
                    $("#fila_imagen_5").hide();
                    $("#fila_imagen_6").hide();
                    $("#fila_metas_1").hide();
                    $("#fila_metas_2").hide();
                    $("#fila_metas_3").hide();
                    $("#fila_metas_4").hide();
                    $("#fila_metas_5").hide();
                    $("#fila_metas_6").hide();

                    $("#fila_imagen_1_en").fadeIn(1000);
                    $("#fila_imagen_2_en").fadeIn(1000);
                    $("#fila_imagen_3_en").fadeIn(1000);
                    $("#fila_imagen_4_en").fadeIn(1000);
                    $("#fila_imagen_5_en").fadeIn(1000);
                    $("#fila_imagen_6_en").fadeIn(1000);
                    $("#fila_metas_1_en").fadeIn(1000);
                    $("#fila_metas_2_en").fadeIn(1000);
                    $("#fila_metas_3_en").fadeIn(1000);
                    $("#fila_metas_4_en").fadeIn(1000);
                    $("#fila_metas_5_en").fadeIn(1000);
                    $("#fila_metas_6_en").fadeIn(1000);

                    $("#btn_ing").css("color", "black")
                    $("#btn_esp").css("color", "#fff")
                })
            }


            //agregamos tatget _blank al enlace
            $("#ManualdeAyuda").attr({target:"_blank"});

            if(/secciones.php/.test(document.URL))
            {
                $('#color').ColorPicker({
                    onSubmit: function(hsb, hex, rgb, el) {
                        $(el).val(hex);
                        $(el).ColorPickerHide();
                    },
                    onBeforeShow: function () {
                        $(this).ColorPickerSetColor(this.value);
                    }
                })

                .bind('keyup', function(){
                    $(this).ColorPickerSetColor(this.value)
                });

                if($("#id_usuario").val()=="")
                    $("#id_usuario").val(<?php echo $_SESSION["user"]['id'];?>);

                /*$('#hora').timepickr({
                    handle: '#trigger-test',
                    convention: 12
                })*/
            }

            if(/noticias.php/.test(document.URL))
            {
                if($("#id_usuarios").val()=="")
                    $("#id_usuarios").val(<?php echo $_SESSION["user"]['id'];?>);
            }

            if(/fotos.php/.test(document.URL))
            {
                if($("#id_usuarios").val()=="")
                    $("#id_usuarios").val(<?php echo $_SESSION["user"]['id'];?>);
            }

            if(/videos.php/.test(document.URL))
            {
                if($("#id_usuarios").val()=="")
                    $("#id_usuarios").val(<?php echo $_SESSION["user"]['id'];?>);
            }

            if($("#form_grid_pedido").length)
            {
                //$('#contenedor_opciones').tinyscrollbar();
                if($('#contenedor_opciones').length)
                {
                    $('#contenedor_opciones').tinyscrollbar();
                }
                else
                {
                    if($('#contenedor_opciones_tienda_rango').length)
                        $('#contenedor_opciones_tienda_rango').tinyscrollbar();

                }
            }


            /** validamos los usuarios */
            if(/usuarios.php/.test(document.URL))
            {
                if($("#password").val()!= "")
                {
                    $("#password").attr("disabled","disabled");
                    $("#rpass").attr("disabled","disabled");

                    $("#rpass").val($("#password").val())
                }

                if($("#usuario").val()!= "")
                    $("#usuario").attr("readonly","readonly");

                $("#id_cambio").change(function()
                {
                    if($("#id_cambio").val()==1)
                    {
                        $("#password").removeAttr("disabled");
                        $("#rpass").removeAttr("disabled");

                        $("#password").val("");
                        $("#rpass").val("");
                    }

                });
            }

            <?php
            if($_GET["scrollto"]) {?>
            $.scrollTo(<?=htmlspecialchars($_GET["scrollto"])?>)
            <?php }
            ?>

            //grupos
        $.fn.grupos=function(){
            $(this).click(function(){
                campo=$(this).attr("id").split("lblgrupo_").join("#grupo_");
                $(".grupo:visible").slideUp(450,function(){});
                if($(campo).css("display")=="block"){
                    $(campo).slideUp(450,function(){});
                }
                else{
                    $(campo).slideDown(450,function(){});
                    $(".lblgrupo").removeClass("grupo_selected");
                    $(this).addClass("grupo_selected");
                }
            });
        }
        $(".lblgrupo").grupos();
        $(".lblgrupo:first").click();

        //alertas y errores
        $("#linkalerta").fancybox({
            overlayOpacity:0.87,
            overlayColor:"#000",
            showCloseButton:false,
            modal:true,
            centerOnScroll:true,
            padding:7
        });

        //autosize
        //$("textarea").resizable();
        //irpagina
        $("#irpag").keypress(function(e){
            if(e.keyCode==13){
                //alert(this.value);
                ir_pagina_ajax(this.value);
                return false;
            }
        });
        //scrollers
        $.localScroll();

        //combobox
        if(!/publicidad.php/.test(document.URL))
            $("select").msDropDown();

        //actualizar
        $(".icono_actualizar").click(function(){

            url = document.location.href;
            //url='<?=$_SERVER["PHP_SELF"]?>';
            //url='<?=$_SERVER["PHP_SELF"]?>?id=1';
            //window.location.href=url+"?scrollto="+$(this).position().top;
            window.location.href = url;
            return false;
        })
        //ocultar / mostrar columnas
        $(".listacolumnas input").change(function(){
            col=$(this).attr("rel");
            if(this.checked){
                $("#grilladatos .col"+col).show();
            }else{
                $("#grilladatos .col"+col).hide();
            }
        });
        $(".icono_columnas").hover(function(){
            $(".listacolumnas").css("left", $(".icono_columnas").position().left+40-$(".listacolumnas").innerWidth());
            $(".listacolumnas").css("top", $(".icono_columnas").position().top+$(".icono_columnas").height());
            $(".listacolumnas").fadeIn(450, function(){});
        }, function(){
            $(".listacolumnas").fadeOut(450, function(){});
        });
        //buscador
        buscar_activo=false;
        $(".icono_buscar").click(function(){
            buscar_activo=!buscar_activo;
            if(buscar_activo){
                $(".field_buscador .form_fila").fadeIn(450,function(){})
                $(".field_buscador").slideDown(450, function(){});
            }else{
                $(".field_buscador .form_fila").fadeOut(450,function(){})
                $(".field_buscador").slideUp(450, function(){});
            }
        })
        //maximizar / minizar
        maximizar_activo=true;
        $(".icono_maxmin").click(function(){
            maximizar_activo=!maximizar_activo;
            if(maximizar_activo){
                $("#grilladatos").slideDown(450, function(){});
                $(".grillabar:last").fadeIn(450, function(){});
            }
            else{
                $("#grilladatos").slideUp(450, function(){})
                $(".grillabar:last").fadeOut(450, function(){});
            }
        });
        $(".field_buscador").slideUp(450, function(){});
        $(".field_buscador .form_fila").fadeOut(450,function(){})
        //ordenar registros
        ordenactivo=false;
        $(".icono_ordenar").click(function(){
            $(".icono_ordenar img").attr("src","images/icono-orden-guardar.png");
            ordenactivo=!ordenactivo;
            if(ordenactivo){
                $(".itemordenar").each(function(){
                    num=parseInt($(this).html());
                    cad='<input type="text" class="inputordenar" value="'+num.toString()+'" name="ord[]" />';
                    cad+='<input type="hidden" class="hiddenordenar" value="'+num.toString()+'" name="ord_ant[]" />';
                    $(this).html(cad);
                }).css("background", "#E3E6E1");
                $(".inputordenar").focus(function(){
                    $(this).val("");
                })
                $(".inputordenar").blur(function(){
                    if($(this).val()==""){
                        $(this).val($(this).parent().find(".hiddenordenar:first").val());
                    }
                })
            }
            else{
                $("#form_grid #accion").val(11);
                $("#form_grid #idobj").val("");
                $("#form_grid").attr("action",window.location.href);
                $("#form_grid").submit();
            }
            return false;
        })
        //asignar anio
        ordenactivo=false;
        $(".icono_anio").click(function(){
            $(".icono_anio img").attr("src","images/icono-orden-guardar.png");
            ordenactivo=!ordenactivo;
            if(ordenactivo){
                esprimero=true;
                $(".colnombre:gt(0)").each(function(){
                    num=parseInt($(this).text());
                    cad='<input type="text" class="inputordenar" value="'+num+'" name="ord[]" />';
                    cad+='<input type="hidden" class="hiddenordenar" value="'+num+'" name="ord_ant[]" />';
                    $(this).html(cad);
                }).removeAttr("onclick").css("background", "#E3E6E1");
                $(".inputordenar").focus(function(){
                    $(this).val("");
                })
                $(".inputordenar").blur(function(){
                    if($(this).val()==""){
                        $(this).val($(this).parent().find(".hiddenordenar:first").val());
                    }
                })
            }
            else{
                $("#form_grid #accion").val(13);
                $("#form_grid #idobj").val("");
                $("#form_grid").attr("action",window.location.href);
                $("#form_grid").submit();
            }
            return false;
        });

        if(/asignacion.php/.test(document.URL))
        {
            if ($('#producto_aviso').length!=0)
            {
                $("#err_id_eventos").html($("#producto_aviso").val());

                $("#linkalerta").click();
            }
        }
    });

    //ajax columnas
    function grid_pagina_ajax(obj) {
        //var f=document.form_grid;
        nro=$(obj).attr("rel");
        ir_pagina_ajax(nro);
        return false;
    };
    function ir_pagina_ajax(ir){
        nro=ir
        nrores=20;
        $("#cargandoregistros").show();
        a = "qs=<?php echo $obj_adm->urlparam;?>&pag="+nro+"&tipo=ajax&paginacion="+$("#rpp").val()+"&pagina=<?=$obj_adm->pagina?>";

        //alert(a)
        $.ajax({
            url:"ajaxgrid.php",
            data:"qs=<?php echo $obj_adm->urlparam;?>&pag="+nro+"&tipo=ajax&paginacion="+$("#rpp").val()+"&pagina=<?=$obj_adm->pagina?>",
            type:"POST",
            success:function(data){
                $("#gridajax").html(data);
                $("#pdesde").html(nrores*(nro-1)+1);
                if(nrores*nro>$("#pde").text())
                    $("#phasta").html($("#pde").text());
                else
                    $("#phasta").html(nrores*nro);
                $("#cargandoregistros").hide();
            }
        });
        return false;
    };
    function ir_paginacion(){
        ir_pagina_ajax(1);
        /*
        $.ajax({
            url:"ajaxgrid.php",
            data:"tipo=ajax&paginacion="+$("#rpp").val()+"&pagina=<?=basename($_SERVER["PHP_SELF"])?>",
            type:"POST",
            success:function(data){
                $("#gridajax").html(data);
                $("#pdesde").html(nrores*(nro-1)+1);
                if(nrores*nro>$("#pde").text())
                    $("#phasta").html($("#pde").text());
                else
                    $("#phasta").html(nrores*nro);
                $("#cargandoregistros").hide();
            }
        });
        return false;*/
    }
    function grid_desactivar_ajax(id){
        alert($("#irpag").val())
        $.ajax({
            url:"ajaxgrid.php",
            type:"POST",
            data:"tipo=ajax&pagina=<?=basename($_SERVER["PHP_SELF"])?>&pag="+$("#irpag").val()+"&desactivar=1&idobj="+id,
            //data:"tipo=ajax&pagina=<?=basename($_SERVER["PHP_SELF"])?>&pag="+$("#irpag").val()+"&desactivar=1&idobj="+id+"&accion=10",
            //data:"tipo=ajax&pagina=<?=basename($_SERVER["PHP_SELF"])?>&pag="+$("#irpag").val(),
            success:function(data){
                $("#gridajax").html(data);
            }
        });
    }
    function grid_activar_ajax(id){
        $.ajax({
            url:"ajaxgrid.php",
            type:"POST",
            data:"tipo=ajax&pagina=<?=basename($_SERVER["PHP_SELF"])?>&pag="+$("#irpag").val()+"&activar=1&idobj="+id,
            success:function(data){
                $("#gridajax").html(data);
            }
        });
    }
    function grid_eliminar_ajax(id){
        $.ajax({
            url:"ajaxgrid.php",
            type:"POST",
            data:"tipo=ajax&pagina=<?=basename($_SERVER["PHP_SELF"])?>&pag="+$("#irpag").val()+"&eliminar=1&idobj="+id,
            success:function(data){
                $("#gridajax").html(data);
            }
        });
    }
    configdatetime={
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        showOn: 'both',
        buttonImage: 'images/b-calendario.jpg',
        buttonImageOnly: true,
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre']
    };
    function quitarerror(id){
        $(id).change(function(){
            if($(this).val().length>0){
                $(this).removeClass("form_fila_err");
            }
        })
    }
    function upd_lista(idc){
        cad='';
        $("#trans_r_"+idc+" input").each(function(){
            cad+=","+$(this).val();
        })
        $("#"+idc).val(cad.substr(1));
    }
    /**transferencia*/
    function script_transferencia(idc){
        upd_lista(idc)
        $("#trans_r_"+idc).sortable({
            update:function(){
                upd_lista(idc)
            }
        });
        trans_btn_verify(idc);
    }
    function trans_btn_r(idc){
        $("#trans_l_"+idc+" input").each(function(){
            if($(this).attr("checked")==true){
                $(this).parent().appendTo("#trans_r_"+idc);
            }
        })
        script_transferencia(idc)
        //$("#trans_r_"+idc).sortable();
    }
    function trans_btn_l(idc){
        $("#trans_r_"+idc+" input").each(function(){
            if($(this).attr("checked")==true){
                $(this).parent().appendTo("#sombra_trans_"+idc);
            }
        })
        script_transferencia(idc)
        //$("#trans_r_"+idc).sortable();
    }
    function trans_btn_verify(idc){
        $(".trans_l input[type=checkbox]").each(function(){
            $(this).removeAttr("checked");
            $(this).removeAttr("selected");
        })
        r=$("#trans_r_"+idc+" .trans_li2_r").length;
        l=$("#trans_l_"+idc+" .sombra_trans .trans_li2_r").length;
        if(r==0){
            $(".trans_btn:eq(1)").hide();
        }else{
            $(".trans_btn:eq(1)").show();
        }
        if(l==0){
            $(".trans_btn:eq(0)").hide();
        }else{
            $(".trans_btn:eq(0)").show();
        }
    }
    function hacerupload(id,extensiones,descripcion){
        if(extensiones==null){
            extensiones="*.*";
            //extensiones="*.jpg, *.png";
            descripcion="Todos los archivos";
        }
        $("#udf_"+id).uploadify({
            'uploader'    :    'uploadify/uploadify.swf',
            'script'      :    'upload_'+id+'.php',
            'folder'      :    '',
            'cancelImg'   :    'uploadify/cancel.png',
            'auto'        :    true,
            'fileExt'     :    extensiones,
            'fileDesc'    :    descripcion,
            'height'      :    21,
            'cancelImg'   :    'images/cerrar-precarga.png',
            'onComplete'  :    function(a,b,c,d,e){
                $("#"+id).val(d);
            }
        });
        $("#udfborrar_"+id).click(function(){
            $("#"+id).val("");
            return false;
        })
        $("#udfsubir_"+id+"").tooltip({effect: 'slide'});
    }
    function marcatodo() {
        fldName = 'reg';
        var f = document.form_grid;
        var c = f.multi.checked;
        $("input[id*=reg]").attr("checked",c);
        var n2 = 0;		var n = f.totalreg.value;
        for (i=1; i <=n; i++) {
            cb = eval( 'f.' + fldName + '' + i );
            if (cb) {
                cb.checked = c;
                n2++;
            }
        }
        if (c) {
            f.chk_true.value = n2;
        } else {			f.chk_true.value = 0;
        }	}	function grid_eliminar_multiple() {
        var f=document.form_grid;
        if(f.chk_true.value==0){
            alert('Debe seleccionar al menos un registro.');
            return;
        }
    }

    function verifica_galeria(url)
    {
        /*if(/galeria/.test(url))
        {
            if(/Crear/.test($(".form_submit").val()))
            {
                $("#accion").val("50");
            }
            if(/Actualizar/.test($(".form_submit").val()))
            {
                $("#accion").val("51");
                //alert($("#orden_ant").val())
            }
        }*/
    }

    function mostrar_tooltip(id)
    {
        $("#"+id+"").tooltip({effect: 'slide',position: "center right", offset: [-2, 10]});
    }

    function comprueba_evaluacion()
    {
        msj = "";
        if(/postulante.php/.test(document.URL))
        {
            if($("#ptos_estudios").val() == "")
                msj += "El Puntaje de Formaci\xF3n o Nivel Acad\xE9mica debe estar entre 10 y 15 \n";

            if($("#ptos_laboral").val() == "")
                msj += "El Puntaje de la Experiencia Laboral debe estar entre 10 y 15 \n";

            if($("#ptos_capacitacion").val() == "")
                msj += "El Puntaje de la Capacitaci\xF3n Especializada para el servicio requerido debe estar entre 6 y 9 \n";

            if($("#ptos_ofimatica").val() == "")
                msj += "El Puntaje de Conocimientos de Ofim\xE1tica y Especializaci\xF3n al \xE1rea que postula debe estar entre 6 y 9 \n";

            if(msj != "")
            {
                alert(msj);
                return 0;
            }
            else
            {
                return 1;
            }
        }
        else if(/miembros.php/.test(document.URL))
        {
            if(($("#pass").val() != "") && ($("#pass_axu").val() != "" ))
            {
                if( $("#pass").val() != $("#pass_aux").val() )
                {
                    alert("Las claves deben ser iguales");
                    return 0;
                }
                else
                {
                    return 1;
                }
            }
        }
        else
        {
            return 1;
        }
    }

    function muestra_info()
    {
        alert("No tiene permisos para realizar esta acci\xF3n. Comunicarse con el administrador general del sistema para que edite los campos");
    }
        </script>
    </head>
    <body>
        <a id="linkalerta" href="#capa_errores"></a>
        <a name="inicio"></a>
        <div id="img_top">
            <div id="imgtopcontainer">
                <img src="images/<?=$img_top?>" border="0" />
                <div id="linkstopbar">
                    <div id="main_cerrar"><a id="main_cerrar" href="logout.php"><img src="images/ico_csesion.png"/>Cerrar Sesi&oacute;n</a></div>
                    <div id="main_modificar"><a href="mod_pass.php"><img src="images/ico_pass.png"/>Modificar Contrase&ntilde;a</a></div>
                    <div id="main_usuario"><img src="images/ico_usuario.png"/><?=$_SESSION["user"]["nombre"];?></div>
                </div>
            </div>
        </div>
        <div id="main_menu" align="center"><?=$menu->ver()?></div>
        <div id="main_titulo" align="center"><?=($titulo)?></div>