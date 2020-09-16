@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Producto</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="content">
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <a href="{{ route('products.index') }}" class="btn btn-info btn-sm">Listar</a>
            <hr>
            <div class="panel panel-success">
                <div class="panel-body">
                    <p><strong>Código</strong> Código</p>
                    <p><strong>Nombre</strong> {{ $product->name }}</p>
                    <p><strong>Categoría</strong> {{ $product->category->name }}</p>
                    <p><strong>Precio</strong> $</p>
                    <p><strong>Existencias</strong>{{ $product->stock }} </p>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
@endsection