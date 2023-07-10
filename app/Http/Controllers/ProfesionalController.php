<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesional;
use App\Models\Servicio;

class ProfesionalController extends Controller
{

    public function mostrar(){
        return view("profesional");
    }

    public function registrar(Request $request){
        $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'numero' => 'required',
            'servicio' => 'required',
        ]);
        $pro = new Profesional();
        $pro->nombre = $request->input('nombre');
        $pro->email = $request->input('email');
        $pro->numero = $request->input('numero');
        $pro->servicio = $request->input('servicio');

        $pro->save();

        return redirect('/profesional')->with('success', 'guardado');
    }
    public function mostrarservicios(int $profesional_id){
        $servicio= Servicio::find($profesional_id);
        return view("profesionalservicio")->with("servicios",$servicio);

    }
}
