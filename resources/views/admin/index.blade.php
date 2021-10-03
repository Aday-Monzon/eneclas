@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Sweetalert2', true)

@section('content_header')
    <h1>ENACLAS</h1>
@stop

@section('content')
    <p>Bienvenido al panel de administracion de Enaclas</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
            )
    </script>
@stop