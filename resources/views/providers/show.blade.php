@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Proveedor <a href="{{ url()->previous() }}" class="btn btn-default btn-sm pull-right">Volver</a></div>
                <div class="panel-body">
                    <p><strong>Nombre </strong> {{ $provider->name }}</p>
                    <p><strong>Documento </strong> {{$provider->typedoc->name}} - {{$provider->document}}</p>
                    <p><strong>Correo </strong> {{ $provider->name }}</p>
                    <p><strong>Teléfono </strong> {{ $provider->name }}</p>
                    <p><strong>Dirección </strong> {{ $provider->address }}</p>
                    <p><strong>Banco </strong> {{ $provider->banck }}</p>
                    <p><strong>Cuenta Bancaria </strong> {{ $provider->acount }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
