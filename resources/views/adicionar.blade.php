@extends('app')
@section('content')
        <h1>
           Adicionar Cep
        </h1>
      {{-- @if ($erros->any())
     <div class="alert alert-danger">
      <ul> 
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li> 
            
        @endforeach
      </ul>
          
     @endif --}}
    <form action="{{route('salvar')}}" method="POST">
     @csrf
  <div class="form-goup">
    <label>Cep</label>
    <input type="text" class="form-control" name="cep" value="{{$cep}}">
  </div>
  <div class="form-goup">
    <label>Logradouro</label>
    <input type="text" class="form-control" name="logradouro" value="{{$logradouro}}">
  </div>
  <div class="form-goup">
    <label>Numero</label>
    <input type="text" class="form-control" name="numero"> 
  </div>
  <div class="form-goup">
    <label>Bairro</label>
    <input type="text" class="form-control" name="bairro" value="{{$bairro}}">
  </div>
  <div class="form-goup">
    <label>Cidade</label>
    <input type="text" class="form-control" name="cidade" value="{{$cidade}}">
  </div>
  <div class="form-goup">
    <label>Estado</label>
    <input type="text" class="form-control" name="estado" value="{{$estado}}">
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>
  @endsection