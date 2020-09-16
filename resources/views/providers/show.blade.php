@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Proveedor <i>{{ $provider->name }}</i></h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('providers.index') }}" class="btn btn-info btn-sm">Listar</a>
                    <hr>
                </div>
                <div class="panel-body">
                    <p><strong>Nombre </strong> {{ $provider->name }}</p>
                    <p><strong>Documento </strong> {{$provider->typedoc->name}} - {{$provider->document}}</p>
                    <p><strong>Correo </strong> {{ $provider->email }}</p>
                    <p><strong>Dirección </strong> {{ $provider->address }}</p>
                    <p><strong>Teléfono </strong> {{ $provider->phone }}</p>
                    <p><strong>Banco </strong> {{ $provider->banck }}</p>
                    <p><strong>Cuenta Bancaria </strong> {{ $provider->acount }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection