@extends('layouts.app')
@section('content')
<div class="container">

<div class="card">
  <div class="card-header bg-danger text-white">
    Ingreso de Categorias
  </div>
  <div class="card-body">
    <h5 class="card-title">Titulos de Categorias</h5>
    <p class="card-text">Esto es una prueba para quien lo lea :) </p>
   

    {!! Form::open() !!}
        {!! Field::text('name',null,['label'=>'Nombre','placerholder'=> 'Ingrese el nombre'])!!}
        {!! Field::text('description',null,['label'=>'Descripción','placerholder'=> 'Ingrese la descripción'])!!}
    {!! Form::close() !!}

    <a href="{{ route('categories.index') }}" class="btn btn-primary">REGRESAR</a>

  </div>
</div>

</div>

@endsection