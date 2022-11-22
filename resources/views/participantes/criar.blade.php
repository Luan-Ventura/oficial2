@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Participante</h1>
    <div class="d-flex justify-content-end mb-3">
      <a href="{{ route('participantes.index') }}">
        <button class="btn btn-primary">
          Voltar
        </button>
      </a>
    </div>
    @if (session()->has('participante_success'))
        <div class="alert alert-success">
            {{ session('participante_success') }}
        </div>
    @endif
    @if (session()->has('participante_error'))
        <div class="alert alert-danger">
            {{ session('participante_error') }}
        </div>
    @endif
    <form method="POST" action="" class="mt-3" >
      @csrf
      <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control item" id="nome" name="nome" placeholder="Ex: Rafael" value="{{ old('nome') }}" required>  
        @error('nome')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror    
      </div>
      <div class="mb-3">
        <label for="sobrenome" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Ex: Santos" value="{{ old('sobrenome') }}" required>
        @error('sobrenome')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror 
      </div>
      <div class="mb-3">
        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
        <input type="date"  max="{{  now()->format('Y-m-d') }}" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Ex: Santos" value="{{ old('data_nascimento') }}" required>
        @error('data_nascimento')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror 
      </div>
      <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Ex: Rua Avenida Luis Tarquino, 200" value="{{ old('endereco') }}">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label> 
        <input type="email" class="form-control @error('email') is-invalid @enderror " id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
        @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <input type="submit" class="btn btn-primary" value="Cadastrar" />
    </form>
  </div>
@endsection