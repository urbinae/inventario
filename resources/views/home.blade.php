@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Bienvenido <i>{{ Auth::user()->name }}!</i></h1> 
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    contenido
</section>
@endsection