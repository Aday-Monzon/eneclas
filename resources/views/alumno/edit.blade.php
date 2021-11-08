@extends('adminlte::page')

@section('title', 'Editar Alumno')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1> Editar Alumno</h1>
@stop
@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Alumno</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('alumnos.update', $alumno->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('alumno.form')

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


