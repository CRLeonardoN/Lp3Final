
@extends("layouts.app")
@section('content')
@if(count($servicios)>0)
<div class="row justify-content-center">
<table class="table table-bordered border-primary ">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Detalles</th>
    </tr>
    @foreach($servicios as $servicio)
    <tr>
        <td>{{$servicio["nombre"]}}</td>
        <td>{{$servicio["precio"]}}</td>
        <td><a href="detalle/{{$servicio['id']}}">Ver más</a></td>
    </tr>
    @endforeach
</table>
</div>
@else
<div class="row justify-content-center">
    <h2>No hay resultados</h2>
</div>
@endif 
@endsection
