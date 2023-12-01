@extends('layouts.app')

@section('vehiculos')
<div class="filter-list row justify-content-start mb-4">
    <div class="filter-item col-1 justify-content-center align-self-center">
        <p style="color: #757575; font-size: .6em; line-height: 10vh; margin: 0">Filtrar</p>
    </div>
    <div class="filter-item col">
        <select id="marca">
            <option value="">Seleccionar Marca</option>
            <option value="marca1">Marca 1</option>
            <option value="marca2">Marca 2</option>
            <option value="marca3">Marca 3</option>
        </select>
    </div>
    <div class="filter-item col">
        <select id="año">
            <option value="">Seleccionar Año</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
        </select>
    </div>
    <div class="filter-item col">
        <input type="text" id="modelo" placeholder="Buscar por Modelo">
    </div>
    <div class="filter-item col">
        <input type="text" id="placa" placeholder="Buscar por Placa">
    </div>
    <button class="btn btn-outline-primary col" data-toggle="modal" data-target="#modalEditar">Editar Vehículo</button>
    <button class="btn btn-outline-primary col" data-toggle="modal" data-target="#modalAgregar">Añadir Vehículo</button>

</div>

<!-- Modal para Editar Vehículo -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarLabel">Editar Vehículo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="vehiculo-form"> 
            @csrf
            @method("PUT")
                <div class="modal-body row row-cols-2">
                    <!-- Campos para editar vehículo -->
                        <div class="form-group col">
                            <label>Serie:</label>
                            <input type="text" class="form-control" id="input-Num_Serie" name="Num_serieE" placeholder="Serie">
                        </div>
                        <div class="form-group col">
                            <label>Economico:</label>
                            <input type="text" class="form-control" id="input-economico" name="economicoE" placeholder="Economico">
                        </div>
                        <div class="form-group col">
                            <label>Tipo:</label>
                            <input type="text" class="form-control" id="input-tipo" name="tipoE" placeholder="Tipo">
                        </div>
                        <div class="form-group col">
                            <label for="">Marca:</label>
                            <input type="text" class="form-control" id="input-marca" name="marcaE" placeholder="Marca">
                        </div>
                        <div class="form-group col">
                            <label for="">Modelo:</label>
                            <input type="text" class="form-control" id="input-modelo" name="modeloE" placeholder="Modelo">
                        </div>
                        <div class="form-group col">
                            <label for="">Placa:</label>
                            <input type="text" class="form-control" id="input-placa" name="placaE" placeholder="Placa">
                            </div>
                        <div class="form-group col">
                            <label for="">Propietario:</label>
                            <input type="text" class="form-control" id="input-propietario" name="propietarioE" placeholder="Propietario">
                        </div>
                        <div class="form-group col">
                            <label for="">Chofer:</label>
                            <input type="text" class="form-control" id="input-chofer" name="choferE" placeholder="Chofer">
                        </div>
                        <div class="form-group col">
                            <label for="">Resguardo:</label>
                            <input type="text" class="form-control" id="input-resguardo" name="resguardoE" placeholder="Resguardo">
                        </div>
                        <div class="form-group col">
                            <label for="">Poliza:</label>
                            <input type="text" class="form-control" id="input-poliza" name="polizaE" placeholder="Poliza">
                        </div>
                        <div class= "form-group col">
                            <label for="">Certificado:</label>
                            <input type="text" class="form-control" id="input-certificado" name="certificadoE" placeholder="Certificado">
                        </div>
                        <div class="form-group col">
                            <label for="">Departamento:</label>
                            <input type="text" class="form-control" id="input-departamento" name="departamentoE" placeholder="Departamento">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" id="submit-button" class="btn btn-primary" style="color: white">Guardar Cambios</button>
                </div>
            </form>
           
        </div>
    </div>
