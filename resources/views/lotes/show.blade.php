@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Lote: {{ $lote->cant}} {{ $lote->unity}} de {{ $lote->name}} <a href="{{ route('lotes')}}" class="btn btn-default btn-sm pull-right">Volver</a></div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-show">
                            <thead>
                                <tr>
                                    <th>Cantidad</th>
                                    <th>Producto</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lote_products as $item)
                                <tr>
                                    <td>{{$item->quantity}} {{$item->unity}}</td>
                                    <td>{{$item->product->name}}</td>
                                    
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
            <!-- /.table-responsive -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
