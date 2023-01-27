<x-layout>

 <x-navbar />

 <x-slot name='title'>
  Registrati
 </x-slot>

 {{-- header --}}

 <div class="container-fluid p-5 mt-5  text-center ">
  <div class="row justify-content-center">
   <div class="col-12">
    <h1 class="display-1 p-3 tx-p">
     Registrati su Share your Book
    </h1>
   </div>
  </div>
 </div>


 <div class="container p-5 bg-custom text-center shadow-lg">
  <div class="row justify-content-center">
   <div class="col-8">

   <form class="p-5 bg-white rounded" method="POST" action="{{route('register')}}">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
     <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
    @endif

    <div class="mb-3 rounded tx-p">
     <label for="name" class="form-label">Inserisci il tuo nome</label>
     <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    </div>

    <div class="mb-3 rounded tx-p">
     <label for="email" class="form-label">Indirizzo Email</label>
     <input type="email" name="email" class="form-control" id="email">
    </div>
    <div class="mb-3 rounded tx-p">
     <label for="password" class="form-label">Password</label>
     <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3 rounded tx-p">
     <label for="password_confirmation" class="form-label">Conferma Password</label>
     <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
    </div>

    {{-- <div class="mb-3 form-check">
     <input type="checkbox" class="form-check-input" id="exampleCheck1">
     <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
    <button type="submit" class="btn btn-cst shadow tx-p">REGISTRATI!</button>
   </form>

  </div>
 </div>
 </div>

 <x-footer />

</x-layout>