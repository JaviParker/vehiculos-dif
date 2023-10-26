@extends('vehiculos.app')

@section('content2')
<!-- </nav> -->
<div class="filter-list">
    <div class="filter-item">
        <label for="marca">Marca:</label>
        <select id="marca">
            <option value="">Seleccionar Marca</option>
            <option value="marca1">Marca 1</option>
            <option value="marca2">Marca 2</option>
            <option value="marca3">Marca 3</option>
        </select>
    </div>
    <div class="filter-item">
        <label for="año">Año:</label>
        <select id="año">
            <option value="">Seleccionar Año</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
        </select>
    </div>
    <div class="filter-item">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" placeholder="Buscar por Modelo">
    </div>
    <div class="filter-item">
        <label for="placa">Placa:</label>
        <input type="text" id="placa" placeholder="Buscar por Placa">
    </div>
    <div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Botones para abrir modales -->
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditar">Editar Vehículo</button>
            <button class="btn btn-success" data-toggle="modal" data-target="#modalAgregar">Añadir Vehículo</button>
        </div>
    </div>
</div>

<!-- Modal para Editar Vehículo -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
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
                <div class="modal-body">
                    <!-- Campos para editar vehículo -->
                        <div class="form-group">
                            <label>Serie:</label>
                            <input type="text" class="form-control" id="input-Num_Serie" name="Num_serieE">
                        </div>
                        <div class="form-group">
                            <label>Economico:</label>
                            <input type="text" class="form-control" id="input-economico" name="economicoE">
                        </div>
                        <div class="form-group">
                            <label>Tipo:</label>
                            <input type="text" class="form-control" id="input-tipo" name="tipoE">
                        </div>
                        <div class="form-group">
                            <label for="">Marca:</label>
                            <input type="text" class="form-control" id="input-marca" name="marcaE">
                        </div>
                        <div class="form-group">
                            <label for="">Modelo:</label>
                            <input type="text" class="form-control" id="input-modelo" name="modeloE">
                        </div>
                        <div class="form-group">
                            <label for="">Placa:</label>
                            <input type="text" class="form-control" id="input-placa" name="placaE">
                            </div>
                        <div class="form-group">
                            <label for="">Propietario:</label>
                            <input type="text" class="form-control" id="input-propietario" name="propietarioE">
                        </div>
                        <div class="form-group">
                            <label for="">Chofer:</label>
                            <input type="text" class="form-control" id="input-chofer" name="choferE">
                        </div>
                        <div class="form-group">
                            <label for="">Resguardo:</label>
                            <input type="text" class="form-control" id="input-resguardo" name="resguardoE">
                        </div>
                        <div class="form-group">
                            <label for="">Poliza:</label>
                            <input type="text" class="form-control" id="input-poliza" name="polizaE">
                        </div>
                        <div class= "form-group">
                            <label for="">Certificado:</label>
                            <input type="text" class="form-control" id="input-certificado" name="certificadoE">
                        </div>
                        <div class="form-group">
                            <label for="">Departamento:</label>
                            <input type="text" class="form-control" id="input-departamento" name="departamentoE">
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
                <div class="modal-body">
                    <!-- Campos para añadir vehículo -->
                    <div class="form-group">
                        <label>Serie:</label>
                        <input type="text" class="form-control" name="Num_serieAdd">
                    </div>
                        @error('Num_serieAdd')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    
                    <div class="form-group">
                        <label>Economico:</label>
                        <input type="text" class="form-control" name="economicoAdd">
                    </div>
                    <div class="form-group">
                        <label>Tipo:</label>
                        <input type="text" class="form-control" name="tipoAdd">
                    </div>
                    <div class="form-group">
                        <label for="">Marca:</label>
                        <input type="text" class="form-control" name="marcaAdd">
                    </div>
                    <div class="form-group">
                        <label for="">Modelo:</label>
                        <input type="text" class="form-control" name="modeloAdd">
                    </div>
                    <div class="form-group">
                        <label for="">Placa:</label>
                        <input type="text" class="form-control" name="placaAdd">
                        </div>
                    <div class="form-group">
                        <label for="">Propietario:</label>
                        <input type="text" class="form-control" name="propietarioAdd">
                    </div>
                    <div class="form-group">
                        <label for="">Chofer:</label>
                        <input type="text" class="form-control" name="choferAdd">
                    </div>
                    <div class="form-group">
                        <label for="">Resguardo:</label>
                        <input type="text" class="form-control" name="resguardoAdd">
                    </div>
                    <div class="form-group">
                        <label for="">Poliza:</label>
                        <input type="text" class="form-control" name="polizaAdd">
                    </div>
                    <div class= "form-group">
                        <label for="">Certificado:</label>
                        <input type="text" class="form-control" name="certificadoAdd">
                    </div>
                    <div class="form-group">
                        <label for="">Departamento:</label>
                        <input type="text" class="form-control" name="departamentoAdd">
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
                @foreach($vehiculos as $vehiculo)
                    <li class="list-group-item" data-Num_Serie="{{ $vehiculo->Num_Serie }}" data-economico="{{ $vehiculo->Economico }}" 
                    data-tipo="{{ $vehiculo->Tipo }}" data-marca="{{ $vehiculo->Marca }}" data-modelo="{{ $vehiculo->Modelo }}" 
                    data-placa="{{ $vehiculo->Placa }}" data-propietario="{{ $vehiculo->Propietario }}" data-chofer="{{ $vehiculo->Chofer }}"
                    data-resguardo="{{ $vehiculo->Resguardo }}" data-certificado="{{ $vehiculo->Certificado }}" data-departamento="{{ $vehiculo->Departamento }}" 
                    data-poliza="{{ $vehiculo->Poliza }}">
                        <span class="badge badge-primary">{{ $vehiculo->Economico}}</span>
                        <strong>{{ $vehiculo->Marca}}</strong>
                        <p>{{ $vehiculo->Placa }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div id="detalle-vehiculo">
                <h2>Detalles del Vehículo</h2>
                <p>Serie: <span id="detalle-num_serie"></span></p>
                <p>Económico: <span id="detalle-economico"></span></p>
                <p>Tipo: <span id="detalle-tipo"></span></p>
                <p>Marca: <span id="detalle-marca"></span></p>
                <p>Modelo: <span id="detalle-modelo"></span></p>
                <p>Placa: <span id="detalle-placa"></span></p>
                <p>Propietario: <span id="detalle-propietario"></span></p>
                <p>Chofer: <span id="detalle-chofer"></span></p>
                <p>Resguardo: <span id="detalle-resguardo"></span></p>
                <p>Certificado: <span id="detalle-certificado"></span></p>
                <p>Poliza: <span id="detalle-poliza"></span></p>
                <p>Departamento: <span id="detalle-departamento"></span></p>
</div>
<!-------------------card de mantenimiento -------------------------- -->
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <form method="GET"  id="form_mantenimiento">
    @csrf
    <h5 class="card-title">Mantenimiento</h5>
    <button type="submit" id="btn_mantenimiento" class="btn btn-primary">Go to Mantenimiento</button>
    </form>
  </div>
</div>

@endsection
