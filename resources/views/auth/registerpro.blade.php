@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="principal.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <a class="singup">Iniciar Sesión</a>
            <div class="inputBox1">
                <input type="text" required="required">
                <span class="user">Email</span>
            </div>
            <div class="inputBox">
                <input type="text" required="required">
                <span>Usuario</span>
            </div>
            <div class="inputBox">
                <input type="password" required="required">
                <span>Contraseña</span>
            </div>
            <button class="enter">Ingresar</button>
        </div>
    </div>
</body>
</html>
@endsection