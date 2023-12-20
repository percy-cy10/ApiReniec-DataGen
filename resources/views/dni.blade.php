
@extends('consultas')

@section('informacion')

    <p><strong>DNI:</strong> <span id="identificacion"> {{ $data['dni'] }}</span></p>
    <p><strong>Nombre:</strong> <span id="nombre"> {{ $data['nombres'] }} </span></p>
    <p><strong>Apellido Paterno:</strong> <span id="apellidoPaterno"> {{ $data['apellidoPaterno'] }} </span></p>
    <p><strong>Apellido Materno:</strong> <span id="apellidoMaterno">{{ $data['apellidoMaterno'] }} </span></p>

@endsection