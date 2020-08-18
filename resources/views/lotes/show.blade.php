@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lote 
                <a href="{{ route('lotes.index') }}" class="btn btn-default btn-sm pull-right">listar</a></div>
                <div class="panel-body">
                    <p><strong>Nombre</strong> {{ $lote->name }}</p>
                    <p><strong>Costo fijo</strong> {{ $lote->costo_fijo_usd }}</p>
                    <p><strong>costo variable</strong> {{ $lote->costo_variable_usd }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
