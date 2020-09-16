@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{$title}}</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('lotes.index') }}" class="btn btn-info btn-sm"><i class="fa fa-list"> Listar</i></a>
                </div>
                <hr>
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