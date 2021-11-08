


@extends('adminlte::page')

@section('title', 'Crear Profesores')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Crear Profesores</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Profesor</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('profesores.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('profesore.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop