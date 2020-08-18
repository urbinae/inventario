@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Producto <a href="{{ route('products.index) }}" class="btn btn-default btn-sm pull-right">Listar</a></div>
                <div class="panel-body">
                    <p><strong>Nombre</strong> {{ $product->name }}</p>
                    <p><strong>Categoría</strong> {{ $product->category->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
