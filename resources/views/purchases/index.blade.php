@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ingresos
                    @can('purchases.create')
                        <a href="{{route('purchases.create')}}" class="btn btn-primary btn-sm pull-right">Nueva Entrada</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Producto</th>
                          <th>Precio</th>
                          <th>Cantidad</th>
                          <th>Total</th>
                          <th>Fecha</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($purchases as $purchase)
                            <tr>
                                <td>{{$purchase->product->name}}</td>
                                <td>{{$purchase->price}}</td>
                                <td>{{$purchase->cant}}</td>
                                <td>{{$purchase->cost}}</td>
                                <td>{{$purchase->created_at}}</td>
                                <td>
                                    @can('purchases.show')
                                        <a href="{{route('purchases.show', $purchase->id)}}" class="btn btn-sm btn-default">
                                            Ver
                                        </a>
                                    @endcan
                                </td>                            
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{$purchases->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
