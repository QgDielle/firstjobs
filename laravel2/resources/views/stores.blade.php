<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
            <a class="navbar-brand">Clock61</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                        <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="{{route('marchi')}} ">Marchi</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="{{route('stores')}} ">Stores</a>
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
                        <h1 class="display-1"> I nostri Store</h1>
                  </div>
            </div>
      </div>

      <div class="container my-5">
            <div class="row justify-content-center">

                  @foreach ($stores as $store)
                  <div class="class col-12 col-md-3">
                        <div class="card">
                              <img class="card-img-top" src="https://picsum.photos/350">
                              <div class="card-body">
                                    <h5 class="card-title"> {{$store['city']}}</h5>
                                    <p class="card-text italic">numero negozio: {{$store['id']}}</p>
                                    <a href="{{route('dettaglio-stores', ['id' => $store['id']])}} " class="btn btn-primary mt-3">Vedi dettaglio</a>
                              </div>
                        </div>
                  </div>
                  @endforeach
            </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>