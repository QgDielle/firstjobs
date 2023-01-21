<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Clock61</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

{{--navbar--}}
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Clock61</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}} ">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('marchi')}}">Marchi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('stores')}}">stores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Dettaglio</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<body>

  <div class="container-fluid p-5 bg-warning text-white text-center">
    <div class="row justify-content-center">
      <div class="co1-12">
        <h1 class="display-1 p-2"> Pagina dettaglio Stores</h1> </div>
      </div>
    </div>

    <div class="container my-5">
      <row class="justify-content-center">
        <div class="col-12 col-md-8">
          <div class="card">
            <img src="https://picsum/photos/400" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$store['street']}} {{$store['number']}}</h5>
              <p class="card-text">Città: {{$store['city']}} </p>
              <a href="{{route('stores')}}" class="btn btn-primary">torna indietro</a>
            </div>
          </div>
        </div>
      </row>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>

  </html>