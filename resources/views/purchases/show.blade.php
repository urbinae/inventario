@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingreso de {{ $purchase->product->name }} <a href="{{ url()->previous() }}" class="btn btn-default btn-sm pull-right">Volver</a></div>
                <div class="panel-body">
                    <p><strong>Producto </strong> {{ $purchase->product->name }}</p>
                    <p><strong>Proveedor </strong> {{$purchase->provider->name}} </p>
                    <p><strong>Precio/{{ $purchase->unity }}  </strong> {{ $purchase->price }}</p>
                    <p><strong>Cantidad </strong> {{ $purchase->cant }}</p>
                    <p><strong>Total </strong> {{ $purchase->cost }}</p>
                    <p><strong>Fecha de ingreso </strong> {{ $purchase->created_at }}</p>
                    <p><h2><strong>En Almacén </strong> {{ $purchase->product->stock->stock }} {{$purchase->unity}}</h2></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
