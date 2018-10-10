@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Categoría</div>
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
