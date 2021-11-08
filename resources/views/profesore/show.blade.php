@extends('layouts.app')

@section('template_title')
    
@endsection



@extends('adminlte::page')

@section('title', 'Mostrar Profesor')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>{{ $profesore->name ?? 'Mostrar Profesor' }}</h1>
@stop

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Profesore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('profesores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $profesore->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $profesore->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $profesore->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Clases:</strong>
                            {{ $profesore->clases }}
                        </div>
                        <div class="form-group">
                            <strong>Salario:</strong>
                            {{ $profesore->salario }}
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