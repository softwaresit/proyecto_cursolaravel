
@extends('adminlte::page')
@section('title', 'Bienvevida')
@section('adminlte_css')

@endsection
@section('content_header')
    <h1>Bienvenido a la aplicación</h1>
@stop
@section('content')

<form method="POST" action="{{ route('sumar') }}">
    @csrf
    <h1>Formulario de Suma metodo post</h1>
    <label for="num1">Número 1:</label>
    <input type="number" name="num1" id="num1" required>
    <br>
    <label for="num2">Número 2:</label>
    <input type="number" name="num2" id="num2" required>
    <br>
    <button type="submit">Sumar</button>


</form>


<br>

<form method="GET" action="{{ route('multiplicar') }}">
    @csrf
    <h1>Formulario de multiplicacion metodo get </h1>
    <label for="num1">Número 1:</label>
    <input type="number" name="num1" id="num1" required>
    <br>
    <label for="num2">Número 2:</label>
    <input type="number" name="num2" id="num2" required>
    <br>
    <button type="submit">Sumar</button>


</form>

<form method="POST" action="{{ route('dividir') }}">
    @csrf
    <h1>Formulario de dividir  </h1>
    <label for="num1">Número 1:</label>
    <input type="number" name="num1" id="num1" required>
    <br>
    <label for="num2">Número 2:</label>
    <input type="number" name="num2" id="num2" required>
    <br>
    <button type="submit">Sumar</button>


</form>




@stop
@section('adminlte_js')

@endsection