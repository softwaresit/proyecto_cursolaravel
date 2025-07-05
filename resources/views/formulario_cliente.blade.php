@extends('adminlte::page')
@section('title', 'Bienvevida')
@section('adminlte_css')

@endsection
@section('content_header')
<h1>Bienvenido a la aplicación</h1>
@stop
@section('content')



<div class="card card-primary card-outline mb-4">
    <div class="card-header">
        <div class="card-title">Formulario registro cliente</div>
    </div>
   <form method="POST" action="{{ route('guardar_cliente') }}">
    @csrf
        <div class="card-body">
            <div class="mb-3"> <label for="" class="form-label">Nombre Cliente</label> 
            <input type="text" class="form-control" name="nom" >
            </div>

              <div class="mb-3"> <label for="" class="form-label">celular</label> 
            <input type="text" class="form-control" name="cel" >
            </div>

             <div class="mb-3"> <label for="" class="form-label">NIT</label> 
            <input type="text" class="form-control" name="nit" >
            </div>

             <div class="mb-3"> <label for="" class="form-label">Domicio</label> 
            <input type="text" class="form-control" name="dom" >
            </div>
            <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div>

    </form>

</div>

@stop
@section('adminlte_js')

@endsection