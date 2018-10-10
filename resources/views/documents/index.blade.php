@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Tipos De Documento
                    @can('categories.create')
                        <a href="{{route('documents.create')}}" class="btn btn-primary btn-sm pull-right">Crear</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th width="10px">ID</th>
                          <th>Nombre</th>
                          <th colspan="2">&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($documents as $docuemnt)
                            <tr>
                                <td>{{$docuemnt->id}}</td>
                                <td>{{$docuemnt->name}}</td>
                                
                                <td>
                                    @can('documents.edit')
                                        <a href="{{route('documents.edit', $docuemnt->id)}}" class="btn btn-sm btn-default">
                                            Editar
                                        </a>
                                    @endcan
                                </td>
                                <td>
                                     @can('documents.destroy')
                                        {!! Form::open(['route' => ['documents.destroy', $docuemnt->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                                
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{$documents->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
