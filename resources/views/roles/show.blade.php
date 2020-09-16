@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Rol <i>{{ $role->name }}</i></h1>
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
                    <p><strong>Nombre</strong> {{ $role->name }}</p>
                    <p><strong>Slug</strong> {{ $role->slug }}</p>
                    <p><strong>Descripción</strong> {{ $role->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection