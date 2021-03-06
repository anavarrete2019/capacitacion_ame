@extends('layouts.app')
@section('content')
<div class="container">

<div class="card">
  <div class="card-header bg-primary text-white">
    Lista de Categorias
  </div>
  <div class="card-body">
    <h5 class="card-title">Titulos de Categorias</h5>
    <p class="card-text">Esto es una prueba para quien lo lea :) </p>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">AGREGAR</a>

    <hr/>
      <table class="table">
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>SLUG</th>
          <th>ACCIONES</th>
        </tr>
        @forelse($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>{{$category->description}}</td>
            </tr>
        @empty
        <tr><td colspan="4">NO HAY REGISTROS</td></tr>
        @endforelse

      </table>
      {!! $categories->render()!!}

  </div>
</div>

</div>

@endsection