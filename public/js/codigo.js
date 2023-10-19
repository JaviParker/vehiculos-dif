const profileButton = document.getElementById('profile-button');
const dropdownContent = document.getElementById('dropdown-content');

/////para llenar el div con los datos del vehiculo 
profileButton.addEventListener('click', function() {
    if (dropdownContent.style.display === 'block') {
        dropdownContent.style.display = 'none';
    } else {
        dropdownContent.style.display = 'block';
    }
});
$(document).ready(function() {
    $(".list-group-item").on("click", function() {
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
    vehiculoForm.action = "{{ route('vehiculos.update', '') }}/" + numSerieInput.value;
    // Envía el formulario
    vehiculoForm.submit();

    
});
});