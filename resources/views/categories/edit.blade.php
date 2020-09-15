@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Modificar Categoría</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <a href="{{route('categories.index')}}" class="btn btn-success btn-sm pull-right">Listar</a>
                </div>
                <div class="panel-body">
                    {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method'=>'PUT']) !!}
                        @include('categories.partials.form')
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
