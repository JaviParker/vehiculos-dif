<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedore;

class ProveedorController extends Controller
{
    //
    public function store(Request $request)
    {
        $proveedores = new Proveedore();
        $proveedores -> Nombre = $request-> post('nombreAdd');
        $proveedores -> Propietario = $request-> post('propietarioAdd');
        $proveedores -> RFC = $request-> post('rfcAdd');
        $proveedores -> Calle = $request-> post('calleAdd');
        $proveedores -> Colonia = $request-> post('coloniaAdd');
        $proveedores -> Estado = $request-> post('estadoAdd');
        $proveedores -> Codigo_postal = $request-> post('codigoAdd');
    
        $proveedores->save();
    
        // return redirect()->route("vehiculos.index");
        
        // return view('vehiculos', ['vehiculos' => $vehiculos]);
    
    }

}
