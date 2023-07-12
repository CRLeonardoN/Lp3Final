@extends("layouts.app")
@section('content')
<!-- {{dd($servicios)}} -->
@if(count($servicios)>0)
<div class="row justify-content-center">
<table class="table table-bordered border-primary ">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Detalle</th>
    </tr>
    @foreach($servicios as $servicio)
    <tr>
        <td>{{$servicio["nombre"]}}</td>
        <td>{{$servicio["precio"]}}</td>
        <td>{{$servicio["detalle"]}}</td>
    </tr>
    @endforeach
</table>
</div>
@else
<div class="row justify-content-center">
    <h2>No hay servicios registrados</h2>
</div>
@endif 
@endsection