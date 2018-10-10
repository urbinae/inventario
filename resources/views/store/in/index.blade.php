@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Almacén Matería Prima</strong>
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Producto</th>
                          <th>Cantidad</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($store as $stock)
                            <tr>
                                <td>{{$stock->product->name}}</td>
                                <td>{{$stock->stock}}</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{$store->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
