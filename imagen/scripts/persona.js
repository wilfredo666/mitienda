lista1 = [];
var imagem = "";

function subir(e) {
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
        imagem = image;
    };

}

// function readImage(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             $('#blah').attr('src', e.target.result); // Renderizamos la imagen
//         }
//         reader.readAsDataURL(input.files[0]);
//     }
// }

// $("#file").change(function() {
//     // Código a ejecutar cuando se detecta un cambio de archivO
//     readImage(this);
// });

// $("input[name='archivo']").on("change", function() {
//     var formData = new FormData($("#formulario")[0]);
//     $.ajax({
//         url: "http://localhost/pruebaobjeto/persona/subir",
//         type: "POST",
//         data: formData,
//         contentType: false,
//         processData: false,
//         success: function(data) {
//             $("#preview").html(data);
//             alert(data);
//             // $("#img_persona").val(datos);

//         }
//     });
// });

function fotos(event) {

    event.preventDefault();
    var formData = new FormData($("#form-create-persona")[0]);
    console.log(formData);
    $.ajax({
        url: "http://localhost/pruebaobjeto/persona/agregarConFoto",
        type: "POST",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,

        success: function(respuesta) {
            if (respuesta === "exito") {
                alert("Los datos han sido guardados correctamente");
                $("#msg-error").hide();
                $("#form-create-persona")[0].reset();
            } else if (respuesta === "error") {
                alert("Los datos no se pudo guardar");
            } else {
                $("#msg-error").show();
                $(".list-errors").html(respuesta);
            }
        }
    });
}
// galerias de fotos

function galeria(e) {
    e.preventDefault();
    var formdata = new FormData($("#form_subidas")[0]);
    $.ajax({
        url: "http://localhost/pruebaobjeto/imagenes/subir",
        type: "POST",
        data: formdata,
        contentType: false,
        processData: false,
        cache: false,
        success: function(resp) {
            alert(resp);
        }
    });
};










function personaAR(nombre, apellido, edad, portada) {
    this.nombre = nombre
    this.apellido = apellido
    this.edad = edad
    this.portada = portada
}

function registroArchivo() {
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var edad = $("#edad").val();
    var portada = $("#img_persona").val();
    console.log(portada);
    var per = new personaAR(nombre, apellido, edad, portada);
    lista1.push(per);
    console.log(lista1);

    //para mandar al backen
    var ob = { nombre: nombre, apellido: apellido, edad: edad, foto: portada };
    $.ajax({
        type: "POST",
        data: ob,
        url: "http://localhost/pruebaobjeto/persona/agregarConFoto",
        before: function(object) {
            $("#listafoto").html("cargando ...");
        },
        success: function(data) {
            $("#listafoto").html(data);
        }
    });
    listaArchivos();
}


function listaArchivos() {

    var cadena = "<tr>" +
        "<th> Nombre </th>" +
        "<th> Apellido </th>" +
        "<th> Edad </th>" +
        "<th> portada </th>" +
        "</tr>";
    for (var i = 0; i < lista1.length; i++) {
        cadena = cadena + "<tr><td>" + lista1[i].nombre + "</td>" +
            "<td>" + lista1[i].apellido + "</td>" +
            "<td>" + lista1[i].edad + "</td>" +
            "<td><img src='http://localhost/pruebaobjeto/fotos/" + lista1[i].portada + "' width='75' height='50' class='img-thumbnail image-responsive imagen'></td>" +
            "<td> <button class='btn_eliminar' onclick='eliminar(" + i + ")'> Eliminar </button></td></tr>";
    }
    cadena = cadena + "</tabla>"

    $("#listarchivos").html("<table class='table table-border'>" + cadena + "</table>");
}




var lista = [];
var productos = [];

function persona(nombre, apellido, edad) {
    this.nombre = nombre
    this.apellido = apellido
    this.edad = edad
}

// function item(nombre, apellido, edad) {
//     var per = new venta(nombre, apellido, edad);
//     lista.push(per);
//     listar();
// }
// $(document).ready(function() {
//     listar();
//     $(".edicion").css("display", "none");
// });

