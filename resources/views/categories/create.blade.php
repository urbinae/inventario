@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Nueva Categoría</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    {!! Form::open(array('route' => 'categories.store','method'=>'POST')) !!}
                        @include('categories.partials.form')
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
