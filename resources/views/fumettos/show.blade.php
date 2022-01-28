@extends('layouts.main')

@section('content')
<main>
  <div class="container text-center d-flex flex-column align-items-center">
    <h1 class="mb-0">fumetto</h1>
    <a href="{{route('fumettos.edit', $fumetto)}}" class="btn btn-warning "><strong>Modifica</strong></a>

    <div class="fumetto d-flex">
      <div class="fumetto-left w-50">
        <img class="w-75" src="{{$fumetto->cover}}" alt="{{$fumetto->titolo}}">
        
      </div>
      
      <div class="fumetto-left w-50">
        <span class="badge bg-dark text-white">Nome</span><h2>{{$fumetto->titolo}}</h2>
        <span class="badge bg-dark text-white">Serie</span> <h4>{{$fumetto->serie}}</h4>
        <span class="badge bg-dark text-white">Tipo</span><h4>{{$fumetto->tipologia}}</h4>
        <span class="badge bg-dark text-white">Descrizione</span><p>{{$fumetto->descrizione}}</p>
        <span class="badge bg-dark text-white">Data</span><p>{{$fumetto->data_di_vendita}}</p>
        <span class="badge bg-dark text-white">Costo</span><h4>{{$fumetto->prezzo}} €</h4>

      </div>
    </div>

    <h5 class="mb-0 pb-2" ><a class="text-white " href="{{route('fumettos.index')}}">Ritorna alla lista fumetti</a></h5>

  </div>

</main>
@endsection