@extends('vehiculos.app')

@section('content1')
<!-- Botones para abrir modales -->
<div>
     
     <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditar">Agregar mantenimiento</button>
     <button class="btn btn-success" data-toggle="modal" data-target="#modalAgregar">Agregar proveedor</button>
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
                    <button type="submit" id="submit-button2" class="btn btn-primary">Guardar Cambios</button>
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
    <div class="row">
        <div class="col-12">
            <ul class="list-group">
                @foreach($mantenimientos as $mantenimiento)
                    <li class="list-group-item2" data-Mantenimientoid="{{ $mantenimiento->Mantenimiento_id }}" data-tiposervicio="{{ $mantenimiento->Tipo_servicio }}" 
                    data-costo="{{ $mantenimiento->Costo }}" data-fecha="{{ $mantenimiento->fecha }}" data-kilometraje="{{ $mantenimiento->Kilometraje }}" 
                    data-descripcion="{{ $mantenimiento->Descripcion }}" data-proveedor="{{ $mantenimiento->proveedore->Nombre }}" data-Num_serie="{{ $mantenimiento->Num_Serie }}"
                    >
                        <span class="badge badge-primary">{{ $mantenimiento->Mantenimiento_id}}</span>
                        <strong>{{ $mantenimiento->Tipo_servicio}}</strong>
                        <p>{{ $mantenimiento->Costo }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<div id="detalle-mantenimiento">
                <h2>Detalles del Mantenimiento</h2>
                <p>Tipo de servicio: <span id="detalle-tipo"></span></p>
                <p>Costo: <span id="detalle-costo"></span></p>
                <p>fecha: <span id="detalle-fecha"></span></p>
                <p>Kilometraje: <span id="detalle-kilometraje"></span></p>
                <p>Descripcion: <span id="detalle-descripcion"></span></p>
                <p>Proveedor: <span id="detalle-proveedor"></span></p>
</div>

@endsection