<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <title>Document</title>

</head>
<body>
      <div class="container h-100 mb-3">
            <div class="d-flex h-100 text-center align-items-center">
                  <div class="w-100 shadow">
                        <h1 class="">Ciao sono {{$student}} </h1>
                        <p class="mb-0">Le macchine parcheggiate sotto casa sono:</p>
                        <ul class="mb-3">
                              @foreach ($vehicle as $vehicles)
                              <li>
                                    marca: {{$vehicles['name']}} ed il modello è: {{$vehicles['model']}}
                              </li>
                              @endforeach
                        </ul>

                  </div>
            </div>
      </div>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>