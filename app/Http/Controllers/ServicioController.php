<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function mostrar(){
        $servicios= Servicio::All();
        return view("mostrar")->with("servicios", $servicios);
    } 
    
    public function detalle(int $id){
        $servicio= Servicio::find($id);
        return view("detalle")->with("servicio",$servicio);
    }
}
