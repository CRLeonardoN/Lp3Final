@extends("layouts.app")
@section('content')
@foreach($servicios as $servicio)
<div class="col-lg-3">
    <div class="card" style="margin-bottom: 20px; height: auto;">
        <div class="card-body">
            <a><h6 class="card-title">{{ $servicio["nombre"] }}</h6></a>
            <p>S/{{ $servicio["precio"] }}</p>
<form action='' method="POST">
<input type="hidden" value="{{ $servicio->id }}" id="id" name="id">
            <input type="hidden" value="{{ $servicio->nombre }}" id="name" name="nombre">
            <input type="hidden" value="{{ $servicio->precio }}" id="price" name="precio">
            <p class="card-text">{{$servicio["detalle"]}}</p>
            <input type="hidden" value="1" id="quantity" name="quantity">
            <div class="card-footer" style="background-color: white;">
            <div class="row">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre del Servicio</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Precio del Servicio</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Detalle del servicio</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<input type="submit" class="btn btn-success" value="Registrar">
</form>
@endforeach
@endsection
