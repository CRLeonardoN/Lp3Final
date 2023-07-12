
@extends("layouts.app")
@section('content')
@if(count($servicios)>0)
@foreach($servicios as $servicio)
<div class="col-lg-3">
    <div class="card" style="margin-bottom: 20px; height: auto;">
        <div class="card-body">
            <a><h6 class="card-title">{{ $servicio["nombre"] }}</h6></a>
            <p>S/{{ $servicio["precio"] }}</p>
            <form action="{{ route('reserva') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" value="{{ $servicio->id }}" id="id" name="id">
            <input type="hidden" value="{{ $servicio->nombre }}" id="name" name="nombre">
            <input type="hidden" value="{{ $servicio->precio }}" id="price" name="precio">
            <p class="card-text">{{$servicio["detalle"]}}</p>
            <input type="hidden" value="1" id="quantity" name="quantity">
            <div class="card-footer" style="background-color: white;">
            <div class="row">
        <button class="btn btn-success" type="submit">Reservar</button>
        </button>
            </div>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- <div class="container">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$servicio["nombre"]}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{$servicio["precio"]}}</h6>
    <p class="card-text">{{$servicio["detalle"]}}</p>
    <a href="detalle/{{$servicio['id']}}" class="btn btn-success">Agregar al Carrito</a>
    </div>
</div>
</div> -->
@endforeach
@else
<div class="row justify-content-center">
    <h2>No hay resultados</h2>
</div>
@endif 
@endsection
