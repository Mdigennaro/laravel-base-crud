@extends('layouts.main')

@section('content')
  <main class="pb-4">
    <div class="container text-center">
      <div class="row">
        <div class="col-8 offset-2">
          
          <h1 class="display-4">Aggiungi fumetto</h1>

          <form action="{{route('fumettos.store')}}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="titolo" class="form-label">Nome fumetto</label>
              <input type="text" class="form-control" id="titolo" name="titolo" placeholder="Nome del fumetto ...">
            </div>
            <div class="mb-3">
              <label for="cover" class="form-label">Copertina</label>
              <input type="text" class="form-control" id="cover" name="cover" placeholder="URL copertina">
            </div>
            <div class="mb-3">
              <label for="serie" class="form-label">Serie del fumetto</label>
              <input type="text" class="form-control" id="serie" name="serie" placeholder="Serie fumetto ...">
            </div>
            <div class="mb-3">
              <label for="tipologia" class="form-label">Tipologia del fumetto</label>
              <input type="text" class="form-control" id="tipologia" name="tipologia" placeholder="Genere del fumetto ...">
            </div>
            <div class="mb-3">
              <label for="descrizione" class="form-label">Descrizione</label>
              <textarea type="text" class="form-control" id="descrizione" name="descrizione" placeholder="Descrizione ..."></textarea>
            </div>
            <div class="mb-3">
              <label for="data_di_vedita" class="form-label">Data di vendita</label>
              <input type="text" class="form-control" id="data_di_vendita" name="data_di_vendita">
            </div>
            <div class="mb-3">
              <label for="prezzo" class="form-label">Prezzo</label>
              <input type="number" class="form-control" id="prezzo" name="prezzo" placeholder="Prezzo in €">
            </div>

            <button type="submit" class="btn btn-success">Invia</button>
            <button type="reset" class="btn btn-secondary">Reset</button>

          </form>

        </div>
      </div>
    </div>
  </main>
@endsection