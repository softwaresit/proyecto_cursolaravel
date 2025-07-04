@extends('adminlte::page')
@section('title', 'Bienvevida')
@section('adminlte_css')

@endsection
@section('content_header')
    <h1>Bienvenido a la aplicación</h1>
@stop
@section('content')

    <h1> Lista de Clientes</h1>
    <br>
@foreach ($clientes as $cli)

<h2>cod: {{ $cli->cod_cliente }}</h2> 
<h2>Cliente: {{ $cli->nombre }}</h2> 
<h2>cel: {{ $cli->celular }}</h2> 
<h2>nit: {{ $cli->nit }}</h2> 
<h2>domicio: {{ $cli->domicilio }}</h2> <br>
@endforeach


@stop
@section('adminlte_js')

@endsection