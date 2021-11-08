


@extends('adminlte::page')

@section('title', 'Editar Profesores')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>Editar Profesor</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Profesor</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('profesores.update', $profesore->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
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