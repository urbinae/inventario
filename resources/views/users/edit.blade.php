@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Modificar Usuario</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="{{route('users.index')}}" class="btn btn-info btn-sm">Listar</a>
            <hr>
            <div class="panel panel-default">

                <div class="panel-body">
                    {!! Form::model($user, ['route' => ['users.update', $user->id],
                    'method' => 'PUT']) !!}

                    @include('users.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection