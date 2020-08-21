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
                            <a href="#" class="btn btn-success btn-sm pull-right">Excel</a>

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
                                                    <th>Cantidad</th>
                                                    <th>Costo Unitario</th>
                                                    <th>Costo por Cantidad</th>
                                                    <th>Costo Fijo de Flete</th>
                                                    <th>Costo Variablede Flete</th>
                                                    <th>Costo total</th>
                                                    <th>Ganancia del 30%</th>
                                                    <th>Costo Total Unitario</th>
                                                    <th>Costo Total Ganancia 20%</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($purchases as $purchase)
                                                    @php
                                                    $cost_fijo_flete = round($purchase->lote->costo_fijo_usd/count($purchases), 2);
                                                    $cost_variable_flete = round($purchase->lote->costo_variable_usd/count($purchases), 2);
                                                    $costo_total = $purchase->cost + $purchase->lote->costo_fijo_usd + $purchase->lote->costo_variable_usd;
                                                    $ganancia30 = ($purchase->cost + $purchase->lote->costo_fijo_usd + $purchase->lote->costo_variable_usd)*0.3;
                                                    $costo_total_unitario = $costo_total + $ganancia30;
                                                    $costo_total20 = $costo_total*0.2;
                                                    @endphp
                                                @if($purchase->lote_id == $lote->id)
                                                <tr>
                                                    <td>{{$purchase->product->name}}</td>
                                                    <td>{{$purchase->cant}}-{{$purchase->unity}}</td>
                                                    <td>{{$purchase->price}}</td>
                                                    <td>{{$purchase->cost}}</td>                                                    
                                                    <td>@php echo $cost_fijo_flete @endphp</td>                                                    
                                                    <td>@php echo $cost_variable_flete @endphp</td>
                                                    <td>@php echo $costo_total @endphp </td>
                                                    <td>@php echo $ganancia30 @endphp</td>
                                                    <td>@php echo $costo_total_unitario @endphp</td>
                                                    <td>@php echo $costo_total20 @endphp</td>
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