/////para llenar el div con los datos del vehiculo 

$(document).ready(function() {
    var items2 = $(".mantenimientos")
    items2.on("click", function() {
        var mantenimientoID = $(this).data("Mantenimiento_id");
        var tipo = $(this).data("tiposervicio");
        var costo = $(this).data("costo");
        var fecha = $(this).data("fecha");
        var kilometraje = $(this).data("kilometraje");
        var descripcion = $(this).data("descripcion");
        var proveedor = $(this).data("proveedor");
        var serie = $(this).data("Num_Serie");
      
        $("#detalle-tipo").text(tipo);
        $("#detalle-costo").text(costo);
        $("#detalle-fecha").text(fecha);
        $("#detalle-kilometraje").text(kilometraje);
        $("#detalle-descripcion").text(descripcion);
        $("#detalle-proveedor").text(proveedor);

        items2.removeClass('active'); 
        $(this).addClass('active');
        // document.getElementById('input-Num_Serie').value = num_serie;
        // document.getElementById('input-economico').value = economico;
        // document.getElementById('input-tipo').value = tipo;
        // document.getElementById('input-marca').value = marca;
        // document.getElementById('input-modelo').value = modelo;
        // document.getElementById('input-placa').value = placa;
        // document.getElementById('input-propietario').value = propietario;
        // document.getElementById('input-chofer').value = chofer;
        // document.getElementById('input-resguardo').value = resguardo;
        // document.getElementById('input-poliza').value = poliza;
        // document.getElementById('input-certificado').value = certificado;
        // document.getElementById('input-departamento').value = departamento;

        
    });
});
/////para llenar el div con los datos del mantenimiento 

$(document).ready(function() {
    var items = $(".vehiculos")
    items.on("click", function() {        
        var num_serie = $(this).data("num_serie");
        var economico = $(this).data("economico");
        var tipo = $(this).data("tipo");
        var marca = $(this).data("marca");
        var modelo = $(this).data("modelo");
        var placa = $(this).data("placa");
        var propietario = $(this).data("propietario");
        var chofer = $(this).data("chofer");
        var resguardo = $(this).data("resguardo");
        var certificado = $(this).data("certificado");
        var poliza = $(this).data("poliza");
        var departamento = $(this).data("departamento");

        $("#detalle-num_serie").text(num_serie);
        $("#detalle-economico").text(economico);
        $("#detalle-tipo").text(tipo);
        $("#detalle-marca").text(marca);
        $("#detalle-modelo").text(modelo);
        $("#detalle-placa").text(placa);
        $("#detalle-propietario").text(propietario);
        $("#detalle-chofer").text(chofer);
        $("#detalle-resguardo").text(resguardo);
        $("#detalle-poliza").text(poliza);
        $("#detalle-certificado").text(certificado);
        $("#detalle-departamento").text(departamento);


        document.getElementById('input-Num_Serie').value = num_serie;
        document.getElementById('input-economico').value = economico;
        document.getElementById('input-tipo').value = tipo;
        document.getElementById('input-marca').value = marca;
        document.getElementById('input-modelo').value = modelo;
        document.getElementById('input-placa').value = placa;
        document.getElementById('input-propietario').value = propietario;
        document.getElementById('input-chofer').value = chofer;
        document.getElementById('input-resguardo').value = resguardo;
        document.getElementById('input-poliza').value = poliza;
        document.getElementById('input-certificado').value = certificado;
        document.getElementById('input-departamento').value = departamento;

        //Destacar seleccionado
        items.removeClass('active'); 
        $(this).addClass('active');

        //Cambiar el link de mantenimiento
        const linkToMant = $('#linkToMant');
        linkToMant.attr('href', `/show/${num_serie}`);
    });
});

//para editar el vehiculo/////////////////////////////////
document.addEventListener("DOMContentLoaded", function () {
const vehiculoForm = document.getElementById("vehiculo-form");
const numSerieInput = document.getElementById("input-Num_Serie");
const submitButton = document.getElementById("submit-button");

numSerieInput.addEventListener("input", function () {
    // No actualices la URL en cada cambio del input
});

// Agrega un evento de clic al botón
submitButton.addEventListener("click", function () {
    // Actualiza la URL con el valor actual del input
    vehiculoForm.action = "/update/" + numSerieInput.value;
    // Envía el formulario
    vehiculoForm.submit();

    
});
});


document.addEventListener("DOMContentLoaded", function () {
    // Obtener el valor del input de mantenimiento_id
    const btn_mantenimiento2 = document.getElementById("btn_mantenimiento")
    const vehiculoid = document.getElementById("input-Num_Serie");
    const mantenimientoform = document.getElementById("form_mantenimiento");


    vehiculoid.addEventListener("input", function () {
        // No actualices la URL en cada cambio del input
    });

    btn_mantenimiento2.addEventListener("click", function () {
    // Redirigir a la vista de mantenimiento con el valor obtenido
    //mantenimientoform.action = "{{ route('mantenimiento.show', '') }}/" + vehiculoid.value;
    mantenimientoform.action = "/show/" + vehiculoid.value;

    mantenimientoform.submit();
  });
});