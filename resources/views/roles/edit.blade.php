@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Modificar Rol</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <a href="{{route('roles.index')}}" class="btn btn-info btn-sm">Listar</a>
                <hr>
                <div class="panel-body">
                    {!! Form::model($role, ['route' => ['roles.update', $role->id],
                    'method' => 'PUT']) !!}

                    @include('roles.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection