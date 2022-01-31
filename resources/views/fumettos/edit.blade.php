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
          
          <h1 class="display-4">Modifica fumetto</h1>
          <h4>{{$fumetto->titolo}}</h4>

          <form action="{{route('fumettos.update', $fumetto)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="titolo" class="form-label">Nome fumetto</label>
              <input type="text" value="{{old('titolo', $fumetto->titolo)}}" class="form-control" id="titolo" name="titolo" placeholder="Nome del fumetto ...">
              @error('titolo')
                <p class="errore">
                  {{ $message }}
                </p>
              @enderror
            </div>
            <div class="mb-3">
              <label for="cover" class="form-label">Copertina</label>
              <input type="text" value="{{old('cover', $fumetto->cover)}}" class="form-control" id="cover" name="cover" placeholder="URL copertina">
              @error('cover')
                <p class="errore">
                  {{$errore}}
                </p>  
              @enderror
            </div>
            <div class="mb-3">
              <label for="serie" class="form-label">Serie del fumetto</label>
              <input type="text" value="{{old('serie', $fumetto->serie)}}" class="form-control" id="serie" name="serie" placeholder="Serie fumetto ...">
              @error('serie')
                <p class="errore">{{$error}}</p>
              @enderror
            </div>
            <div class="mb-3">
              <label for="tipologia" class="form-label">Tipologia del fumetto</label>
              <input type="text" value="{{old('tipologia', $fumetto->tipologia)}}" class="form-control" id="tipologia" name="tipologia"  placeholder="Genere del fumetto ...">
              @error('tipologia')
                <p class="errore">{{$error}}</p>
              @enderror
            </div>
            <div class="mb-3">
              <label for="descrizione" class="form-label">Descrizione</label>
              <textarea type="text" class="form-control" id="descrizione" name="descrizione" placeholder="Descrizione ...">{{old('descrizione', $fumetto->descrizione)}}</textarea>
              @error('descrizione')
                <p class="errore">{{$error}}</p>
              @enderror
            </div>
            <div class="mb-3">
              <label for="data_di_vedita" class="form-label">Data di vendita</label>
              <input type="text" class="form-control" id="data_di_vendita" name="data_di_vendita" value="{{old('data_di_vendita',$fumetto->data_di_vendita)}}">
              @error('data_di_vendita')
                <p class="errore">{{$error}}</p>
              @enderror
            </div>
            <div class="mb-3">
              <label for="prezzo" class="form-label">Prezzo</label>
              <input type="number" class="form-control" id="prezzo" name="prezzo" placeholder="Prezzo in €" value="{{old('prezzo',$fumetto->prezzo)}}">
              @error('prezzo')
                <p class="errore">{{$error}}</p>
              @enderror
            </div>

            <button type="submit" class="btn btn-success">Invia</button>
            <button type="reset" class="btn btn-secondary">Reset</button>

          </form>

        </div>
      </div>
    </div>
  </main>
@endsection