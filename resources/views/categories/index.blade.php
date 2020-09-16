@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Categorias</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-5 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @can('categories.create')
                    <a href="{{route('categories.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;Agregar</a>
                    @endcan
                </div>

                <div class="panel-body ">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="categories-table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td width="10px">
                                        @can('categories.edit')
                                        <a href="{{route('categories.edit', $category->id)}}" title="Modificar" class="btn btn-sm btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        @endcan
                                    </td>
                                    <td width="10px">
                                        @can('categories.destroy')
                                        {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger" title="Eliminar"><i class="fa fa-trash"></i></button>
                                        {!! Form::close() !!}
                                        @endcan
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$categories->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">

</div>
@endsection