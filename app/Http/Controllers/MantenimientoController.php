<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mantenimiento;
use App\Models\Proveedore;

class MantenimientoController extends Controller
{
    public function store(Request $request)
    {
        $mantenimientos = new Mantenimiento();
        $mantenimientos -> Num_Serie = $request-> post('serieE');
        $mantenimientos -> Proveedor_id = $request-> post('proveedorE');
        $mantenimientos -> Tipo_servicio = $request-> post('tipoE');
        $mantenimientos -> Costo = $request-> post('costoE');
        $mantenimientos -> fecha = $request-> post('fechaE');
        $mantenimientos -> Kilometraje = $request-> post('kilometrajeE');
        $mantenimientos -> Descripcion = $request-> post('descripcionE');
    
        $mantenimientos->save();
    
        // return redirect()->route("vehiculos.index");
        
        // return view('vehiculos', ['vehiculos' => $vehiculos]);
    
    }

    public function show($Num_Serie)
{

    $proveedores = Proveedore::all();
    // Aquí puedes obtener los datos de mantenimiento para el vehículo con Num_Serie.
    $mantenimientos = Mantenimiento::where('Num_Serie', $Num_Serie)->get();

    return view('mantenimiento', ['mantenimientos' => $mantenimientos, 'proveedores' => $proveedores,'Num_Serie' => $Num_Serie]);
    // echo $Num_Serie;
}
}
