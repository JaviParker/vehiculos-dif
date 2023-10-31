<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;


class VehiculoController extends Controller
{

    public function store(Request $request)
{
    $vehiculos = new Vehiculo();
    $vehiculos -> Num_Serie = $request-> post('Num_serieAdd');
    $vehiculos -> economico = $request-> post('economicoAdd');
    $vehiculos -> tipo = $request-> post('tipoAdd');
    $vehiculos -> marca = $request-> post('marcaAdd');
    $vehiculos -> modelo = $request-> post('modeloAdd');
    $vehiculos -> placa = $request-> post('placaAdd');
    $vehiculos -> propietario = $request-> post('propietarioAdd');
    $vehiculos -> chofer = $request-> post('choferAdd');
    $vehiculos -> resguardo = $request-> post('resguardoAdd');
    $vehiculos -> poliza = $request-> post('polizaAdd');
    $vehiculos -> certificado = $request-> post('certificadoAdd');
    $vehiculos -> departamento = $request-> post('departamentoAdd');

    $vehiculos->save();

    return redirect()->route("vehiculos.index");
    
    // return view('vehiculos', ['vehiculos' => $vehiculos]);

}
public function index()
{
    $titulo = "Vehiculos";
    $vehiculos = Vehiculo::all();
    return view('vehiculos', ['vehiculos' => $vehiculos, 'titulo' => $titulo]);
}

public function edit($Num_Serie)
{
    // $vehiculo = Vehiculo::find($Num_Serie);

    // return view('app', compact('vehiculo'));
    echo $Num_Serie;
}

public function update(Request $request,$Num_serieE)
{
    // Valida y actualiza los datos del vehículo
    // $validatedData = $request->validate([
        // 'economicoE' => 'required',
        // 'tipoE' => 'required',
        // 'marcaE' => 'required',
        // 'modeloE' => 'required',
        // 'placaE' => 'required',
        // 'propietarioE' => 'required',
        // 'choferE' => 'required',
        // 'resguardoE' => 'required',
        // 'polizaE' => 'required',
        // 'certificadoE' => 'required',
        // 'departamentoE' => 'required',
        // // Otros campos a validar
        
       
        
    
        $vehiculos  = Vehiculo::find($Num_serieE);
        
        $vehiculos -> economico = $request-> post('economicoE');
        $vehiculos -> tipo = $request-> post('tipoE');
        $vehiculos -> marca = $request-> post('marcaE');
        $vehiculos -> modelo = $request-> post('modeloE');
        $vehiculos -> placa = $request-> post('placaE');
        $vehiculos -> propietario = $request-> post('propietarioE');
        $vehiculos -> chofer = $request-> post('choferE');
        $vehiculos -> resguardo = $request-> post('resguardoE');
        $vehiculos -> poliza = $request-> post('polizaE');
        $vehiculos -> certificado = $request-> post('certificadoE');
        $vehiculos -> departamento = $request-> post('departamentoE');
        $vehiculos -> save();

    // ]);
    
    return redirect()->route("vehiculos.index");
}


}
