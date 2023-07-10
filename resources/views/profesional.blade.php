@extends("layouts.app")
@section('content')
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Completa tus datos</h5>
        <p class="card-text">Completa los campos para que soliciten tus servicios</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Vamos
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Completa tus datos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
 <form action='profesional/registrar' method="POST">//como grabar esto
     @csrf
      <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" name="nombre" value={{ Auth::user()->name }}>
        </div>
        <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="text" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" name="email" value={{ Auth::user()->email }}>
        </div>
        <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Numero</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="numero" placeholder="Ingrese Número">
        </div>
        <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Profesión</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="servicio" placeholder="Ingrese Profesión">
        </div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-primary" value="Guardar">
      </div>
</form>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Mira tus servicios</h5>
        <p class="card-text">Prodrás ver todos los servicios que ofreces como profesional</p>
        <a href="/profesional/mostrarservicios/{{Auth::id()}}" class="btn btn-primary">Mirar</a>
        <a href="/profesional/registroservicio" class="btn btn-warning">Registrar Servicio</a>
      </div>
    </div>
  </div>
</div>
@endsection