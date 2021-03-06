@extends('layouts.main')

@section('content')
 <main class="d-flex justify-content-center align-items-center ">
   <div class="home text-center">
      <h1>fumetti</h1>

      @if (session('deleted'))
      <div class="alert alert-danger" role="alert">
        {{session('deleted')}}
      </div>
      @endif

      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Serie</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Di Più</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($listaFumetti as $fumetto)

          <tr>
            <th scope="row">{{$fumetto->id}}</th>
            <td>{{$fumetto->titolo}}</td>
            <td>{{$fumetto->serie}}</td>
            <td>{{$fumetto->prezzo}} €</td>
            <td><a class="btn btn-outline-dark" href="{{route('fumettos.show',$fumetto)}}">Info</a></td>
          </tr>
            
          @endforeach
        </tbody>
      </table>

      {{ $listaFumetti->links() }}
       
   </div>
 </main>
@endsection