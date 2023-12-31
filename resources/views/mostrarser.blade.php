@extends("layouts.app")
@section('content')
@if(count($servicios)>0)
@foreach($servicios as $servicio)
<div class="col-lg-3">
    <div class="card" style="margin-bottom: 20px; height: auto ">
        <div class="card-body" style="background-color: #EA9C39;">
            <a><h6 class="card-title">{{ $servicio["nombre"] }}</h6></a>
            <p>S/{{ $servicio["precio"] }}</p>
            <form action="{{ route('reserva') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $servicio->id }}" id="id" name="id">
            <input type="hidden" value="{{ $servicio->nombre }}" id="name" name="nombre">
            <input type="hidden" value="{{ $servicio->precio }}" id="price" name="precio">
            <p class="card-text">{{$servicio["detalle"]}}</p>
            <input type="hidden" value="1" id="quantity" name="quantity">
            <div class="card-footer" style="background-color: #EA9C39;">
            <div class="row">
        <button class="btn btn-dark" type="submit">Reservar</button>
        </button>
            </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@else
<div class="row justify-content-center">
    <h2>No hay resultados</h2>
</div>
@endif 
<?php
echo 'Hola'
?>

@endsection