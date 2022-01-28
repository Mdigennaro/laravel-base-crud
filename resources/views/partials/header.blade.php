<header>
  <div class=" container d-flex justify-content-between align-items-center">

    <div class="logo">
      <img src="{{asset('img/dc-logo.png')}}" alt="">
    </div>

    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() === 'home') ? 'active' : ''}}" href="{{route('home')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() === 'fumettos.index') ? 'active' : ''}}" href="{{route('fumettos.index')}}">Fumetti</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() === 'fumettos.create') ? 'active' : ''}}"  href="{{route('fumettos.create')}}">Aggiungi fumetto</a>
      </li>
    </ul>
  </div>
</header>