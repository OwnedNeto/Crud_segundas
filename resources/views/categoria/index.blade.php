@extends('welcome')
@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Nuevo
  </button>

<div class="table-resposive">
<br>

<table class="table">
    <thead class="bg-dark text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripccion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categoria as $categorias) 
        <tr class="">
            <th scope="row">{($categoria->id)}</th>
            <td>{($categoria->nombre)}</td>
            <td>{($categoria->descripccion)}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
    </table>

</div>
@include('categoria.create')

    
@endsection