@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Agregar entrada de productos</h1>
            </div>

        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <a href="{{ route('lotes.index') }}">
                <div class="info-box shadow-lg">
                    <span class="info-box-icon bg-info"><i class="far fa-copy"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Por fletes/lotes</span>
                        <span class="info-box-number"></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </a>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
            <a href="#">
                <div class="info-box shadow-lg">
                    <span class="info-box-icon bg-info"><i class="far fa-edit"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Individuales</span>
                        <span class="info-box-number"></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </a>
        </div>
    </div>
</section>
@endsection