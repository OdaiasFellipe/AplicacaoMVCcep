@extends('app')
@section('content')
        <h1>
            Buscar Cep
        </h1>
    <form action="{{route('buscar')}}" method="GET">
  <div class="form-goup">
    <label>Cep</label>
    <input type="text" class="form-control" name="cep">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  @endsection