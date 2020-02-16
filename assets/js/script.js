//llamdo a modal + formulario de registro producto
function LLamarModal(){
    $('#modal_cont').modal('show');
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/mitienda/index.php/Cproducto/f_registro_producto",
            data:obj,
            success:function(data){
                $("#formulario").html(data);
            }
           }
          )
}

function regProducto(){
    /* var nom_producto=$('input[name=nom_producto]').val();*/ //<--- para seleccionar por nombre
    var nom_producto=$('#nom_producto').val();
    var cantidad=$('#cantidad').val();
    var detalle=$('#detalle').val();
    var pre_compra=$('#pre_compra').val();
    var pre_venta=$('#pre_venta').val();

    var obj={
        nom_producto:nom_producto,
        cantidad:cantidad,
        detalle:detalle,
        pre_compra:pre_compra,
        pre_venta:pre_venta
    };

    $.ajax({type:"POST",
            url:"http://localhost/mitienda/index.php/Cproducto/registrar_producto",
            data:obj,
            success:function(data)
            {
                $("#respuesta_form").html(data);//esta diciendo que en caso de exito  se cargara ese div con ese id y ya que hay un mesaje en el controlador en html tambien se cargara

                setTimeout(
                    function(){
                        $('#modal_cont').modal('hide');
                    },2000);

                setTimeout(
                    function(){
                        location.reload();
                    },2000);
            }

           }
          )
}

// llamado a modal + formulario de eliminacion de cliente
function MEliProducto(id_producto){
    $('#modal_cont_sm').modal('show');
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/mitienda/index.php/Cproducto/f_eliminar_producto/"+id_producto,
            data:obj,
            success:function(data){
                $("#formulario_sm").html(data);
            }
           }
          )
}
function EliProducto(id_producto){
    var obj={id_producto:id_producto};
    $.ajax({type:"POST",
            url:"http://localhost/mitienda/index.php/Cproducto/eliminar_producto",
            data:obj,
            success:function(data)
            {
                $("#respuesta_sm").html(data);

                /*                setTimeout(
                    function(){
                        $('#modal_cont_sm').modal('hide');
                    },2000);

                setTimeout(
                    function(){
                       location.reload();
                    },2000);*/
            }

           }
          )
}

function MEditProducto(id_producto){
    $("#modal_cont").modal("show");
    var obj="";
    $.ajax({
        type:"POST",
        url:"http://localhost/mitienda/index.php/Cproducto/f_editar_producto/"+id_producto,
        data:obj,
        success:function(data)
        {
            $("#formulario").html(data)
        }
    })
}

function GProducto(id_producto){
    var nom_producto=$('#nom_producto').val();
    var cantidad=$('#cantidad').val();
    var detalle=$('#detalle').val();
    var pre_compra=$('#pre_compra').val();
    var pre_venta=$('#pre_venta').val();

    var obj={
        nom_producto:nom_producto,
        cantidad:cantidad,
        detalle:detalle,
        pre_compra:pre_compra,
        pre_venta:pre_venta
    };

    $.ajax({type:"POST",
            url:"http://localhost/mitienda/index.php/Cproducto/g_edi_producto/"+id_producto,
            data:obj,
            success:function(data)
            {
                $("#respuesta_form").html(data);

                setTimeout(
                    function(){
                        $('#modal_cont').modal('hide');
                    },2000);

                setTimeout(
                    function(){
                        location.reload();
                    },2000);
            }

           }
          )

}

function buscar(){
    var valor_bus=$("#valor_bus").val();
    var obj={valor_bus:valor_bus};
    $.ajax({
        type:"POST",
        url:"http://localhost/mitienda/index.php/Cproducto/buscar_producto",
        data:obj,
        success:function(data)
        {
            $("#lista_item").html(data);
        }
        
    })
}
