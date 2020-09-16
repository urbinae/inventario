@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Nuevo Proveedor</h1>
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
                </div>
                <hr>
                <div class="panel-body">
                    {!! Form::open(array('route' => 'providers.store','method'=>'POST')) !!}
                    @include('providers.partials.form')
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection