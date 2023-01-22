{{-- Navbar --}}
  <nav class="navbar navbar-expand-lg bg-light p-3 shadow">
  <div class="container-fluid">
    <a class="navbar-brand tx-p" href="/"><img src="/media/writing.png" alt="..." height="42"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if(Route::is('homepage')) active text-white @endif" aria-current="page" href="{{route('homepage')}} ">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Route::is('contattaci')) active text-white @endif" href="{{route('contattaci')}}">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Route::is('book.index')) active text-white @endif" href="{{route('book.index')}}">Tutti i libri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(Route::is('book.create')) active text-white @endif" href="{{route('book.create')}}">Share you book!</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        {{-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> --}}
        <button class="btn btn-link btn-cst shadow tx-p" type="button" href="{{route('book.create')}}">Share!</button>
      </form>
    </div>
  </div>
</nav>