function registro() {
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var edad = $("#edad").val();
    var per = new persona(nombre, apellido, edad);
    lista.push(per);

    //para mandar al backen
    // var ob = { nombre: nombre, apellido: apellido, edad: edad };
    // $.ajax({
    //     type: "POST",
    //     data: ob,
    //     url: "http://localhost/pruebaobjeto/persona/guardar",
    //     before: function(object) {
    //         $("#lista").html("cargando ...");
    //     },
    //     success: function(data) {
    //         $("#lista").html(data);
    //     }
    // });

    listar();

}

function listar() {


    var cadena = "<tr>" +
        "<th> Nombre </th>" +
        "<th> Apellido </th>" +
        "<th> Edad </th>" +
        "</tr>";
    for (var i = 0; i < lista.length; i++) {
        cadena = cadena + "<tr><td>" + lista[i].nombre + "</td><td>" + lista[i].apellido + "</td><td>" + lista[i].edad + "</td>" +
            "<td> <button class='btn_eliminar' onclick='eliminar(" + i + ")'> Eliminar </button></td></tr>";
    }
    cadena = cadena + "</tabla>"

    $("#listarpersonas").html("<table class='table table-border'>" + cadena + "</table>");
}

function registrarPersona() {
    var listaper = JSON.stringify(lista);

    var ob = {
        lista_persona: listaper
    };
    $.ajax({
        type: "POST",
        data: ob,
        url: "http://localhost/pruebaobjeto/persona/guardar",
        before: function(object) {
            $("#panel_agregar").html("cargando ...");
        },
        success: function(data) {
            $("#panel_agregar").html(data);
            setTimeout(function() {
                $('#carritoModal').modal('hide');
            }, 1000);
            setTimeout(function() {
                location.reload();
            }, 1500);
        }
    });
}

function eliminar(i) {

    lista.splice(i, 1);
    listar();

}

function eliminarPersona(id) {

    var ob = { id_persona: id, };
    $.ajax({
        type: "POST",
        data: ob,
        url: "http://localhost/pruebaobjeto/persona/eliminar",
        before: function(object) {
            $("#eliminar-persona").html("cargando ...");
        },
        success: function(data) {
            $("#eliminar-persona").html(data);

            setTimeout(function() {
                location.reload();
            }, 100);
        }
    });

}

function editarPersona(id_persona) {

    var id = id_persona;
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var edad = $("#edad").val();
    var ob = { id_persona: id, nombre: nombre, apellido: apellido, edad: edad };
    $.ajax({
        type: "POST",
        data: ob,
        url: "http://localhost/pruebaobjeto/persona/cambiar",
        before: function(object) {
            $("#editar-persona").html("cargando ...");
        },
        success: function(data) {
            $("#editar-persona").html(data);

            setTimeout(function() {
                location.reload();
            }, 100);

        }
    });
}

function buscar() {
    var nombre = $("#nombre").val();
    var ob = { nombre: nombre };
    $.ajax({
        type: "POST",
        data: ob,
        url: "http://localhost/pruebaobjeto/persona/listarbusqueda",
        before: function(object) {
            $("#buscar").html("cargando ...");
        },
        success: function(data) {
            $("#buscar").html(data);

            setTimeout(function() {
                location.reload();
            }, 1000);

        }
    });
}

var form = document.getElementById("buscarrr")
var boton = document.getElementById("botonn")
var resultado = document.getElementById("resultado")
var filtrar = () => {
        resultado.innerHTML = " "
        const texto = form.value.toLowerCase()
        for (let list of lista) {
            let nombre = list.nombre.toLowerCase()
            if (nombre.indexOf(texto) != -1) {
                resultado.innerHTML += `
      <li>${list.nombre} ${list.apellido} ${list.edad} </li>
      `
            }
        }
        if (resultado.innerHTML === '') {
            resultado.innerHTML += `
      <li>no encontrado</li>
      `
        }
    }
    // boton.addEventListener('click', filtrar)


