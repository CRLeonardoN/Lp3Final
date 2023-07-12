<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function mostrar(){
        $servicios= Servicio::All();
        return view("mostrarser")->with("servicios", $servicios);
    } 
    
    public function detalle(int $id){
        $servicio= Servicio::find($id);
        return view("detalle")->with("servicio",$servicio);
    }
    public function registrar(Request $request){
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'detalle' => 'required',
            'servicio' => 'required',
        ]);
        $ser = new Servicio();
        $ser->nombre = $request->input('nombre');
        $ser->email = $request->input('precio');
        $ser->numero = $request->input('servicio');

        $ser->save();
    }

    public function mostrarservicios(){
        $servicios= Servicio::All();
        return view("promostrar")->with("servicios", $servicios);
    }
}
