@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Lista de Participantes</h1>
    <div class="d-flex justify-content-end mb-3">
      <a href="{{ route('participantes.criar') }}">
        <button class="btn btn-primary">
          Criar
        </button>
      </a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Sobrenome</th>
          <th scope="col">Data Nascimento</th>
          <th scope="col">Endereço</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach($participantes as $participante)
        <tr>
          <th scope="row">1</th>
          <td>{{ $participante['nome'] }}</td>
          <td>{{ $participante['sobrenome'] }}</td>
          <td>{{ $participante['data_nascimento'] }}</td>
          <td>{{ $participante['endereco'] }}</td>
          <td>{{ $participante['email'] }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection