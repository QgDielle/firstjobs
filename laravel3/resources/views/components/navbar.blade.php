{{-- Navbar --}}
  <nav class="navbar navbar-expand-lg bg-light fixed-top p-3 shadow">
  <div class="container-fluid">
    <a class="navbar-brand tx-p" href="/"><img src="/media/writing.png" alt="..." height="42">SyB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if(Route::is('homepage')) active text-white rounded @endif" aria-current="page" href="{{route('homepage')}} ">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Route::is('contattaci')) active text-white rounded @endif" href="{{route('contattaci')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Route::is('book.index')) active text-white rounded @endif" href="{{route('book.index')}}">Libraries</a>
        </li>
         <li class="nav-item">
          <a class="nav-link @if(Route::is('reader.index')) active text-white rounded @endif" href="{{route('reader.index')}}">eBooks</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link @if(Route::is('book.create')) active text-white rounded @endif" href="{{route('book.create')}}">Share you book!</a>
        </li> --}}
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profilo</a></li>
            <li><a class="dropdown-item" href="{{route('reader.create')}}">Inserisci il tuo eBook</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" >Logout</a></li>
            <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@csrf</form>
          </ul>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registrati se vuoi condividere i tuoi libri!
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        @endauth
      </ul>
      <form class="d-flex" role="search">
         {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --}}
        <a href="{{route('book.create')}}" class="btn btn-cst shadow tx-p" type="button" >Share your book!</a>
      </form>
    </div>
  </div>
</nav>
