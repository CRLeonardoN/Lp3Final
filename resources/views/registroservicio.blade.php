@extends("layouts.app")
@section('content')

<form action='{{ route('registroservicio') }}' method="POST">
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
<?php
echo 'Hola mundo'
?>
@endsection