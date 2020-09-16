@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Productos</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="content">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @can('products.create')
                    <a href="{{route('products.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;Agregar</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="products-table">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Precio</th>
                                    <th>Nombre</th>
                                    <th>Categoría</th>
                                    <th>Existencias</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>@php echo uniqid() @endphp</td>
                                    <td>-</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>cantidad</td>
                                    <td width="10px">
                                        @can('products.show')
                                        <a href="{{route('products.show', $product->id)}}" title="Ver" class="btn btn-sm btn-info">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                    <td width="10px">
                                        @endcan
                                        @can('products.edit')
                                        <a href="{{route('products.edit', $product->id)}}" title="Editar" class="btn btn-sm btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                    <td width="10px">
                                        @endcan
                                        @can('products.destroy')
                                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger" title="Eliminar"><i class="fa fa-trash"></i></button>
                                        {!! Form::close() !!}
                                        @endcan
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$products->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection