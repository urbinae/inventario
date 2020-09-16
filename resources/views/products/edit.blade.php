@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Modificar Producto</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <a href="{{route('products.index')}}" class="btn btn-info btn-sm">Listar</a>
                <hr>
                <div class="panel-body">
                    {!! Form::model($product, ['route' => ['products.update', $product->id], 'method'=>'PUT']) !!}
                    @include('products.partials.form')
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection