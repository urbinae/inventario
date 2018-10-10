@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Proveedores
                    @can('providers.create')
                        <a href="{{route('providers.create')}}" class="btn btn-primary btn-sm pull-right">Crear</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Documento</th>
                          <th>Nombre</th>
                          <th>Telefono</th>
                          <th>Correo</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($providers as $provider)
                            <tr>
                                <td>{{$provider->typedoc->name}} - {{$provider->document}}
                                </td>
                                <td>{{$provider->name}}</td>   
                                <th>{{$provider->phone}}</th>
                                <th>{{$provider->email}}</th>
                                <td>
                                    @can('providers.show')
                                        <a href="{{route('providers.show', $provider->id)}}" class="btn btn-sm btn-default">
                                            Ver
                                        </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('providers.edit')
                                        <a href="{{route('providers.edit', $provider->id)}}" class="btn btn-sm btn-default">
                                            Editar
                                        </a>
                                    @endcan
                                </td>
                                <td>
                                     @can('providers.destroy')
                                        {!! Form::open(['route' => ['providers.destroy', $provider->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">Eliminar</button>
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                                
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{$providers->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
