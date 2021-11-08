

@extends('adminlte::page')

@section('title', 'Mostrar Alumno')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1> {{ $alumno->name ?? 'Mostrar Alumno' }}</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Alumno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $alumno->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $alumno->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $alumno->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Clases:</strong>
                            {{ $alumno->clases }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
