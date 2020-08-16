@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lote</div>
                <div class="panel-body">
                    {!! Form::open(array('route' => 'lotes.store','method'=>'POST')) !!}
                        @include('lotes.partials.form')
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
