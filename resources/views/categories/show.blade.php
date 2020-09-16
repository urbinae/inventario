@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Categoría</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                <a href="{{ route('categories.index') }}" class="btn btn-info btn-sm">Listar</a></div>
                <hr>
                <div class="panel-body">
                    <p><strong>Nombre</strong> {{ $category->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
