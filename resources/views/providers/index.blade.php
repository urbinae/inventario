@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Proveedores</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @can('providers.create')
                    <a href="{{route('providers.create')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i>&nbsp;Agregar</a>
                    @endcan
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover" id="providers-table">
                            <thead>
                                <tr>
                                    <th>Documento</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th></th><th></th><th></th>
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
                                        <a href="{{route('providers.show', $provider->id)}}" class="btn btn-sm btn-info">
                                        <i class="fa fa-eye"></i>
                                        </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('providers.edit')
                                        <a href="{{route('providers.edit', $provider->id)}}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i>
                                        </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('providers.destroy')
                                        {!! Form::open(['route' => ['providers.destroy', $provider->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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
</div>
@endsection