function validar(valor, cant, nombre) {
    var tam = valor.length;
    if (tam < cant) {
        $("#respuesta_" + nombre).html("<label>cantidad minima " + cant + " Caracteres <label/>");
        $("#" + nombre).css("border", "2px solid  red");
    } else {
        if (tam == cant) {
            $("#respuesta_" + nombre).html("");
            $("#" + nombre).css("border", "2px solid  green");
        }

    }
}

function soloLetras(e) {
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key).toLowerCase();
    letras = " abcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-38-46-164"; // teclas especiales permitidos para input
    teclado_especial = false;
    for (var i in especiales) {
        if (key == especiales[i]) { // recorrido de teclas especiales
            teclado_especial = true;
            break;
        }
    }
    if (letras.indexOf(teclado) == -1 && !teclado_especial) {
        return false;

    }
}

function soloNumeros(e) {
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key).toLowerCase();
    numeros = " 123456789";
    especiales = "8-37-38-46-164";
    teclado_especial = false;
    for (var i in especiales) {
        if (key == especiales[i]) {
            teclado_especial = true;
            break;
        }
    }
    if (numeros.indexOf(teclado) == -1 && !teclado_especial) {
        return false;

    }
}

function pruebaemail(valor) {
    re = /^([\A-Z da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
    if (!re.exec(valor)) {
        // alert('email no valido');
        $("#emailOk").html("<label>El formato de email " + valor + " es incorrecto <label/>");
        $("#email").css("border", "2px solid  red");
    } else {
        $("#emailOk").html("<label>email " + valor + " valido <label/>");
        $("#email").css("border", "2px solid  green");
        $("#emailOk").css("color", "green")
    }
}


function modaltiempo() {

    setTimeout(function() { $('#exampleModal').modal('hide'); }, 4000);
}

function modalt() {

    $("#exampleModal").modal("show")
    modaltiempo()
}

function modal() {

    $("#exampleModal").modal("show")
    mostrar_personas()
}

function mostrar_personas() {
    var obj = "";
    $.ajax({
        type: "POST",
        url: "http://localhost/pruebaobjeto/persona/formModal",
        data: obj,
        before: function(object) {
            $("#panel_personas").html("cargando ...");
        },
        success: function(data) {
            $("#panel_personas").html(data);
        }
    });
}

function modalRegistro() {
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var edad = $("#edad").val();
    var ob = { nombre: nombre, apellido: apellido, edad: edad };
    $.ajax({
        type: "POST",
        data: ob,
        url: "http://localhost/pruebaobjeto/persona/guardar",
        before: function(object) {
            $("#panel_registro_personas").html("cargando ...");
        },
        success: function(data) {
            $("#panel_registro_personas").html(data);

            setTimeout(function() {
                $('#exampleModal').modal('hide');
            }, 2000);
            setTimeout(function() {
                location.reload();
            }, 2500);
        }
    });



}

function Vmodal() {
    $("#eliminarModal").modal("show");

}

function eliminarPersonaM(id) {

    var ob = { id_persona: id, };
    $.ajax({
        type: "POST",
        data: ob,
        url: "http://localhost/pruebaobjeto/persona/eliminar",
        before: function(object) {
            $("#eliminar_per").html("cargando ...");
        },
        success: function(data) {
            $("#eliminar_per").html(data);

            setTimeout(function() {
                location.reload();
            }, 100);
        }
    });

}

// function Emodal() {
//     $("#editarModal").modal("show");

// }

function editar(id) {
    $("#editarModal").modal("show");
    var ob = { id_persona: id, };
    $.ajax({
        type: "POST",
        url: "http://localhost/pruebaobjeto/persona/editarModal/",
        data: ob,
        before: function(object) {
            $("#panel_editar").html("cargando ...");
        },
        success: function(data) {
            $("#panel_editar").html(data);
        }
    });
}

function editarPersonaM() {

    var id = $("#id_persona").val();
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var edad = $("#edad").val();
    var ob = { id_persona: id, nombre: nombre, apellido: apellido, edad: edad };
    $.ajax({
        type: "POST",
        data: ob,
        url: "http://localhost/pruebaobjeto/persona/cambiar",
        before: function(object) {
            $("#panel_editar_personas").html("cargando ...");
        },
        success: function(data) {
            $("#panel_editar_personas").html(data);

            setTimeout(function() {
                $('#editarModal').modal('hide');
            }, 2000);
            setTimeout(function() {
                location.reload();
            }, 2500);

        }
    });
}



function buscar() {
    var texto = $("#buscaper").val();
    var ob = { nombre: texto };
    $.ajax({
        type: "POST",
        data: ob,
        url: "http://localhost/pruebaobjeto/persona/listarbusqueda",
        before: function(object) {
            $("#per").html("cargando ...");
        },
        success: function(data) {

            $("#per").html(data);
        }
    });
}

function agregarCarrito() {

    $("#carritoModal").modal("show")
    formCarrito();

}

function formCarrito() {
    var obj = "";
    $.ajax({
        type: "POST",
        url: "http://localhost/pruebaobjeto/persona/formModal",
        data: obj,
        before: function(object) {
            $("#panel_carrito").html("cargando ...");
        },
        success: function(data) {
            $("#panel_carrito").html(data);
        }
    });
}
// $(document).on("ready", main);

// function main() {
//     $("#login").submit(function(event) {
//         event.preventDefault();
//         $.ajax({
//             url: $(this).attr("action"),
//             type: $(this).attr("method"),
//             data: $(this).serialize(),
//             success: function(resp) {
//                 if (resp === "error") {
//                     alert("Los datos no existen");
//                 } else {
//                     window.location.href = "http://localhost/pruebaobjeto/persona";
//                 }
//             }
//         });
//     });

//     $("#cerrar").on("click", function(event) {
//         event.preventDefault();
//         $.ajax({
//             url: "http://localhost/pruebaobjeto/login/cerrar",
//             type: "POST",
//             data: {},
//             success: function() {
//                 window.location.href = "http://localhost/pruebaobjeto/login";
//             }
//         });
//     });
// }
function venta(nombre, detalle, precio) {
    this.nombre = nombre
    this.detalle = detalle
    this.precio = precio
}

function registroCarrito() {
    var nombre = $("#nombre").val();
    var detalle = $("#detalle").val();
    var precio = $("#precio").val();

    var vent1 = new venta(nombre, detalle, precio);
    productos.push(vent1);
    var nombre = $("#nombre").val() = "";
    var detalle = $("#detalle").val() = "";
    var precio = $("#precio").val() = "";
    listarCarrito();
}



// var ob = { nombre: nombre, detalle: detalle, precio: precio };
// $.ajax({
// 	type: "POST",
// 	data: ob,
// 	url: "http://localhost/pruebaobjeto/producto/agregarProducto",
// 	before: function(object) {
// 		$("#productos").html("cargando ...");
// 	},
// 	success: function(data) {
// 		$("#productos").html(data);
// 	}
// });

function listarCarrito() {

    var cadena = "<tr>" +
        "<th> Producto </th>" +
        "<th> Descripcion </th>" +
        "<th> Precio </th>" +
        "</tr>";
    var total = 0;
    for (var i = 0; i < productos.length; i++) {

        var id_producto = productos[i].id_producto;
        var producto = productos[i].producto;
        var descripcion = productos[i].descripcion;
        var precio = productos[i].precio;

        cadena = cadena + "<tr>" +

            "<td>" + producto + "</td>" +
            "<td>" + descripcion + "</td>" +
            "<td>" + precio + "</td>" +


            "<td><button type='button' class='btn btn-danger btn-xs' onclick='btn_eliminar(" + i + ")'><span class='fa fa-remove'></span> X </button></td>"
        "</tr>";
    }
    $("#productos").html("<table class='table table-border'>" + cadena + "</table>");

}





function Vusuario() {

    $("#usuarioModal").modal("show")
    var obj = "";
    $.ajax({
        type: "POST",
        url: "http://localhost/pruebaobjeto/usuario",
        data: obj,
        success: function(data) {
            $("#Usuario").html(data);
        }
    });
}