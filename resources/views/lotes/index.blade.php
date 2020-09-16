@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{$title}}</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @can('lotes.create')
                    <a href="{{route('lotes.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus">Agregar</i></a>
                    @endcan
                </div>

                <div class="panel-body ">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Productos</th>
                                    <th colspan="2">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lotes as $lote)
                                <tr>
                                    <td>{{$lote->name}}</td>
                                    @if($lote->status)
                                    <td>Activo</td>
                                    @else
                                    <td>Inactivo</td>
                                    @endif

                                    <td>
                                        @can('lotes.show')
                                        <a href="{{route('lotes.show', $lote->id)}}" class="btn btn-sm btn-default">
                                            Ver
                                        </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('lotes.edit')
                                        <a href="{{route('lotes.edit', $lote->id)}}" class="btn btn-sm btn-default">
                                            Editar
                                        </a>
                                        @endcan
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-default">
                                            Ver productos
                                        </a>
                                    </td>
                                    <td>
                                        @can('lotes.destroy')
                                        {!! Form::open(['route' => ['lotes.destroy', $lote->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close() !!}
                                        @endcan
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$lotes->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection