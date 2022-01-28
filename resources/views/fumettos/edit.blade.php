@extends('layouts.main')

@section('content')
  <main class="pb-4">
    <div class="container text-center">
      <div class="row">
        <div class="col-8 offset-2">
          
          <h1 class="display-4">Modifica fumetto</h1>
          <h4>{{$fumetto->titolo}}</h4>

          <form action="{{route('fumettos.update', $fumetto)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="titolo" class="form-label">Nome fumetto</label>
              <input type="text" class="form-control" id="titolo" name="titolo" value="{{$fumetto->titolo}}" placeholder="Nome del fumetto ...">
            </div>
            <div class="mb-3">
              <label for="cover" class="form-label">Copertina</label>
              <input type="text" class="form-control" id="cover" name="cover" value="{{$fumetto->cover}}" placeholder="URL copertina">
            </div>
            <div class="mb-3">
              <label for="serie" class="form-label">Serie del fumetto</label>
              <input type="text" class="form-control" id="serie" name="serie" value="{{$fumetto->serie}}" placeholder="Serie fumetto ...">
            </div>
            <div class="mb-3">
              <label for="tipologia" class="form-label">Tipologia del fumetto</label>
              <input type="text" class="form-control" id="tipologia" name="tipologia" value="{{$fumetto->tipologia}}" placeholder="Genere del fumetto ...">
            </div>
            <div class="mb-3">
              <label for="descrizione" class="form-label">Descrizione</label>
              <textarea type="text" class="form-control" id="descrizione" name="descrizione" value="{{$fumetto->descrizione}}" placeholder="Descrizione ...">{{$fumetto->descrizione}}</textarea>
            </div>
            <div class="mb-3">
              <label for="data_di_vedita" class="form-label">Data di vendita</label>
              <input type="text" class="form-control" id="data_di_vendita" name="data_di_vendita" value="{{$fumetto->data_di_vendita}}">
            </div>
            <div class="mb-3">
              <label for="prezzo" class="form-label">Prezzo</label>
              <input type="number" class="form-control" id="prezzo" name="prezzo" placeholder="Prezzo in €" value="{{$fumetto->prezzo}}">
            </div>

            <button type="submit" class="btn btn-success">Invia</button>
            <button type="reset" class="btn btn-secondary">Reset</button>

          </form>

        </div>
      </div>
    </div>
  </main>
@endsection