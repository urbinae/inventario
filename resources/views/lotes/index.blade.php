@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lote
                    @can('lotes.create')
                    <a href="{{route('lotes.create')}}" class="btn btn-primary btn-sm pull-right">Crear</a>
                    @endcan
                </div>

                <div class="panel-body ">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>Nombre</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lotes as $lote)
                                <tr>
                                    <td>{{$lote->id}}</td>
                                    <td>{{$lote->name}}</td>
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