</div>
<!-- Modal para Añadir Vehículo -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="modalAgregarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarLabel">Añadir Vehículo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form method="post" action="{{ route('vehiculos.store') }}">
            @csrf
                <div class="modal-body row row-cols-2">
                    <!-- Campos para añadir vehículo -->
                    <div class="form-group col">
                        <label>Serie:</label>
                        <input type="text" class="form-control" name="Num_serieAdd">
                    </div>
                        @error('Num_serieAdd')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    
                    <div class="form-group col">
                        <label>Economico:</label>
                        <input type="text" class="form-control" name="economicoAdd">
                    </div>
                    <div class="form-group col">
                        <label>Tipo:</label>
                        <input type="text" class="form-control" name="tipoAdd">
                    </div>
                    <div class="form-group col">
                        <label for="">Marca:</label>
                        <input type="text" class="form-control" name="marcaAdd">
                    </div>
                    <div class="form-group col">
                        <label for="">Modelo:</label>
                        <input type="text" class="form-control" name="modeloAdd">
                    </div>
                    <div class="form-group col">
                        <label for="">Placa:</label>
                        <input type="text" class="form-control" name="placaAdd">
                        </div>
                    <div class="form-group col">
                        <label for="">Propietario:</label>
                        <input type="text" class="form-control" name="propietarioAdd">
                    </div>
                    <div class="form-group col">
                        <label for="">Chofer:</label>
                        <input type="text" class="form-control" name="choferAdd">
                    </div>
                    <div class="form-group col">
                        <label for="">Resguardo:</label>
                        <input type="text" class="form-control" name="resguardoAdd">
                    </div>
                    <div class="form-group col">
                        <label for="">Poliza:</label>
                        <input type="text" class="form-control" name="polizaAdd">
                    </div>
                    <div class= "form-group col">
                        <label for="">Certificado:</label>
                        <input type="text" class="form-control" name="certificadoAdd">
                    </div>
                    <div class="form-group col">
                        <label for="">Departamento:</label>
                        <input type="text" class="form-control" name="departamentoAdd">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" style="color: white">Añadir Vehículo</button>
                </div>
            </form>

        </div>
    </div>
</div> 
</div>
<!-- list group -->
<div class="container">
    <div class="row" style="margin-top: 10px">
        <div class="col-3 lista" style="border-right: 1px #757575 solid; height: 65vh; overflow-Y: scroll;">
            <ul class="list-group list-group-flush" style="border-radius: 20px">
                @foreach($vehiculos as $vehiculo)
                    <li class="vehiculos list-group-item" style="text-align: center;" data-num_serie="{{ $vehiculo->Num_Serie }}" data-economico="{{ $vehiculo->Economico }}" 
                    data-tipo="{{ $vehiculo->Tipo }}" data-marca="{{ $vehiculo->Marca }}" data-modelo="{{ $vehiculo->Modelo }}" 
                    data-placa="{{ $vehiculo->Placa }}" data-propietario="{{ $vehiculo->Propietario }}" data-chofer="{{ $vehiculo->Chofer }}"
                    data-resguardo="{{ $vehiculo->Resguardo }}" data-certificado="{{ $vehiculo->Certificado }}" data-departamento="{{ $vehiculo->Departamento }}" 
                    data-poliza="{{ $vehiculo->Poliza }}">
                        <div class="row">
                            <span class="col-6" style="margin-top: 5%">{{ $vehiculo->Economico}}</span>
                            <div class="col-6">
                                <strong class="row" style="margin-top: 10%">{{ $vehiculo->Marca}}</strong>
                                <p class="row">{{ $vehiculo->Placa }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-9" id="detalle-vehiculo">
            <div class="row row-cols-5 detalles mb-2">
                <p class="col-4">Serie: <span id="detalle-num_serie"></span></p>
                <p class="col-3">Económico: <span id="detalle-economico"></span></p>
                <p class="col-5">Tipo: <span id="detalle-tipo"></span></p>
                <p class="col-4">Marca: <span id="detalle-marca"></span></p>
                <p class="col-4">Modelo: <span id="detalle-modelo"></span></p>
                <p class="col-4">Placa: <span id="detalle-placa"></span></p>
                <p class="col-6">Propietario: <span id="detalle-propietario"></span></p>
                <p class="col-6">Chofer: <span id="detalle-chofer"></span></p>
                <p class="col-6">Resguardo: <span id="detalle-resguardo"></span></p>
                <p class="col">Certificado: <span id="detalle-certificado"></span></p>
                <p class="col">Poliza: <span id="detalle-poliza"></span></p>
                <p class="col">Departamento: <span id="detalle-departamento"></span></p>                
            </div>
            <div class="row row-cols-3 justify-content-between cards-div">
                <div class="col">
                    <!-------------------card de mantenimiento -------------------------- -->
                    <a class="btn-a" id="linkToMant" href="#">
                        <img src="{{ asset('assets/mantenimiento.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-overlay"></div>    
                        <p style="color: white;">Mantenimiento</p>                    
                    </a>
</div>
                <div class="col">
                    <a class="btn-a">
                        <img src="{{ asset('assets/combustible.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-overlay" style="background-color: rgba(236, 54, 77, 0.582);"></div>
                        <p style="color: white;">Combustible</p>
                    </a>
                </div>
                <div class="col">
                    <a class="btn-a">
                        <img src="{{ asset('assets/reporte.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-overlay" style="background-color: rgba(133, 143, 0, 0.582);"></div>
                        <p style="color: white;">Reportes</p>
                    </a>
                </div>
            </div>
        </div>


@endsection