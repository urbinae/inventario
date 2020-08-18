@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lote
                    <a href="{{ route('lotes.index') }}" class="btn btn-default btn-sm pull-right">Listar</a>
                </div>
                <div class="panel-body">
                    {!! Form::model($lote, ['route' => ['lotes.update', $lote->id], 'method'=>'PUT']) !!}
                        @include('lotes.partials.form')
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection