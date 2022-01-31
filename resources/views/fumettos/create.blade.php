@extends('layouts.main')

@section('content')
  <main class="pb-4">
    <div class="container text-center pt-2">
      <div class="row">
        <div class="col-8 offset-2">

          @if ($errors->any())
          <div class="alert alert-danger" role="alert">
            <p>Errori:</p>
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          @endif
          
          <h1 class="display-4">Aggiungi fumetto</h1>

          <form action="{{route('fumettos.store')}}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="titolo" class="form-label">Nome fumetto</label>
              <input type="text" class="form-control @error('titolo') is-invalid @enderror" value="{{old('titolo')}}" id="titolo" name="titolo" placeholder="Nome del fumetto ...">
            </div>
            <div class="mb-3">
              <label for="cover" class="form-label">Copertina</label>
              <input type="text" class="form-control @error('cover') is-invalid @enderror" value="{{old('cover')}}" id="cover" name="cover" placeholder="URL copertina">
            </div>
            <div class="mb-3">
              <label for="serie" class="form-label">Serie del fumetto</label>
              <input type="text" class="form-control @error('serie') is-invalid @enderror" value="{{old('serie')}}" id="serie" name="serie" placeholder="Serie fumetto ...">
            </div>
            <div class="mb-3">
              <label for="tipologia" class="form-label">Tipologia del fumetto</label>
              <input type="text" class="form-control @error('tipologia') is-invalid @enderror" value="{{old('tipologia')}}" id="tipologia" name="tipologia" placeholder="Genere del fumetto ...">
            </div>
            <div class="mb-3">
              <label for="descrizione" class="form-label">Descrizione</label>
              <textarea type="text" class="form-control @error('descrizione') is-invalid @enderror"  id="descrizione" name="descrizione" placeholder="Descrizione ...">{{old('descrizione')}}</textarea>
            </div>
            <div class="mb-3">
              <label for="data_di_vedita" class="form-label">Data di vendita</label>
              <input type="text" class="form-control @error('data_di_vendita') is-invalid @enderror" value="{{old('data_di_vendita')}}" id="data_di_vendita" name="data_di_vendita">
            </div>
            <div class="mb-3">
              <label for="prezzo" class="form-label">Prezzo</label>
              <input type="number" class="form-control @error('prezzo') is-invalid @enderror" value="{{old('prezzo')}}" id="prezzo" name="prezzo" placeholder="Prezzo in €">
            </div>

            <button type="submit" class="btn btn-success">Invia</button>
            <button type="reset" class="btn btn-secondary">Reset</button>

          </form>

        </div>
      </div>
    </div>
  </main>
@endsection