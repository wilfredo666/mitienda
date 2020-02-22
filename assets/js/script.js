//variables globales
var LVenta=[];

function ingresar(){
    var correo=$('#correo').val();
    var clave=$('#clave').val();

    var obj={
        correo:correo,
        clave:clave
    };

    $.ajax({type:"POST",
            url:"http://localhost/mitienda/index.php/Cmitienda/ingresar",
            data:obj,
            success:function(data)
            {
                location.reload();
            }

           }
          )
}

//Producto
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

function cargar(e){
    // Creamos el objeto de la clase FileReader
    let reader = new FileReader();

    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    reader.readAsDataURL(e.target.files[0]);

    // Le decimos que cuando este listo ejecute el código interno
    reader.onload = function() {
        let preview = document.getElementById('preview'),
            image = document.createElement('img');

        image.src = reader.result;

        preview.innerHTML = '';
        preview.append(image);
    };


}
$("#car_imagen").on("change", function(){
    /*var formData = new FormData($("#formulario")[0]);
var ruta = "../mover_archivos.php";
 $.ajax({
   url: ruta,
   type: "POST",
   data: formData,
   contentType: false,
   processData: false,
   success: function(datos)
   {   
      $("#img_inmueble").val(datos);
      mostrar_archivo();
   }
 });*/
    alert("Hola mundo");
});

function regProducto(){
    /* var nom_producto=$('input[name=nom_producto]').val();*/ //<--- para seleccionar por nombre
    var nom_producto=$('#nom_producto').val();
    var cantidad=$('#cantidad').val();
    var detalle=$('#detalle').val();
    var pre_compra=$('#pre_compra').val();
    var pre_venta=$('#pre_venta').val();
    //imagen
    var formData = new FormData($("#formulario")[0]);

    var obj={
        nom_producto:nom_producto,
        cantidad:cantidad,
        detalle:detalle,
        pre_compra:pre_compra,
        pre_venta:pre_venta,
        formData:formData
    };

    $.ajax({type:"POST",
            url:"http://localhost/mitienda/index.php/Cproducto/registrar_producto",
            data:obj,
            contentType: false,
            processData: false,
            success:function(data)
            {
                alert(obj);
                /*$("#respuesta_form").html(data);*/
                /*setTimeout(
                    function(){
                        $('#modal_cont').modal('hide');
                    },2000);

                setTimeout(
                    function(){
                        location.reload();
                    },2000);*/
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
                $("#respuesta_sm").html(data);//el mensaje esta en el controlador porque dvuelve la funsion

                setTimeout(
                    function(){
                        $('#modal_cont_sm').modal('hide');
                    },1000);

                setTimeout(
                    function(){
                        location.reload();
                    },1000);
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

//ventas
function venta(nom_producto,pre_producto,id_producto,id_cliente,cantidad_vent,total_ven,fecha,hora){
    this.nom_producto=nom_producto;
    this.pre_producto=pre_producto;
    this.id_producto=id_producto;
    this.id_cliente=id_cliente;
    this.cantidad_vent=cantidad_vent;
    this.total_ven=total_ven;
    this.fecha=fecha;
    this.hora=hora;
}
function obj_venta(nom_producto,pre_producto,id_producto,id_cliente,cantidad_vent,total_ven,fecha,hora){
    var v=new venta(nom_producto,pre_producto,id_producto,id_cliente,cantidad_vent,total_ven,fecha,hora);
    LVenta.push(v);
    listar_venta();
}
var i=0;
function listar_venta(){
    var cadena="<tr><td>"+LVenta[i].nom_producto+"</td><td>"+LVenta[i].pre_producto+"</td><td>"+LVenta[i].cantidad_vent+"</td><td>"+LVenta[i].total_ven+"</td><td>"+"<button type='button' class='btn btn-danger' onclick=''>Eliminar</button>"+"</td></tr>"; 
    $('#lista_ventas').append(cadena);
    i=i+1;
}
function MRegVenta(){
    $('#modal_fs').modal('show');
    var obj="";
    $.ajax({type:"POST",
            url:"http://localhost/mitienda/index.php/Cventa/f_reg_venta/",
            data:obj,
            success:function(data){
                $("#formulario_fs").html(data);
            }
           }
          )
}
function AgregarVenta(){
    //separando los valores de producto
    var producto=$('#producto').val().split("-");
    var producto_nom=producto[0];
    var producto_id=producto[1];
    var producto_pre=producto[2];

    var id_cliente=$('#cliente').val();
    var cantidad=$('#cantidad').val();
    $('#cliente').val();

    var obj = {
        id_producto:producto_id,
        producto_nom : producto_nom,
        id_cliente:id_cliente,
        producto_pre : producto_pre,
        cantidad : cantidad
    };
    //envia el objeto con funcion ajax a controlador
    $.ajax({
        type: "POST",
        data: obj,
        url: "http://localhost/mitienda/index.php/Cventa/agregar_venta",
        before:function(object){
            $('#respuesta').html("Procesando, espere pro favor....");//elemento que queremos poner mietras ajax carga
        },
        success: function(data)
        {
            $('#respuesta').html(data);//resultado de la funcion
        }
    });

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
