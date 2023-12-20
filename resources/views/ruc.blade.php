
@extends('consultas')

@section('informacion')

    <div class="row">
        <div class="col-md-6">
            <strong>RUC:</strong> <span id="ruc">{{ $data['ruc'] }}</span>
        </div>
        <div class="col-md-6">
            <strong>Ubigeo:</strong> <span id="ubigeo">{{ $data['ubigeo'] }}</span>
        </div>
    </div>
    
    <p><strong>Razon Social:</strong> <span id="razonSocial">{{ $data['razonSocial'] }}</span></p>
  
    <p><strong>Direccion:</strong> <span id="direccion">{{ $data['direccion'] }}</span></p>

    <div class="row">
  
    <div class="col-md-6">
            <strong>Estado:</strong> <span id="estado">{{ $data['estado'] }}</span>
        </div>
        <div class="col-md-6">
            <strong>Condicion:</strong> <span id="condicion">{{ $data['condicion'] }}</span>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4">
            <strong>Capital:</strong> <span id="capital">{{ $data['capital'] }}</span>
        </div>
        <div class="col-md-4">
            <strong>Provincia:</strong> <span id="provincia">{{ $data['provincia'] }}</span>
        </div>
        <div class="col-md-4">
            <strong>Distrito:</strong> <span id="distrito">{{ $data['distrito'] }}</span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <strong>Ubigeo:</strong> <span id="ubigeo">{{ $data['ubigeo'] }}</span>
        </div>
        <div class="col-md-6">
            <strong>Departamento:</strong> <span id="departamento">{{ $data['departamento'] }}</span>
        </div>
    </div>


@endsection