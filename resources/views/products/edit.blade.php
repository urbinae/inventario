@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Producto <a href="{{ url()->previous() }}" class="btn btn-default btn-sm pull-right">Volver</a></div>
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
