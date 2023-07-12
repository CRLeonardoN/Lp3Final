<?php

namespace App\Http\Controllers;
use App\Models\Servicio;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    // public function add(Request $request){
    //     $servicio = Servicio::find($request->id);
    //     Reserva::load(array(
    //         'id' => $request->id,
    //         'nombre' => $request->nombre,
    //         'precio' => $request->precio,
    //         )
    //     );
    //     return redirect()->back()->with("success_message","Servicio $servicio->name ingresado");
    // }
    public function reserva(Request $request){
        $servicio= Servicio::find($request->id);
        return view("carrito")->with("servicios", $servicio);
    }

    // public function limpiar(){
    //     \Reserva::clear();
    //     return redirect()->route('cart.index');
    // }


}
