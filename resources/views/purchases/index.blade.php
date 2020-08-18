@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Entradas
                    @can('purchases.create')
                    <a href="{{route('purchases.create')}}" class="btn btn-primary btn-sm pull-right">Nueva Entrada</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <div class="panel-group" id="accordion">
                        @foreach($lotes as $lote)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#lote-{{$lote->id}}">{{$lote->name}}</a>
                                </h4>
                            </div>
                            <div id="lote-{{$lote->id}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Producto</th>
                                                    <th>Precio Unitario</th>
                                                    <th>Cantidad</th>
                                                    <th>Total</th>
                                                    <th>Fecha</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($purchases as $purchase)
                                                @if($purchase->lote_id == $lote->id)
                                                <tr>
                                                    <td>{{$purchase->product->name}}</td>
                                                    <td>{{$purchase->price}}</td>
                                                    <td>{{$purchase->cant}}-{{$purchase->unity}}</td>
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
                                                @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{$purchases->render()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection