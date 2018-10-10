@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Categorías
                    @can('categories.create')
                        <a href="{{route('categories.create')}}" class="btn btn-primary btn-sm pull-right">Crear</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th width="10px">ID</th>
                          <th>Nombre</th>
                          <th colspan="3">&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    @can('categories.show')
                                        <a href="{{route('categories.show', $category->id)}}" class="btn btn-sm btn-default">
                                            Ver
                                        </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('categories.edit')
                                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-sm btn-default">
                                            Editar
                                        </a>
                                    @endcan
                                </td>
                                <td>
                                     @can('categories.destroy')
                                        {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">Eliminar</button>
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
@endsection
