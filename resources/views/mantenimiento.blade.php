@extends('layouts.app')

@section('vehiculos')
<div class="filter-list row justify-content-start mb-4">
    <div class="filter-item col-1 justify-content-center align-self-center">
        <p style="color: #757575; font-size: .6em; line-height: 10vh; margin: 0">Filtrar</p>
    </div>
    <div class="filter-item col">
        <select id="marca">
            <option value="">Seleccionar servicio</option>
            <option value="marca1">Marca 1</option>
            <option value="marca2">Marca 2</option>
            <option value="marca3">Marca 3</option>
        </select>
    </div>
    <div class="filter-item col">
        <select id="año">
            <option value="">Seleccionar fecha</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
        </select>
    </div>
    <div class="filter-item col">
        <input type="text" id="modelo" placeholder="Buscar por factura">
    </div>
    <div class="filter-item col">
        <input type="text" id="placa" placeholder="Buscar por proveedor">
    </div>
    <button class="btn btn-outline-primary col" data-toggle="modal" data-target="#modalEditar">Agregar mantenimiento</button>
    <button class="btn btn-outline-primary col" data-toggle="modal" data-target="#modalAgregar">Añadir proveedor</button>

</div>

<!-- Modal para agregar un mantenimiento a vehiculo -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarLabel">Agregar Mantenimiento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('mantenimiento.store') }}" id="vehiculo-form2"> 
            @csrf
                <div class="modal-body">
                    <!-- Campos para editar vehículo -->
                        <div class="form-group">
                            <label>Tipo de servicio:</label>
                            <input type="text" class="form-control" id="input-Num_Serie" name="tipoE">
                        </div>
                        <div class="form-group">
                            <label>Costo:</label>
                            <input type="text" class="form-control" id="input-economico" name="costoE">
                        </div>
                        <div class="form-group">
                            <label>Fecha del servicio:</label>
                            <input type="text" class="form-control" id="input-tipo" name="fechaE">
                        </div>
                        <div class="form-group">
                            <label for="">Kilometraje del vehiculo:</label>
                            <input type="text" class="form-control" id="input-marca" name="kilometrajeE">
                        </div>
                        <div class="form-group">
                            <label for="">Descripcion del servicio:</label>
                            <input type="text" class="form-control" id="input-modelo" name="descripcionE">
                        </div>
                        <div class="form-group">
                            <label for="">Proveedor:</label>
                                <select class="form-control" id="input-modelo" name="proveedorE">
                                @foreach($proveedores as $proveedor)
                                 <option value="{{ $proveedor->Proveedor_id }}">{{ $proveedor->Nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Vehiculo:</label>
                            <input type="text" class="form-control" id="input-modelo" name="serieE" value="{{$Num_Serie}} ">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" id="submit-button" class="btn btn-primary">Guardar Cambios</button>
                </div>
            </form>
           
        </div>
    </div>
</div>
<!-- Modal para Agregar proveedor -->
<div class="modal fade" id="modalAgregar" tabindex="-1" role="dialog" aria-labelledby="modalAgregarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAgregarLabel">Agregar Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <form method="post" action="{{ route('proveedor.store') }}">
            @csrf
                <div class="modal-body">
                    <!-- Campos para añadir vehículo -->
                    <div class="form-group">
                        <label>Nombre del proveedor:</label>
                        <input type="text" class="form-control" name="nombreAdd">
                    </div>
                    <div class="form-group">
                        <label>Propietario:</label>
                        <input type="text" class="form-control" name="propietarioAdd">
                    </div>
                    <div class="form-group">
                        <label for="">RFC:</label>
                        <input type="text" class="form-control" name="rfcAdd">
                    </div>
                    <div class="form-group">
                        <label for="">Calle:</label>
                        <input type="text" class="form-control" name="calleAdd">
                    </div>
                    <div class="form-group">
                        <label for="">Colonia:</label>
                        <input type="text" class="form-control" name="coloniaAdd">
                        </div>
                    <div class="form-group">
                        <label for="">Estado:</label>
                        <input type="text" class="form-control" name="estadoAdd">
                    </div>
                    <div class="form-group">
                        <label for="">Código postal:</label>
                        <input type="text" class="form-control" name="codigoAdd">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Añadir Vehículo</button>
                </div>
            </form>

        </div>
    </div>
</div> 

</div>

<!-- list group -->
<div class="container">
    <div class="row" style="margin-top: 10px">
        <div class="col-3" style="border-right: 1px #757575 solid; height: 65vh; overflow-Y: scroll;">
            <ul class="list-group list-group-flush" style="border-radius: 20px">
                @foreach($mantenimientos as $mantenimiento)
                    <li class="list-group-item mantenimientos" aria-current="true" style="text-align: center;" data-Mantenimientoid="{{ $mantenimiento->Mantenimiento_id }}" data-tiposervicio="{{ $mantenimiento->Tipo_servicio }}" 
                    data-costo="{{ $mantenimiento->Costo }}" data-fecha="{{ $mantenimiento->fecha }}" data-kilometraje="{{ $mantenimiento->Kilometraje }}" 
                    data-descripcion="{{ $mantenimiento->Descripcion }}" data-proveedor="{{ $mantenimiento->proveedore->Nombre }}" data-Num_serie="{{ $mantenimiento->Num_Serie }}">
                        <div class="row">
                            <span class="col-6" style="margin-top: 2%; font-size: .8rem">{{ $mantenimiento->Tipo_servicio}}</span>
                            <div class="col-6">
                                <strong class="row" style="margin-top: 10%">{{ substr($mantenimiento->fecha, 0, 10)}}</strong>
                                <p class="row">${{ $mantenimiento->Costo }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-9" id="detalle-vehiculo">
            <div class="row row-cols-5 detalles mb-4">
                <p class="col-6">Tipo de servicio: <span id="detalle-tipo"></span></p>
                <p class="col-3">Costo: <span id="detalle-costo"></span></p>
                <p class="col-3">Kilometraje: <span id="detalle-kilometraje"></span></p>
                <p class="col-6">fecha: <span id="detalle-fecha"></span></p>
                <p class="col-6">Proveedor: <span id="detalle-proveedor"></span></p>               
                <p class="col-12">Descripcion: <span id="detalle-descripcion"></span></p>
            </div>
            <div class="row row-cols-3 justify-content-between cards-div">
                <div class="col">
                    <!-------------------card de mantenimiento -------------------------- -->
                    <a class="btn-a" href="{{ url('/home')}}">
                        <img src="{{ asset('assets/mantenimiento.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-overlay"></div>    
                        <p style="color: white;">Vehiculos</p>                    
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