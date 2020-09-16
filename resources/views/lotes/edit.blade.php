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
                    {!! Form::model($lote, ['route' => ['lotes.update', $lote->id], 'method'=>'PUT']) !!}
                    @include('lotes.partials.form')
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection